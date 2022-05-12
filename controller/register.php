<?php

include "model/database.php";

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$user_name = $_POST["Username"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$password = $_POST["password"];
$password2 = $_POST["password2"];
$birthday = $_POST["birthday"];
$bio = $_POST["bio"];
$gender = $_POST["gender"];

if ($password == $password2)
{
    if (strlen($user_name) >= 4)
    {
        $users_count = $db->query("SELECT * FROM usres WHERE username = '$user_name'")->num_rows;
        if($users_count == 0)
        {
            $secure_password = md5($password);

            $db->query("INSERT INTO users (first_name, last_name, username,password,email,birthday,mobile_number,gender,bio) VALUES ('$firstname', '$lastname', '$user_name', '$secure_password', '$email', '$birthday', '$mobile', $gender, '$bio' )");
            $_SESSION["message"]= "شما به جمع خانواده ما پیوستی";
            $_SESSION["message_type"]= "success";
        }
        else
        {
            $_SESSION["message"]= "نام کاربری شما تکراری است";
            $_SESSION["message_type"]= "error";
        }
    }
    else
    {
        $_SESSION["message"]= "نام کاربری نمی تواند کمتر از 4 حرف باشد";
        $_SESSION["message_type"]= "error";
    }

}
else
{
    $_SESSION["message"]= "گذرواژه تکراری نا معتبر است";
    $_SESSION["message_type"]= "error";

}

header("Location: index");

?>