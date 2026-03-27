<?php
session_start();
include "db.php";

$message = "";

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $category = $_POST['category'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];
    $cooking_time = $_POST['cooking_time'];

    $image = $_FILES['image']['name'];
    $target = "uploads/" . basename($image);

    if(!is_dir("uploads")){
        mkdir("uploads");
    }

    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){

        $sql = "INSERT INTO recipes 
        (name, category, ingredients, instructions, cooking_time, image)
        VALUES 
        ('$name', '$category', '$ingredients', '$instructions', '$cooking_time', '$image')";

        if(mysqli_query($conn, $sql)){
            $message = "Recipe added successfully!";
        } else {
            $message = "Database error!";
        }

    } else {
        $message = "Image upload failed!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Submit Recipe</title>

<style>
body {
    font-family: Arial;
    background: #f4f4f4;
    margin: 0;
}

.navbar {
    background: #ff5e00;
    color: white;
    padding: 15px;
    display: flex;
    justify-content: space-between;
}

.navbar a {
    color: white;
    text-decoration: none;
    margin-left: 15px;
    font-weight: bold;
}

.container {
    width: 700px;
    margin: 40px auto;
    background: white;
    padding: 20px;
    border-radius: 10px;
}

h2 {
    text-align: center;
    color: #0a0301;
}

label {
    font-weight: bold;
}

input, select, textarea {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 10px;
}

button {
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    transition: 0.3s;
    border-radius: 5px;
}

/* SUBMIT BUTTON */
.btn1 {
    background: #f43906;
    color: white;
}

.btn1:hover {
    background: #d83205;
    transform: scale(1.05);
}

/* RESET BUTTON */
.btn2 {
    background: gray;
    color: white;
}

.btn2:hover {
    background: #555;
    transform: scale(1.05);
}

/* OPTIONAL INPUT FOCUS EFFECT */
input:focus, textarea:focus, select:focus {
    outline: none;
    border: 2px solid #f43906;
}

footer {
    text-align: center;
    padding: 15px;
    background: #222;
    color: white;
    margin-top: 30px;
}
</style>

</head>

<body>

<div class="navbar">
    <div>DishDiary</div>
    <div>
        <a href="index.php">Home</a>
        <a href="qa.php">Q&A</a>
    </div>
</div>

<div class="container">

<h2>Submit Recipe</h2>

<?php if($message != ""): ?>
    <p style="text-align:center; color:green;">
        <?php echo $message; ?>
    </p>
<?php endif; ?>

<form method="POST" enctype="multipart/form-data">

    <label>Recipe Name</label>
    <input type="text" name="name" required>

    <label>Category</label>
    <select name="category">
        <option>Curry</option>
        <option>Rice</option>
        <option>Salad</option>
    </select>

    <label>Ingredients</label>
    <textarea name="ingredients" required></textarea>

    <label>Instructions</label>
    <textarea name="instructions" required></textarea>

    <label>Cooking Time</label>
    <input type="text" name="cooking_time">

    <label>Image</label>
    <input type="file" name="image">

    <button type="submit" name="submit" class="btn1">Submit</button>
    <button type="reset" class="btn2">Reset</button>

</form>

</div>

<footer>
    © 2026 DishDiary
</footer>

</body>
</html>