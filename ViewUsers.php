<?php
$usersDB = new mysqli("database_URL", "m765d813", "Aepe4ne9", "Posts");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$num_users = "SELECT COUNT(user_id) FROM Users";

echo "<h1>Users</h1>";
echo "<table>";
for ($i = 1; $i <= $num_users; $i++)
{
    echo "<tr>" . "SELECT * FROM Users LIMIT " . $i . ",1" . "</tr>";
}
echo "</table>";

$usersDB->close();
?>