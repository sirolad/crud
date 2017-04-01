<?php

include 'config.php';

$result = mysqli_query($connection, "SELECT * FROM users WHERE id = '".$_REQUEST['ids']."' ");

echo "<table width='90%' align=center border=2>";
echo "<tr><td width='40%' align='center' bgcolor='ffff00'>ID</td>
<td width='40%' align='center' bgcolor='ffff00'>NAME</td>
<td width='40%' align='center' bgcolor='ffff00'>EMAIL</td>
<td width='40%' align='center' bgcolor='ffff00'>PASSWORD</td>
 ";

while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $password = $row['password'];

    echo "<tr><td align='center'>$id</a></td>
<td>$name</td><td>$email</td><td>$password</td></tr>";
}

echo "</table>";

mysqli_close($connection);

?>




<form method="post" action="delete2.php">
    <p>Are you sure you want to delete this User?</p>
    <input type="submit" name="submit" value="OK">
    <input type="hidden" name="id" value="<?php echo $_REQUEST['ids'];?>">
</form>


<?php include("links.php"); ?>