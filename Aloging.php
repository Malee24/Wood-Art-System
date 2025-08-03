<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "woodart_db";


$conn = new mysqli($host, $user, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$error_message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    header("Location: admin_home.php");
    exit();
  } else {
    $error_message = "Invalid username or password.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      background: linear-gradient( #4e54c8, #8f94fb, rgb(237, 238, 244));
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .login-container {
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px #1c5980;
      width: 320px;
      text-align: center;
    }
    .input-container {
      position: relative;
      margin-bottom: 15px;
    }
    .input-container i {
      position: absolute;
      left: 10px;
      top: 50%;
      transform: translateY(-50%);
      color: #555;
    }
    .input-container input {
      width: 100%;
      padding: 10px 10px 10px 35px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    button {
      width: 100%;
      background-color: #2980b9;
      color: white;
      padding: 10px;
      border: none;
      font-size: 16px;
      border-radius: 5px;
    }
    button:hover {
      background-color: #1c5980;
    }
    .error {
      color: red;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Admin Login</h2>
    <form method="post" action="">
      <div class="input-container">
        <i class="fas fa-user"></i>
        <input type="text" id="username" name="username" placeholder="Username" required>
      </div>

      <div class="input-container">
        <i class="fas fa-lock"></i>
        <input type="password" id="password" name="password" placeholder="Password" required>
      </div>

      <button type="submit" name="login">Login</button>
    </form>

    <?php if (!empty($error_message)): ?>
      <div class="error"><?php echo $error_message; ?></div>
    <?php endif; ?>
  </div>
</body>
</html>
