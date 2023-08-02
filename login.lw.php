<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Login & Signup Form</title>
  <link rel="shortcut icon" href="http://127.0.0.1:5500/assets/ico/favicon.ico">
  <link rel="stylesheet" href="./Login & Signup Form_files/all.min.css">
  <link rel="stylesheet" href="./Login & Signup Form_files/loginform.css">
  <style>
    body {
      background-image: url('login-bg.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-color: #095f15;
    }
  </style>
</head>
<body>
  <!-- Login form -->
  <div id="login-form" class="form-container login-container ">
    <div class="form-header">Listview login</div>

    <!-- username -->
    <form action="http://127.0.0.1:5500/login" method="post">
      <div class="username">Username*</div>
      <input type="text" class="form-input" placeholder="   Enter your username" required="">

      <!-- password -->
      <div class="username">Password*</div>
      <input type="password" class="form-input" placeholder="   Enter your password" required="">

      <!-- login button -->
      <input type="submit" class="form-submit" value="Login">
    </form>

    <!-- forget password -->
    <div class="forgetpassword">Forget Password?</div>

    <!-- Link to open Forgot Password form -->
    <a href="#forgot-form" class="form-link">Restore password</a>

    <div class="forgetpassword">Not registered?</div>

    <!-- Link to open signup form -->
    <a href="#signup-form" class="form-link">Signup</a>
  </div>

  <!-- Signup form -->
  <div id="signup-form" class="form-container signup-container hidden">
    <div class="form-header">Listview Signup</div>
    <form action="http://127.0.0.1:5500/signup" method="post">
      <input type="text" class="form-input" placeholder="Full Name" required="">
      <input type="email" class="form-input" placeholder="Email" required="">
      <input type="text" class="form-input" placeholder="Username" required="">
      <input type="password" class="form-input" placeholder="Password" required="">
      <input type="password" class="form-input" placeholder="Confirm Password" required="">

      <!-- signup button -->
      <input type="submit" class="form-submit" value="Signup">
    </form>

    <!-- Link to open Login form -->
    <a href="#login-form" class="form-link">Login</a>
  </div>

  <!-- Forgot Password form -->
  <div id="forgot-form" class="form-container forgot-container hidden">
    <div class="form-header">Forgot Password</div>
    <form action="http://127.0.0.1:5500/forgot" method="post">
      <input type="email" class="form-input" placeholder="   Enter your e-mail" required="">

     
    </form>
 <!-- reset password button -->
 <input type="submit" class="form-submit" value="Reset Password">

    <!-- Link to open Login form -->
    <a href="#login-form" class="form-link">Login</a>

    <!-- Link to open Signup form -->
    <a href="#signup-form" class="form-link">Signup</a>
  </div>

  <script>
    // Handling form navigation using anchor tags
    var formLinks = document.getElementsByClassName("form-link");
    for (var i = 0; i < formLinks.length; i++) {
      formLinks[i].addEventListener("click", function(e) {
        e.preventDefault();
        var targetFormId = this.getAttribute("href").substring(1);
        var targetForm = document.getElementById(targetFormId);
        if (targetForm) {
          targetForm.classList.remove("hidden");
          var otherForms = document.getElementsByClassName("form-container");
          for (var j = 0; j < otherForms.length; j++) {
            if (otherForms[j].id !== targetFormId) {
              otherForms[j].classList.add("hidden");
            }
          }
        }
      });
    }
  </script>

 

  <style>

.logo-container {
    text-align: 30px;
    margin-bottom: px;
    height: 560px ;
    
   
  }
  
  
  .logo-container img {
    max-width: 100px;
    height: auto;
   
  }
  
  
  
  body {
    ;
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
     
      
    }
    .login-container{
      max-width: 400px;
  
  background-color: #fff;
  border: 1px solid #d8dce000;
  padding: 10px;
  align-items: center;
}

   
  
   
  
    
    
    
    .form-header {
      font-size: 30px;
  
  font-weight: bold;
  margin-bottom: 50px;
  color: #7d7c7c;
  padding-left: 92px;
}

  .username{
    font-size: 15px;
    padding: 4px;
    font-weight: bold;
      margin-bottom: 10px;
      color: #878888;
  
  }
    
    .form-input {
      width: 80%;
      padding: 20px;
      
      margin-bottom: 10px;
      border: 1px solid #dddddd;
    }
    
    .form-submit {
      
      
      background-color: #6a6a6a;
color: white;
     
      margin-left: 25px;
      border: none;
      padding: 10px 140px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      margin-top: 10px;
      cursor: pointer;
      
      
    }
    
    .form-link {
  font-size: 14px;
  color: #495749;
  
  display: block;
  text-align: center;
  margin-left: 100px;
  padding: unset;
  margin-top: -45px;
}
    
    .form-container.hidden {
      display: none;
    }
    
  
    .text{
      margin-bottom: 500px;
      margin-left: 300px;
    }
  
    .forgetpassword{
        margin-block: auto;

padding: 27px;
      color: #6f776f;
    }
  
  
  
    .footer {
      background-color: #095f15;
  padding: 20px;
  text-align: center;
  margin-top: 780PX;
    }
    
    .footer-line {
      border-top: 1px solid #dddddd;
      margin-top: 10px;
      margin-bottom: 5px;
    }
    
    .footer-icons {
      display: flex;
      justify-content: center;
    }
    
    .footer-icons a {
      margin: 0 10px;
    }
    
    .footer-icons img {
      width: 30px;
      height: 30px;
    }
    .copyright{
      color: #fff;
    }
    .username-block {
      display: flex;
      align-items: center;
    }
    
    .username-block i {
      margin-right: 5px; /* Adjust the spacing between the icon and the username */
    }
    
    .username-block .username {
      font-weight: bold;
    }
    
  
    .form-input::placeholder {
      font-family: 'Font Awesome 5 Free';
      font-weight: 900;
      content: "\f007";
    }
    
    .password-input::placeholder {
      font-family: 'Font Awesome 5 Free';
      font-weight: 900;
      content: "\f023";
    }
    
  /*  */

  /* Styles for the Signup form */
.signup-container {
    padding: 10px;
  max-width: 400px;
  background-color: #fff;
  border: 1px solid #d8dce000;
}

/* Styles for the Signup form header */
.signup-container .form-header {
  font-size: 30px;
  font-weight: bold;
  margin-bottom: 50px;
  color: #8c938d;
  padding-LEFT: 75px;
  margin-top: 0px;
  padding-top: 30px;
}

/* Styles for the Signup form input fields */
.signup-container .form-input {
  width: 80%;
  padding: 20px;
  margin-bottom: 10px;
  border: 1px solid #dddddd;
}

/* Styles for the Signup form submit button */
.signup-container .form-submit {
  background-color: #4f574f;
  color: #fff;
  margin-left: 25px;
  border: none;
  padding: 10px 140px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin-top: 10px;
  cursor: pointer;
}
/* Styles for the Signup form link */
.signup-container .form-link {
  color: #626366;
  text-decoration: none;
  margin-top: 20px;
  margin-right: 125px;
  font-weight: bolder;
  font-size: 15px;
}

/* Styles for the Forgot Password form */
.forgot-container {
  background-color: #fff;
  border: 1px solid #ddd;
  padding: 10px;
  width: 400px;
  height: 300px;
}

/* Styles for the Forgot Password form header */
.forgot-container .form-header {
  color: #868381;
  font-size: 24px;
  margin-top: 20px;
}

/* Styles for the Forgot Password form input fields */
.forgot-container .form-input {
  width: 80%;
 
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

/* Styles for the Forgot Password form submit button */
.forgot-container .form-submit {
  background-color: #797675;
  color: #fff;
  border: none;
  padding: 8px 90px;
  font-size: 16px;
  cursor: pointer;
  margin-left: 45px;
}


/* Styles for the Forgot Password form link */
.forgot-container .form-link {
  color: #201d1c;
  text-decoration: none;
  margin-top: 10px;
  margin-right: 105px;
  font-size: 15px;
}

    
  </style>
</body>
</html>
