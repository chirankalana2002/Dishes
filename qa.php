<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>DishDiary - Q&A</title>

<style>
body {
    font-family: Arial;
    margin: 0;
    background: #f4f4f4;
}

/* ================= NAVBAR ================= */
.navbar {
    background: #f43906;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: white;
}

.navbar h2 {
    margin: 0;
}

.navbar a {
    color: white;
    text-decoration: none;
    margin-left: 15px;
    font-weight: bold;
}

.navbar a:hover {
    text-decoration: underline;
}

/* ================= CONTAINER ================= */
.container {
    width: 800px;
    margin: 30px auto;
}

/* ================= FAQ ================= */
.faq {
    background: white;
    margin-bottom: 10px;
    padding: 15px;
    border-radius: 8px;
    cursor: pointer;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.faq h3 {
    margin: 0;
    color: #f43906;
}

.answer {
    display: none;
    margin-top: 10px;
    color: #333;
}

/* ================= RATING ================= */
.rating {
    background: white;
    width: 300px;
    margin: 40px auto;
    padding: 20px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.stars span {
    font-size: 30px;
    cursor: pointer;
    color: #ccc;
    transition: 0.2s;
}

.stars span:hover {
    transform: scale(1.2);
}

/* ================= FOOTER ================= */
footer {
    background: #222;
    color: white;
    text-align: center;
    padding: 15px;
    margin-top: 30px;
}
</style>

</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <h2>DishDiary</h2>
    <div>
        <a href="index.php">Home</a>
        <a href="contact.php">Add Recipe</a>
        <a href="qa.php">Q&A</a>
    </div>
</div>

<!-- CONTENT -->
<div class="container">

<h2 style="text-align:center;">Questions & Answers</h2>

<div class="faq">
  <h3>What is DishDiary?</h3>
  <p class="answer">DishDiary is a recipe sharing platform.</p>
</div>

<div class="faq">
  <h3>How to add recipe?</h3>
  <p class="answer">Go to Add Recipe page and submit your recipe.</p>
</div>

<div class="faq">
  <h3>Is it free?</h3>
  <p class="answer">Yes, DishDiary is completely free.</p>
</div>

<div class="faq">
  <h3>Can I search recipes?</h3>
  <p class="answer">Yes, use the search feature.</p>
</div>

<div class="faq">
  <h3>What recipes are available?</h3>
  <p class="answer">Rice, curry, chicken, salad and more.</p>
</div>

</div>

<!-- RATING -->
<div class="rating">
  <h2>Rate DishDiary</h2>

  <div class="stars">
    <span data-value="1">⭐</span>
    <span data-value="2">⭐</span>
    <span data-value="3">⭐</span>
    <span data-value="4">⭐</span>
    <span data-value="5">⭐</span>
  </div>

  <p id="rating-result">No rating yet</p>
</div>

<!-- FOOTER -->
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
      <a href="index.php">Home</a><br>
      <a href="addrecipe.php">Add Recipe</a><br>
      <a href="qa.php">Q & A</a><br>
      <a href="contact.php">Contact</a>
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

<script src="qa.js"></script>

</body>
</html>