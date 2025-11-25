<?php
session_start();
include 'Header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Toka Fitness</title>
  <link rel="stylesheet" href="Stylesheets/homestyles.css" />
  <style>
    .store {
      padding: 2rem;
    }
    .store h1 {
      text-align: center;
      margin-bottom: 2rem;
    }
    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
    }
    .product-card {
      border: 1px solid #ccc;
      padding: 1rem;
      border-radius: 5px;
    }
    .product-card h3 {
      margin-top: 0;
    }
  </style>
</head>
<body>

<div class="store">
  <h1>Toka Fitness Store</h1>
  <div class="product-grid">
    <div class="product-card">
      <h3>Toka Fitness T-Shirt</h3>
      <p>Show your Toka Fitness pride with our comfortable and stylish t-shirt.</p>
    </div>
    <div class="product-card">
      <h3>Toka Fitness Water Bottle</h3>
      <p>Stay hydrated during your workouts with our durable and leak-proof water bottle.</p>
    </div>
    <div class="product-card">
      <h3>Toka Fitness Protein Powder</h3>
      <p>Fuel your muscles with our high-quality protein powder, available in a variety of delicious flavors.</p>
    </div>
  </div>
</div>

<script src = "Hamburger.js"></script>
</body>
</html>

<?php include 'Footer.php'; ?>
