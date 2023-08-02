<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
  <!-- <title>Listview</title> -->
</head>
<body>
  


<!-- Navigation bar -->
<div class="navbar">
  <div class="logo"><img src="logo4-removebg-preview.png" alt="Logo"></div>

  <ul class="nav-links">
  <li><a href="home.php" <?php echo isActivePage("home.php") ? 'class="active"' : ''; ?>>Home</a></li>
  <li><a href="about.php" <?php echo isActivePage("about.php") ? 'class="active"' : ''; ?>>About</a></li>
  <li><a href="contact.php" <?php echo isActivePage("contact.php") ? 'class="active"' : ''; ?>>Contact</a></li>

  
    <div>
        <button class="jss27 jss1 jss3 jss6 css-1ipkqoe" tabindex="0" type="button" data-test="guestheader-submit-login">
        
     <a href="javascript:void(0);" onclick="openLoginPopup()">Log in</a>

   
    <span class="MuiTouchRipple0137"></span>
  </button>
  
  <button class="jss27 jss1 jss12 jss15 css-rouhss" tabindex="0" type="button" data-test="guestheader-submit-signup">
    <span class="jss2"><span>Sign Up</span>
  </span>
  <span class="MuiTouchRipple0137"></span>
</button>
</div>
</ul>
</div>

  <!-- Add a hidden div to serve as the modal popup -->
  <div class="modal-overlay">
    <div class="modal-content">
      <iframe class="modal-iframe" src="login.lw.php" frameborder="0"></iframe>
      <button class="close-modal" onclick="closeLoginPopup()"></button>
      <i class="fa fa-times close-modal" aria-hidden="true" onclick="closeLoginPopup()"></i>
    
</div>
  </div>

  

<!-- Include the modal.html content -->
<script src="modal.html"></script>
    
<style>
 

  .logo img{
    height: 50px;
  }

  element {
  height: 1000px;
  
}



/* Navigation bar styles */
.navbar {
    background-color: #333;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    
  }
  
  .logo {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
    height: 50px;
  }
  
  .nav-links {
    list-style: none;
    display: flex;
    margin-top: 6px;
 
  }
  
  .nav-links li {
    margin-right: 20px;
    margin-top: 8px;
}
  
  
  .nav-links a {
     color: #fff;
  text-decoration: none;
  font-size: 18px;
  margin-top: 30px;
  margin-bottom: 30px;
}
.jss27:hover {
    color: #0a58ca; /* Change the color on hover to your desired color (#0a58ca) */
  }


.nav-links li a {
    color: #ffff; 
    text-decoration: none;
    padding: 10px;
  }

  /* Style for the hover state */
  .nav-links li a:hover {
    color: #00f; /* Change the color on hover to blue (#00f) */
  }

  /* Style for the active state */
  .nav-links li a.active {
    color: #00f; /* Change the color to red (#f00) for the active link */
    font-weight: bold; /* Optional: Add font weight to distinguish the active link */
  }
  
  .jss2:hover {
  /* background-color: #0a58ca; */
  color: #0a58ca;
}
  .css-1ipkqoe.css-1ipkqoe {
    margin: 0 10px;
    border-radius: 7px;
    color: rgb(255, 255, 255);
border: 2px solid rgb(255, 255, 255);
    font-weight: bold;
    font-size: 16px;
    padding: 3px 20px;
    height: 38px;
}

.css-rouhss.css-rouhss {
    background: #333;
    border-radius: 7px;
    padding: 3px 20px;
    color: #fff;
    border: 2px solid rgb(255 252 252);
    font-weight: bold;
    box-shadow: 0 0 0 0;
    font-size: 16px;
}
.jss2 {
    width: 100%;
    display: inherit;
    align-items: inherit;
    justify-content: inherit;
}
.MuiTouchRipple0137 {
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: block;
    z-index: 0;
    position: absolute;
    overflow: hidden;
    border-radius: inherit;
    pointer-events: none;
}
.jss1 {
    
    min-width: 64px;
    box-sizing: border-box;
    transition: background-color 250ms}

    .css-rouhss.css-rouhss {
    
    color: #fff;
    font-weight: bold;
    font-size: 16px;
}

.jss1 {
    color: rgba(0, 0, 0, 0.87);
    padding: 6px 16px;
    font-size: 0.875rem;
    min-width: 64px;
    box-sizing: border-box;
    transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,border 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    line-height: 1.75;
    font-weight: 500;
    font-family: inherit;
    border-radius: 4px;
    text-transform: uppercase;
}
.jss27 {
    color: inherit;
    border: 0;
    margin: 0;
    cursor: pointer;
    display: inline-flex;
    outline: none;
    padding: 0;
    position: relative;
    align-items: center;
    user-select: none;
    border-radius: 0;
    vertical-align: middle;
    justify-content: center;
    -moz-appearance: none;
    text-decoration: none;
    background-color: transparent;
    -webkit-appearance: none;
    -webkit-tap-highlight-color: transparent;
}

/* Style for the active link */
.nav-links a.active {
  color: black; }



  /* style for popup login */

/* Style the modal overlay to cover the entire screen and make it hidden by default */
.modal-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
      display: none; /* Hide the modal by default */
      z-index: 9999; /* Adjust the z-index value as needed */
    }

    /* Center the modal content and give it a background */
    .modal-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 40%; /* Set the width of the modal as needed */
      max-width: 600px; /* Set a max-width if desired */
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      height: 600px;

    }
  /* ... Your existing CSS styles ... */

  /* Style the close button */
  .close-modal {
    position: absolute;
    bottom: 10px;
    right: 10px;
    width: 34px;
    height: 34px;
    cursor: pointer;
    background-color: red;
    border-radius: 50%; /* Make it a circle */
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 555px;
margin-left: 258px;
  }

  /* Style the white cross icon inside the red circle */
  .close-modal::before,
  .close-modal::after {
    content: '';
    position: absolute;
    height: 20px;
    width: 2px;
    background-color: white;
  }

  .close-modal::before {
    transform: rotate(45deg);
  }

  .close-modal::after {
    transform: rotate(-45deg);
  }

/* <!-- close --> */

    /* Show the modal when it's active */
    .modal-overlay.active {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* Adjust the height of the iframe to fit the content */
    .modal-iframe {
      width: 100%;
      height: 100%;
      border: none;
    }


  </style>



<script>
// Function to open the login popup
function openLoginPopup() {
  var modal = document.querySelector('.modal-overlay');
  modal.classList.add('active');
}

// Function to close the login popup
function closeLoginPopup() {
  var modal = document.querySelector('.modal-overlay');
  modal.classList.remove('active');
}

document.addEventListener('DOMContentLoaded', function() {
  var loginButton = document.querySelector('.jss2');
  loginButton.addEventListener('click', function() {
    openLoginPopup();
  });
});
</script>


<?php
function isActivePage($page) {
  // Get the current page URL
  $currentPage = $_SERVER['PHP_SELF'];

  // Compare the current page URL with the given page URL
  if (strpos($currentPage, $page) !== false) {
    return true;
  } else {
    return false;
  }
}

?>







</body>
</html>