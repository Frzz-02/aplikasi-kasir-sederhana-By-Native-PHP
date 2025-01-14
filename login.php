<?php 





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Web Kasir</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img src="assets/" alt="Logo" class="logo">
        </div>
        
        <div class="login-box">
            <h2>Log In</h2>
            <!-- Login Form -->
            <form action="" method=post>
                <div class="input-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>

                <div class="input-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <input class="login-btn" type="submit" name="submit" value="login">

            </form>
        </div>
    </div>
</body>
</html>
