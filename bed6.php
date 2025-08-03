<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Lora Bed | Wood‐Art Collection</title>
  <style>
    /* Reset & Base */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f8f5f0; /* soft linen background */
      color: #3a2d21;      /* deep wood‐tone text */
      line-height: 1.6;
    }
    a {
      text-decoration: none;
      color: inherit;
    }

    /* Container */
    .container {
      max-width: 1100px;
      margin: 2rem auto;
      padding: 0 1rem;
    }

    /* Top Section */
    .top-section {
      display: flex;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
      overflow: hidden;
      transition: box-shadow 0.3s ease;
    }
    .top-section:hover {
      box-shadow: 0 12px 32px rgba(0, 0, 0, 0.12);
    }

    .left-image {
      flex: 1 1 50%;
      position: relative;
      overflow: hidden;
      background: #e5dbd0; /* weathered‐wood tone */
    }
    .left-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
      display: block;
    }
    .left-image img:hover {
      transform: scale(1.05);
    }

    .right-content {
      flex: 1 1 50%;
      padding: 2.5rem 3rem;
      background: linear-gradient(135deg, #fcf7f2 0%, #f7efe6 100%);
    }
    .right-content h3 {
      font-size: 2.25rem;
      color: #7a4a2b;          /* dark walnut brown */
      margin-bottom: 1rem;
      font-weight: 700;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      font-family: 'Georgia', serif;
    }
    .right-content ul {
      list-style: none;
      margin-bottom: 1.5rem;
      display: flex;
      gap: 1.5rem;
      flex-wrap: wrap;
    }
    .right-content ul li {
      background: #cbb295;     /* light oak tone */
      padding: 0.5rem 1rem;
      border-radius: 8px;
      color: #4b3221;          /* charcoal brown */
      font-weight: 600;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      transition: background 0.3s ease, color 0.3s ease;
      cursor: default;
    }
    .right-content ul li:hover {
      background: #a98a6f;     /* aged‐wood highlight */
      color: #fff;
    }
    .right-content p {
      font-size: 1.125rem;
      color: #5a4b41;          /* soft espresso */
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
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    }
    .bottom-section h2 {
      font-size: 2.5rem;
      color: #7a4a2b;
      text-align: center;
      margin-bottom: 1.5rem;
      font-weight: 700;
      letter-spacing: 1.5px;
      font-family: 'Georgia', serif;
    }
    .bottom-section h3 {
      color: #5a4b41;
      margin-bottom: 0.75rem;
      font-weight: 700;
      font-size: 1.5rem;
      border-bottom: 2px solid #cbb295;
      padding-bottom: 0.3rem;
    }
    .bottom-section ul {
      list-style: none;
      margin-bottom: 2rem;
      padding-left: 0;
      color: #5a4b41;
      font-size: 1.125rem;
      line-height: 1.6;
    }
    .bottom-section ul li {
      padding: 0.5rem 0;
      border-bottom: 1px dotted #cbb295;
      transition: color 0.3s ease;
    }
    .bottom-section ul li:last-child {
      border-bottom: none;
    }
    .bottom-section ul li:hover {
      color: #7a4a2b;
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
      background: #7a4a2b;
      color: white;
      padding: 0.25rem 0.7rem;
      border-radius: 50%;
      box-shadow: 0 4px 12px rgba(122, 74, 43, 0.4);
      transition: background 0.3s ease, transform 0.2s ease;
      user-select: none;
    }
    .back-button a:hover {
      background: #cbb295;
      color: #4b3221;
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
    <!-- Top Section: Image + Summary -->
    <section class="top-section" aria-label="Lora Bed Product Overview">
      <div class="left-image" aria-hidden="true">
        <img src="im3.jpeg" alt="Lora Bed with wood-grain upholstery" loading="lazy" />
      </div>
      <div class="right-content">
        <h3>Lora Bed</h3>
        <ul>
          <li>BED001 / 78" × 48"</li>
          <li>BED002 / 78" × 60"</li>
        </ul>
        <p>
          A handcrafted wood‐art masterpiece with the finest upholstery—combining sturdy oak framing
          and smooth, refined edges. The rich wood tones and harmonious finishes complete your décor,
          making this bed the coziest, most elegant focal point of any bedroom.
        </p>
      </div>
    </section>

    <!-- Bottom Section: Details & Warranty -->
    <section class="bottom-section" aria-label="Lora Bed Details">
      <h2>DESCRIPTION</h2>

      <h3>Dimension</h3>
      <ul>
        <li>Length – 78″ | Width – 48″ | Height – 40″ (Inches)</li>
        <li>Length – 78″ | Width – 60″ | Height – 40″ (Inches)</li>
      </ul>

      <h3>Warranty</h3>
      <ul>
        <li>3-year warranty on all structural components</li>
        <li>Warranty covers manufacturing defects only</li>
      </ul>
    </section>

    <!-- Navigation Buttons -->
    <nav class="back-button" aria-label="Page Navigation">
      <a href="bed.php" class="previous" aria-label="Go to previous page">&#8249;</a>
      <a href="messagebox.php" class="next" aria-label="Go to message box">&#8250;</a>
    </nav>
  </div>

</body>
</html>
