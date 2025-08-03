<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Wood Art Gallery</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      animation: bgChange 15s infinite;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      min-height: 100vh;
    }

    h2 {
      text-align: center;
      padding: 20px 0;
      background-color: #deb887 ;
      color:  #5e3b1a;
      text-shadow: 0 5px 0px  #deb887 ;
      margin:0;
    }

    .gallery-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      padding: 25px;
    }

    .gallery-item {
      background: white;
      padding: 10px;
      border-radius: 6px;
      box-shadow: 0 50px 8px rgba(0,0,0,0.3);
      text-align: center;
    }

    .gallery-item img {
      width: 220px;
      height: 180px;
      object-fit: cover;
      border-radius: 4px;
    }

    footer {
      text-align: center;
      padding: 10px;
      background: #5e3b1a ;
      color: white;
      position: fixed;
      width: 100%;
      bottom: 0;
    }
  </style>
</head>
<body>

<h2>Welcome to the Wood Art Gallery</h2>

<div class="gallery-container">
<?php
$result = $conn->query("SELECT * FROM gallery ORDER BY id DESC");
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='gallery-item'>";
        echo "<img src='" . htmlspecialchars($row['image_path']) . "' alt='Gallery Image'>";
        echo "</div>";
    }
} else {
    echo "<p style='color:white;'>No images found.</p>";
}
?>
</div>

<footer>© 2025 Wood Art Gallery</footer>

</body>
</html>
