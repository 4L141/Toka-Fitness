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
    .nutrition {
      padding: 2rem;
    }
    .nutrition h1 {
      text-align: center;
      margin-bottom: 2rem;
    }
    .nutrition-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
    }
    .nutrition-card {
      border: 1px solid #ccc;
      padding: 1rem;
      border-radius: 5px;
    }
    .nutrition-card h3 {
      margin-top: 0;
    }
  </style>
</head>
<body>

<div class="nutrition">
  <h1>Nutrition & Wellness</h1>
  <div class="nutrition-grid">
    <div class="nutrition-card">
      <h3>Personalized Meal Plans</h3>
      <p>Our nutritionists will create a customized meal plan based on your dietary needs, preferences, and fitness goals.</p>
    </div>
    <div class="nutrition-card">
      <h3>Healthy Cooking Workshops</h3>
      <p>Join our interactive workshops to learn how to prepare delicious and nutritious meals that support your fitness journey.</p>
    </div>
    <div class="nutrition-card">
      <h3>Wellness Coaching</h3>
      <p>Our wellness coaches will help you develop a holistic approach to health, focusing on stress management, sleep, and overall well-being.</p>
    </div>
  </div>
</div>

<script src = "Hamburger.js"></script>
</body>
</html>

<?php include 'Footer.php'; ?>
