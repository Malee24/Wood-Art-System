<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login | WoodArt</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #f3e9dd, #e9dbc7);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 1rem;
    }

    .login-box {
      background: #fffdfb;
      padding: 3rem 2.5rem;
      border-radius: 20px;
      box-shadow: 0 15px 30px rgba(123, 84, 54, 0.2);
      width: 100%;
      max-width: 400px;
      animation: fadeIn 0.5s ease-in-out;
      border: 1px solid #d8c4b2;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .login-box h2 {
      text-align: center;
      margin-bottom: 2rem;
      font-size: 1.8rem;
      color: #5e3a1a;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 1rem;
      margin-bottom: 1.2rem;
      border: 1px solid #c8b6a0;
      border-radius: 12px;
      font-size: 1rem;
      background: #fffaf5;
      transition: 0.3s;
    }

    input:focus {
      outline: none;
      border-color: #a3754d;
      box-shadow: 0 0 5px rgba(163, 117, 77, 0.2);
    }

    .login-btn {
      width: 100%;
      padding: 1rem;
      background: linear-gradient(to right, #7b4f2c, #a6714b);
      color: white;
      font-size: 1rem;
      font-weight: 600;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      transition: 0.3s ease-in-out;
    }

    .login-btn:hover {
      background: linear-gradient(to right, #5e3a1a, #8b5e3c);
    }

    .extra {
      text-align: center;
      margin-top: 1rem;
      font-size: 0.95rem;
      color: #5e3a1a;
    }

    .extra a {
      color: #a6714b;
      text-decoration: none;
      font-weight: 500;
    }

    .extra a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Welcome to WoodArt</h2>
    <form method="POST" action="">
      <input type="text" name="email" placeholder="Email Address" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit" class="login-btn" name="login">Login</button>
    </form>
    <div class="extra">
      <p>Don’t have an account? <a href="register.php">Register here</a></p>
    </div>
  </div>

<?php
if (isset($_POST['login'])) {
  $conn = new mysqli("localhost", "root", "", "woodart_db");

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $email = $conn->real_escape_string($_POST['email']);
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = $conn->query($sql);

  if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
      session_start();
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['role'] = $user['role'];
      $_SESSION['fullname'] = $user['fullname'];

      echo "<script>alert('Login Successful'); window.location.href = 'iteam.php';</script>";
    } else {
      echo "<script>alert('Incorrect Password');</script>";
    }
  } else {
    echo "<script>alert('User not found');</script>";
  }

  $conn->close();
}
?>
</body>
</html>
