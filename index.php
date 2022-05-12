<?php
    session_start();

    $request = $_SERVER["REQUEST_URI"];

    switch ($request)
    {
        case("/social"):
        case("/social/"):
        case("/social/index"):
            require __DIR__ . "/view/index.php";
            break;

        case("/social/about.php"):
            require __DIR__ . "/view/about.php";
            break;

        case("/social/Home.php"):
        case("/social/home.php"):
        case("/social/home"):

        require __DIR__ . "/view/Home.php";
            break;

        case("/social/profile.php"):
            require __DIR__ . "/view/profile.php";
            break;


        case("/social/register"):
        case("/social/register.php"):

        require __DIR__ . "/controller/register.php";
            break;

        case("/social/login"):
        case("/social/login.php"):

            require __DIR__ . "/controller/login.php";
            break;


        default:
            require __DIR__ . "/view/404.php";
            break;
    }

?>