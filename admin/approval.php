<title>
approval or disapproval 
</title>

<form method='POST'>

<input type='submit' name='approved' value='Approved'/>
<br/>
<input type='submit' name='disapproved' value='Disapproved'/>

</form>
<?php

include "databaseConnection.php";
error_reporting(0);

$user_id=$_GET['user_id'];
$mtname= $_GET['mtname'];
$name= $_GET['name'];

if(isset($_POST['approved'])){
$pub= "UPDATE $mtname SET approved='approved' WHERE user_id= '$user_id' ";
mysqli_query($conn, $pub);

   header("Location: match_room.php?mtname=$mtname&name=$name");

}
if(isset($_POST['disapproved'])){
$pub= "UPDATE $mtname SET approved='disapproved' WHERE user_id= '$user_id' ";
mysqli_query($conn, $pub);

   header("Location: match_room.php?mtname=$mtname&name=$name");

}

?>
