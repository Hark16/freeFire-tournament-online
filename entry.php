﻿<!DOCTYPE html>
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
<a href='profile.php'>back</a>

<?php

include 'databaseConnection.php';
session_start();

$entry_fees= $_GET['entry_fees'];
$mtname = $_GET['mtname'];
$name = $_GET['name'];
$reg_on = $_GET['r_on'];
$user_id = $_GET['user_id'];
$email = $_GET['email'];

echo'<table>';
echo'<tr>';
echo'<th> Name</th>';
echo'<th> User Id</th>';
echo'<th> EMail</th>';
echo'</tr>';

echo'<tr>';
echo'<td> '.$name.'</td>';
echo'<td> '.$user_id.'</td>';
echo'<td> '.$email.'</td>';
echo'</tr>';

echo'</table>';

$sql= "SELECT * FROM $mtname WHERE user_id='$user_id' and approved='approved'";
$result = mysqli_query($conn,$sql);
$total=mysqli_num_rows($result);

$sql1= "SELECT * FROM $mtname WHERE user_id='$user_id' and approved='not approved'";
$result1 = mysqli_query($conn,$sql1);
$total1=mysqli_num_rows($result1);

$sql2= "SELECT * FROM $mtname WHERE user_id='$user_id' and approved='disapproved'";
$result2 = mysqli_query($conn,$sql2);
$total2=mysqli_num_rows($result2);

if ($total===1){

?>
<h1>
Congo... you Approved 
</h1>
<pre>
We got your entry fees and now you have entered the Match.
match details below
</pre>
<?php

$sql = "SELECT * FROM matches WHERE match_table_name = '$mtname'";

if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){

echo'<table>';
echo'<tr>';

echo'<th> room id</th>';
echo'<th> room password</th>';

echo'</tr>';
while($row = mysqli_fetch_array($result)){

echo'<tr>';
echo"<td> ".$row['room_id']."</td>";

echo"<td> ".$row['room_password']."</td>";

echo'</tr>';

echo'<p> please visit this page for room id and password on '.$row['match_date'].' just 15 minutes before, the time of match('.$row['time'].')</p>';


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

echo'<hr/>';

}
 
else if($total1===1){
?>
<b>
<h1>
APPROVING . . . 

</h1>
</b>
<pre>
Details-
It can take some time,
while we approve your Payment
till then
PLEASE WAiT

</pre>
<?php

}
else if($total2===1){

?>
<h1>
DisApproved
</h1>
<pre>
Details-
Our team did not get any Payment from you
Or
You entered wrong info about your Online payment
for more details please 
Contact on
<h3>mobigame2021@gmail.com</h3>
</pre>
<?php

}

else{
if($reg_on=='open'){

?>
<h3>
Welcome to Join the Match
</h3>

<p><b>
Compleate this 2 steps given below and wait for approval ...>

</b></p>

<h2>
Step 1
</h2>
<h3>
<b>
Send entry fees rs. <?php echo'<h1> '.$entry_fees.'</h1>'; ?> in this UPI id given below..
<h1>
mobigame@ybl
</h1>
</b>
</h3>


<h2>
Step 2
</h2>
<h1>
Submit your transaction Id which you get in online money transfer 
</h1>

<form method='POST'>
<input type='text' name='tran_number' placeholder='transaction ID '/>
<br/>
<input type='submit' name='submit' value='submit'/>
</form>

<?php

if(isset($_POST['submit'])){
$_SESSION['tran_number'] = $_POST['tran_number'];
$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['user_id'] = $user_id;
$_SESSION['mtname'] = $mtname;

   header("Location: enter_room.php");

}}
else{
echo'sorry registration is closed please try in another match ...';

}

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


