<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ornate Bed | Product Details</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f1ed;
      color: #333;
      line-height: 1.6;
    }

    .container {
      max-width: 1200px;
      margin: 2rem auto;
      padding: 1rem;
    }

    .top-section {
      display: flex;
      flex-wrap: wrap;
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
      overflow: hidden;
      transition: box-shadow 0.3s ease;
    }

    .left-image {
      flex: 1 1 50%;
    }

    .left-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.4s ease;
    }

    .left-image img:hover {
      transform: scale(1.03);
    }

    .right-content {
      flex: 1 1 50%;
      padding: 2rem;
      background: linear-gradient(to right, #fff8f3, #ffe6d0);
    }

    .right-content h3 {
      font-size: 2rem;
      color: #9b5823;
      margin-bottom: 1rem;
      font-family: Georgia, serif;
    }

    .right-content ul {
      list-style: none;
      margin-bottom: 1.5rem;
      display: flex;
      flex-wrap: wrap;
      gap: 0.8rem;
    }

    .right-content ul li {
      background-color: #e4c1a0;
      color: #4e3529;
      padding: 0.5rem 1rem;
      border-radius: 8px;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    .right-content ul li:hover {
      background-color: #d49a6a;
      color: white;
    }

    .right-content p {
      font-size: 1.1rem;
      color: #4e3529;
      line-height: 1.7;
      margin-top: 0.5rem;
    }

    .bottom-section {
      margin-top: 2.5rem;
      background-color: #fff;
      border-radius: 12px;
      padding: 2rem;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.06);
    }

    .bottom-section h2 {
      font-size: 2.2rem;
      color: #9b5823;
      margin-bottom: 1.5rem;
      text-align: center;
      font-family: Georgia, serif;
    }

    .bottom-section h3 {
      font-size: 1.5rem;
      color: #6f4a2c;
      margin-bottom: 1rem;
      border-bottom: 2px solid #e4c1a0;
      padding-bottom: 0.3rem;
    }

    .bottom-section ul {
      list-style: none;
      padding-left: 1rem;
    }

    .bottom-section ul li {
      margin-bottom: 0.8rem;
      font-size: 1.1rem;
    }

    .back-button {
      margin: 2.5rem auto;
      display: flex;
      justify-content: space-between;
      max-width: 120px;
    }

    .back-button a {
      font-size: 2rem;
      background-color: #9b5823;
      color: white;
      padding: 0.5rem 0.9rem;
      border-radius: 50%;
      box-shadow: 0 4px 12px rgba(155, 88, 35, 0.3);
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .back-button a:hover {
      background-color: #d49a6a;
      transform: scale(1.1);
      color: #fff;
    }

    @media (max-width: 768px) {
      .top-section {
        flex-direction: column;
      }
      .left-image,
      .right-content {
        flex: 1 1 100%;
      }
      .right-content {
        padding: 1.5rem;
      }
      .bottom-section {
        padding: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="top-section">
      <div class="left-image">
        <img src="im9.jpg" alt="Ornate Bed Design" />
      </div>
      <div class="right-content">
        <h3>Ornate Bed</h3>
        <ul>
          <li>BED007 / 78" X 60"</li>
          <li>BED008 / 78" X 72"</li>
          <li>BED009 / 78" X 80"</li>
        </ul>
        <p>
          Simple yet attractive development with improved strength which will give you a lasting
          product free from creaking noises. Top range materials have been utilised to bring out a
          superior finish that stands out in your room.
        </p>
      </div>
    </div>

    <div class="bottom-section">
      <h2>DESCRIPTION</h2>
      <h3>Dimension</h3>
      <ul>
        <li>Length – 78″ | Width – 60″ | Height – 40″ (Inch)</li>
        <li>Length – 78″ | Width – 72″ | Height – 40″ (Inch)</li>
        <li>Length – 78″ | Width – 80″ | Height – 40″ (Inch)</li>
      </ul>
      <h3>Warranty</h3>
      <ul>
        <li>3 year warranty for structure</li>
        <li>Warranty Covers Only Manufacturing Defects.</li>
      </ul>
    </div>

    <div class="back-button">
      <a href="bed.php" class="previous round" title="Back">&#8249;</a>
      <a href="messagebox.php" class="next round" title="Next">&#8250;</a>
    </div>
  </div>

</body>
</html>

