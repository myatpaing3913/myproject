<?php
session_start();
if($_SESSION['sid']=="")
{
header('location:index.php');
}
else{
 ?>
<?php
error_reporting(1);
include("connection.php");
$img=$_FILES['img']['name'];
$prono=$_POST['t1'];
$price=$_POST['t2'];
if($_POST['sub'])
{$qry="INSERT INTO item(img,prod_no,price)VALUES('$img','$prono','$price')";
$result=mysql_query($qry) or die ("save items query fail.");
if($result)			
	   {mkdir("image/$i");
			move_uploaded_file($_FILES['img']['tmp_name'],"image/$i".$_FILES['img']['name']);	
  // move_uploaded_file($_FILES['file']['tmp_name'],"itempics/$itemno.jpg");
		
	    $err="<font size='+2'>item inserted successfully</font>";
	
		}
	else
	 {
	   echo "item is not inserted";
	   }
	}  
	mysql_close($con);
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
<center>
 <div id="tooplate_main">
			 <div class="tm-contact-form">
                <h2>Insert Image</h2>
                
				<form  name="testform" method="post" enctype="multipart/form-data" class="tm-contact-form" >
			<table style="border-color:black;" width="600px" align="center">
				
						
				
				 <tr>
						<td height="40px"></td>
				</tr>	
				<tr>
				<td><span class="style3">Image:</span></td>
				<td>
					<input name="img" type="file">
				</td>
				</tr>
				 <tr>
						<td height="40px"></td>
				</tr>			
				
				<tr>
				  <td><span class="style3">Product Name: </span></td>
				  <td><label>
					<input name="t1" type="text" id="t1">
				  </label></td>
				</tr>
				 <tr>
						<td height="40px"></td>
				</tr>			
				
				<tr>
				  <td><span class="style3">Price:</span></td>
				  <td><label>
					<input name="t2" type="text" id="t2">
				  </label></td>
				</tr>
				 <tr>
						<td height="40px"></td>
				</tr>			
				
				
				
				
				<tr>
				<td  colspan="2" align="center">
					<input name="sub" type="submit" value="Submit" class="btn-dark">
					
				</td>
				</tr>
				
			</table>
			</form>
				<h2><?php echo $err;?></h2>
            </div> 
       
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