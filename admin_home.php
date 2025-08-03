<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <style>
    
    .bg-image {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(120deg, #2980b9, #6dd5fa, #ffffff);
      
    }

    body {
      margin: 0;
      font-family: Arial, sans-serif;
      color: white;
      overflow: hidden;
    }

    header {
      position: relative;
      padding: 20px;
      text-align: center;
    }
    h1 {
      margin: 0;
      font-size: 4em;
      color: white;
      text-shadow: 1px 1px 50px rgba(0,0,0,0.5);
    }

    .logout {
      position: absolute;
      top: 50px;
      right: 50px;
      background-color: #ff5252;
      color: white;
      padding: 20px 30px;
      border-radius: 20px;
      text-decoration: none;
      font-weight: bold;
      
    }
    .logout:hover {
      background-color: #e53935;
    }

    .container {
      position: relative;
      margin-top: 60px;
      text-align: center;
     
    }

    .nav-links {
      display: flex;
      justify-content: center;
      gap: 40px;
      flex-wrap: wrap;
      margin-top: 30px;
    }
    .nav-links a {
      background-color:   #1c5980;
      color: white;
      padding: 25px 50px;
      text-decoration: none;
      border-radius: 20px;
      font-weight: bold;
      
    }
    .nav-links a:hover {
      background-color:   #2980b9;
      
    }
  </style>
</head>
<body>

  <!-- Blurred full-screen background -->
  <div class="bg-image"></div>

  <header>
    <h1>Admin Dashboard</h1>
    <a href="Alogout.php" class="logout">Logout</a>
  </header>

  <main class="container">
    <nav class="nav-links">
      <a href="Aadd.php">Add Items</a>
      <a href="Adashbord.php">View Orders</a>
      <a href="Agalary.php">Manage Gallery</a>
    </nav>
  </main>

</body>
</html>
