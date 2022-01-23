<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM schedules where id=".$_GET['id'])->fetch_array();
	$id=$_GET['id'];

	foreach($qry as $k =>$v){
		$$k = $v;
	}
}
?>
<div class="container-fluid">
	<div class="row">
		<div class="card col-lg-12">
			<div class="card-body">
				<table class="table-striped table-bordered col-md-12">
            <tr>
				<th colspan="14" class="text-center">Book IT Equipment</th>
			</tr>
                <tr>
                    <th class="text-center">Laptop</th>
                    <th class="text-center">Pointer</th>
                    <th colspan="2" class="text-center">USB Speaker</th>
                    <th colspan="2" class="text-center">Portable TV</th>
                    <th colspan="1" class="text-center">Screen Projector</th>
                    <th colspan="2" class="text-center">PA System</th>
                    <th colspan="3" class="text-center">IT Remark</th>
                </tr>
            <tbody>
                <tr>
                    <td class="text-center"><?php echo $laptop ?></td>
                    <td class="text-center"><?php echo $pointer ?></td>
                    <td colspan="2" class="text-center"><?php echo $speaker ?></td>
                    <td colspan="2" class="text-center"><?php echo $portabletv ?></td>
                    <td colspan="1" class="text-center"><?php echo $projector ?></td>
                    <td colspan="2" class="text-center"><?php echo $pasystem ?></td>
                    <td colspan="3" class="text-center"><?php echo $remark_it ?></td>
                </tr>
			</tbody>

			<tr>
				<th colspan="14" class="text-center" style="background-color:white;">Remark From It</th>
			</tr>

			<tbody>
			<tr>
				<td colspan="14" class="text-center"><?php echo $remarkFromIt ?></td>
			</tr>
			</tbody>

		</table>
			</div>
		</div>
	</div>
</div>
<div class="modal-footer display">
	<div class="row">
		<div class="col-md-12">
			<button class="btn float-right btn-secondary" type="button" data-dismiss="modal">Close</button>
			<button class="btn float-right btn-primary mr-2 confirmation" type="button" data-id="<?php echo $id ?>" >It Remark</button>
			<!--<button class="btn float-right btn-primary mr-2" type="button" id="approve_booking">Approve</button>-->
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
<script>
	$('.confirmation').click(function(){
		uni_modal("It Remark","view_it.php?id="+$(this).attr('data-id'),'large')
		
	})

	$('#approve_booking').click(function(){
        approve_booking(<?php echo $id ?>);
	})
	$('#reject_booking').click(function(){
        reject_booking(<?php echo $id ?>);
	})

    function approve_booking($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=approve_booking',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Event successfully approved",'success')
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

    function reject_booking($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=reject_booking',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Event successfully rejected",'success')
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