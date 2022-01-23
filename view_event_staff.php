<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM schedules JOIN faculty ON schedules.faculty_id=faculty.idFC 
	JOIN schedule_type ON schedules.schedule_type=schedule_type.idST
	JOIN room_setup ON schedules.room_setup=room_setup.idRS where schedules.id=".$_GET['id'])->fetch_array();
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
					<th colspan="15" class="text-center">Event</th>
				</tr>
                <tr>
                    <th class="text-center">Event Name</th>
                    <th class="text-center">Event Location</th>
                    <th class="text-center">Event Type</th>
                    <th class="text-center">Location</th>
                    <th class="text-center">Room Setup</th>
                    <th class="text-center">Date Start</th>
                    <th class="text-center">Date End</th>
                    <th class="text-center">Time From</th>
                    <th class="text-center">Time To</th>
                    <th class="text-center">No. Pax</th>
                    <th colspan="4" class="text-center">Event Remark</th>
					<th rowspan="6" class="text-center">Status</th>
                </tr>
			<tbody>
                <tr>
                    <td class="text-center"><?php echo ucwords($title) ?></td>
                    <td class="text-center"><?php echo $faculty_id ?></td>
                    <td class="text-center"><?php echo $schedule_type ?></td>
                    <td class="text-center"><?php echo $location ?></td>
                    <td class="text-center"><?php echo $room_setup ?></td>
                    <td class="text-center"><?php echo $month_from ?></td>
                    <td class="text-center"><?php echo $month_to ?></td>
                    <td class="text-center"><?php echo date('h:i A',strtotime("2020-01-01 ".$time_from)) ?></td>
                    <td class="text-center"><?php echo date('h:i A',strtotime("2020-01-01 ".$time_to)) ?></td>
                    <td class="text-center"><?php echo $pax ?></td>
                    <td colspan="4" class="text-center"><?php echo $remark_event ?></td>
					<td rowspan="6" class="text-center"><?php echo $status ?></td>
					
                </tr>
			</tbody>
            <tr>
				<th colspan="14" class="text-center">Book Meal</th>
			</tr>
                <tr>
                    <th colspan="5" class="text-center">Breakfast</th>
                    <th colspan="4" class="text-center">Lunch</th>
                    <th colspan="4" class="text-center">Hi-Tea</th>
                    <th class="text-center"></th>
                </tr>
				<tr>
                    <th class="text-center">Coffee</th>
                    <th class="text-center">Tea</th>
                    <th class="text-center">Mineral</th>
                    <th class="text-center">Biscuit</th>
                    <th class="text-center">Mee</th>
                    <th class="text-center">Lunch Set</th>
                    <th class="text-center">Buffet</th>
                    <th class="text-center">Mineral</th>
                    <th class="text-center">Cordial</th>
                    <th class="text-center">Coffee</th>
                    <th class="text-center">Tea</th>
					<th class="text-center">Mineral</th>
                    <th class="text-center">Biscuit</th>
                    <th class="text-center">Remark Meal</th>
                </tr>
            <tbody>
                <tr>
                    <td class="text-center"><?php echo $coffee ?></td>
                    <td class="text-center"><?php echo $tea ?></td>
                    <td class="text-center"><?php echo $mineral ?></td>
                    <td class="text-center"><?php echo $biscuit ?></td>
                    <td class="text-center"><?php echo $mee ?></td>
                    <td class="text-center"><?php echo $lunchset ?></td>
                    <td class="text-center"><?php echo $buffet ?></td>
                    <td class="text-center"><?php echo $mineral2 ?></td>
                    <td class="text-center"><?php echo $cordial ?></td>
                    <td class="text-center"><?php echo $coffee3 ?></td>
                    <td class="text-center"><?php echo $tea3 ?></td>
                    <td class="text-center"><?php echo $mineral3 ?></td>
                    <td class="text-center"><?php echo $biscuit3 ?></td>
                    <td class="text-center"><?php echo $remark_meal ?></td>
                </tr>
			</tbody>
             <tr>
                <th colspan="15" class="text-center">Book IT Equipment</th>
            </tr>
                <tr>
                    <th class="text-center">Laptop</th>
                    <th class="text-center">Pointer</th>
                    <th colspan="2" class="text-center">USB Speaker</th>
                    <th colspan="2" class="text-center">Portable TV</th>
                    <th colspan="2" class="text-center">Screen Projector</th>
                    <th colspan="2" class="text-center">PA System</th>
                    <th colspan="4" class="text-center">IT Remark</th>
					<th class="text-center">Status</th>
                </tr>
            <tbody>
                <tr>
                    <td class="text-center"><?php echo $laptop ?></td>
                    <td class="text-center"><?php echo $pointer ?></td>
                    <td colspan="2" class="text-center"><?php echo $speaker ?></td>
                    <td colspan="2" class="text-center"><?php echo $portabletv ?></td>
                    <td colspan="2" class="text-center"><?php echo $projector ?></td>
                    <td colspan="2" class="text-center"><?php echo $pasystem ?></td>
                    <td colspan="4" class="text-center"><?php echo $remark_it ?></td>
					<td class="text-center"><?php echo $status ?></td>
					 
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