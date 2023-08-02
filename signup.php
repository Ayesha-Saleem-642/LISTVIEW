<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Page</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body>
  <div class="container">
    <h1>Signup</h1>
    <form id="signup-form">
      <input type="text" id="new-username" placeholder="New Username" required>
      <input type="password" id="new-password" placeholder="New Password" required>
      <button type="submit">Signup</button>
    </form>
    <p class="login-link" onclick="openLoginPage()">Back to Login</p>
  </div>

  <script src="script.js"></script>
</body>
</html>
