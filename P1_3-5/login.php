<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h3> Student Login</h3>
    <form action="process.php" method="POST">
    <label>Email</label>
    <input type="email" name="admin_email" placeholder="Enter Email"required>
    <br>
    <label>Password</label>
    <input type="password" name="admin_pass" id="pass"required>
    <br>
    <input type="submit" value="Login" name ="admin_login">
    </form>
</body>
</html>