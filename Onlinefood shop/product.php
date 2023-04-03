<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>product</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css/templatemo-style.css" rel="stylesheet" />
	<link rel="stylesheet" href="code/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" 
        href="css/style.css">
		
  <script src="code/jquery.min.js"></script>
  <script src="code/popper.min.js"></script>
  <script src="code/bootstrap.min.js"></script>

</head>

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
								<li class="tm-nav-li"><a href="contact.php" class="tm-nav-link">Contact</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>
		<br><br>

		<h1 style="text-align:center;">All Cakes</h1>
		<br><br>

		<div id="tooplate_main">
     <?php
					 error_reporting(1);
					 include("connection.php");
						$sel=mysql_query("select * from item ");
						echo"<form method='post'><table border='0' align='center'><tr>";
   $n=0;
    while($arr=mysql_fetch_array($sel))
   {
   $i=$arr['img'];
   
    if($n%3==0)
	{
	echo "<tr>";
	}
   echo "
   <td height='280' width='240' align='center'><img src='admin/image/$i' height='200' width='200'><br/>
 
   ".$arr['prod_no'].
   "<br><b>Price:</b>&nbsp;".$arr['price'].
  "<br><a href='login.php?img=$i'><b>Buy</b></a>
   
   </td>";
  
  $n++;

   }
   	  echo "</tr></table>
       </form>";
	?>	
       
        
        

        <div class="clear"></div>
    </div>
    <div style="display:none;" class="nav_up" id="nav_up"></div>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; Bakery House</p>
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