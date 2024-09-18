<!DOCTYPE html>
<html lang="en-US">
<head>

		<script>
		window.onload=function(){
			document.getElementById('loader').style.display="none";
			document.getElementById('page').style.display="block";
		};
		</script>
		<style>

		#page{display:none;}

		#loader{
			position: absolute;
			margin: auto;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			width: 400px;
			height: 400px;
		}
		#loader img{width:400px;}

		</style>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

FF Tournament
</title>
<link rel='stylesheet' href='css/woocommerce-layout.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)'/>
<link rel='stylesheet' href='css/woocommerce.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
<link rel='stylesheet' href='css/easy-responsive-shortcodes.css' type='text/css' media='all'/>
<!-- Latest compiled and minified CSS -->
<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css>

<!-- jQuery library -->
<script src=https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js></script>

<!-- Latest compiled JavaScript -->
<script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js></script>

</head>
<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">

		<div id="loader">
			<img src="loader.gif"/>
		</div>


<div id="page">
	<div class="container">


		<header id="masthead" class="site-header">
		<div class="site-branding">
			<h1 class="site-title"><a href="index.php" rel="home">
FFire tournament


</a></h1>
			<h2 class="site-description"> 

Earn with Fun

</h2>
		</div>
		<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle">Menu</button>


		<div class="menu-menu-1-container">
			<ul id="menu-menu-1" class="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="tnc.html">Terms&Conditions </a></li>
				<li><a href="privacy.html">Privacy policy </a></li>

				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		</nav>
		</header>



		<!-- #masthead -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area column full">
				<main id="main" class="site-main">


<div id='page1'>

<div class='container' >
<div class='row'> 

<div class='col-xs-6'>


<a class='btn btn-warning' href='index.php'>back </a><br/><br/>
</div>
<div class='col-xs-6'>

<h1><b>loggin</b></h1>
</div></div></div>

<h1>Welcome </h1>
<div class="container">

<p> Fill this details to login your account...</p>
</div>

<div class="container">

<form method='POST'>

<div class="container">

<div class="row">
  <div class="col-xs-6">
User_id  : </div>

  <div class="col-xs-6">

<input type='text' placeholder='user_id' name='user_id' required/><br/>
</div>
</div>
<div class="row">
  <div class="col-xs-6">
Password : </div>

  <div class="col-xs-6">

<input type='password' name='password' required/><br/>
</div></div>
<div class="row">
  <div class="col-xs-12">
<center>

<input type='submit' name='submit' value='submit' class='btn btn-success'/>
</center>
</div></div>
</div>

</form>
</div>

<div class="container">


<?php

session_start();
if (isset($_POST['submit']))
{

include "databaseConnection.php";

error_reporting(0);

$password = $_POST['password'];
$user_id = $_POST['user_id'];





$sql= "SELECT * FROM players WHERE user_id='$user_id' and password='$password' ";

$result = mysqli_query($conn,$sql);
$total=mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
 
if ($total===1){

$_SESSION['email']= $row['email'];
$_SESSION['user_id']= $row['user_id'];
$_SESSION['name']= $row['name'];


   header("Location: profile.php");

}
else
{
?>
<script>alert("login unsuccessfull, try again")
</script>
<?php

}

}
?>

<div>
<a href='signup.php'><button>
Create Account 
</button>
</a>
</div>
</div>

				</main>
				<!-- #main -->
			</div>
			<!-- #primary -->
		</div>
		<!-- #content -->
	</div>
	<!-- .container -->
	<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="site-info">
			<h1 style="font-family: 'Herr Von Muellerhoff';color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">
FFire Tournament

</h1>
			 <a target="blank" href="index.php">&copy; <?php echo date('Y'); ?> FFT by Hk </a>
		</div>
	</div>	
	</footer>
	<a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
</div>

<!-- #page -->

<script>


</script>

<script src='js/jquery.js'></script>
<script src='js/plugins.js'></script>
<script src='js/scripts.js'></script>
<script src='js/masonry.pkgd.min.js'></script>

</body>
</html>


