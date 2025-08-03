<?php
$successMessage = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $conn = new mysqli("localhost", "root", "", "woodart_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      margin: 0;
      padding: 2rem;
      background-color: #f4f4f4;
    }

    .contact-container {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: center;
      align-items: flex-start;
      max-width: 1200px;
      margin: auto;
    }

    .left-side, .right-side {
      background: #fff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      flex: 1 1 450px;
    }

    .contact-info {
      margin-top: 1rem;
    }

    .contact-item {
      margin-bottom: 1rem;
      font-size: 1.1rem;
    }

    .contact-item a {
      text-decoration: none;
      color: #007acc;
      margin-left: 0.5rem;
    }

    .contact-item a:hover {
      text-decoration: underline;
    }

    iframe {
      width: 100%;
      height: 400px;
      border: none;
      border-radius: 10px;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<div class="contact-container">
  <div class="left-side">
    <h2>Contact Us</h2>
    <div class="contact-info">

      <div class="contact-item">
        <i class="fas fa-phone"></i>
        <a href="https://wa.me/94764857610" target="_blank">+94 076 485 7610 (WhatsApp)</a>
      </div>

      <div class="contact-item">
        <i class="fas fa-envelope"></i>
        <a href="mailto:maleeshaviwanjali@gmail.com">maleeshaviwanjali@gmail.com</a>
      </div>

      <div class="contact-item">
        <i class="fas fa-map-marker-alt"></i>
        <a href="https://www.google.com/maps/search/?api=1&query=Mudiyannegama,+Kudakathnoruwa,+Meegalewa" target="_blank">
          Mudiyannegama, Kudakathnoruwa, Meegalewa
        </a>
      </div>

    </div>
  </div>

  <div class="right-side">
    <h3>Location</h3>
    <iframe 
      src="https://www.google.com/maps/embed?pb=!4v1748571040872!6m8!1m7!1smBObufesZw--raYXBs3_MQ!2m2!1d7.970630886509839!2d80.39112868314801!3f242.2287714764744!4f1.5076318200493262!5f0.4000000000000002"
      allowfullscreen
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>

</body>
</html>
