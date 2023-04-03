<?php
session_start();
error_reporting(1);
include("connection.php");
if(isset($_POST['log']))
{ if($_POST['id']=="" || $_POST['pwd']=="")
{ $err="fill your id and password first"; }
else 
{$d=mysql_query("select * from user where name='{$_POST['id']}' ");
$row=mysql_fetch_object($d);
$fid=$row->name;
$fpass=$row->pass; 
if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
{$_SESSION['sid']=$_POST['id'];
header('location:home.php'); }
else { $er=" your password is not"; }}
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
	<link href="css/templatemo-style.css" rel="stylesheet" />
	<link rel="stylesheet" href="code/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
			
	<script src="code/jquery.min.js"></script>
	<script src="code/popper.min.js"></script>
	<script src="code/bootstrap.min.js"></script>

	
</head>

<body  style="background-image:url(image/bg.png); background-repeat:no-repeat;background-size: cover;">
  <center>
<h1 style="color:black;font-family:KaYin2014;"> Bakery House </h1>
<br><br>
<div  class="tm-contact-form">
                <h4 style="color:black">Admin please Log In</h4><br>
                <form method="post" name="contact" action="#" style="color:black" class="tm-contact-form" >
                      <div class="col_4 no_margin_right">
                        <label for="phone">User Name:</label>
                        <input type="text" id="id" name="id" class="required input_field" />
                    </div><br>
                    <div class="col_4 no_margin_right">
                        <label for="email">Password:</label>
                        <input type="password" id="pwd" name="pwd" class="validate-email required input_field" />
                    </div>
              
                     <br>
                    <div class="clear"></div>
                    
                     <input type="submit" name="log"  value="Log in" class="tm-btn tm-btn-success tm-btn-right" />
                </form>
				
</div>
</center>

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