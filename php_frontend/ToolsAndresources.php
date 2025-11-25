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
    .tools {
      padding: 2rem;
    }
    .tools h1 {
      text-align: center;
      margin-bottom: 2rem;
    }
    .tool-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
    }
    .tool-card {
      border: 1px solid #ccc;
      padding: 1rem;
      border-radius: 5px;
    }
    .tool-card h3 {
      margin-top: 0;
    }
  </style>
</head>
<body>

<div class="tools">
  <h1>Tools & Resources</h1>
  <div class="tool-grid">
    <div class="tool-card">
      <h3>Workout Planner</h3>
      <p>Plan your workouts, track your progress, and stay motivated with our easy-to-use workout planner.</p>
    </div>
    <div class="tool-card">
      <h3>Calorie Calculator</h3>
      <p>Calculate your daily calorie needs and create a personalized nutrition plan to help you reach your goals.</p>
    </div>
    <div class="tool-card">
      <h3>Fitness Blog</h3>
      <p>Stay up-to-date on the latest fitness trends, tips, and advice from our team of experts.</p>
    </div>
  </div>
</div>

<script src = "Hamburger.js"></script>
</body>
</html>

<?php include 'Footer.php'; ?>
