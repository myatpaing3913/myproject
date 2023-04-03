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

	<div>
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="img/back.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
						
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">Bakery House</h1>
								<h6 class="tm-site-description">We Cake For You.</h6>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
							<li class="tm-nav-li"><a href="index.php" class="tm-nav-link">Home</a></li>
								<li class="tm-nav-li"><a href="product.php" class="tm-nav-link">Cakes</a></li>
								<li class="tm-nav-li"><a href="register.php" class="tm-nav-link">Register</a></li>
								<li class="tm-nav-li"><a href="contact.php" class="tm-nav-link ">Contact</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>
		<center>
		<main>
        
		<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Register Your Account</h2>
	
			</header>

            <?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['t1'];
$email=$_POST['t2'];
$password=$_POST['t3'];
$phone=$_POST['t4'];
$city=$_POST['t5'];
$town=$_POST['t6'];
if(mysql_query("insert into register(name,email,password,phone,city,township) values('$name','$email','$password','$phone','$city','$town')"))
{
//echo "<script>location.href='reg_success.php?email=$email'</script>"; 
header("location:reg_success.php?name=$name & email=$email");}
else {$error= "user already exists";}}

?>
   
		<div>
				<div >
					<div >
				
						<form action="" method="POST" class="tm-contact-form">
					        <div class="form-group">
					          <input type="text" name="t1" class="form-control" placeholder="Name" required="" />
					        </div>
					        
					        <div class="form-group">
					          <input type="email" name="t2" class="form-control" placeholder="Email" required="" />
					        </div>

							<div class="form-group">
					          <input type="password" name="t3" class="form-control" placeholder="Password" required="" />
					        </div>

							<div class="form-group">
					          <input type="phone" name="t4" class="form-control" placeholder="Phone" required="" />
					        </div>

							<div class="form-group">
					          <input type="text" name="t4" class="form-control" placeholder="City" required="" />
					        </div>

							<div class="form-group">
					          <input type="text" name="t4" class="form-control" placeholder="Town" required="" />
					        </div>
						<div>
							<input type="submit" name="sub" id="sub" value="Register" class="tm-btn tm-btn-success tm-btn-right" />
				 			<input type="reset" name="Cancel" value="Cancel" class="tm-btn tm-btn-success tm-btn-right" />
							<label><?php echo "<font color='red'>$error</font>";?></label>
						</div>
						</form>
		
					</div>
					
				</div>
			</div>

		</div>

</main>
</center>
		<footer class="tm-footer text-center">
			<p>Copyright &copy; Bakery House </p>
		</footer>
	
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