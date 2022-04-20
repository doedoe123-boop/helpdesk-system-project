<?php
	if (isset($_POST['key'])) {



		$conn = new mysqli("localhost","root","","sis_db");

		if ($_POST['key'] == 'getRowData') {
			$rowID = $conn->real_escape_string($_POST['rowID']);
			$sql = $conn->query("SELECT title, shortDesc, longDesc FROM hd_department WHERE id='$rowID'");
			$data = $sql->fetch_array();
			$jsonArray = array(
				'title' => $data['title'],
				'shortDesc' => $data['shortDesc'],
				'longDesc' => $data['longDesc'],
			);

			exit(json_encode($jsonArray));
 		}

		if ($_POST['key'] == 'getExistingData') {
			$start = $conn->real_escape_string($_POST['start']);
			$limit = $conn->real_escape_string($_POST['limit']);

			$sql = $conn->query("SELECT id, title FROM hd_department LIMIT $start, $limit");
			if ($sql->num_rows > 0) {
				$response = "";
				while($data = $sql->fetch_array()) {
					$response .= '
						<tr>
							<td>'.$data["id"].'</td>
							<td id="hd_department_'.$data["id"].'">'.$data["title"].'</td>
							<td>

								<input type="button" onclick="viewORedit('.$data["id"].', \'view\')" value="View" class="btn btn-outline-primary">
							
							</td>
						</tr>
					';
				}
				exit($response);
			} else
				exit('reachedMax');
		}

		$rowID = $conn->real_escape_string($_POST['rowID']);

		if ($_POST['key'] == 'deleteRow') {
			$conn->query("DELETE FROM hd_department WHERE id='$rowID'");
			exit('The Row Has Been Deleted!');
		}

		$title = $conn->real_escape_string($_POST['title']);
		$shortDesc = $conn->real_escape_string($_POST['shortDesc']);
		$longDesc = $conn->real_escape_string($_POST['longDesc']);

		if ($_POST['key'] == 'updateRow') {
			$conn->query("UPDATE hd_department SET title='$title', shortDesc='$shortDesc', longDesc='$longDesc' WHERE id='$rowID'");
			exit('faqs updated');
		}

		if ($_POST['key'] == 'addNew') {
			$sql = $conn->query("SELECT id FROM hd_department WHERE title = '$title'");
			if ($sql->num_rows > 0)
				exit("Faqs with This title Already Exists!");
			else {
				$conn->query("INSERT INTO hd_department (title, shortDesc, longDesc) 
							VALUES ('$title', '$shortDesc', '$longDesc')");
				exit('faqs Has Been Inserted!');
			}
		}
	}
?>