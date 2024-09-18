<?php
include "databaseConnection.php";
session_start();

$mtname = $_SESSION['mtname'];
$name= $_SESSION['name'];
$email = $_SESSION['email'];
$user_id = $_SESSION['user_id'];
$tran_number = $_SESSION['tran_number'];

$inswork= "INSERT INTO $mtname (name, email, user_id, tran_number, approved, winner) VALUES('$name', '$email', '$user_id', '$tran_number', 'not approved', 'no')";

mysqli_query($conn, $inswork);

   header("Location: profile.php");


?>
