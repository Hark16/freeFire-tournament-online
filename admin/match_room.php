<html>
<?php
include 'databaseConnection.php';

$mtname= $_GET['mtname'];
$name = $_GET['name'];

?>

<title>
<?php

echo $name;
?>

</title>

<body>

<a href='profile.php'>back</a>

<?php

$table_name1= 'matches';

$sql = "SELECT * FROM $table_name1 WHERE match_table_name = '$mtname'";

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

echo"<td> <a href='reg_open_close.php?mtname=".$mtname."&name=".$name."'>".$row['reg_on']."</a></td>";

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

echo"<td> <a href='stream_link.php?mtname=".$mtname."&name=".$name."'>".$row['stream_link']."</td>";

echo"<td> <a href='details_room.php?mtname=".$mtname."&name=".$name."'>".$row['room_id']."</a></td>";
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

echo'<hr/>';
echo'<hr/>';

$table_name=$mtname;

$sql = "SELECT * FROM $table_name ";

if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){

echo'<table>';
echo'<tr>';


echo'<th> Id</th>';

echo'<th> Name</th>';
echo'<th> Email</th>';
echo'<th> User Id</th>';

echo'<th> Tran number</th>';
echo'<th> Approved</th>';
echo'<th> Winner</th>';

echo'<th> entered on </th>';

echo'</tr>';
while($row = mysqli_fetch_array($result)){
$idnum= $row['id'];

echo'<tr>';

echo"<td> ".$row['id']."</td>";

echo"<td> ".$row['name']."</td>";
echo"<td> ".$row['email']."</td>";
echo"<td> ".$row['user_id']."</td>";

echo"<td> ".$row['tran_number']."</td>";

echo"<td> <a href='approval.php?user_id=".$row['user_id']."&name=".$name."&mtname=".$mtname."'>".$row['approved']."</a></td>";
echo"<td> <a href='decleare_winner.php?mtname=".$mtname."&name=".$name."&wname=".$row['name']."&wemail=".$row['email']."&wid=".$row['user_id']."'>".$row['winner']."</a></td>";

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

