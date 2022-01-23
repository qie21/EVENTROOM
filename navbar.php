
<style>
	.collapse a{
		text-indent:10px;
	}
	nav#sidebar{
		background: url(assets/uploads/<?php echo $_SESSION['system']['cover_img'] ?>) !important
	}
</style>

<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">
			<?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-room"></i></span> Home</a>
				<a href="index.php?page=faculty" class="nav-item nav-faculty"><span class='icon-field'><i class="fas fa-edit"></i></span> Location List</a>
				<a href="index.php?page=schedule" class="nav-item nav-schedule"><span class='icon-field'><i class="fa fa-calendar-day"></i></span> Calendar</a>
				<a href="index.php?page=courses" class="nav-item nav-courses"><span class='icon-field'><i class="fa fa-list"></i></span> IT Event Respond</a>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
			<?php endif; ?>  
			<?php if($_SESSION['login_type'] == 2): ?>
				<a href="index.php?page=staff_booking" class="nav-item nav-courses"><span class='icon-field'><i class="fa fa-list"></i></span> View Booked Event</a>
				<a href="index.php?page=schedule" class="nav-item nav-schedule"><span class='icon-field'><i class="fa fa-calendar-day"></i></span> Calendar</a>
			<?php endif; ?>
			<?php if($_SESSION['login_type'] == 3): ?>
				<a href="index.php?page=mbooking_list" class="nav-item nav-courses"><span class='icon-field'><i class="fa fa-list"></i></span> Event Booking List</a>
				<a href="index.php?page=viewcalendar" class="nav-item nav-schedule"><span class='icon-field'><i class="fa fa-calendar-day"></i></span> Calendar</a>
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav_collapse').click(function(){
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
