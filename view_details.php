<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM schedules where id=".$_GET['id'])->fetch_array();
	foreach($qry as $k =>$v){
		$$k = $v;
	}
}

?>
<div class="container-fluid">
	<p>Schedule for: <b><?php echo ucwords($title) ?></b></p>
	<p>Description: <b><?php echo $description ?></b></p>
	<p>Location: </i> <b><?php echo $location ?></b></p>
	<p>Time Start: </i> <b><?php echo date('h:i A',strtotime("2020-01-01 ".$time_from)) ?></b></p>
	<p>Time End: </i> <b><?php echo date('h:i A',strtotime("2020-01-01 ".$time_to)) ?></b></p>
	<hr class="divider">
</div>
<div class="modal-footer display">
	<div class="row">
		<div class="col-md-12">
			<button class="btn float-right btn-secondary" type="button" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>
<style>
	p{
		margin:unset;
	}
	#uni_modal .modal-footer{
		display: none;
	}
	#uni_modal .modal-footer.display {
		display: block;
	}
</style>