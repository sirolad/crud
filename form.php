<?php
?>

<html>
<head>

</head>
<body>
<h2>PinkIT Application</h2>
<form method="post" action="insert.php">
    <table border="0" width="70%">
        <tr><td>Name: </td><td><input type="text" name="name" maxlength="15" /><br></td></tr>
        <tr><td>Email: </td><td><input type="text" name="email" maxlength="30" /><br></td></tr>
        <tr><td>Password: </td><td><input type="password" name="password" maxlength="8" /><br></td></tr>
        <tr><td>Confirm Password: </td><td><input type="password" name="cpassword" maxlength="8" /><br></td></tr>
    </table>
    <p>
        <input  type="submit" value="register" />
        <input type="reset" value="reset"/>
    </p>
</form>
<hr>

<?php include("links.php"); ?>

</body>
</html>