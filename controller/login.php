<?php

include "model/database.php";

$user_name = $_POST["Username"];
$password = $_POST["password"];

$secure_password = md5($password);

$result = $db->query("SELECT * FROM usres WHERE username = '$user_name' AND password = '$secure_password'");
$users_count = $result->num_rows;

if($users_count > 0  and $users_count < 2 )
{
    $user = $result->fetch_assoc();
    $_SESSION["login_status"] = true;
    $_SESSION["username"] = $user_name;
    $_SESSION["user_id"] = $user["id"];
    header("Location : home");
}
else
{
    $_SESSION["message"]= "گذرواژه یا نام کاربری نا معتبر است";
    $_SESSION["message_type"]= "error";

    header("Location: index");

}