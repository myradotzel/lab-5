<?php
$postsDB = new mysqli("database_URL", "m765d813", "Aepe4ne9", "Posts");
$usersDB = new mysqli("database_URL", "m765d813", "Aepe4ne9", "Users");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$username = $_POST["username"];
$post = $_POST["post"];

$num_posts = "SELECT COUNT(post_id) FROM Posts";

if ($username == NULL || $post == NULL)
{
    echo "Post not saved (NULL)";
}

else if ($usersDB->query($username)) //add new post to Posts table database
{
    $sql = "INSERT INTO postsDB (post_id+1, content, author_id) VALUES ($username, $post, $num_posts)";
    echo "Post has been saved!";
}

else
{
    echo "Post not saved";
}

$postsDB->close();
$usersDB->close();
?>