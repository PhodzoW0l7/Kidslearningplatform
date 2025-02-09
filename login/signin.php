<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="../style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container" id="login">
        <h1 class="form-title">Login</h1>
        <form method="post" action="">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <button type="submit" id="signup-btn">Sign In</button>
        </form>
        <p><a href="#forgot-password">Forgot your password?</a></p>
        <p>Don't have an account yet? <a href="./index.html">Sign up</a></p>
    </div>
</body>
</html>
