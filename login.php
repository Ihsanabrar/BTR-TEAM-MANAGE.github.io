<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BIGETRON</title>
    <link rel="stylesheet" href="asset/style4.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #121212;
            color: #fff;
            font-family: 'Roboto Flex', sans-serif;
        }

        .login-container {
            background-color: #1e1e1e;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-family: 'Oswald', sans-serif;
            font-size: 28px;
            letter-spacing: 2px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%; /* Set an explicit width */
            box-sizing: border-box; /* Ensure padding doesn't affect width */
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
        }

        .login-container .password-container {
            position: relative;
        }

        .login-container .password-container input[type="password"],
        .login-container .password-container input[type="text"] {
            padding-right: 40px; /* Space for the eye icon */
        }

        .login-container .password-container .toggle-eye {
            position: absolute;
            right: 10px;
            top: 30%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #fff;
            font-size: 18px;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #e50914;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #b20710;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form id="login-form" onsubmit="return validateLogin()">
            <input type="text" id="username" name="username" placeholder="Username" required>
            <div class="password-container">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <span class="toggle-eye" onclick="togglePassword()">👁️</span>
            </div>
            <button type="submit">LOGIN</button>
        </form>
    </div>

    <script>
        function validateLogin() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            var validUsername = 'Ihsan';
            var validPassword = 'Admin';

            if (username === validUsername && password === validPassword) {
                window.location.href = 'dashboard.php';
                return false;
            } else {
                alert('Data yang dimasukan tidak sesuai!!');
                return false;
            }
        }

        function togglePassword() {
            var passwordField = document.getElementById('password');
            var toggleEye = document.querySelector('.toggle-eye');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleEye.textContent = '👁️';
            } else {
                passwordField.type = 'password';
                toggleEye.textContent = '👁️';
            }
        }
    </script>
</body>

</html>
