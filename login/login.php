<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <title>Cyberclass</title>
</head>
<body>
    <div class="welcome-logo">
        <h1>Welcome To CSC</h1>
        <img type="png" src="../Assets/csc.png" style="width: 5%;">
    </div>

    <div class="form-group">
    <form action="../Connection/login_check.php" method="POST">
        <h2>Login</h2>
        <label>Email: </label><br><input type="email" name="email" placeholder="enter your email"><br><br>
        <label>Password: </label><br><input type="password" name="password" placeholder="enter your password">
        <br>
        <button type="submit" action="./Index/index.php">Submit</button>
    </form>
</div>

    
</body>
</html>