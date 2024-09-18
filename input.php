<?php
include "databaseConnection.php";
session_start();


$table_name= $_SESSION['table_name'];
$name= $_SESSION['name'];
$mobile= $_SESSION['mobile'];
$email= $_SESSION['email'];
$password= $_SESSION['password'];
$user_id= $_SESSION['user_id'];

$inswork= "INSERT INTO $table_name (user_id, name, email, password, mobile_number) VALUES('$user_id', '$name', '$email', '$password', '$mobile')";

if(mysqli_query($conn, $inswork)){

   header("Location: logout.php");

}else{

echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>
