<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Contact Page</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
  
	<link href="css/templatemo-style.css" rel="stylesheet" />
	

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

		<main>
		<?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['t1'];
$email=$_POST['t2'];
$mesg=$_POST['t4'];
if(mysql_query("insert into content(name,email,mesg) values('$name','$email','$mesg')"))

{$er="<font color='darkgreen' size='+1'> Message sent successfully</font>"; }
}

?>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Contact Us</h2>
	
			</header>

			<div class="tm-container-inner-2 tm-contact-section">
				<div class="row">
					<div class="col-md-6">
						<form action="" method="POST" class="tm-contact-form">
					        <div class="form-group">
							<label for="name">Name:</label>
					          <input type="text" name="t1" class="form-control" placeholder="Tell your Name" required="" />
					        </div>
					        
					        <div class="form-group">
							<label for="email">Email:</label>
					          <input type="email" name="t2" class="form-control" placeholder="Give your Email" required="" />
					        </div>

				
					        <div class="form-group">
							<label for="message">Message:</label>
					          <textarea rows="5" name="t4" class="form-control" placeholder="Tell us some Message" required=""></textarea>
					        </div>
					
					        <div class="form-group tm-d-flex">
					          <button type="submit" name="sub" value="Send" class="tm-btn tm-btn-success tm-btn-right">
					            Send
					          </button>
					        </div>
						</form>
						<h2><?php echo $er;?></h2>
					</div>
					<div class="col-md-6">
						<div class="tm-address-box">
							<h4 class="tm-info-title tm-text-success">Our Address</h4>
							<address>
								No. 98/201,<br /> Kamayut,
								 ATK street, <br /> 
								 Yangon.
							</address>
							<a href="tel:09765334030" class="tm-contact-link">
								<i class="fas fa-phone tm-contact-icon"></i>09765334030
							</a>
							<a href="mailto:paingm726@gmail.com" class="tm-contact-link">
								<i class="fas fa-envelope tm-contact-icon"></i>paingm726@gmail.com
							</a>
							<div class="tm-contact-social">
								<a href="https://fb.com/myatpaing" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
								<a href="#" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
								<a href="#" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
        
			
		</main>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; Bakery House
            
            </p>
		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			var acc = document.getElementsByClassName("accordion");
			var i;
			
			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var panel = this.nextElementSibling;
			    if (panel.style.maxHeight) {
			      panel.style.maxHeight = null;
			    } else {
			      panel.style.maxHeight = panel.scrollHeight + "px";
			    }
			  });
			}	
		});
	</script>

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