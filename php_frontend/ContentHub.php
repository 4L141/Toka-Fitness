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
    .content-hub {
      padding: 2rem;
    }
    .content-hub h1 {
      text-align: center;
      margin-bottom: 2rem;
    }
    .content-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
    }
    .content-card {
      border: 1px solid #ccc;
      padding: 1rem;
      border-radius: 5px;
    }
    .content-card h3 {
      margin-top: 0;
    }
  </style>
</head>
<body>

<div class="content-hub">
  <h1>Content Hub</h1>
  <div class="content-grid">
    <div class="content-card">
      <h3>Workout of the Day</h3>
      <p>Check out today's recommended workout, designed by our expert trainers to help you reach your goals.</p>
    </div>
    <div class="content-card">
      <h3>Healthy Recipes</h3>
      <p>Fuel your body with our delicious and nutritious recipes. From post-workout shakes to family-friendly meals.</p>
    </div>
    <div class="content-card">
      <h3>Fitness Tips</h3>
      <p>Learn new techniques, improve your form, and get the most out of your workouts with our fitness tips.</p>
    </div>
  </div>
</div>

<script src = "Hamburger.js"></script>
</body>
</html>

<?php include 'Footer.php'; ?>
