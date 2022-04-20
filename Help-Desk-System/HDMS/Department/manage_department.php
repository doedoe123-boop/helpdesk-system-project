<?php include 'include/conn.php' ?>
<?php
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM hdms_departments where id = ".$_GET['id'])->fetch_array();
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
			<label for="" class="control-label">Category</label>
			<input type="text" class="form-control form-control-sm" name="category" value = '<?php echo isset($category)? $category: '' ?>'>
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