<?php
include 'db.php';


$item = null;
if (isset($_GET['id'])) {
  $id = intval($_GET['id']);
  $res = $conn->query("SELECT * FROM items WHERE id = $id");
  if ($res && $res->num_rows) $item = $res->fetch_assoc();
  else { echo "<h3 style=\"color:red;\">Item not found.</h3>"; exit(); }
} else { echo "<h3 style=\"color:red;\">No item selected.</h3>"; exit(); }


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = $conn->prepare("INSERT INTO orders (item_id, customer_name, quantity, status) VALUES (?, ?, ?, 'Pending')");
  $stmt->bind_param("isi", $_POST['item_id'], $_POST['customer_name'], $_POST['quantity']);
  if ($stmt->execute()) {
    header("Location: order_status.php?id=" . $conn->insert_id);
    exit();
  } else {
    echo "<div style=\"color:red;\">Error: {$conn->error}</div>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Place Order</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: url('bp3.avif') no-repeat center center fixed;
      background-size: cover;
    }
    .order-container {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background: rgba(255, 255, 255, 0.95);
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }
    h2 {
      margin-top: 0;
      color: green;
      text-align: center;
    }
    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    input[type="text"], input[type="number"] {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }
    button {
      padding: 12px;
      background: #28a745;
      color: #fff;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    button:hover {
      background: #218838;
    }
  </style>
</head>
<body>

  <div class="order-container">
    <h2>Order: <?php echo htmlspecialchars($item['name']); ?></h2>
    <form method="POST">
      <input type="hidden" name="item_id" value="<?php echo $item['id']; ?>">
      <input type="text" name="customer_name" placeholder="Your Name" required>
      <input type="number" name="quantity" placeholder="Quantity" min="1" required>
      <button type="submit">Confirm Order</button>
    </form>
  </div>

</body>
</html>
