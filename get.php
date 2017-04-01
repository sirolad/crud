<?php

include 'config.php';

$allUsers = mysqli_query($connection, "SELECT * FROM users");

if (mysqli_num_rows($allUsers) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($allUsers)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br> " . "  Email: ".$row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($connection);