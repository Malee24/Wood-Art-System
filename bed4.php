<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Brilliant Bed | Product Details</title>
  <style>
    {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to bottom, #fefaf6, #f7ede2);
      color: #333;
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
      overflow: hidden;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      transition: box-shadow 0.3s ease;
    }

    .left-image {
      flex: 1 1 50%;
      background-color: #f1eae4;
    }

    .left-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .left-image img:hover {
      transform: scale(1.03);
    }

    .right-content {
      flex: 1 1 50%;
      padding: 2rem;
      background: #fffaf7;
    }

    .right-content h3 {
      font-size: 2.2rem;
      color: #8b4a2d;
      margin-bottom: 1rem;
      font-family: 'Georgia', serif;
    }

    .right-content ul {
      list-style: none;
      margin-bottom: 1.5rem;
      display: flex;
      flex-wrap: wrap;
      gap: 0.75rem;
    }

    .right-content ul li {
      background-color: #e2c8b5;
      padding: 0.5rem 1rem;
      border-radius: 8px;
      font-weight: 600;
      color: #5c3d2e;
    }

    .right-content p {
      font-size: 1.1rem;
      line-height: 1.7;
      color: #4b3621;
    }

    .bottom-section {
      margin-top: 2rem;
      padding: 2rem;
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.07);
    }

    .bottom-section h2 {
      font-size: 2rem;
      margin-bottom: 1.2rem;
      text-align: center;
      color: #8b4a2d;
      font-family: 'Georgia', serif;
    }

    .bottom-section h3 {
      font-size: 1.4rem;
      color: #623e2a;
      margin-top: 1rem;
      margin-bottom: 0.6rem;
      border-bottom: 2px solid #e2c8b5;
      padding-bottom: 0.3rem;
    }

    .bottom-section ul {
      list-style: none;
      padding-left: 1rem;
    }

    .bottom-section ul li {
      margin-bottom: 0.6rem;
      font-size: 1.05rem;
    }

    .back-button {
      margin: 2rem auto;
      display: flex;
      justify-content: space-between;
      max-width: 120px;
    }

    .back-button a {
      font-size: 2rem;
      background-color: #8b4a2d;
      color: #fff;
      padding: 0.5rem 0.9rem;
      border-radius: 50%;
      text-decoration: none;
      transition: background-color 0.3s, transform 0.2s;
      box-shadow: 0 4px 12px rgba(139, 74, 45, 0.3);
    }

    .back-button a:hover {
      background-color: #b86b45;
      transform: scale(1.1);
    }

    @media (max-width: 768px) {
      .top-section {
        flex-direction: column;
      }

      .right-content, .left-image {
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
        <img src="im1.jpeg" alt="Brilliant Bed Image" />
      </div>
      <div class="right-content">
        <h3>Brilliant Bed</h3>
        <ul>
          <li>BED0010 / 78" X 60"</li>
          <li>BED0011 / 78" X 72"</li>
        </ul>
        <p>
          Enjoy the royal classiness with finest craftsmanship skills. Appealingly carved headboard
          design with the elevated footboard pattern together with clean finish brings out a grand
          appearance to your room.
        </p>
      </div>
    </div>

    <div class="bottom-section">
      <h2>DESCRIPTION</h2>

      <h3>Dimension</h3>
      <ul>
        <li>Length – 78″ | Width – 60″ | Height – 40″ (Inch)</li>
        <li>Length – 78″ | Width – 70″ | Height – 40″ (Inch)</li>
      </ul>

      <h3>Warranty</h3>
      <ul>
        <li>3 year warranty for structure</li>
        <li>Warranty Covers Only Manufacturing Defects.</li>
      </ul>
    </div>

    <div class="back-button">
      <a href="bed.php" title="Back">&#8249;</a>
      <a href="messagebox.php" title="Next">&#8250;</a>
    </div>
  </div>

</body>
</html>
