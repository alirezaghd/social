<?php


include "database.php";


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$password = $_POST["password"];
$birthday = $_POST["birthday"];


$db->query("INSERT INTO users (first_name,last_name,password,email,birthday,mobile_number) VALUES ('$firstname', '$lastname', '$password', '$email', '$birthday', '$mobile')");

header("Location: view/index.php");
?>