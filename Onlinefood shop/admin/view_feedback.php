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

<body  style="background-color:grey;">
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

<div>
    	<h2 align="center"> View Feedbacks </h2>
       <table width="1000px" align="center" >
					
					<tr>					
						<th width="100px" height="50px">Name:</th>
						<th width="100px" height="50px">Email:</th>
						<th width="100px" height="50px">Message:</th>						
					 </tr>	
					 <?php
					 error_reporting(1);
					 include("connection.php");
						$sel=mysql_query("select * from content ");
						while($row=mysql_fetch_array($sel))
							{		
													
									$name=$row['name'];
									$email=$row['email'];
									$mesg=$row['mesg'];
						?>
					 <tr>
						<td width="100px" height="50px"><?php echo $name; ?></td>
						<td width="100px" height="50px"><?php echo $email; ?></td>
						<td width="100px" height="50px"><?php echo $mesg; ?></td>
					</tr>			
        <?php				  
            }	
        ?>
					</table>
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