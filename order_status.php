<?php
include 'db.php';
session_start(); // Ensure session is started for login/logout
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$res = $conn->query("
  SELECT orders.*, items.name AS item_name 
  FROM orders 
  JOIN items ON orders.item_id=items.id 
  WHERE orders.id=$id");

if (!$res || !$res->num_rows) {
  die("<h3 style=\"color:red;font-family:Arial;\">Order not found.</h3>");
}
$order = $res->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Order Status</title>
 
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: url('bp3.avif') no-repeat center center fixed;
      background-size: cover;
    }
    .status-container {
      max-width: 600px;
      margin: 60px auto;
      padding: 30px;
      background: rgba(255, 255, 255, 0.95);
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(227, 83, 83, 0.3);
    }
    h2 {
      margin-top: 0;
      color: green;
      text-align: center;
      font-size: 35px;
    }
    .info {
      font-size: 1.1em;
      margin: 10px 0;
      color: red;
      font-size: 20px;
    }
    .info strong {
      color: #555;
      font-size: 20px;
    }
    .status {
      display: inline-block;
      padding: 8px 16px;
      border-radius: 4px;
      color: #fff;
      font-weight: bold;
      margin-top: 20px;
      text-align: center;
    }
    .logout-btn {
      position: absolute;
      top: 20px;
      right: 20px;
      background-color: #e74c3c;
      color: #fff;
      padding: 8px 15px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }
    .logout-btn:hover {
      background-color: #c0392b;
    }
  </style>
</head>
<body>

  <!-- Logout Button -->
  <a href="logout.php" class="logout-btn">Logout</a>

  <div class="status-container">
    <h2>Order Status</h2>
    <?php foreach (['customer_name'=>'Customer','item_name'=>'Product','quantity'=>'Quantity'] as $k => $label): ?>
      <p class="info"><strong><?php echo $label; ?>:</strong> <?php echo htmlspecialchars($order[$k]); ?></p>
    <?php endforeach; ?>

    <?php
      $status = strtolower($order['status']);
      $colors = ['pending'=>'#f1c40f','processing'=>'#3498db','completed'=>'#2ecc71','cancelled'=>'#e74c3c'];
      $bg = $colors[$status] ?? '#95a5a6';
    ?>
    <p style="text-align:center;">
      <span class="status" style="background: <?php echo $bg; ?>;">
        <?php echo ucfirst(htmlspecialchars($order['status'])); ?>
      </span>
    </p>
  </div>

</body>
</html>
