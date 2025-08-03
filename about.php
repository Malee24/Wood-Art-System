<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #deb887;
      color: white;
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .nav-buttons {
      display: flex;
      gap: 15px;
    }

    .nav-buttons a {
      background-color: #8B4513;
      color: white;
      padding: 8px 15px;
      text-decoration: none;
      border-radius: 4px;
    }

    .about-section {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      padding: 30px;
    }

    .image-box img {
      width: 500px;
      border: 2px solid #ccc;
      margin-right: 40px;
    }

    .text-box {
      max-width: 500px;
    }

    .text-box p {
      font-size: 16px;
      line-height: 1.6;
   }

 footer{
    background-color: #f4f4f4;
      padding: 20px;
      text-align: center;
      border-top: 1px solid #ccc;
    }

    footer a {
      color: #000;
      text-decoration: none;
    }

    footer i {
      margin-right: 8px;
      color: #8B4513;
    }
  </style>
</head>
<body>

  <header>
    <h1>Wood Art</h1>
    <div class="nav-buttons">
      <a href="home.php">Home</a>
      <a href="galary.php">Gallery</a>
      <a href="contact.php">Contact</a>
    </div>
  </header>

  <div class="about-section">
    <div class="image-box">
      <img src="avboutrus.jpg" alt="About Us">
    </div>
    <div class="text-box">
      <p>Welcome to Wood Art! where craftsmanship meets creativity. We specialize in handcrafted wooden pieces that bring warmth, elegance, and functionality to your living space. From intricately designed wood art to beautifully built beds, chairs, dining tables, and sofas, every item is made with precision, passion, and a deep respect for natural materials. Whether you're looking to elevate your home’s aesthetics or invest in timeless furniture, our collection offers the perfect blend of style and durability. Experience the beauty of wood reimagined.</p>
    </div>
  </div>

  <footer>
    <h3>Customer Care</h3>
    <p><i class="fas fa-phone"></i><a href="tel:+94764857610">+94 764857610</a></p>
    <p><i class="fas fa-envelope"></i><a href="maleeshaviwanjali@gmail.com">maleeshaviwanjali@gmail.com</a></p>
  </footer>

</body>
</html>
