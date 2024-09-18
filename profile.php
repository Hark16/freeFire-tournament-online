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
<a href='logout.php'>logout</a>

<?php
include "databaseConnection.php";
session_start();
error_reporting(0);

$user_id= $_SESSION['user_id'];
$name = $_SESSION['name'];
$email = $_SESSION['email'];

$table_name='matches';

$sql = "SELECT * FROM $table_name ORDER BY id DESC";

if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){

echo'<table>';
echo'<tr>';



echo'<th> Name</th>';

echo'<th> Registration </th>';


echo'<th> match date</th>';
echo'<th> match time</th>';

echo'<th> platform</th>';
echo'<th> total players</th>';



echo'<th> prise</th>';
echo'<th> fees</th>';

echo'<th> status</th>';

echo'<th> ENTER </th>';

echo'</tr>';
while($row = mysqli_fetch_array($result)){
$idnum= $row['id'];
$match_table_name= $row['match_table_name'];
echo'<tr>';

//echo"<td> ".$row['id']."</td>";
echo"<td>".$row['name']."</td>";

echo"<td>".$row['reg_on']."</td>";


echo"<td> ".$row['match_date']."</td>";
echo"<td> ".$row['time']."</td>";

echo"<td> ".$row['platform']."</td>";
echo"<td> ".$row['total_players']."</td>";

//echo"<td> ".$row['winner_id']."</td>";
//echo"<td> ".$row['winner_name']."</td>";
//echo"<td> ".$row['winner_email']."</td>";

echo"<td> ".$row['winner_prise']."</td>";
echo"<td> ".$row['entry_fees']."</td>";
echo"<td> ".$row['status']."</td>";
//echo"<td> ".$row['stream_link']."</td>";

//echo"<td> ".$row['room_id']."</td>";
//echo"<td> ".$row['room_password']."</td>";
//echo"<td> ".$row['match_table_name']."</td>";
//echo"<td> ".$row['reg_date']."</td>";

if($row['status']=='upcomeing'){
echo"<td><a href='entry.php?user_id=".$user_id."&email=".$email."&name=".$name."&mtname=".$row['match_table_name']."&entry_fees=".$row['entry_fees']."&r_on=".$row['reg_on']."'> JOIN </a></td>";

}

if($row['status']=='OnGoing'){
echo"<td><a href='stream.php?mtname=".$row['match_table_name']."'> WATCH </a></td>";

}

if($row['status']=='Compleated'){
echo"<td><a href='result.php?mtname=".$row['match_table_name']."'> RESULT </a></td>";

}

echo'</tr>';


}
echo'</table>';
// Free result set

mysqli_free_result($result);

} else{
echo "<h1>No records matching your query were found.</h1>";
}
}
else{

echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
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


