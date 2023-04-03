<?php
session_start();
error_reporting(1);
$i=$_REQUEST['img'];
include("connection.php");
if(isset($_POST['log']))
{ if($_POST['id']=="" || $_POST['pwd']=="")
{ $err="fill your id and password first"; }
else 
{$d=mysql_query("select * from register where email='{$_POST['id']}' ");
$row=mysql_fetch_object($d);
$fid=$row->email;
$fpass=$row->password; 
if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
{$_SESSION['sid']=$_POST['id'];
//echo"<script>location:href='order.php?img=$i'</script>";
header("location:order.php?img=$i"); 
}
else {$err=" your password is not"; }}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Bakery House</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css/templatemo-style.css" rel="stylesheet" />
	<link rel="stylesheet" href="code/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" 
        href="css/style.css">
		
  <script src="code/jquery.min.js"></script>
  <script src="code/popper.min.js"></script>
  <script src="code/bootstrap.min.js"></script>
	

<script type="text/JavaScript" src="js/jquery-1.6.3.js"></script> 


<script type="text/JavaScript" src="js/slimbox2.js"></script> 



<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 


<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

</head>

<body style="background-image:url(css/bg.jpg); background-repeat:no-repeat;background-size: cover;"> 

	<div>
	
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
								<li class="tm-nav-li"><a href="contact.php" class="tm-nav-link">Contact</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>
		<br>
		<center>
        <div  class="tm-contact-form">
                <h1>Log In To Order</h1>
				<br>
                <form method="post" name="contact" action="#" class="tm-contact-form"> 
                      <div class="col_4 no_margin_right">
                        <label for="phone">User Email:</label>
                        <input type="email" id="id" name="id" class="required input_field" />
                    </div>
					<br>
                    <div class="col_4 no_margin_right">
                        <label for="email">Password:</label>
                        <input type="password" id="pwd" name="pwd" class="validate-email required input_field" />
                    </div>
              
                     <br><br>
                    <div class="clear"></div>
                    
                     <input type="submit" name="log"  value="Log in" class="tm-btn tm-btn-success tm-btn-right" />
                </form>
				<h2><?php echo $err;?></h2>
            </div>    	
       
        <div class="clear"></div>
    </div>
	<center>
    <div style="display:none;" class="nav_up" id="nav_up"></div>
</div>

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