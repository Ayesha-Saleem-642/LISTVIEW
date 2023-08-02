<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  // Retrieve the value of 'bookName' from the $_GET array
  $bookName = $_GET['bookName'];
  $author = $_GET['author'];
  $genre = $_GET['genre'];
  $price = $_GET['price'];
 

  // Use the $bookName variable as needed
  echo "bookName: " . $bookName  . "<br>";
  echo "author: " . $author  . "<br>";
  echo "genre: " . $genre  . "<br>";
  echo "price: " . $price  . "<br>";
 
  // Print the values using print_r
 echo "<pre>";
 print_r($_GET);
 echo "</pre>";
}


$servername = "localhost";
$username = "root";
$password = "";
$database = "test";


$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the insert statement
$stmt = $conn->prepare("INSERT INTO laibrary (bookName, author, genre, price) VALUES (?, ?, ?, ?)");

$stmt->bind_param("sssd", $bookName, $author, $genre, $price);

// Execute the statement
if ($stmt->execute()) {
    echo "Record inserted successfully.";


    // Redirect to the listing page after successful insertion
    header('Location: listview.php');
    exit();

} else {
    echo "Error: " . $stmt->error;
}





// Close the statement and connection
$stmt->close();
$conn->close();
?>

?>
