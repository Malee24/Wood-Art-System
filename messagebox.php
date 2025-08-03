<?php

$successMessage = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $conn = new mysqli("localhost", "root", "", "woodart_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $name = $conn->real_escape_string(trim($_POST['name']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $message = $conn->real_escape_string(trim($_POST['message']));

   
    if (empty($name) || empty($email) || empty($message)) {
        $errorMessage = "Please fill in all fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "Please enter a valid email address.";
    } else {
       
        $sql = "INSERT INTO chat_messages (name, email, message) VALUES ('$name', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            $successMessage = "Thank you! Your message has been received. Our agents will contact you soon.";
        } else {
            $errorMessage = "Error: " . $conn->error;
        }
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Wood Art Chat</title>
  <link rel="stylesheet" href="messagebox.css">
  <style>
    
    .message {
      margin: 15px 0;
      padding: 10px;
      border-radius: 5px;
    }
    .success {
      background-color: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
    }
    .error {
      background-color: #f8d7da;
      color: #721c24;
      border: 1px solid #f5c6cb;
    }
  </style>
</head>
<body>
  
  <div class="chat-header">
    <img src="wood art.jpg" alt="Logo" class="logo">
    <div class="title">Wood Art</div>
  </div>

  <div class="chat-box">
    <p>Welcome! Please leave information before connecting with our agents.</p>

    <?php if ($successMessage): ?>
      <div class="message success"><?= htmlspecialchars($successMessage) ?></div>
    <?php elseif ($errorMessage): ?>
      <div class="message error"><?= htmlspecialchars($errorMessage) ?></div>
    <?php endif; ?>

    <form action="" method="post">
      <label for="name">Name:</label><br>
      <input type="text" id="name" name="name" value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '' ?>"><br><br>

      <label for="email">Email:</label><br>
      <input type="text" id="email" name="email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>"><br><br>

      <label for="message">Message:</label><br>
      <textarea id="message" name="message" rows="4" cols="40"><?= isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '' ?></textarea><br><br>

      <button class="chatbtn" type="submit">Start the chat</button>
    </form>
  </div>
</body>
</html>