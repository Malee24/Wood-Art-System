<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Logout</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(120deg, #2980b9, #6dd5fa, #ffffff);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
    }
    .container {
      background: #fff;
      padding: 40px 50px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      text-align: center;
    }
    .container h1 {
      color: #333;
      margin-bottom: 15px;
    }
    .container p {
      color: #666;
      margin-bottom: 25px;
    }
    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #2980b9;
      color: #fff;
      border: none;
      border-radius: 5px;
      text-decoration: none;
      transition: background 0.3s ease;
    }
    .btn:hover {
      background-color: #1c5980;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Logout Successful</h1>
    <p>You have been logged out of the admin panel.</p>
    <a href="Aloging.php" class="btn">Login Again</a>
  </div>
</body>
</html>
