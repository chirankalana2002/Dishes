<?php
session_start();
include "db.php";

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

if(isset($_POST['add'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $user = $_SESSION['user'];

    $sql = "INSERT INTO recipes (title, description, user)
            VALUES ('$title', '$description', '$user')";

    mysqli_query($conn, $sql);
    header("Location: index.php");
    exit();
}
?>

<h2>Add Recipe</h2>

<form method="POST">
    <input type="text" name="title" placeholder="Title" required><br>
    <textarea name="description" placeholder="Description" required></textarea><br>
    <button name="add">Add Recipe</button>
</form>

<a href="index.php">Back</a>