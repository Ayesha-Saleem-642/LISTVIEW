

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="listview.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  <meta name="viewport" content="width=device-width, initial-scale=1.5">

  
  
</head>

<body>

<?php include 'navbar.php'; ?>

<style>
  body {
    height: 1000px;
  } 
  </style>


  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="christopher-gower-m_HRfLhgABo-unsplash.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="joshua-reddekopp-SyYmXSDnJ54-unsplash.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="arnold-francisca-f77Bh3inUpE-unsplash.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<br>


<button class="action-button1">

 
    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">New button</a><br>
   

    
  
  <script>
    var newButton = document.querySelector(".action-button1");
var popupMenu = document.querySelector("#popupMenu");

newButton.addEventListener("click", function() {
  // Toggle visibility of popup menu
  popupMenu.classList.toggle("hidden");
});

  </script>
 
  
  
  
  
  <style>
    .action-button1{
      background-color:#333 ;
      color: aliceblue;
      font-size: 20px;
      border: white;
      margin-left: 1125px;
      padding: 10px;
    }
      .action-button1 a {
    color: white;
    text-decoration: none;
  
}

.action-button {
    padding: 4px 8px;
    background-color: #333;
    color: white;
    border: none;
    cursor: pointer;
  }
  
  .action-button:hover {
    background-color: #070707;
  }
  
      
  </style>

 
  <script>
   var newButton = document.querySelector(".action-button1");
var otherOptions = document.querySelectorAll(".dropdown-content");

newButton.addEventListener("click", function() {
  // Show other options
  otherOptions.forEach(function(option) {
    option.style.display = "block";
  });
});



  </script>

  

</button>
<br>
<br>

  <!-- Book list table -->
  <!-- Book list table -->
<table>
  <thead>
    <tr>
      <th>Book Name</th>
      <th>Author</th>
      <th>Genre</th>
      <th>Price</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "test";


$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    // Retrieve data from the database and populate the table dynamically
    $sql = "SELECT * FROM laibrary";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $bookId = $row['id'];
        $bookName = $row['bookName'];
        $author = $row['author'];
        $genre = $row['genre'];
        $price = $row['price'];

        echo "<tr>";
        echo "<td>$bookName</td>";
        echo "<td>$author</td>";
        echo "<td>$genre</td>";
        echo "<td>$price</td>";
        echo "<td class='actions'>";
        echo "<div class='dropdown'>";
        echo "<button class='action-button'>...</button>";
        echo "<div class='dropdown-content'>";
        echo "<a href='#' data-bs-toggle='modal' data-bs-target='#exampleModal'>Edit</a><br>";
      
        echo "<a href='#' class='delete-book' data-bs-toggle='modal' data-bs-target='#deleteConfirmationModal' data-id='$bookId'>Delete</a><br>";
        echo "<a href='#'>View Details</a>";
        echo "</div>";
        echo "</div>";
        echo "</td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='5'>No books found.</td></tr>";
    }




    ?>


  </tbody>
</table>


      <div class="modal" id="exampleModal" tabindex="-1">
        

        <form method="get" action="http://localhost/ayesha/test.php">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"  id="exampleModalLabel"> New Book</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             


                <div class="mb-3">
                  <label for="bookName" class="form-label">Book Name</label>
                  <input type="text" class="form-control" name="bookName" id="bookName" placeholder="Enter book name" required>
                </div>
                <div class="mb-3">
                  <label for="author" class="form-label">Author</label>
                  <input type="text" class="form-control" name="author" id="author" placeholder="Enter author name" required>
                </div>
                <div class="mb-3">
                  <label for="genre" class="form-label">Genre</label>
                  <input type="text" class="form-control" name="genre" id="genre" placeholder="Enter genre" required>
                </div>
                <div class="mb-3">
                  <label for="price" class="form-label">Price</label>
                  <input type="number" class="form-control" name="price" id="price" placeholder="Enter price" required>
                </div>
            

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </form>
            
      </div>



      <!-- delete form  -->

      <div class="modal" id="deleteConfirmationModal" tabindex="-1">
  <form method="get" action="http://localhost/ayesha/delete.php">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete Book</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this book?</p>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="bookId" id="deleteBookId">
          <input type="hidden" name="id" id="deleteId">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </form>
