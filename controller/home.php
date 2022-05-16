<?php



include "model/database.php";
$posts = $db->query("SELECT * FROM posts INNER JOIN users ON posts.user_id = users.id ");

$comments=$db->query("SELECT * FROM comments INNER JOIN users ON comments.user_id=users.id LEFT JOIN posts ON posts.id = comments.post_id;" );


require "view/Home.php";
