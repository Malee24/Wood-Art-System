<?php
include 'db.php';

// Handle Accept/Reject Actions
if (isset($_GET['action']) && isset($_GET['id'])) {
  $action = $_GET['action'];
  $id = intval($_GET['id']);

  if (in_array($action, ['accept', 'reject'])) {
    $new_status = $action === 'accept' ? 'Confirmed' : 'Rejected';
    $update = $conn->prepare("UPDATE orders SET status = ? WHERE id = ?");
    $update->bind_param("si", $new_status, $id);
    $update->execute();
    echo "<script>alert('Order #$id has been {$new_status}'); window.location='Adashbord.php';</script>";
    exit();
  }
}


$sql = "SELECT orders.id, customer_name, quantity, status, items.name AS product 
        FROM orders 
        JOIN items ON orders.item_id = items.id 
        ORDER BY orders.id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <style>
    * {
      margin: 0; padding: 0; box-sizing: border-box;
    }
    body {
      font-family: Arial, sans-serif;
      position: relative;
      min-height: 100vh;
    }

    
    body::before {
      content: "";
      position: fixed;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      background-image: url('avboutrus.jpg');
      background-size: cover;
      background-position: center;
      filter: blur(8px);
      z-index: -1;
    }

    .navbar {
      background-color: blck;
      padding: 1em 0;
    }

    .navbar ul {
      list-style: none;
      display: flex;
      justify-content: center;
    }

    .navbar li {
      margin: 0 1.5em;
    }

    .navbar a {
      color:  rgb(58, 63, 198);
      text-decoration: none;
      font-weight: bold;
      font-size: 20px;
    }

    .navbar a:hover {
      text-decoration: underline;
    }

    .container {
      width: 90%;
      margin: 2em auto;
      background-color: rgba(255, 255, 255, 0.95);
      padding: 2em;
      border-radius: 5px;
      box-shadow: 0 0 px rgb(13, 22, 199);
    }

    .container h1 {
      margin-bottom: 1em;
      color: rgb(13, 22, 199);
      text-align:center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    thead {
      background-color:  rgb(58, 63, 198);
      color: #fff;
    }

    th, td {
      padding: 1em;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    tr:hover {
      background-color: rgba(143, 148, 251, 0.95);
    }

    .accept-btn, .reject-btn {
      padding: 0.5em 1em;
      border: none;
      border-radius: 3px;
      color: white;
      cursor: pointer;
    }

    .accept-btn {
      background-color: green;
    }

    .reject-btn {
      background-color: #dc3545;
    }

    .accept-btn:hover {
      background-color: #218838;
    }

    .reject-btn:hover {
      background-color: #c82333;
    }
  </style>
</head>
<body>

<nav class="navbar">
  <ul>
    <li><a href="admin_home.php">Home</a></li>
    <li><a href="Aadd.php">Add Item</a></li>
    <li><a href="Agalary.php">Manage Gallery</a></li>
    <li><a href="Alogout.php">Logout</a></li>
  </ul>
</nav>


<div class="container">
  <h1>Order Management</h1>
  <table>
    <thead>
      <tr>
        <th>Order ID</th>
        <th>Customer</th>
        <th>Product</th>
        <th>Quantity</th>
        <th>Status</th>
        <th colspan="2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($result && $result->num_rows > 0): ?>
        <?php while ($order = $result->fetch_assoc()): ?>
          <tr>
            <td><?= htmlspecialchars($order['id']) ?></td>
            <td><?= htmlspecialchars($order['customer_name']) ?></td>
            <td><?= htmlspecialchars($order['product']) ?></td>
            <td><?= htmlspecialchars($order['quantity']) ?></td>
            <td><?= htmlspecialchars($order['status']) ?></td>
            <td>
              <?php if ($order['status'] == 'Pending'): ?>
                <a href="?action=accept&id=<?= $order['id'] ?>">
                  <button class="accept-btn">Accept</button>
                </a>
              <?php endif; ?>
            </td>
            <td>
              <?php if ($order['status'] == 'Pending'): ?>
                <a href="?action=reject&id=<?= $order['id'] ?>">
                  <button class="reject-btn">Reject</button>
                </a>
              <?php endif; ?>
            </td>
          </tr>
        <?php endwhile; ?>
      <?php else: ?>
        <tr><td colspan="7">No orders available.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>

</body>
</html>
