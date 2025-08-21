<!DOCTYPE html>
<html>
<head>
    <title>loginpage</title>
    <link rel="stylesheet" type="text/css" href="mystyles.css">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background: #000; /* Changed background to black */
            color: #fff;
            text-align: center;
            padding: 50px;
        }

        .login-header {
            text-align: center;
            margin-bottom: 20px;
            margin-top: 80px;
        }
        .login-header h1 {
            font-size: 2.5em;
            font-weight: bold;
            margin-bottom: 20px;
            background: #000;
        }
        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo-container img {
            width: 250px;
            height: auto;
            padding-left: 100px;
        }
        .login-form {
            font-family: 'Times New Roman', Times, serif;
            background: linear-gradient(135deg, #8e24aa 0%, #ff69b4 100%); /* Gradient background for the box */
            padding: 40px; /* Increased padding for better spacing */
            border-radius: 12px;
            box-shadow: 0 4px 16px #222, 0 0 16px #ff69b4;
            max-width: 800px; /* Expanded width */
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .login-form input, .login-form select, .login-form button {
            font-family: 'Times New Roman', Times, serif;
            width: 100%;
            padding: 12px; /* Increased padding */
            margin: 12px 0; /* Adjusted margin */
            border: none;
            border-radius: 8px;
            font-size: 18px; /* Increased font size */
        }
        .login-form input, .login-form select {
            font-family: 'Times New Roman', Times, serif;
            background: #000; /* Black background */
            color: #fff; /* White text */
            box-shadow: 0 0 8px #ff69b4; /* Pink glow */
            border: none;
            border-radius: 8px;
            padding: 12px;
            margin: 12px 0;
            font-size: 18px;
            transition: box-shadow 0.3s ease;
        }
        .login-form input:focus, .login-form select:focus {
            box-shadow: 0 0 12px #ff69b4; /* Stronger pink glow on focus */
            outline: none;
        }
        .login-form button {
            font-family: 'Times New Roman', Times, serif;
            background: linear-gradient(135deg, #8e24aa 0%, #ff69b4 100%);
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
        }
        .login-form button:hover {
          font-family: 'Times New Roman', Times, serif;
            background: #ff69b4;
            transform: translateY(-2px);
        }

        /* Animation Keyframes */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes slideInFromTop {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes bounceIn {
    from {
        transform: scale(0.8);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

@keyframes slideInFromLeft {
    from {
        transform: translateX(-100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

/* Apply Animations */
.navbar {
    animation: slideInFromTop 1s ease-in-out;
}

.login-header h1 {
    animation: fadeIn 1.5s ease-in-out;
}

.logo-container img {
    animation: bounceIn 2s ease-in-out;
}

.login-form {
    animation: slideInFromLeft 1.5s ease-in-out;
}

.login-form input, .login-form select, .login-form button {
    animation: fadeIn 1.5s ease-in-out;
    animation-delay: 0.3s;
}
    </style>
</head>
<body>
          <!-- Navbar -->
        <nav class="navbar">
    <span class="nav-title">BOSSIFY - 10TH YEAR EDITION</span>
     <ul class="nav-list">
            <li><a href="home.php">Home</a></li>
            <li><a href="nr.php">Notes and Reviewers</a></li>
            <li><a href="au.php">About us</a></li>
            <li><a href="cu.php">Contact us</a></li>
            <li>
                <a href="login.php" class="login-btn" style="background-image: url('log.png'); background-position: center; background-repeat: no-repeat; background-size: contain; width: 50px; height: 50px; border-radius: 50%; background-color: transparent; box-shadow: none; border: none;"></a>
            </li>
        </ul>
</nav>
    <div class="login-header">
        <h1>CREATE ACCOUNT</h1>
    </div>
    <form class="login-form" action="process_login.php" method="POST">
        <div class="logo-container">
            <img src="bossy.png" alt="Bossy Logo">
        </div>
        <input type="text" name="user_name" placeholder="Username" required>
        <input type="text" name="full_name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>
        <select name="grade" required>
            <option value="" disabled selected>Select Grade</option>
            <option value="Grade 7">Grade 7</option>
            <option value="Grade 8">Grade 8</option>
            <option value="Grade 9">Grade 9</option>
            <option value="Grade 10">Grade 10</option>
        </select>
        <select name="section" required>
            <option value="" disabled selected>Select Section</option>
            <option value="CALASANZ">CALASANZ</option>
            <option value="CZARTORYSKI">CZARTORYSKI</option>
            <option value="RINALDI">RINALDI</option>
            <option value="SANDOR">SANDOR</option>
        </select>
        <button type="submit">Create Account</button>
        <a href="forgot_password.php" style="color: #000; text-decoration: none; margin-top: 12px; display: inline-block;">Forgot Password?</a> <!-- Changed text color to black -->
    </form>

    <script>
document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll(".login-form input, .login-form select, .login-form button");
    elements.forEach((element, index) => {
        element.style.animationDelay = `${index * 0.3}s`;
    });
});
</script>
</body>
</html>
