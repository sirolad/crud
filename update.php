<?php

include 'config.php';
echo "<h3>Choose an Id To Edit:</h3>";

$result = mysqli_query($connection, "SELECT * FROM users");

echo "<table width='90%' align=center border=2>";
echo "<tr><td width='40%' align='center' bgcolor='ffff00'>ID</td>
<td width='40%' align='center' bgcolor='ffff00'>NAME</td>
<td width='40%' align='center' bgcolor='ffff00'>EMAIL</td>
<td width='40%' align='center' bgcolor='ffff00'>PASSWORD</td>
 ";

while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $password = $row['password'];

    echo "<tr><td align='center'><a href='edit.php?ids=$id&names=$name&emails=$email&passwords=$password'>$id</a></td>
<td>$name</td><td>$email</td><td>$password</td></tr>";
}

echo "</table>";

mysqli_close($connection);


include("links.php");





