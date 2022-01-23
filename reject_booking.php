<!-- reject_booking.php -->
<?php include 'db_connect.php' ?>
<?php
$id=$_GET['id'];
$qry = "SELECT * FROM schedules where id='$id'";
	
$result = mysqli_query($conn, $qry) or die ("Could not execute query in reject_booking.php"); 
if(mysqli_num_rows($result)> 0){
  while($row = mysqli_fetch_array($result)){
    
    $id= $row['id'];
    $title= $row['title'];
    $reason_reject= $row['reason_reject'];
    
}}

?>
<form method="post" action="reject_process.php" > 
<div class="container-fluid">
	<center>
	<h2>Reject</h2>
   
	<p><b>Reason Reject:</b></p>
	 </center>
	<div class="row">
		<!-- <div class="card col-lg-12"> -->
			<div class="card-body">
                <center>
				<input type = "hidden" name="id" value="<?php echo $id; ?>">
				<!-- <input type="textarea" id="reason_reject" name="reason_reject"  value="<?php echo $reason_reject; ?>"> -->
				<textarea id="reason_reject" name="reason_reject" rows="5" cols="30" value="<?php echo $reason_reject; ?>"></textarea>
                </center>
			</div>
		</div>
	</div>
</div>
<div class="modal-footer display">
	<div class="row">
		<div class="col-md-12">
			<button class="btn float-right btn-secondary" type="button" data-dismiss="modal">Close</button>	
			<!-- <a href="http://localhost/eventroom/scheduling/admin/reject_process.php?id=<?php echo $id; ?>" >-->
			<input class="btn float-right btn-primary mr-2" type="submit" value="Submit">
			<!-- <button class="btn float-right btn-primary mr-2" type="button" id="reject_booking">Submit</button> -->
			
		</div>
	</div>
</div>
</form> 


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
<script>
	
	$('#reject_booking').click(function(){
         reject_booking(<?php echo $id ?>);
	 })

	 function reject_booking($id){
	 	start_load()
	 	$.ajax({
	 		url:'ajax.php?action=reject_booking',
	 		method:'POST',
	 		data:{id:$id},
	 		success:function(resp){
	 			if(resp==1){
	 				alert_toast("Successfully submit",'success')
	 				<?php
	 				$id=$_GET['id'];
	 				$qry = $conn->query("UPDATE schedules SET reason_reject = '$reason_reject' where id='$id'");
	 				?>
	 				setTimeout(function(){
	 					location.reload()
	 				},1500)
	 			}
                 else {
                     alert_toast("Something went wrong. Please try again",'danger')
	 				setTimeout(function(){
	 					location.reload()
	 				},1500)
                 }
	 		}
	 	})
	 }

  
	
</script>