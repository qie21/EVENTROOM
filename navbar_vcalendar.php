
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
				<a href="index_calendar.php?page=viewcalendar" class="nav-item nav-schedule"><span class='icon-field'><i class="fa fa-calendar-day"></i></span> Calendar</a>
				<a class="nav-item nav-login" href="login.php"><span class='icon-field'><i class="fa fa-power-off"></i> Login</a>
		</div>

</nav>
<script>
	$('.nav_collapse').click(function(){
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
