<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>King Bed - Premium Upholstery</title>
  <style>
    /* Reset & base */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
      background: #f8f9fa;
      color: #333;
      line-height: 1.6;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* Container */
    .container {
      max-width: 1200px;
      margin: 2rem auto;
      padding: 0 1rem;
      flex-grow: 1;
    }

    /* Top Section */
    .top-section {
      display: flex;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgb(0 0 0 / 0.1);
      overflow: hidden;
      transition: box-shadow 0.3s ease;
      cursor: default;
    }
    .top-section:hover {
      box-shadow: 0 12px 32px rgb(0 0 0 / 0.15);
    }

    .left-image {
      flex: 1 1 50%;
      position: relative;
      overflow: hidden;
    }
    .left-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    .left-image:hover img {
      transform: scale(1.05);
    }

    .right-content {
      flex: 1 1 50%;
      padding: 2.5rem 3rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      background: linear-gradient(135deg, #fff9f5 0%, #fef5f1 100%);
    }

    .right-content h3 {
      font-size: 2.25rem;
      color: #a1582e;
      margin-bottom: 1rem;
      font-weight: 700;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      font-family: 'Georgia', serif;
    }

    .right-content ul {
      list-style: none;
      margin-bottom: 1.5rem;
      padding-left: 0;
      display: flex;
      gap: 1.5rem;
      flex-wrap: wrap;
    }
    .right-content ul li {
      background: #e3c6a0;
      padding: 0.5rem 1rem;
      border-radius: 8px;
      color: #5a3a1a;
      font-weight: 600;
      box-shadow: 0 2px 6px rgb(0 0 0 / 0.1);
      transition: background 0.3s ease;
      cursor: default;
    }
    .right-content ul li:hover {
      background: #d0a25f;
      color: #fff;
    }

    .right-content p {
      font-size: 1.125rem;
      color: #5c4a34;
      line-height: 1.7;
      margin-top: 0.5rem;
      font-style: italic;
    }

    /* Bottom Section */
    .bottom-section {
      background: #fff;
      margin-top: 3rem;
      padding: 2rem 3rem;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgb(0 0 0 / 0.1);
    }

    .bottom-section h2 {
      font-size: 2.5rem;
      color: #a1582e;
      text-align: center;
      margin-bottom: 1.5rem;
      font-weight: 700;
      letter-spacing: 1.5px;
      font-family: 'Georgia', serif;
    }

    .bottom-section h3 {
      color: #7a5230;
      margin-bottom: 0.75rem;
      font-weight: 700;
      font-size: 1.5rem;
      border-bottom: 2px solid #d7b483;
      padding-bottom: 0.3rem;
    }

    .bottom-section ul {
      list-style: none;
      margin-bottom: 2rem;
      padding-left: 0;
      color: #5c4a34;
      font-size: 1.125rem;
      line-height: 1.6;
    }
    .bottom-section ul li {
      padding: 0.5rem 0;
      border-bottom: 1px dotted #d7b483;
      transition: color 0.3s ease;
    }
    .bottom-section ul li:last-child {
      border-bottom: none;
    }
    .bottom-section ul li:hover {
      color: #a1582e;
      font-weight: 600;
    }

    /* Navigation Buttons */
    .back-button {
      margin: 3rem auto 4rem;
      width: 160px;
      display: flex;
      justify-content: space-between;
      font-size: 2.5rem;
    }

    .back-button a {
      background: #a1582e;
      color: white;
      padding: 0.25rem 0.7rem;
      border-radius: 50%;
      box-shadow: 0 4px 12px rgb(161 88 46 / 0.4);
      transition: background 0.3s ease, transform 0.2s ease;
      user-select: none;
    }
    .back-button a:hover {
      background: #d7b483;
      color: #5a3a1a;
      transform: scale(1.15);
    }

    /* Responsive */
    @media (max-width: 900px) {
      .top-section {
        flex-direction: column;
      }
      .left-image,
      .right-content {
        flex: 1 1 100%;
      }
      .right-content {
        padding: 2rem 1.5rem;
      }
      .bottom-section {
        padding: 2rem 1.5rem;
      }
      .back-button {
        width: 100px;
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <section class="top-section" aria-label="King Bed Product Details">
      <div class="left-image" aria-hidden="true">
        <img src="bed1.jpeg" alt="King size bed with premium upholstery" loading="lazy" />
      </div>
      <div class="right-content">
        <h3>King Bed</h3>
        <ul>
          <li>BED001 / 78" X 60"</li>
          <li>BED002 / 78" X 70"</li>
          <li>BED003 / 78" X 80"</li>
        </ul>
        <p>
          A wonderful design crafted with finest upholstery that presents a sumptuous appearance.
          Smoothness of the refined edges and the colour combination just completes the décor while becoming the cosiest place in the house.
        </p>
      </div>
    </section>

    <section class="bottom-section" aria-label="King Bed Description and Warranty">
      <h2>Description</h2>
      <h3>Dimension</h3>
      <ul>
        <li>Length – 78″ | Width – 60″ | Height – 40″ (Inch)</li>
        <li>Length – 78″ | Width – 70″ | Height – 40″ (Inch)</li>
        <li>Length – 78″ | Width – 80″ | Height – 40″ (Inch)</li>
      </ul>
      <h3>Warranty</h3>
      <ul>
        <li>3 year warranty for structure</li>
        <li>Warranty covers only manufacturing defects.</li>
      </ul>
    </section>

    <nav class="back-button" aria-label="Navigation Buttons">
      <a href="bed.php" class="previous round" aria-label="Go to previous page">&#8249;</a>
      <a href="messagebox.php" class="next round" aria-label="Go to message box">&#8250;</a>
    </nav>
  </div>
</body>
</html>
