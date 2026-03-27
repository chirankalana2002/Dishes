<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DishDiary - Home</title>
  <link rel="stylesheet" href="index.css">
  <link rel="icon" type="image/png" href="logo.jpg">
</head>

<body>

<header>
    <h1>DishDiary</h1>

    <nav>
        <div class="nav-left">
            <a href="index.php">Home</a>
            <a href="contact.php">Add Recipe</a>
            <a href="qa.php">Q & A</a>
        </div>

        <div class="nav-right">

            <?php if(isset($_SESSION['user'])): ?>

                <span class="welcome">
                    Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>
                </span>

                <a href="logout.php" class="btn logout-btn">Logout</a>

            <?php else: ?>

                <a href="login.php" class="btn login-btn">Login</a>
                <a href="register.php" class="btn register-btn">Register</a>

            <?php endif; ?>

        </div>
    </nav>
</header>

<main class="container">

  <h2>Search Recipes</h2>

  <div class="search-box">
    <input type="text" id="searchInput" placeholder="Search recipes...">
    <button type="button" id="searchBtn">Search</button>
  </div>

  <h3>Recipe List</h3>

   <div class="card">
    <img src="chicken.jpg" alt="Chicken Curry">
    <h4>Chicken Curry</h4>
    <p>Delicious spicy chicken curry.</p>
    <a href="about.html"><button type="button">View</button></a>
  </div>

  <div class="card">
    <img src="prawn.png" alt="Prawn Curry">
    <h4>Prawn Curry</h4>
    <p>Delicious Prawn Curry.</p>
    <a href="about1.html"><button type="button">View</button></a>
  </div>

  <div class="card">
    <img src="vegetable.jpg" alt="Vegetable Salad">
    <h4>Vegetable Salad</h4>
    <p>Healthy mixed vegetable salad.</p>
    <a href="about2.html"><button type="button">View</button></a>
  </div>

  <div class="card">
    <img src="rice.jpg" alt="Mixed Rice">
    <h4>Mixed Rice</h4>
    <p>Delicious mixed Rice.</p>
    <a href="about3.html"><button type="button">View</button></a>
  </div>

  <div class="card">
    <img src="mushroom.jpg" alt="Mushroom Curry">
    <h4>Mushroom Curry</h4>
    <p>Delicious Mushroom curry.</p>
    <a href="about4.html"><button type="button">View</button></a>
  </div>

  <div class="card">
    <img src="makaroni.jpg" alt="Makaroni">
    <h4>Makaroni Noodles</h4>
    <p>Spicy Makaroni.</p>
    <a href="about5.html"><button type="button">View</button></a>
  </div>

  <div class="card">
    <img src="egg.jpg" alt="Egg Curry">
    <h4>Egg Curry</h4>
    <p>Tasty Egg Curry.</p>
    <a href="about6.html"><button type="button">View</button></a>
  </div>

  <div class="card">
    <img src="cuttless.jpg" alt="Chicken Cutlets">
    <h4>Chicken Cutlets</h4>
    <p>Spicy Chicken Cutlets.</p>
    <a href="about7.html"><button type="button">View</button></a>
  </div>

</main>

<footer>
  <div class="footer-container">

    <!-- ABOUT -->
    <div class="footer-box">
      <h3>DishDiary</h3>
      <p>Simple Recipes, Amazing Flavors. Share and explore delicious food ideas every day.</p>
    </div>

    <!-- QUICK LINKS -->
    <div class="footer-box">
      <h3>Quick Links</h3>
      <a href="index.php">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="contact.php">Add Recipe</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="qa.php">Q & A</a>
    </div>


    <!-- CONTACT -->
    <div class="footer-box">
      <h3>Contact</h3>
      <p>Email: support@dishdiary.com</p>
      <p>Phone: +94 77 123 4567</p>
      <p>Location: Sri Lanka</p>
    </div>

  </div>

  <div class="footer-bottom">
    <p>© 2026 DishDiary | All Rights Reserved</p>
  </div>
</footer>

<script src="index.js"></script>

</body>
</html>