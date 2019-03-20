<?php
//$postsDB = new mysqli("database_URL", "m765d813", "Aepe4ne9", "Users");
$usersDB = new mysqli("database_URL", "m765d813", "Aepe4ne9", "Posts");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$username = $_POST["username"];
//$post = $_POST["post"];

//$num_posts = "SELECT COUNT(post_id) FROM usersDB";

if ($usersDB->query($username)) //add new post to Posts table database
{
    //$sql = "INSERT INTO postsDB (post_id, content, author_id) VALUES ($username, $post, $num_posts)";
    echo "User already exists";
}

else if ($username != NULL) //add to new user to Users table database
{
    $sql = "INSERT INTO usersDB ($username)";
    echo "User has been successfully added";
    //INSERT INTO postsDB ($username, $post, $num_posts);
}

//$postsDB->close()
$usersDB->close();
?>