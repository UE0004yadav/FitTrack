    <?php
    session_start();
    include("../config/db.php");
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FitTrack Login</title>
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
<style>
     /* Login Page Styles */
            .login-page-container {
                display: flex;
                height: 100vh;

            }

            /* LEFT SIDE */

            .left-section {
                width: 45%;
                background: #000;
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 40px;
                padding-top: 30%;
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
                justify-content: space-between;
                align-items: center;
                margin-bottom: 25px;
                font-size: 14px;
            }

            .row a {
                color: red;
                text-decoration: none;
            }

            .sign-btn {
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

            .sign-btn:hover {
                background: #ff4d4d;
            }
             .sign-btn i {
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
            
            /* RIGHT SIDE */

            .right-section {
                width: 55%;
                background:
                    linear-gradient(rgba(0, 0, 0, 0.5),
                        rgba(0, 0, 0, 0.5)),
                    url('../assets/images/dumbbel-bg.jpg');

                background-size: cover;
                background-position: center;

                display: flex;
                justify-content: center;
                align-items: center;

                padding: 50px;
                color: white;
            }

            .content {
                max-width: 500px;
            }

            .content h1 {
                font-size: 58px;
                line-height: 1.1;
                margin-bottom: 20px;
            }

            .content span {
                color: red;
            }

            .content p {
                color: #ddd;
                font-size: 18px;
                line-height: 1.7;
            }

            /* RESPONSIVE */

            @media(max-width:900px) {

                .container {
                    flex-direction: column;
                }

                .left-section,
                .right-section {
                    width: 100%;
                }

                .right-section {
                    min-height: 400px;
                }

                .content h1 {
                    font-size: 40px;
                }
            }
            </style>
        
    </head>

    <body>

        <div class="login-page-container">

            <!-- LEFT -->

            <div class="left-section">

                <div class="login-box">

                    <div class="logo">
                        <a href="../index.php">
                            <i class="fa-solid fa-dumbbell"></i>
                            <h2>FitTrack</h2>
                        </a>
                    </div>

                    <h1>Welcome Back</h1>

                    <p>Sign in to continue your fitness journey</p>

                    <form action="../auth/login_process.php" method="POST">

                        <div class="input-group">
                            <label>Email Address</label>

                            <div class="input-box">
                                <i class="fa-solid fa-envelope"></i>

                                <input type="email" name="email"
                                    placeholder="your.email@example.com">
                            </div>
                        </div>

                        <div class="input-group">
                            <label>Password</label>

                            <div class="input-box">
                                <i class="fa-solid fa-lock"></i>

                                <input type="password" name="password"
                                    placeholder="Enter your password">
                            </div>
                        </div>

                        <div class="row">

                            <label>
                                <input type="checkbox">
                                Remember me
                            </label>

                            <a href="../auth/forgot-password.php">Forgot?</a>

                        </div>

                        <button  type="submit" class="sign-btn">
                            Sign In
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

                    <div class="signup">
                        Don't have an account?
                        <a href="../auth/register.php">Sign up now</a>
                    </div>

                </div>

            </div>

            <!-- RIGHT -->

            <div class="right-section">

                <div class="content">

                    <h1>
                        Your Fitness
                        <span>Journey Awaits</span>
                    </h1>

                    <p>
                        Track your progress, manage your membership,
                        and achieve your fitness goals with FitTrack.
                    </p>

                </div>

            </div>

        </div>

    </body>

    </html>