<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
</head>
<body>



<form method="POST" action="register_process.php">
    <h2>Register your self</h2>
    <label for="name">Name:</label><br>

    <input type="text" name="name" placeholder="Enter Name" required><br><br>
    <label for="email">Email:</label><br>
    <input type="email" name="email" placeholder="Enter Email" required><br><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password" placeholder="Enter Password" required><br><br>
    <button type="submit">Register</button>
</form>

</body>
</html>