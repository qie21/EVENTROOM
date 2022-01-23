<?php include('db_connect.php'); ?>
<?php
if(isset($_GET['id'])){
$qry = $conn->query("SELECT * FROM schedules where id= ".$_GET['id']);
foreach($qry->fetch_array() as $k => $val){
	$$k=$val;
}

}
?>
<style>
	
	
</style>
<div class="container-fluid">
	<form action="" id="manage-schedule">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		<div class="col-lg-16">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="" class="control-label">Event Name </label>
						<textarea class="form-control" name="title" cols="30" rows="1"><?php echo isset($title) ? $title : '' ?></textarea>
					</div>
					<div class="form-group">
						<label for="" class="control-label">Event Location  </label>
						<select name="faculty_id" id="" class="custom-select select2">
							<option value="1" <?php echo isset($faculty_id) && $schedule_type == 1 ? 'selected' : ''  ?>>Orchid Room</option>
							<option value="2" <?php echo isset($faculty_id) && $schedule_type == 2 ? 'selected' : ''  ?>>Seminar Room</option>
							<option value="3" <?php echo isset($faculty_id) && $schedule_type == 3 ? 'selected' : ''  ?>>Conference Room</option>
							<option value="4" <?php echo isset($faculty_id) && $schedule_type == 3 ? 'selected' : ''  ?>>Others Room</option>
						</select>
					</div>
					<div class="form-group">
						<label for="" class="control-label">Event Type</label>
						<select name="schedule_type" id="" class="custom-select">
							<option value="1" <?php echo isset($schedule_type) && $schedule_type == 1 ? 'selected' : ''  ?>>Meeting</option>
							<option value="2" <?php echo isset($schedule_type) && $schedule_type == 2 ? 'selected' : ''  ?>>Training</option>
							<option value="3" <?php echo isset($schedule_type) && $schedule_type == 3 ? 'selected' : ''  ?>>Others</option>
						</select>
					</div>
					
					<div class="form-group">
						<label for="" class="control-label">Location (for Others)</label>
						<textarea class="form-control" name="location" cols="30" rows="1" placeholder="eg. L5PLAYROOM"><?php echo isset($location) ? $location : '' ?></textarea>
					</div>
					<div class="form-group">
						<label for="" class="control-label">Room Setup</label>
						<select name="room_setup" id="" class="custom-select" required><option></option>
							<option value="1" <?php echo isset($room_setup) && $schedule_type == 1 ? 'selected' : ''  ?>>Classroom</option>
							<option value="2" <?php echo isset($room_setup) && $schedule_type == 2 ? 'selected' : ''  ?>>Theatre </option>
							<option value="3" <?php echo isset($room_setup) && $schedule_type == 3 ? 'selected' : ''  ?>>Bouquet</option>
							<option value="4" <?php echo isset($room_setup) && $schedule_type == 4 ? 'selected' : ''  ?>>Conference</option>
						</select>
						
						
							</div>
							
							<div>
					<td colspan="5" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/img/classroom2.jpg" style="width: 600px; height: 70px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<img src="assets/img/theatre2.jpg"style="width: 600px; height: 70px;">
							</br>
							&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/img/bouquet.jpg"style="width: 600px; height: 70px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<img src="assets/img/boardroom2.jpg"style="width: 600px; height: 70px;"></td>
					</div>

				</div>
				<div class="col-md-6">
					<div class="form-group for-repeating">
						<label for="" class="control-label">Date Start</label>
						<input type="date" name="month_from" id="month_from" class="form-control" value="<?php echo isset($start) ? date("d/m/Y", strtotime($str)) : '' ?>">
					</div>
					<div class="form-group for-repeating">
						<label for="" class="control-label">Date End</label>
						<input type="date" name="month_to" id="month_to" class="form-control" value="<?php echo isset($end) ? date("Y-m-d",strtotime($end)) : '' ?>">
					</div>
					<div class="form-group">
						<label for="" class="control-label">Time From</label>
						<input type="time" name="time_from" id="time_from" class="form-control" value="<?php echo isset($time_from) ? $time_from : '' ?>">
					</div>
					<div class="form-group">
						<label for="" class="control-label">Time To</label>
						<input type="time" name="time_to" id="time_to" class="form-control" value="<?php echo isset($time_to) ? $time_to : '' ?>">
					</div>
					<div class="form-group">
						<label for="" class="control-label">No. of pax</label>
						<input type="pax" name="pax" id="pax" class="form-control" value="<?php echo isset($pax) ? $pax : '' ?>">
					</div>
					
				</div>
					    
			</div>
		</div>
	<div class="container-fluid">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		<div class="col-lg-16">
			<div class="row">
					<div class="form-group">
						<tr ><td ><p><h7>Event Remark</h7></td><br>
						<td ><TEXTAREA name="remark_event" class=inputtextarea1 align="center" style="width: 550px; height: 70px;"></TEXTAREA></p></td>
						</tr>

	<tr ><td ><p><h7>_________________________________________________________________________________</h7></td>
						</tr>
	<form action="" id="manage-schedule">
                    </br><h3><span class="entypo-job"><font color=Olive></span>Book IT Equipment</h3></font>
					<tr ><td ><p><h7>( Click the button to book  equipment)</h7></td>
						</tr>
						
					</div>
						 <table>
			<div class="col-lg-16">
			
			<div class="row">
			<div>
			</div>
			
		

						  <tr> <td>&#128187;Laptop   : &nbsp;&nbsp;<input type=checkbox name="laptop" value="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style='font-size:16px' class='fas'>&#xf0a1;</i> USB Speaker   :&nbsp;&nbsp;&nbsp;<input type=checkbox name="speaker" value="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style='font-size:14px' class='fas'>&#xf26c;</i>  Portable TV  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;<input type=checkbox name="portabletv" value="1"></td> </tr>
						 <tr><td> &nbsp;</td><td>&nbsp;</td> </tr>
						 	  <tr> <td><i style='font-size:14px' class='fas'>&#xf2db;</i> Pointer   :  &nbsp;&nbsp;&nbsp;<input type=checkbox name="pointer" value="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style='font-size:14px' class='fas'>&#xf130;</i> PA System   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<input type=checkbox name="pasystem" value="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style='font-size:14px' class='fas'>&#xf108;</i>  Screen Projector   &nbsp;:  &nbsp;<input type=checkbox name="projector" value="1"></td> </tr>
						 <tr><td> &nbsp;</td><td>&nbsp;</td> </tr>
  
			   </div>
			   </div>
					  </table>
					  
					</div>
					<div class="form-group">
						 <tr ><td ><p><h7>IT Equipment Remark </h7></td>
	</form>
						<td ><TEXTAREA name="remark_it" class=inputtextarea1 style="width: 550px; height: 70px;" placeholder="eg. equipment more than one"></TEXTAREA></p></td>
						</tr>
                 </form> 
	</form>
				 
		
		<tr ><td ><p><h7>_________________________________________________________________________________</h7></td>
						</tr>
						
					</div>
					<div class="form-group">
					
						 </br><h3><span class="entypo-login"></span><font color=Olive> Book Meals</h3></font>
                    <tr ><td ><p><h7>( Click the button to book meals )</h7></td>
						</tr>
                   		</br>
                   		</br>


						   <table border=1 align="center" style="width: 220px; height: 70px;">
						<tr><h4 class="text-bold" align="center"> <font color=Olive>Breakfast / Morning Tea Break</h4></font> </td>
					 	<tr><td> 
					   	<li><input type=checkbox name="coffee" value="1">&nbsp;&nbsp;<i style='font-size:14px' class='fas'>&#xf0f4;</i> Coffee </li>
					   	<li><input type=checkbox name="tea" value="1">&nbsp;&nbsp;<i style='font-size:14px' class='fas'>&#xf7b6;</i>&nbsp;Tea  </li> 
					   	<li><input type=checkbox name="mineral" value="1" >&nbsp;&nbsp;<i style='font-size:14px' class='fas'>&#xf5ce;</i>&nbsp;&nbsp;Mineral Water  </li>
					   	<li><input type=checkbox name="biscuit" value="1">&nbsp;&nbsp;<i style='font-size:14px' class='fas'>&#xf7ec;</i>&nbsp;Biscuit/Kuih </li>
					   	<li><input type=checkbox name="mee" value="1">&nbsp;&nbsp;<i style='font-size:14px' class='fas'>&#xf818;</i>&nbsp;Mee/Nasi Goreng </li>
						</td> </tr> 
						</table>
                   		</br>	
					</div>
					
					<div class="form-group">
						<table border=1 align="center" style="width: 200px; height: 70px;">
						<tr><h4 class="text-bold" align="center"> <font color=Olive>Lunch</h4></font></td>
							 <tr><td> 
					   	<li><input type=checkbox name="lunchset" value="1">&nbsp;&nbsp;<i style='font-size:14px' class='fas'>&#xf818;</i>&nbsp;Lunch Set </li>
					   	<li><input type=checkbox name="buffet" value="1">&nbsp;&nbsp;<i style='font-size:14px' class='fas'>&#xf818;</i>&nbsp;Buffet </li> 
					   	<li><input type=checkbox name="mineral2" value="1">&nbsp;&nbsp;<i style='font-size:14px' class='fas'>&#xf5ce;</i>&nbsp;&nbsp;Mineral Water </li>
					   	<li><input type=checkbox name="cordial" value="1">&nbsp;&nbsp;<i style='font-size:14px' class='fas'>&#xf57b;</i>&nbsp;Cordial Drink </li>
						</td> </tr>
						</table>
						</br>

						<table border=1 align="center" style="width: 200px; height: 70px;">
						<tr><h4 class="text-bold" align="center"><font color=Olive>Hi-Tea</h4></font></td>
							<tr><td> 
					   	<li><input type=checkbox name="coffee3" value="1">&nbsp;&nbsp;<i style='font-size:14px' class='fas'>&#xf0f4;</i>&nbsp;Coffee  </li>
					   	<li><input type=checkbox name="tea3" value="1">&nbsp;&nbsp;<i style='font-size:14px' class='fas'>&#xf7b6;</i>&nbsp;Tea  </li> 
					   	<li><input type=checkbox name="mineral3" value="1" >&nbsp;&nbsp;<i style='font-size:14px' class='fas'>&#xf5ce;</i>&nbsp;&nbsp;Mineral Water </li>
					   	<li><input type=checkbox name="biscuit3" value="1">&nbsp;&nbsp;<i style='font-size:14px' class='fas'>&#xf7ec;</i>&nbsp;Biscuit/Kuih </li>
					   	</td> </tr>
			            </br>
						</table>
							</div>	


						<!-- <table border=1 align="center" style="width: 220px; height: 70px;">
						<tr><h4 class="text-bold" align="center"> <font color=Olive>Breakfast / Morning Tea Break</h4></font> </td>
					 	<tr><td> 
					   	<li><i style='font-size:14px' class='fas'>&#xf0f4;</i>&nbsp;&nbsp;Coffee   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type=checkbox name="coffee" value="1"> </li>
					   	<li><i style='font-size:14px' class='fas'>&#xf7b6;</i>&nbsp;&nbsp;Tea  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;   <input type=checkbox name="tea" value="1"></li> 
					   	<li><i style='font-size:14px' class='fas'>&#xf5ce;</i>&nbsp;&nbsp;Mineral Water &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type=checkbox name="mineral" value="1" ></li>
					   	<li><i style='font-size:14px' class='fas'>&#xf7ec;</i>&nbsp;&nbsp;Biscuit/Kuih  &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type=checkbox name="biscuit" value="1"></li>
					   	<li><i style='font-size:14px' class='fas'>&#xf818;</i>&nbsp;&nbsp;Mee/Nasi Goreng &nbsp;&nbsp;<input type=checkbox name="mee" value="1"></li>
						</td> </tr> 
						</table>
                   		</br>	
					</div>
					
					<div class="form-group">
						<table border=1 align="center" style="width: 200px; height: 70px;">
						<tr><h4 class="text-bold" align="center"> <font color=Olive>Lunch</h4></font></td>
							 <tr><td> 
					   	<li><i style='font-size:14px' class='fas'>&#xf818;</i>&nbsp;&nbsp;Lunch Set &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type=checkbox name="lunchset" value="1"> </li>
					   	<li><i style='font-size:14px' class='fas'>&#xf818;</i>&nbsp;&nbsp;Buffet &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=checkbox name="buffet" value="1"></li> 
					   	<li><i style='font-size:14px' class='fas'>&#xf5ce;</i>&nbsp;&nbsp;Mineral Water &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type=checkbox name="mineral2" value="1"></li>
					   	<li><i style='font-size:14px' class='fas'>&#xf57b;</i>&nbsp;&nbsp;Cordial Drink &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type=checkbox name="cordial" value="1"></li>
						</td> </tr>
						</table>
						</br>

						<table border=1 align="center" style="width: 200px; height: 70px;">
						<tr><h4 class="text-bold" align="center"><font color=Olive>Hi-Tea</h4></font></td>
							<tr><td> 
					   	<li><i style='font-size:14px' class='fas'>&#xf0f4;</i>&nbsp;&nbsp;Coffee    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type=checkbox name="coffee3" value="1"> </li>
					   	<li><i style='font-size:14px' class='fas'>&#xf7b6;</i>&nbsp;&nbsp;Tea  &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;   <input type=checkbox name="tea3" value="1"></li> 
					   	<li><i style='font-size:14px' class='fas'>&#xf5ce;</i>&nbsp;&nbsp;Mineral Water &nbsp;&nbsp;&nbsp; <input type=checkbox name="mineral3" value="1" ></li>
					   	<li><i style='font-size:14px' class='fas'>&#xf7ec;</i>&nbsp;&nbsp;Biscuit/Kuih  
					   		&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type=checkbox name="biscuit3" value="1"></li>
					   	</td> </tr>
			            </br>
						</table>
							</div> -->


				</div>
				<div class="form-group">
					<br>
						<tr ><td ><p><h7>Meals Remark </h7></td><br>
						<td ><TEXTAREA name="remark_meal" class=inputtextarea1 style="width: 550px; height: 70px;" placeholder="eg. specify quantity of vegetarian"></TEXTAREA></p></td>
						</tr>
						
					</form>
				      
				</div>
					    
			</div>
		</div>


    

<div class="imgF" style="display: none " id="img-clone">
			<span class="rem badge badge-primary" onclick="rem_func($(this))"><i class="fa fa-times"></i></span>
	</div>
<script>
	$('.select2').select2({
		placeholder:'Please Select Here',
		width:'100%'
	})
	$('#manage-schedule').submit(function(e){
		e.preventDefault()
		start_load()
		$('#msg').html('')
		$.ajax({
			url:'ajax.php?action=save_schedule',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp){
					alert_toast("Data successfully saved",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
				
			}
		})
	})
	
</script>