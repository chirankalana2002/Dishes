<?php
session_start();
include "db.php";

$message = "";

if(isset($_POST['login'])){
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // 🔐 secure query
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $user = $result->fetch_assoc();

        if(password_verify($password, $user['password'])){
            $_SESSION['user'] = $user['username'];
            header("Location: index.php");
            exit();
        } else {
            $message = "Wrong password!";
        }
    } else {
        $message = "User not found!";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - DishDiary</title>
    <link rel="stylesheet" href="index.css">

    <style>
        body {
            font-family: Arial;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f4f4f4;
        }
        .login-box {
            background: white;
            padding: 25px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
        }
        button {
            width: 100%;
            padding: 10px;
            background: green;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .error {
            color: red;
        }
    </style>
</head>

<body>

<div class="login-box">
    <h2>Login</h2>

    <?php if($message != ""): ?>
        <p class="error"><?= $message ?></p>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>

    <p style="margin-top:10px;">
        Don't have an account? <a href="register.php">Register</a>
    </p>
</div>

</body>
</html>