<?php
include "databaseConnection.php";
session_start();
$name= $_SESSION['name'];
$new_table_name= $_SESSION['new_table_name'];
$table_name= $_SESSION['table_name'];

$match_date= $_SESSION['match_date'];
$time= $_SESSION['time'];
$winner_prise= $_SESSION['winner_prise'];
$entry_fees= $_SESSION['entry_fees'];


$table5 = "CREATE TABLE $new_table_name (id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(250) NOT NULL, reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMp, email VARCHAR(250) NOT NULL, user_id TEXT, tran_number TEXT, approved TEXT, winner TEXT)";


mysqli_query($conn,$table5);


$inswork= "INSERT INTO $table_name (name, reg_on, match_date, time, platform, total_players, winner_id, winner_email, winner_name, winner_prise, entry_fees, status, stream_link, room_id, room_password, match_table_name) VALUES('$name', 'open', '$match_date', '$time', 'Free Fire', '52', 'not decleared', 'not decleared', 'not decleared', '$winner_prise', '$entry_fees', 'upcomeing', 'coming soon', 'coming soon', 'coming soon', '$new_table_name')";

mysqli_query($conn, $inswork);

   header("Location: profile.php");


?>
