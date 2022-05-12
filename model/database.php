<?php

// create mysql object
$db = new mysqli("localhost","root","","sajjadgeram");

if($db->connect_error)
{
    echo "vay vay vay";
}

else
{
    $db->query("SET CHARACTER SET uft8");
//    mysqli_set_charset($db,"utf8");
}

?>