<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Sign Up Form</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /*
        * Variables & Global Styles
        */
        :root {
            --navy-teal: #008080; /* A rich navy teal color */
            --white: #ffffff;
            --light-gray: #f0f0f0;
            --transition-speed: 0.6s;
            --transition-timing: ease-in-out;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            /* UPDATED: Lighter gradient background for better contrast */
            background: linear-gradient(135deg, #f0f8ff 0%, #e0ffff 100%);
        }

        /*
        * Container & Form Styling
        */
        .container {
            background-color: var(--white);
            border-radius: 20px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 
                        0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            overflow: hidden;
            width: 800px; 
            max-width: 100%;
            min-height: 500px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all var(--transition-speed) var(--transition-timing);
            padding: 0 50px;
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        form {
            background-color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100%;
            text-align: center;
        }

        h1 {
            font-weight: bold;
            margin-bottom: 10px;
            color: var(--navy-teal);
        }

        span {
            font-size: 12px;
            margin-bottom: 10px;
            color: #333;
        }

        /* Social Icons */
        .social-container {
            margin: 10px 0;
        }

        .social-container a {
            border: 1px solid var(--light-gray);
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
            color: #333;
            text-decoration: none;
            transition: transform 0.3s ease;
        }
        .social-container a:hover {
            transform: scale(1.1);
        }

        /* Input Fields */
        .input-group {
            background-color: var(--light-gray);
            border: none;
            padding: 10px 15px;
            margin: 8px 0;
            width: 100%;
            border-radius: 8px;
            display: flex;
            align-items: center;
        }

        .input-group input {
            background: none;
            border: none;
            outline: none;
            width: 100%;
            padding: 5px 10px;
            font-size: 14px;
        }

        .input-group i {
            color: #777;
        }
        
        /* Buttons */
        button {
            border-radius: 20px;
            border: 1px solid var(--navy-teal);
            background-color: var(--navy-teal);
            color: var(--white);
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
            cursor: pointer;
            margin-top: 10px;
        }

        button:active {
            transform: scale(0.95);
        }

        button.ghost {
            background-color: transparent;
            border-color: var(--white);
            margin-top: 15px;
        }

        /* Forgot Password Link */
        .forgot-password {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        /*
        * Overlay Styling & Transition
        */
        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform var(--transition-speed) var(--transition-timing);
            z-index: 100;
        }

        .overlay {
            background: var(--navy-teal);
            background: linear-gradient(to right, #009999, var(--navy-teal)); /* Slight gradient within the teal */
            color: var(--white);
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform var(--transition-speed) var(--transition-timing);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform var(--transition-speed) var(--transition-timing);
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .overlay-panel h1 {
            color: var(--white);
        }

        .overlay-panel p {
            font-size: 14px;
            font-weight: 300;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        /*
        * Movement: Add the 'right-panel-active' class to the 'container' to trigger the transitions
        */
        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {
            0%, 49% {
                opacity: 0;
                z-index: 1;
            }
            50%, 100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }
    </style>
</head>
<body>

<div class="container" id="container">
    
    <div class="form-container sign-up-container">
        <form action="#" method="POST">
            <h1>Create Account</h1>
            <div class="social-container">
                <a href="#"><i class="bx bxl-google"></i></a>
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-linkedin"></i></a>
            </div>
            <span>or use your email for registration</span>

            <div class="input-group">
                <i class="bx bx-user"></i>
                <input type="text" placeholder="Name" name="name" required />
            </div>

            <div class="input-group">
                <i class="bx bx-envelope"></i>
                <input type="email" placeholder="Email" name="email" required />
            </div>

            <div class="input-group">
                <i class="bx bx-lock-alt"></i>
                <input type="password" placeholder="Password" name="password" required />
            </div>
            
            <button type="submit">Sign Up</button>
        </form>
    </div>

    <div class="form-container sign-in-container">
        <form action="#" method="POST">
            <h1>Sign In</h1>
            <div class="social-container">
                <a href="#"><i class="bx bxl-google"></i></a>
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-linkedin"></i></a>
            </div>
            <span>or use your email password</span>

            <div class="input-group">
                <i class="bx bx-envelope"></i>
                <input type="email" placeholder="Email" name="email" required />
            </div>

            <div class="input-group">
                <i class="bx bx-lock-alt"></i>
                <input type="password" placeholder="Password" name="password" required />
            </div>

            <a href="#" class="forgot-password">Forgot Your Password?</a>
            <button type="submit">Sign In</button>
        </form>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            
            <div class="overlay-panel overlay-left">
                <h1>Welcome!</h1>
                <p>Enter your personal details to use all of site features</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>

            <div class="overlay-panel overlay-right">
                <h1>Welcome Back!</h1>
                <p>Register with your personal details to use all of site features</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>

        </div>
    </div>
</div>

<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    // Add 'right-panel-active' class to container to move the overlay to the left,
    // revealing the sign-up form.
    signUpButton.addEventListener('click', () => {
        container.classList.add('right-panel-active');
    });

    // Remove 'right-panel-active' class to move the overlay back to the right,
    // revealing the sign-in form.
    signInButton.addEventListener('click', () => {
        container.classList.remove('right-panel-active');
    });
</script>

</body>
</html>