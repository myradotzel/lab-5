<?php
$DB = new mysqli("mysql.eecs.ku.edu", "m765d813", "Aepe4ne9", "m765d813");

if ($DB->connect_errno) {
    printf("Connect failed: %s\n", $DB->connect_error);
    exit();
}

$username = $_POST["username"];

$sql = "INSERT INTO Users (user_id) VALUES (\"$username\");";

if ($DB->query($sql) === TRUE)
{
    echo "New record created successfully";
}
else
{
    echo "Error: " . $sql . "<br>" . $DB->error;
}

$DB->close();
?>
