
<html><head>

<title>

<?php
error_reporting(0);
include "databaseConnection.php";

session_start();

echo"create Match";
?>
</title>


<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="mystyle.css">

</head>
<body>



<div class="container">
<div class="row">
  <div class="col-xs-6">


</div>

  <div class="col-xs-6">

<?php

$username= $_SESSION['username'];
echo("<br/><a href='logout.php?username=".$username."' class='btn btn-danger'>log out </a>");

?>
</div> </div> </div> 

<h1>
<?php
echo("welcom ". $username);


?>
</h1>


<div class="container">

<form method='POST'>

<div class="container">


  <div class='container'>

Name<br/>

<input type='text' name='name' placeholder='name of match'> </input><br/>

</div>

  <div class='container'>

new table Name<br/>

<input type='text' name='new_table_name' placeholder='name of new table' value=' '/> </input><br/>

</div>


<div>
Date of Match
<br/>
<input type='taxt' name='match_date' placeholder='Date Of Match'/>

</div>

<div>
Time Of Match
<br/>
<input type='taxt' name='time' placeholder='time of match'/>

</div>

<div>
winner prise
<br/>
<input type='taxt' name='winner_prise' placeholder='cash Prise of winner'/>

</div>

<div>
entry fees
<br/>
<input type='taxt' name='entry_fees' placeholder='entry fees per user'/>

</div>

<div>
<center>
<input type='submit' name='submit' value='submit'></input>
</center>
<br/> <br/> <br/> 

</div>

</form>
</div>

<?php

include "databaseConnection.php";
error_reporting(0);


if(isset($_POST['submit'])){

$name=mysqli_real_escape_string($conn,$_POST['name']);
$new_table_name=mysqli_real_escape_string($conn,$_POST['new_table_name']);

$match_date=mysqli_real_escape_string($conn,$_POST['match_date']);
$time=mysqli_real_escape_string($conn,$_POST['time']);
$winner_prise=mysqli_real_escape_string($conn,$_POST['winner_prise']);
$entry_fees=mysqli_real_escape_string($conn,$_POST['entry_fees']);

$table_name= 'matches';


if (strpos($new_table_name, ' ') !== false) {

echo "<h1>please do not use space or write something </h1>";


$result = mysqli_query($conn,"SHOW TABLES LIKE '".$table_name."'");
if($result->num_rows == 1) {


echo"<h1> this Name is taken </h1>";
}}

else {

$_SESSION['name']= $name;
$_SESSION['table_name']= $table_name;

$_SESSION['match_date']= $match_date;
$_SESSION['time']= $time;
$_SESSION['winner_prise']= $winner_prise;
$_SESSION['entry_fees']= $entry_fees;
$_SESSION['new_table_name']= $new_table_name;

   header("Location: input1.php");

}}

?>
<h1> your Matches </h1>

<?php


$table_name='matches';

$sql = "SELECT * FROM $table_name ";

if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){

echo'<table>';
echo'<tr>';


echo'<th> Id</th>';
echo'<th> Name</th>';

echo'<th> Registration </th>';

echo'<th> match date</th>';
echo'<th> match time</th>';

echo'<th> platform</th>';
echo'<th> total players</th>';

echo'<th> winner id</th>';
echo'<th> winner name</th>';
echo'<th> winner email</th>';

echo'<th> prise</th>';
echo'<th> fees</th>';
echo'<th> status</th>';
echo'<th> stream link</th>';

echo'<th> room id</th>';
echo'<th> room password</th>';
echo'<th> match table name</th>';
echo'<th> created on </th>';

echo'</tr>';
while($row = mysqli_fetch_array($result)){
$idnum= $row['id'];
$match_table_name= $row['match_table_name'];
echo'<tr>';

echo"<td> ".$row['id']."</td>";
echo"<td> <a href='match_room.php?mtname=".$match_table_name."&name=".$row['name']."'>".$row['name']."</a></td>";

echo"<td>".$row['reg_on']."</td>";

echo"<td> ".$row['match_date']."</td>";
echo"<td> ".$row['time']."</td>";

echo"<td> ".$row['platform']."</td>";
echo"<td> ".$row['total_players']."</td>";

echo"<td> ".$row['winner_id']."</td>";
echo"<td> ".$row['winner_name']."</td>";
echo"<td> ".$row['winner_email']."</td>";

echo"<td> ".$row['winner_prise']."</td>";
echo"<td> ".$row['entry_fees']."</td>";
echo"<td> ".$row['status']."</td>";
echo"<td> ".$row['stream_link']."</td>";

echo"<td> ".$row['room_id']."</td>";
echo"<td> ".$row['room_password']."</td>";
echo"<td> ".$row['match_table_name']."</td>";
echo"<td> ".$row['reg_date']."</td>";


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


</body>
</html>

