<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendon</title>
</head>
<body>
    <h3>Student Registration</h3>
    <a href="index.php">HOME</a>
    <a href="view.php">VIEW</a>
    

    <form action="process.php" method="POST">
    <input type="text" name="id_num"
     placeholder="ID Number" required>
    <br>
    <input type="text" name="ln" 
    placeholder="Enter lastname" required>
    <br>
    <input type="text" name="fn" 
    placeholder="Enter firstname" required>
    <br>
    <input type="text" name="address"
    placeholder="Enter Address"required>
    <br>
    <input type="submit" name="reg" value="Register">
    


    </form>
</body>
</html>