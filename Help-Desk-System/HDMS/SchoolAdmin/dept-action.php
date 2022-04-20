<?php
	if (isset($_POST['key'])) {



		$conn = new mysqli("localhost","root","","sis_db");
		// connection for online server
		//$conn = new mysqli("localhost","u692894633_test","+KoB[b#KI2","u692894633_test_db");

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
								<input type="button" onclick="deleteRow('.$data["id"].')" value="Delete" class="btn btn-outline-danger">
							</td>
						</tr>
					';
				}
				exit($response);
			} else
				exit('reachedMax');
		}

	
$rowID = $conn->real_escape_string($_POST['rowID']);



		$title = $conn->real_escape_string($_POST['title']);
		$shortDesc = $conn->real_escape_string($_POST['shortDesc']);
		$longDesc = $conn->real_escape_string($_POST['longDesc']);

		if ($_POST['key'] == 'updateRow') {
			$conn->query("UPDATE hd_department SET title='$title', shortDesc='$shortDesc', longDesc='$longDesc' WHERE id='$rowID'");
			exit('faqs updated');
		} else {
			//add session
			include('session.php');
			$fname=$verified_session_role; 
				if (!empty($_SERVER["HTTP_CLIENT_IP"])){
					$ip = $_SERVER["HTTP_CLIENT_IP"];
				}elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
					$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
				}else{
					$ip = $_SERVER["REMOTE_ADDR"];
					$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
					 $remarks="Faqs has been updated";  
					 //save to the audit trail table
					 mysqli_query($link,"INSERT INTO audit_trail(account_no,action,actor,title,ip,host) VALUES('$verified_session_username','$remarks','$fname','$title','$ip','$host')")or die(mysqli_error($link));
		}
	}


	
	
}
?>