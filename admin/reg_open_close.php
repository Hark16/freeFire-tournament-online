<title>
open or close
</title>

<form method='POST'>

<input type='submit' name='open' value='open' />
<br/>
<input type='submit' name='closed' value='closed'/>

</form>
<?php

include "databaseConnection.php";
error_reporting(0);


$mtname= $_GET['mtname'];
$name= $_GET['name'];

if(isset($_POST['open'])){
$pub= "UPDATE matches SET reg_on='open' WHERE match_table_name= '$mtname' ";
mysqli_query($conn, $pub);

   header("Location: match_room.php?mtname=$mtname&name=$name");

}
if(isset($_POST['closed'])){
$pub= "UPDATE matches SET reg_on='closed' WHERE match_table_name= '$mtname' ";
mysqli_query($conn, $pub);

   header("Location: match_room.php?mtname=$mtname&name=$name");

}

?>
