<?php


include "model/database.php";

$user_name = $_POST["Username"];
$password = $_POST["password"];

$secure_password = md5($password);

$result = $db->query("SELECT * FROM users WHERE username = '$user_name' AND password = '$secure_password'");
$users_count = $result->num_rows;

$username_valid=$db->query("SELECT * FROM users WHERE username='$user_name'");
$username_count = $username_valid->num_rows;

$password_valid=$db->query("SELECT * FROM users WHERE password='$secure_password'");
$password_count = $password_valid->num_rows;

$message_error = array();
$message_type_error = array();

if($users_count == 1)
{
    $user = $result->fetch_assoc();
    $_SESSION["login_status"] = true;
    $_SESSION["username"] = $user_name;
    $_SESSION["user_id"] = $user["id"];
    header("Location: home");
}
else
{
    if($username_count==0){
        $message_error[]="نام کاربری نامعتبر است ";
        $message_type_error[]="error";
    }
    if($password_count==0)
    {
        $message_error[]="گذرواژه نامعتبر است ";
        $message_type_error[]="error";
    }
    $_SESSION["message"] = $message_error;
    $_SESSION["message_type"]=$message_type_error;
    header("Location: index");

}

?>