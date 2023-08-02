<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "contact";



$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];



$sql = "INSERT INTO userdata (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Form data saved successfully!";

    // Send email notification
    $to = "ayeshasaleem5095028@gmail.com"; // Replace with your email address
    $subject = "New Form Submission";
    $message = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From:dummy_email@example.com"; // Replace with your website's email address

   $output= mail($to, $subject, $message, $headers);
var_dump($output);
     // Redirect to the listing page after successful insertion
     //header('Location: listview.php');
     exit();

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
