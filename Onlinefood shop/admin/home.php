<?php
session_start();
if($_SESSION['sid']=="")
{
header('location:index.php');
}
else{
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

	
</head>

<body  style="background-image:url(image/bg.png); background-repeat:no-repeat;">

<nav class="navbar navbar-expand-sm bg-pink navbar-danger fixed-top">  
  <ul class="navbar-nav">
  <li class="nav-item">
	  <font class="font" color="black" size="10"><b>Bakery House&nbsp; &nbsp;</b></font>
    </li>
    <li class="nav-item">
      <a  class="nav-link btn btn-dark" href="home.php"><b>Home</b></a>
    </li>&nbsp; &nbsp;
    <li class="nav-item">
      <a  class="nav-link btn btn-dark" href="logout.php"><b>Log Out</b></a>
    </li>&nbsp; &nbsp;
  </ul>
</nav>
<br><br><br><br>
<center>
<section class="container py-5">
  <div class="row g-5">
  <div class="col-12 col-md-6 col-lg-3">
  <div  style="height: 100px">
    <a href="insert.php"><img src="image/insert.png" width="100px" height="100px"></a><h4 style="color:black">Insert</h4></div>
  </div>

  <div class="col-12 col-md-6 col-lg-3">
    <div  style="height: 100px">
      <a href="view_product.php"><img src="image/product.png" width="100px" height="100px"></a><h4 style="color:black">Product</h4></div>
    </div>

  </div>
 </section>
<br>
 <section class="container py-5">
  <div class="row g-5">
  <div class="col-12 col-md-6 col-lg-3">
  <div  style="height: 100px">
    <a href="view_order.php"><img src="image/order.png" width="100px" height="100px"></a><h4 style="color:black">Order</h4></div>
  </div>

  <div class="col-12 col-md-6 col-lg-3">
    <div  style="height: 100px">
      <a href="view_feedback.php"><img src="image/feedback.png" width="100px" height="100px"></a><h4 style="color:black">Feedback</h4></div>
    </div>

  </div>
 </section>
</center>


		<footer class="tm-footer text-center">
			<p>Copyright &copy; Bakery House </p>
		</footer>
	</div>

<?php }  ?>
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