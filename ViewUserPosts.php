<?php
$postsDB = new mysqli("database_URL", "m765d813", "Aepe4ne9", "Posts");

$num_posts = "SELECT COUNT(post_id) FROM Posts";
for ($i=0; $i<$num_posts; $i++)
{
    $user = "SELECT * FROM Users LIMIT " . $i . ",1";
    echo "<option value=" . $user . ">" . $user . "</option>";
}

<option value="saab">Saab</option>
<option value="mercedes">Mercedes</option>
<option value="audi">Audi</option>

?>