
<?php

include "databaseConnection.php";
error_reporting(0);


$mtname= $_GET['mtname'];
$name= $_GET['name'];

$wname= $_GET['wname'];
$wemail= $_GET['wemail'];
$wid= $_GET['wid'];


$pub= "UPDATE matches SET winner_name='$wname' WHERE match_table_name= '$mtname' ";
mysqli_query($conn, $pub);

$pub1= "UPDATE matches SET winner_email='$wemail' WHERE match_table_name= '$mtname' ";
mysqli_query($conn, $pub1);

$pub2= "UPDATE matches SET winner_id='$wid' WHERE match_table_name= '$mtname' ";
mysqli_query($conn, $pub2);

$pub3= "UPDATE matches SET status='Compleated' WHERE match_table_name= '$mtname' ";
mysqli_query($conn, $pub3);

$pub4= "UPDATE $mtname SET winner='yes' WHERE user_id= '$wid' ";
mysqli_query($conn, $pub4);

   header("Location: match_room.php?mtname=$mtname&name=$name");


?>
