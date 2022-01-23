<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM faculty where id=".$_GET['id'])->fetch_array();
	foreach($qry as $k =>$v){
		$$k = $v;
	}
}

?>
<div class="container-fluid">
	<form action="" id="manage-faculty">
		<div id="msg"></div>
				<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id']:'' ?>" class="form-control">
		<div class="row form-group">
			<div class="col-md-4">
						<label class="control-label">ID No.</label>
						<input type="text" name="id_no" class="form-control" value="<?php echo isset($id_no) ? $id_no:'' ?>" >
						<small><i>Leave this blank if you want to a auto generate ID no.</i></small>
					</div>
		</div>
		<div class="row form-group">
			<div class="col-md-4">
				<label class="control-label">Room Name</label>
				<input type="text" name="lastname" class="form-control" value="<?php echo isset($lastname) ? $lastname:'' ?>" required>
			</div>
			
		</div>
	</form>
</div>

<script>
	$('#manage-faculty').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_faculty',
			method:'POST',
			data:$(this).serialize(),
			success:function(resp){
				if(resp == 1){
					alert_toast("Data successfully saved.",'success')
					setTimeout(function(){
						location.reload()
					},1000)
				}else if(resp == 2){
					$('#msg').html('<div class="alert alert-danger">ID No already existed.</div>')
					end_load();
				}
			}
		})
	})
</script>