</div>
<!-- delete form html -->



      <script>
       // JavaScript code to replace the modal title
var modalTitleElement = document.getElementById("exampleModalLabel");
var editButtons = document.querySelectorAll("[data-bs-toggle='modal'][data-bs-target='#exampleModal']");

editButtons.forEach(function(button) {
  button.addEventListener("click", function() {
    var bookName = this.closest("tr").querySelector("td:first-child").textContent;
    modalTitleElement.innerHTML = bookName;
  });
});


// JavaScript code to replace the modal title and save changes to the table



var newButton = document.querySelector(".action-button1");
var modalTitleElement = document.getElementById("exampleModalLabel");
var bookNameInput = document.getElementById("bookName");
var authorInput = document.getElementById("author");
var genreInput = document.getElementById("genre");
var priceInput = document.getElementById("price");

newButton.addEventListener("click", function() {
  modalTitleElement.innerHTML = "New Book";
  bookNameInput.value = "";
  authorInput.value = "";
  genreInput.value = "";
  priceInput.value = "";
});

// JavaScript code to replace the modal title and update the table with saved changes
var editButtons = document.querySelectorAll("[data-bs-toggle='modal'][data-bs-target='#exampleModal']");
var modalTitleElement = document.getElementById("exampleModalLabel");
var bookNameInput = document.getElementById("bookName");
var authorInput = document.getElementById("author");
var genreInput = document.getElementById("genre");
var priceInput = document.getElementById("price");

editButtons.forEach(function(button) {
  button.addEventListener("click", function() {
    var row = this.closest("tr");
    var bookName = row.querySelector("td:nth-child(1)").textContent;
    var author = row.querySelector("td:nth-child(2)").textContent;
    var genre = row.querySelector("td:nth-child(3)").textContent;
    var price = row.querySelector("td:nth-child(4)").textContent;

    modalTitleElement.innerHTML = bookName;
    bookNameInput.value = bookName;
    authorInput.value = author;
    genreInput.value = genre;
    priceInput.value = price;
  });
});




// saveChangesButton.addEventListener("click", function() {
//   var bookName = bookNameInput.value;
//   var author = authorInput.value;
//   var genre = genreInput.value;
//   var price = priceInput.value;

//   // Update the current row with the saved changes
//   currentRow.querySelector("td:nth-child(1)").textContent = bookName;
//   currentRow.querySelector("td:nth-child(2)").textContent = author;
//   currentRow.querySelector("td:nth-child(3)").textContent = genre;
//   currentRow.querySelector("td:nth-child(4)").textContent = price;
// });

// code to delete the row



// JavaScript code to handle delete operation
var deleteButtons = document.querySelectorAll(".delete-book");

deleteButtons.forEach(function(button) {
  button.addEventListener("click", function() {
    var id = this.getAttribute("data-id");
    var row = this.closest("tr");

    document.getElementById('deleteId').value=id;
    document.getElementById('deleteBookId').value=id;
    //deleteBook(id, row);
  });
});

// function deleteBook(id, row) {
//   var xhr = new XMLHttpRequest();
//   xhr.open("GET", "delete.php?id=" + id, true);
//   xhr.onreadystatechange = function() {
//     if (xhr.readyState === XMLHttpRequest.DONE) {
//       if (xhr.status === 200) {
//         console.log(xhr.responseText);
//         // Remove the deleted row from the table
//         row.parentNode.removeChild(row);
//       } else {
//         console.error("Error deleting record: " + xhr.status);
//       }
//     }
//   };
//   xhr.send();
// }




      </script>
     
     <footer>
  <p>© <?php echo date('Y'); ?> Your Company. All rights reserved.</p>
</footer>


<style>
    footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
    margin-top: 200px;
  
  }
  
  footer p {
    margin: 0;
  }
  </style>
     
</body>

</html>