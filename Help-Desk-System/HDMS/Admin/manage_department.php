<?php include 'include/config.php' ?>
<?php
if(isset($_GET['id'])){
	$qry = $link->query("SELECT * FROM hdms_departments where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
}
?>
<div class="container-fluid">
	<form action="" id="manage-department">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		<div class="form-group">
			<label for="" class="control-label">Name</label>
			<input type="text" class="form-control form-control-sm" name="name" value = '<?php echo isset($name)? $name: '' ?>'>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Description</label>
			<textarea name="description" id="" cols="30" rows="4" class="form-control"><?php echo isset($description)? $description: '' ?></textarea>
		</div>
	</form>
</div>
<script>
	$('#manage-department').submit(function(e){
		e.preventDefault()
		$('input').removeClass("border-danger")
		start_load()
		$('#msg').html('')
		$.ajax({
			url:'ajax.php?action=save_department',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp == 1){
					alert_toast('Data successfully saved.',"success");
					setTimeout(function(){
						location.replace('index.php?page=department_list')
					},750)
				}else if(resp == 2){
					$('#msg').html("<div class='alert alert-danger'>Department already exist.</div>");
					$('[name="name"]').addClass("border-danger")
					end_load()
				}
			}
		})
	})
</script>


  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  
      <!--css templete-->
      <Link rel ="stylesheet" href = "style.css">
        <script src="main.js"></script>
    </body>
</html>