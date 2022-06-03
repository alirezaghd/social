<?php

include "model/database.php";

$post_id =$_POST["post_id"];
$user_id =$_SESSION["user_id"];

$count = $db->query("SELECT * FROM likes WHERE post_id = $post_id AND user_id = $user_id")->num_rows;

if($count == 0) // قبلا لایک نکرده پس اجازه داره الان لایک کنه
{
    $db->query("INSERT INTO likes(user_id, post_id) VALUES($user_id, $post_id)");
    echo 1;
}
else{ // قبلا لایک کرده پس الان باید لایک پس گرفته بشه
    $db->query("DELETE FROM likes WHERE post_id = $post_id AND user_id = $user_id");
    echo 0;
}

?>