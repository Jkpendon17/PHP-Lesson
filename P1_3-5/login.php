<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h3>Student Login</h3>
    <form action="process.php" method ="POST">
    <label>Email</label><br>
    <input type = "email"name="stud_email" placeholder="Enter your email address"required>
    <br>
    <label>Password</label><br>
    <input type="password" id = "pass" name = "stud_pass"placeholder = "Enter your password">
    <br>
    <input type="checkbox" onclick = "showpass()">Showpassword
    <br>
    <input type="submit" name="stud_login" value="Login">
<script>
    function showpass(){
        var x = document.getElementById('pass');
        if(x.type === "password"){
            x.type = "text";
    }else{
        x.type = "password";
    }
    }
</script>
    </form>
</body>
</html>