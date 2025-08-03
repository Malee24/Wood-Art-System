<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register | WoodArt</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      height: 100vh;
      background: linear-gradient(135deg, #f1e8dc, #e4d3bd);
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      overflow: hidden;
    }

    body::before,
    body::after {
      content: '';
      position: absolute;
      width: 250px;
      height: 250px;
      border-radius: 50%;
      background: rgba(165, 123, 78, 0.15);
      filter: blur(80px);
      z-index: 0;
    }

    body::before {
      top: -80px;
      left: -80px;
    }

    body::after {
      bottom: -80px;
      right: -80px;
    }

    .register-box {
      position: relative;
      z-index: 1;
      background: #fdfaf5;
      padding: 2.5rem;
      border-radius: 20px;
      width: 420px;
      box-shadow:
        8px 8px 20px rgba(145, 100, 52, 0.2),
        -8px -8px 20px #ffffff;
      transition: all 0.3s ease-in-out;
      border: 1px solid #d8c3a5;
    }

    .register-box:hover {
      transform: translateY(-5px);
      box-shadow:
        10px 10px 25px rgba(145, 100, 52, 0.3),
        -10px -10px 25px #fff;
    }

    .register-box h2 {
      text-align: center;
      color: #5e3a1a;
      font-size: 2rem;
      margin-bottom: 2rem;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 1rem;
      margin-bottom: 1.2rem;
      border: none;
      border-radius: 12px;
      background: #f3ece4;
      color: #4e342e;
      font-size: 1rem;
      box-shadow: inset 4px 4px 10px #e0d2c2, inset -4px -4px 10px #ffffff;
      transition: background 0.3s ease, box-shadow 0.3s ease;
    }

    input:focus {
      background: #e6d7c3;
      outline: none;
      box-shadow: inset 2px 2px 6px #c9b299, inset -2px -2px 6px #fff;
    }

    .register-btn {
      width: 100%;
      padding: 1rem;
      border: none;
      border-radius: 20px;
      background: linear-gradient(135deg, #8b5e3c, #a8744f);
      color: white;
      font-weight: 600;
      font-size: 1.1rem;
      cursor: pointer;
      box-shadow: 0 8px 20px rgba(139, 94, 60, 0.4);
      transition: background 0.3s ease, box-shadow 0.3s ease;
    }

    .register-btn:hover {
      background: linear-gradient(135deg, #6b4024, #976843);
      box-shadow: 0 10px 25px rgba(107, 64, 36, 0.6);
    }

    .extra {
      text-align: center;
      margin-top: 1.2rem;
      font-size: 0.95rem;
      color: #5e3a1a;
    }

    .extra a {
      color: #8b5e3c;
      font-weight: 600;
      text-decoration: none;
      border-bottom: 1px solid transparent;
      transition: border-bottom 0.3s ease;
    }

    .extra a:hover {
      border-bottom: 1px solid #8b5e3c;
    }
  </style>
</head>
<body>

  <div class="register-box">
    <h2>Create WoodArt Account</h2>
    <form action="" method="POST">
      <input type="text" name="fullname" placeholder="Full Name" required />
      <input type="email" name="email" placeholder="Email Address" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit" class="register-btn" name="register">Register</button>
    </form>
    <div class="extra">
      <p>Already have an account? <a href="loging.php">Login here</a></p>
    </div>
  </div>

  <?php
  if (isset($_POST['register'])) {
    $conn = new mysqli("localhost", "root", "", "woodart_db");

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $fullname = $conn->real_escape_string($_POST['fullname']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  
    $checkQuery = "SELECT * FROM users WHERE email='$email'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {
      echo "<script>alert('Email already registered. Please use a different one.');</script>";
    } else {
      $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$password')";
      if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful!'); window.location='loging.php';</script>";
      } else {
        echo "<script>alert('Something went wrong: " . $conn->error . "');</script>";
      }
    }

    $conn->close();
  }
  ?>

</body>
</html>
