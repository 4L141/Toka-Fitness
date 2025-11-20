<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../LogIn.php");
    exit();
}
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
    .services {
      padding: 2rem;
    }
    .services h1 {
      text-align: center;
      margin-bottom: 2rem;
    }
    .service-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
    }
    .service-card {
      border: 1px solid #ccc;
      padding: 1rem;
      border-radius: 5px;
    }
    .service-card h3 {
      margin-top: 0;
    }
  </style>
</head>
<body>

<div class="services">
  <h1>Our Fitness Services</h1>
  <div class="service-grid">
    <div class="service-card">
      <h3>Personal Training</h3>
      <p>Our certified personal trainers will work with you one-on-one to create a personalized fitness plan that fits your goals and lifestyle.</p>
    </div>
    <div class="service-card">
      <h3>Group Fitness Classes</h3>
      <p>From high-energy HIIT classes to relaxing yoga sessions, we offer a variety of group fitness classes to keep you motivated and engaged.</p>
    </div>
    <div class="service-card">
      <h3>Nutritional Coaching</h3>
      <p>Our nutrition experts will help you develop healthy eating habits and create a sustainable nutrition plan that complements your fitness routine.</p>
    </div>
  </div>
</div>

<script src = "Hamburger.js"></script>
</body>
</html>

<?php include 'Footer.php'; ?>
