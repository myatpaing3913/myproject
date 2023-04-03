<?php
error_reporting(1);
session_start();
$i=$_REQUEST['img'];
$_SESSION['sid']=$_POST['id'];
include("connection.php");
$i=$_REQUEST['img'];
if($_POST['ord'])
{ 
$prodno=$_POST['prodno'];
$price=$_POST['price'];
$name=$_POST['nam'];
$phone=$_POST['pho'];
$add=$_POST['add'];
$ordno=ord.rand(100,500);
if(mysql_query("insert into orders(productno,price,name,phone,address,order_no) values('$prodno','$price','$name','$phone','$add','$ordno')"))
{
//echo "<script>location.href='ordersent.php?prod'</script>";
header("location:ordersent.php?order_no=$ordno");  }
else {$error= "user already exists";}}

?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple House Template</title>
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

	<div >
	<!-- Top box -->
		<!-- Logo & Site Name -->
		

		<div >
	
    	<div  class="left">
          <div id="comment_form">
            <h3 style="text-align:center">Order form</h3>
			<br>s
        <?php
			include("connection.php");
			$sel=mysql_query("select * from item  where img='$i' ");
			$mat=mysql_fetch_array($sel);
			
			
			?>

						<center>
						<form action="" method="POST" class="tm-contact-form">
					        <div class="form-group">

							<div class="form-group">
							<label>Name </label>
					          <input type="text" name="nam" value="<?php echo $mat['price'];?>" class="input_field" required="" />
					        </div>

							<div class="form-group">
							<label>Phone</label>
					          <input type="text" name="pho" id="php" class="input_field" required="" />
					        </div>

							<div class="form-group">
							<label>Address</label>
							<textarea id="add" name="add" rows="0" cols="0" required=""></textarea>
			
					        </div>

							<input type="submit" name="ord" id="ord" value="sent order" class="tm-btn tm-btn-success tm-btn-right" />
				 			<input type="submit" name="Cancel" value="Cancel" class="tm-btn tm-btn-success tm-btn-right" />
				
					       
				
						</form>
						</center>
			</div>  
</div> <!-- END of content -->
  </div>
        
        <div class="clear"></div>
       
		
    </div>
    <div style="display:none;" class="nav_up" id="nav_up"></div>


		<footer class="tm-footer text-center">
			<p>Copyright &copy; Bakery House </p>
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

