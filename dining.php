<?php
include 'db.php';

$category = 'dining';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php echo ucfirst($category); ?>s</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #deb887;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 900px;
      margin: 0 auto;
      padding: 20px;
      text-align: center;
    }
    h2{
      color: blue;
      font-size:45px;
    }
     h3 {
      color: green;
      font-size:30px
    }
    .item, .detail {
      background: #fff;
      padding: 20px;
      margin: 20px auto;
      border-radius: 8px;
      box-shadow: 0 2px 20px #5e3b1a ;
      max-width: 500px;
      text-align: center;
    }
    img {
      max-width: 100%;
      height: auto;
      border-radius: 6px;
      margin-top: 10px;
      border: 1px solid #ccc;
    }
    a.button {
      display: inline-block;
      padding: 10px 18px;
      margin: 10px 5px 0 5px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
    
    }
    a.button:hover {
      background-color: #0056b3;
    }
    .back-link {
      display: block;
      margin-top: 20px;
      color: #333;
      text-decoration: none;
      font-weight: bold;
    }
    .back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="container">
<?php
if (isset($_GET['id'])) {
  $id = intval($_GET['id']);
  $sql = "SELECT * FROM items WHERE id = $id AND category = '$category'";
  $result = $conn->query($sql);

  if ($result && $result->num_rows === 1) {
    $item = $result->fetch_assoc();
    echo "<div class='detail'>";
    echo "<h2>" . htmlspecialchars($item['name']) . "</h2>";
    echo "<img src='" . htmlspecialchars($item['image_URL']) . "' alt='" . htmlspecialchars($item['name']) . "'>";
    echo "<p><strong>Category:</strong> " . htmlspecialchars($item['category']) . "</p>";
    echo "<p><strong>Price:</strong> RS." . htmlspecialchars($item['price']) . "</p>";
    echo "<p><strong>Description:</strong> Sample size info here.</p>";
    echo "<a class='button' href='order.php?id=" . $item['id'] . "'>Order Now</a>";
    echo "<a class='back-link' href='{$category}.php'>&larr; Back to " . ucfirst($category) . "s</a>";
    echo "</div>";
  } else {
    echo "<p>Item not found.</p>";
    echo "<a class='back-link' href='{$category}.php'>&larr; Back to " . ucfirst($category) . "s</a>";
  }
} else {
  echo "<h2>Available " . ucfirst($category) . "s</h2>";
  $sql = "SELECT * FROM items WHERE category = '$category' ORDER BY id DESC";
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    while ($item = $result->fetch_assoc()) {
      echo "<div class='item'>";
      echo "<h3>" . htmlspecialchars($item['name']) . "</h3>";
      echo "<img src='" . htmlspecialchars($item['image_URL']) . "' alt='" . htmlspecialchars($item['name']) . "'>";
      echo "<p>Price: RS." . htmlspecialchars($item['price']) . "</p>";
      echo "<a class='button' href='{$category}.php?id=" . $item['id'] . "'>View Details</a>";
      echo "<a class='button' href='order.php?id=" . $item['id'] . "'>Order</a>";
      echo "</div>";
    }
  } else {
    echo "<p>No " . htmlspecialchars($category) . " items found.</p>";
  }
}
?>
</div>

</body>
</html>
