
<?php

include "model/database.php";

$post = $_POST["captions"];
$user_id = $_SESSION["user_id"];

$db->query("INSERT INTO posts (caption, user_id) VALUES('$post', '$user_id')");

header("Location: home");

?>