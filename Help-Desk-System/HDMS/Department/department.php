<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<title>Help Desk | Dashboard</title>
<head>
<?php include ('core/css-links.php');//css connection?>
</head>

<body>
<?php include ('core/header.php');//Design for  Header?>
<?php $page = 'dashboard';include ('core/sidebar.php');//Design for sidebar?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
			<div class="card-tools">
				<button class="btn btn-sm btn-primary btn-block" type='button' id="new_department"><i class="fa fa-plus"></i> New Department</button>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
                        <th>Category</th>
						<th>Description</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
                    require_once "include/conn.php";
					$qry = $conn->query("SELECT * FROM hdms_departments order by  name asc");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b><?php echo ucwords($row['name']) ?></b></td>
                        <td><b><?php echo ucwords($row['category']) ?></b></td>
						<td><b><?php echo $row['description'] ?></b></td>
						<td class="text-center ">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>
		                    <div class="dropdown-menu" style="">
		                      <a class="dropdown-item edit_department" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Edit</a>
		                      <div class="dropdown-divider"></div>
		                      <a class="dropdown-item delete_department" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Delete</a>
		                    </div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</main>
<script>
	$(document).ready(function(){
		$('#list').dataTable()
	$('#new_department').click(function(){
		uni_modal("New Department","manage_department.php")
	})
	$('.edit_department').click(function(){
		uni_modal("Edit Department","manage_department.php?id="+$(this).attr('data-id'))
	})
	$('.delete_department').click(function(){
	_conf("Are you sure to delete this department?","delete_department",[$(this).attr('data-id')])
	})
	
	})
	function delete_department($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_department',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include ('core/footer.php');//css connection?>
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files/ Template main js file -->


