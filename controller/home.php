<?php

include "model/database.php";
include "controller/functions.php";

$posts = $db->query("SELECT *, users.id As userid, posts.id AS postid  FROM posts INNER JOIN users ON posts.user_id = users.id INNER JOIN follows WHERE follows.following_user_id=posts.user_id ORDER BY time DESC");

$my_array = array();
foreach ($posts as $post){
    $post_id = $post["postid"];
    $user_id =$_SESSION["user_id"];

    $post["likes"] = $db->query("SELECT COUNT(*) AS count FROM likes WHERE post_id = $post_id")->fetch_assoc();
    $post["like_user"]  = $db->query("SELECT * FROM likes WHERE post_id = $post_id AND user_id = $user_id")->num_rows;

    $post["comments"] = $db->query("SELECT * FROM comments 
                                                INNER JOIN users ON comments.user_id = users.id
                                                    WHERE post_id = $post_id 
                                                        ORDER BY time DESC;");

    $post["comments_num"] = $db->query("SELECT COUNT(*) AS count FROM comments 
                                                WHERE post_id = $post_id;")->fetch_assoc();

    $my_array[] = $post;
}

require "view/Home.php";

?>

