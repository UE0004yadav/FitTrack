<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body >



<form method="POST" action="login_process.php" class="login-form">
    <h2>Login your account</h2>
    <label for="email">Email:</label><br>
    <input type="email" name="email" placeholder="Enter Email" required><br><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password" placeholder="Enter Password" required><br><br>
    <button type="submit" class="login-btn">Login</button>
</form>
<style>
    body{
        background-color: #f8efef;
        color: #333;
        font-family: sans-serif;

    }
    .login-form{
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .login-form h2{
        text-align: center;
        margin-bottom: 20px;
    }
.login-btn{
    background-color: red;
    color: black;
    border: none;
    padding: 10px 20px;
    font-weight: bold;
    font-size: 12pt;
    border-radius: 6px;
}
    </style>

    <?php
session_start();

// Example (database se data milne ke baad)
$_SESSION['username'] = $user['name'];   // ya jo column hai DB me
?>
</body>
</html>