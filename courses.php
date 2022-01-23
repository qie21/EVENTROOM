<div class="container-fluid">
	<div class="row">
		<div class="card col-lg-12">
			<div class="card-body">
				<table class="table-striped table-bordered col-md-12">
			<thead>
			<tr>
					<th class="text-center">#</th>
					<th class="text-center">Event Name</th>
					<th class="text-center">Event Location</th>
                    <th class="text-center">PIC</th>
                    <th class="text-center">Date Start</th>
                    <th class="text-center">Date End</th>
                    <th class="text-center">Time From</th>
                    <th class="text-center">Time To</th>
                    <th class="text-center">Status</th>
					<th class="text-center">Reject Reason</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
 					include 'db_connect.php';
 					$type = array("","Meeting","Training","Others");
                     $location = array("","Orchid Room","Seminar Room","Conference Room","Others Room");
 					$schedules = $conn->query("SELECT * FROM schedules order by id desc");
 					$i = 1;
 					while($row= $schedules->fetch_assoc()):
				 ?>
				 <tr>
				 	<td class="text-center">
				 		<?php echo $i++ ?>
				 	</td>
				 	<td>
				 		<?php echo ucwords($row['title']) ?>
				 	</td>
				 	<td>
				 		<?php echo $location[$row['faculty_id']] ?>
				 	</td>
                    <td>
				 		<?php echo $row['description'] ?>
				 	</td>
                    <td>
				 		<?php echo $row['month_from'] ?>
				 	</td>
                    <td>
				 		<?php echo $row['month_to'] ?>
				 	</td>
                    <td>
				 		<?php echo $row['time_from'] ?>
				 	</td>
                    <td>
				 		<?php echo $row['time_to'] ?>
				 	</td>
                    <td>
                        <?php echo $row['status'] ?>
                    </td>
					<td>
                        <?php echo $row['reason_reject'] ?>
                    </td>
				 	<td>
				 		<center>
							<div class="btn-group">
                            <button class="btn btn-primary view_details" type="button" data-id="<?php echo $row['id'] ?>" >View Details</button>
							</div>
						</center>
				 	</td>
				 </tr>
				 <?php endwhile; ?>
			</tbody>
		</table>
			</div>
		</div>
	</div>

</div>


<script>
    $('table').dataTable();
    $('.view_details').click(function(){
		uni_modal("Booking Details","view_courses.php?id="+$(this).attr('data-id'),'large')
		
	})
</script>