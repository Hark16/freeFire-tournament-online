<title>
streaming link
</title>

<form method='POST'>
<input type='text' placeholder='stream link' name='link'/>
<br/>

<input type='submit' name='submit' value='submit'/>
</form>


<?php

include "databaseConnection.php";
error_reporting(0);


$mtname= $_GET['mtname'];
$name= $_GET['name'];
$link= $_POST['link'];


if(isset($_POST['submit'])){

$pub= "UPDATE matches SET stream_link='$link' WHERE match_table_name= '$mtname' ";
mysqli_query($conn, $pub);

$pub1= "UPDATE matches SET status='OnGoing' WHERE match_table_name= '$mtname' ";
mysqli_query($conn, $pub1);

   header("Location: match_room.php?mtname=$mtname&name=$name");

}

?>
