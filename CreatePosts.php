<?php
$DB = new mysqli("mysql.eecs.ku.edu", "m765d813", "Aepe4ne9", "m765d813");

if ($DB->connect_errno) {
    printf("Connect failed: %s\n", $DB->connect_error);
    exit();
}

$username = $_POST["username"];
$post = $_POST["post"];

if ($username == NULL || $post == NULL)
{
	echo "Error Inserting Posts";
}

else
{
	$query = "INSERT INTO Posts (content, author_id) VALUES ('$post', (SELECT user_id FROM Users WHERE user_id='$username'))";
	if ($result = $DB->query($query)){
		echo "Insert Success";
	}
	else {
		echo "Error Inserting Posts";
	}
}

$DB->close();
?>
