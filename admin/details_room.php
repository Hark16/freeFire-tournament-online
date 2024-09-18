<title>
id and password of room
</title>

<form method='POST'>
<input type='text' placeholder='room Id' name='id'/>
<br/>

<input type='text' placeholder='room Password' name='password'/>
<br/>

<input type='submit' name='submit' value='submit'/>
</form>


<?php

include "databaseConnection.php";
error_reporting(0);


$mtname= $_GET['mtname'];
$name= $_GET['name'];
$id= $_POST['id'];
$password = $_POST['password'];

if(isset($_POST['submit'])){

$pub= "UPDATE matches SET room_id='$id' WHERE match_table_name= '$mtname' ";
mysqli_query($conn, $pub);


$pub1= "UPDATE matches SET room_password='$password' WHERE match_table_name= '$mtname' ";
mysqli_query($conn, $pub1);

   header("Location: match_room.php?mtname=$mtname&name=$name");

}

?>
