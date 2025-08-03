<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add New Item</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body, html {
      height: 100%;
      font-family: Arial, sans-serif;
    }

    
    .blur-background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('avboutrus.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      filter: blur(35px);
      z-index: -1;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 0;
      flex-direction: column;
      position: relative;
      z-index: 1;
    }

    h2 {
      color: rgb(13, 22, 199);
      text-align: center;
      font-size: 50px;
      margin-bottom: 20px;
    }

    h3 {
      color: red;
      text-align: center;
      font-size: 40px;
      margin-top: 40px;
    }

    form {
      background: rgba(143, 148, 251, 0.95); /* slightly transparent */
      padding: 20px;
      border: 1px solid #ddd;
      max-width: 500px;
      width: 100%;
      border-radius: 8px;
    }

    label {
      display: block;
      margin-top: 20px;
      font-weight: bold;
    }

    input, select {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      margin-top: 15px;
      padding: 10px 20px;
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #218838;
    }

    .message {
      margin-top: 10px;
      padding: 10px;
      border-radius: 4px;
      max-width: 500px;
    }

    .success {
      background-color: #d4edda;
      color:rgb(17, 230, 67);
    }

    .error {
      background-color: #f8d7da;
      color: #721c24;
    }

    .items {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      margin-top: 50px;
      position: relative;
      z-index: 1;
    }

    .item {
      background: #fff;
      border: 3px solid #ccc;
      padding: 15px;
      width: 180px;
      text-align: center;
      border-radius: 10px;
    }

    .item img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      margin-bottom: 10px;
    }

    .item a {
      display: inline-block;
      margin-top: 10px;
      color: red;
      text-decoration: none;
    }

    .item a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<!-- Blurred background -->
<div class="blur-background"></div>

<div class="container">
  <h2>Add New Item</h2>

  <form action="Aadd.php" method="post" enctype="multipart/form-data">
    <label for="itemName">Item Name:</label>
    <input type="text" name="itemName" id="itemName" required>

    <label for="category">Category:</label>
    <select name="category" id="category" required>
      <option value="">-- Select Category --</option>
      <option value="bed">Bed</option>
      <option value="chair">Chair</option>
      <option value="sofa">Sofa</option>
      <option value="dining">Dining</option>
      <option value="woodart">Woodart</option>
    </select>

    <label for="price">Price:</label>
    <input type="number" name="price" id="price" step="0.01" required>

    <label for="image">Image:</label>
    <input type="file" name="image" id="image" accept="image/*" required>

    <button type="submit" name="submit">Add Item</button>
  </form>

  <?php
  if (isset($_POST['submit'])) {
      $name = $_POST['itemName'];
      $category = $_POST['category'];
      $price = floatval($_POST['price']);
      $imageName = basename($_FILES['image']['name']);
      $imageTmp = $_FILES['image']['tmp_name'];
      $uploadDir = "uploads/";
      $uploadPath = $uploadDir . $imageName;

      if (!is_dir($uploadDir)) {
          mkdir($uploadDir, 0777, true);
      }

      if (move_uploaded_file($imageTmp, $uploadPath)) {
          $stmt = $conn->prepare("INSERT INTO items (name, category, price, image_URL) VALUES (?, ?, ?, ?)");
          if ($stmt) {
              $stmt->bind_param("ssds", $name, $category, $price, $uploadPath);
              if ($stmt->execute()) {
                  echo "<div class='message success'>Item added successfully.</div>";
              } else {
                  echo "<div class='message error'>Execution failed: " . $stmt->error . "</div>";
              }
              $stmt->close();
          } else {
              echo "<div class='message error'>Prepare failed: " . $conn->error . "</div>";
          }
      } else {
          echo "<div class='message error'>Image upload failed.</div>";
      }
  }
  ?>
</div>

<h3>All Items</h3>
<div class="items">
  <?php
  $result = $conn->query("SELECT * FROM items ORDER BY id DESC");
  if ($result && $result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          echo "<div class='item'>";
          echo "<img src='" . htmlspecialchars($row['image_URL']) . "' alt='" . htmlspecialchars($row['name']) . "'>";
          echo "<p><strong>" . htmlspecialchars($row['name']) . "</strong></p>";
          echo "<p>Category: " . htmlspecialchars($row['category']) . "</p>";
          echo "<p>Price: RS." . htmlspecialchars($row['price']) . "</p>";
          echo "<a href='delete_item.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure you want to delete this item?\")'>Delete</a>";
          echo "</div>";
      }
  } else {
      echo "<p style='text-align:center;'>No items found.</p>";
  }
  ?>
</div>

</body>
</html>
