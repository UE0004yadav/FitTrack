<!DOCTYPE html>
<html>

<head>
    <meta name="author" content="FitTrack">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Registration form</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
        }

        .left {
            background: url('../assets/images/barbell-bg.jpg');
            background-size: cover;
            color: #fff;
            width: 50%;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .left-content h1 {
            color: #fff;
            font-family: 'poppins', sans-serif;
            font-size: 3.5rem;
            font-weight: 700;

        }

        .left-content h2 {
            font-family: 'poppins', sans-serif;
            font-size: 3.5rem;
            font-weight: 700;
            color: red;
        }

        .left-content p {
            font-size: 20;
            color: #c2c2c2;

        }

        .right {
            background-color: #000;
            width: 50%;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .right-content {
            margin: 40px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .right-content label {
            color: #fff;
            font-weight: bold;
            font-size: 14px;
        }

        .login-box {
            width: 100%;
            max-width: 420px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .logo i {
            background: red;
            color: #ddd;
            padding: 10px;
            border-radius: 10px;
            font-size: 18px;
        }

        .logo a {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: white;
        }

        .logo h2 {
            font-size: 24px;
            color: #ddd;
        }

        .login-box h1 {
            font-size: 42px;
            margin-bottom: 10px;
        }

        .login-box p {
            color: #aaa;
            margin-bottom: 35px;
        }

        .input-group {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .input-group label {
            display: block;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .input-box {
            display: flex;
            align-items: center;
            background: #111;
            border: 1px solid #222;
            border-radius: 10px;
            padding: 14px;
        }

        .input-box i {
            color: #777;
            margin-right: 10px;
            background-color: transparent;
        }

        .input-box input {
            width: 100%;
            background: transparent;
            border: none;
            outline: none;
            color: white;
            font-size: 15px;
        }

        .row {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .row a {
            color: red;
            text-decoration: none;
        }

        .create-account {
            width: 100%;
            padding: 15px;
            background: red;
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            margin-bottom: 25px;
        }

        .create-account:hover {
            background: #ff4d4d;
        }

        .create-account i {
            background-color: transparent;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 25px 0;
            color: #777;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #333;
        }

        .divider span {
            margin: 0 15px;
        }

        .social-btn {
            width: 100%;
            padding: 14px;
            margin-bottom: 15px;
            background: #111;
            border: 1px solid #333;
            color: white;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
        }

        .social-btn:hover {
            background: #1b1b1b;
        }

        .signup {
            text-align: center;
            margin-top: 20px;
            color: #aaa;
            font-size: 14px;
        }

        .signup a {
            color: red;
            text-decoration: none;
        }
    </style>

</head>

<body>
    <div class="left">
        <div class="left-content">
            <h1>Start Your </h1>
            <h2>Transformantion</h2>
            <p>Join thousands of members who are already achieving their <br> fitness goals with FitTrack.</p>
        </div>
    </div>

    <div class="right">

        <div class="right-content">
            <div class="logo">
                <a href="../index.php">
                    <i class="fa-solid fa-dumbbell"></i>
                    <h2>FitTrack</h2>
                </a>
            </div>

            <h1>Create Account</h1>

            <p>Join FitTrack and start your fitness journey</p>
            <form method="POST" action="register_process.php">


                <div class="input-group">
                    <label for="name"> Full Name </label>

                    <div class="input-box">
                        <i class=" fa-solid fa-user"></i>
                        <input type="text" name="name"
                            placeholder=" John Anderson"
                            required>
                    </div>
                </div>

                <div class="input-group">
                    <label for="email">Email Address</label>
                    <div class="input-box">
                        <i class=" fa-solid fa-envelope"></i>
                        <input type="email" name="email"
                            placeholder=" your.email@gmail.com"
                            required>
                    </div>
                </div>

                <div class="input-group">
                    <label for="phone">Phone Number</label>
                    <div class="input-box">
                        <i class=" fa-solid fa-phone"></i>
                        <input type="phone"
                            name="phone"
                            placeholder=" 91+1234567890"
                            required>
                    </div>
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <div class="input-box">
                        <i class=" fa-solid fa-lock"></i>
                        <input type="password"
                            name="password"
                            placeholder=" Create a strong password"
                            required>
                    </div>
                </div>
                <div class="input-group">
                    <label for="password">Confirm Password</label>
                    <div class="input-box">
                        <i class=" fa-solid fa-lock"></i>
                        <input type="password"
                            name="confirm_password"
                            placeholder=" confirm your password"
                            required>
                    </div>
                </div>

                <div class="row">
                    <label>
                        <input type="checkbox">
                        I agree to the  <span><a href="#">Term of Service</a> and <a href="#">Privacy Policy</a></span>
                    </label>
                    

                </div>

                <button type="submit" class="create-account">Create Account
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </form>
            <div class="divider">
                <span>OR</span>
            </div>

            <button class="social-btn">
                Continue with Google
            </button>

            <button class="social-btn">
                Continue with Apple
            </button>
        </div>
    </div>



</body>

</html>