<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="css/regForm.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <script  src="particles.js" defer></script>
    <script  src="app.js" defer></script>
    <link rel="stylesheet" href="path/to/sweetalert.css">
    <script src="path/to/sweetalert.min.js"></script>
</head>
<body>
  <div id="particles-js"></div>
    <div class="container">
        <form action="connect.php" method ="post" class="regForm">
            <h1 class="title">Please Register your Account</h1>
            <div class="email">
                <label for="email">Email Address:</label>
                <input type="email" name="email" id="email1" placeholder="example@gmail.com" required>
            </div>
            <div class="password">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
           </div>
           <div class="confirmPassword">
                <label for="confirmPass">Confirm Password:</label>
                <input type="password" name="confirmPass" id="confirmPass" required>
           </div>
                <button type="submit"class="signUp" target="_blank">Sign Up</button>
        </form>
    </div>
</body>
</html>
