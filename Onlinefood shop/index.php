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

	
</head>

<body  style="background-image:url(css/bg.jpg); background-repeat:no-repeat;background-size: cover;" > 

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
<br>	
<marquee>You can't buy happiness, but you can buy cakes and that's kind of the same thing.</marquee>

		<main>
<section >
   <center>
   <h2 class="col-12 text-center tm-section-title" > Today's Special </h2>
</center>
<br>
<center>
  <div>
  <div class="col-12 col-md-6 col-lg-3">
  <div  style="height: 200px">
    <a href="order.php"><img src="img/red.jpg" width="255px" height="200px"></a><h4>Red Velvet Cheese Cake
		(Price : $5)
	</h4></div>
  </div>
<br><br><br>
  <div class="col-12 col-md-6 col-lg-3">
    <div  style="height: 200px">
      <a href="order.php"><img src="img/black.jpg" width="255px" height="200px"></a><h4>Choco Black Forest<br>
	  (Price : $12)
	  </h4></div>
    </div>

	<br><br><br><br>
  <div class="col-12 col-md-6 col-lg-3">
    <div  style="height: 200px">
      <a href="order.php"><img src="img/rasp.jpg" width="255px" height="200px"></a><h4>Raspberry Roll
	  (Price : $6)
	  </h4></div>
    </div>

	</center>

  
</section>

    <div style="display:none;" class="nav_up" id="nav_up"></div>

			
		</main>

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