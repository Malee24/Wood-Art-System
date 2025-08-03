<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Wood Art Gallery (Admin)</title>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: Arial, sans-serif;
    }

    .background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('avboutrus.jpg') no-repeat center center / cover;
      filter: blur(8px);
      z-index: -1;
    }

    h2 {
      text-align: center;
      padding: 20px 0;
      color: rgb(13, 22, 199);
      margin: 0;
      
    }

    form {
      background: rgba(143, 148, 251, 0.8) ;
      padding: 20px;
      margin: 30px auto;
      width: 300px;
      border-radius: 8px;
      box-shadow: 0 2px 30px rgb(13, 22, 199);
      text-align: center;
      position: relative;
      z-index: 1;
    }

    input[type="file"] {
      padding: 10px;
      width: 100%;
      margin-bottom: 15px;
    }

    button {
      padding: 10px 20px;
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .gallery {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      padding: 20px;
      position: relative;
      z-index: 1;
    }

    .gallery-item {
      background: rgba(255, 255, 255, 0.9);
      padding: 10px;
      border-radius: 6px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.2);
      text-align: center;
    }

    .gallery-item img {
      width: 220px;
      height: 180px;
      object-fit: cover;
      border-radius: 4px;
    }

    .delete-link {
      color: red;
      display: inline-block;
      margin-top: 10px;
      text-decoration: none;
      font-weight: bold;
    }

    .delete-link:hover {
      text-decoration: underline;
    }

    .message {
      text-align: center;
      font-weight: bold;
      margin-top: 15px;
    }
  </style>
</head>
<body>

<div class="background"></div>

<h2>Wood Art Gallery</h2>


<form action="Agalary.php" method="post" enctype="multipart/form-data">
  <label for="image" style="display: block; margin-bottom: 10px; font-weight: bold;">Upload New Photo</label>
  <input type="file" name="image" id="image" accept="image/*" required>
  <button type="submit" name="submit">Upload</button>
</form>

<?php
$uploadDir = "gallery_uploads/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}


if (isset($_POST['submit']) && isset($_FILES['image'])) {
    $imageName = basename($_FILES['image']['name']);
    $imageTmp = $_FILES['image']['tmp_name'];
    $uploadPath = $uploadDir . $imageName;

    if (move_uploaded_file($imageTmp, $uploadPath)) {
        $stmt = $conn->prepare("INSERT INTO gallery (image_path) VALUES (?)");
        $stmt->bind_param("s", $uploadPath);
        $stmt->execute();
        $stmt->close();
        echo "<p class='message' style='color:green;'>Image uploaded successfully! <a href='galary.php'>View Gallery</a></p>";
    } else {
        echo "<p class='message' style='color:red;'>Image upload failed.</p>";
    }
}


if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $result = $conn->query("SELECT image_path FROM gallery WHERE id = $id");
    if ($result && $row = $result->fetch_assoc()) {
        if (file_exists($row['image_path'])) {
            unlink($row['image_path']);
        }
        $conn->query("DELETE FROM gallery WHERE id = $id");
        echo "<p class='message' style='color:red;'>Image deleted.</p>";
    }
}
?>


<div class="gallery">
<?php
$result = $conn->query("SELECT * FROM gallery ORDER BY id DESC");
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='gallery-item'>";
        echo "<img src='" . htmlspecialchars($row['image_path']) . "' alt='Gallery Image'>";
        echo "<br><a href='Agalary.php?delete=" . $row['id'] . "' onclick='return confirm(\"Are you sure?\")' class='delete-link'>Delete</a>";
        echo "</div>";
    }
} else {
    echo "<p class='message'>No images found.</p>";
}
?>
</div>

</body>
</html>
