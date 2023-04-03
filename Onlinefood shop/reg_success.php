<?php
	error_reporting(1);
	
	include("connection.php");
	
	if($_REQUEST['log']=='out')
	{
		session_destroy();
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css/templatemo-style.css" rel="stylesheet" />
	<link rel="stylesheet" href="code/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" 
			href="css/style.css">
			
  <script src="code/jquery.min.js"></script>
  <script src="code/popper.min.js"></script>
  <script src="code/bootstrap.min.js"></script>
  <script type="text/JavaScript" src="js/jquery-1.6.3.js"></script> 

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body style="background-image:url(css/bg.jpg); background-repeat:no-repeat;background-size: cover;"> 

	<div>
	<!-- Top box -->
		<!-- Logo & Site Name -->
		
<center>
		<div class="tm-contact-form">
    	
       <h2>Welcome!! <?php echo "<font color=blue>".$_REQUEST['name']."</font>"; ?> </h2>
	 
			<br>
			<p>Account successfully created.</p>
			
			<marquee><p>Thank you for registration.</p></marquee>
			<p><a href="?log=out">Go back</a></p>
        
        

        <div class="clear"></div>
    </div>
</center>
    <div style="display:none;" class="nav_up" id="nav_up"></div>
	</div>
		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2020 Simple House </p>
		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
</body>
</html>
<script src="js/scroll-startstop.events.jquery.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function() {
		var $elem = $('#content');
		
		$('#nav_up').fadeIn('slow');
		
		$(window).bind('scrollstart', function(){
			$('#nav_up,#nav_down').stop().animate({'opacity':'0.2'});
		});
		$(window).bind('scrollstop', function(){
			$('#nav_up,#nav_down').stop().animate({'opacity':'1'});
		});
		
		$('#nav_up').click(
			function (e) {
				$('html, body').animate({scrollTop: '0px'}, 800);
			}
		);
	});
</script>

</body>
</html>