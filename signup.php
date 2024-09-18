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


<div class='container'>
<div class='row'> 

<div class='col-xs-6'>
<a class='btn btn-warning' href='login.php'>back </a><br/><br/>


</div>
<div class='col-xs-6'>

<h1>
Creat Your Account
</h1>

</div> </div> </div>
<div class="container">

<form method='POST'>

<div class="container">


<h1>Your Details</h1>
  <div class='container'>

mobile Number<br/>

<input type='text' name='mobile' placeholder='mobile number'> </input><br/>

</div>
<div>

Your Email id
<br/>
<input type='email' name='email' placeholder='game email id/ other email for remember' />

</div>

<div>

Your full Name
<br/>
<input type='text' name='name' placeholder='full name' />

</div>
<div>
Your user Id in Free Fire Game
<br/>
<input type='text' name='user_id' placeholder='free fire game User_id' />

</div>

<div>
Password
<br/>
<input type='text' name='password' placeholder='password' />

</div>

<div>
<center>
<input type='submit' name='submit' value='submit'></input>
</center>


</div>

</form>
</div>
<div>
<p><b>
by clicking sign up button, you are agree to our terms&conditions and privacy policy.

</b></p>
</div>

<?php

include "databaseConnection.php";
error_reporting(0);


if(isset($_POST['submit'])){

$mobile=mysqli_real_escape_string($conn,$_POST['mobile']);
$email=mysqli_real_escape_string($conn,$_POST['email']);

$name=mysqli_real_escape_string($conn,$_POST['name']);

$user_id=mysqli_real_escape_string($conn,$_POST['user_id']);

$password=mysqli_real_escape_string($conn,$_POST['password']);

$table_name= "players";
session_start();


$_SESSION['user_id']= $user_id;
$_SESSION['name']= $name;
$_SESSION['table_name']= $table_name;
$_SESSION['mobile']= $mobile;
$_SESSION['password']= $password;
$_SESSION['email']= $email;

   header("Location: input.php");
}

?>

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


