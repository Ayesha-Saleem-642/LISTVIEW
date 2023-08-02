<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle delete operation
if (isset($_GET['id'])) {
    
    $id = $_GET['id'];
    // Perform the delete operation based on the provided bookId
    $sql = "DELETE FROM laibrary WHERE `laibrary`.`id` = '$id'"; 
    if ($conn->query($sql) === TRUE) {
        // echo "Record deleted successfully";
        header('location: listview.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>