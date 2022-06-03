<?php
    session_start();

    date_default_timezone_set("Asia/tehran");

    $request = $_SERVER["REQUEST_URI"];
    $request = str_replace("/social","", $request);
    switch ($request)
    {

        case("/"):
        case("/index"):
            require "controller/index.php";
            break;

        case("/social/about.php"):
            require "view/about.php";
            break;

        case("/Home.php"):
        case("/home.php"):
        case("/home"):

        require "controller/Home.php";
            break;

        case("/profile.php"):
            require "view/profile.php";
            break;

        case("/login"):
            require "controller/login.php";
            break;

        case("/send_comments"):
            require "controller/send_comments.php";
            break;

        case("/send-like"):
            require "controller/send_like.php";
            break;

        case("/register"):
        case("/register.php"):
            require "controller/register.php";
            break;

        case("/post"):
        case("/post.php"):
            require "controller/post.php";
            break;

        case("/logout"):
        case("/logout.php"):
            require "controller/log_out.php";
            break;

        default:
            require "view/404.php";
            break;
    }

?>