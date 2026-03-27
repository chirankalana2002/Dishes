<?php
include "db.php";

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$password')";

    if(mysqli_query($conn, $sql)){
        header("Location: login.php");
        exit();
    } else {
        echo "Error!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register - DishDiary</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #74ebd5, #ACB6E5);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-box {
    background: white;
    padding: 30px;
    border-radius: 12px;
    width: 320px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    text-align: center;
}

.form-box h2 {
    margin-bottom: 20px;
}

.form-box input {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 6px;
}

.form-box button {
    width: 100%;
    padding: 10px;
    background: #28a745;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
}

.form-box button:hover {
    background: #b5e0be;
}

.form-box a {
    display: block;
    margin-top: 10px;
    color: #007bff;
    text-decoration: none;
}

.form-box a:hover {
    text-decoration: underline;
}
</style>

</head>

<body>

<div class="form-box">
    <h2>Create Account</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="register">Register</button>
    </form>

    <a href="login.php">Already have an account? Login</a>
</div>

</body>
</html>