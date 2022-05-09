<?php

    $request = $_SERVER["REQUEST_URI"];

    switch ($request)
    {
        case("/social/"):
            require __DIR__ . "/view/index.php";
            break;
        case("/social/about.php"):
            require __DIR__ . "/view/about.php";
            break;

        case("/social/Home.php"):
        case("/social/home.php"):

        require __DIR__ . "/view/Home.php";
            break;

        case("/social/profile.php"):
            require __DIR__ . "/view/profile.php";
            break;


        default:
            require __DIR__ . "/view/404.php";
            break;
    }



?>