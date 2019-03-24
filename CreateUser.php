<?php
$usersDB = new mysqli("https://people.eecs.ku.edu/~m765d813", "m765d813", "Aepe4ne9", "Posts");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$username = $_POST["username"];

if ($usersDB->query($username)) //add new post to Posts table database
{
    echo "User already exists";
}

else if ($username != NULL) //add to new user to Users table database
{
    $sql = "INSERT INTO Users (user_id) VALUES ($username)";
    echo "User has been successfully added";
}

$usersDB->close();
?>