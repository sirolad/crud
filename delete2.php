<?php
include 'config.php';

mysqli_query($connection, "DELETE FROM users WHERE id = '".$_REQUEST['id']."' ");

echo "Deleted Successfully!";

mysqli_close($connection);

include('links.php');