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

<body  style="background-image:url(image/bg.png); background-repeat:no-repeat;background-size: cover;">

<nav class="navbar navbar-expand-sm bg-pink navbar-danger fixed-top">  
  <ul class="navbar-nav">
  <li class="nav-item">
	  <font class="font" color="black" size="10"><b>Bakery House&nbsp; &nbsp;</b></font>
    </li>
    <li class="nav-item">
      <a  class="nav-link btn btn-dark" href="home.php"><b>Home</b></a>
    </li>&nbsp; &nbsp;
   
    <li class="nav-item">
      <a  class="nav-link btn btn-dark" href="insert.php"><b>Insert</b></a>
    </li>&nbsp; &nbsp;

    <li class="nav-item">
      <a  class="nav-link btn btn-dark" href="view_order.php"><b>Order</b></a>
    </li>&nbsp; &nbsp;

    <li class="nav-item">
      <a  class="nav-link btn btn-dark" href="view_product.php"><b>Product</b></a>
    </li>&nbsp; &nbsp;

    <li class="nav-item">
      <a  class="nav-link btn btn-dark" href="view_feedback.php"><b>Feedback</b></a>
    </li>&nbsp; &nbsp;

    <li class="nav-item">
      <a  class="nav-link btn btn-dark" href="logout.php"><b>Log Out</b></a>
    </li>&nbsp; &nbsp;
  </ul>
</nav>
<br><br><br><br>

<div id="tooplate_main">
	<h2 align="center"> View Products </h2>
    	
       
        <?php
					 error_reporting(1);
					 include("connection.php");
						$sel=mysql_query("select * from item ");
						echo"<form method='post'><table width='800px' align='center' ><tr><td>Image</td><td>Product Name</td><td>Price</td></tr>";
   $n=0;
    while($arr=mysql_fetch_array($sel))
   {
   $i=$arr['img'];
   
    if($n%1==0)
	{
	echo "<tr><tr>
	      ";
	}
   echo 
   "<td height='280' width='240' align='center'><img src='image/$i' height='150' width='200'></td>
 <b>
 <td>".$arr['prod_no'].
   "</td><td>".$arr['price'].
  "
   
   </td>";
  
  $n++;

   }
   	  echo "</tr></table>
       </form>";
	?>	
	

        

        <div class="clear"></div>
    </div>



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