<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbsql";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry, we failed to connect: " . mysqli_connect_error());
}

echo "Connection was successful";

$sql = "INSERT INTO `sql` (`id`, `lectures`, `code`, `no of lectures`) VALUES (NULL, 'computer', '123', '1'), (NULL, 'computer', '12345', '3')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Inserted successfully";
} else {
    echo "Insertion failed: " . mysqli_error($conn);
}

?>
