<?php
include '../conn.php';
session_start();

if(empty($_SESSION['email'])){
?>
<script>
    alert("Session Empty Please Login");
    location.href='../login.php';
</script>
<?php
}else{
    $e = $_SESSION['email'];
    $get_admin= mysqli_query($conn,"SELECT * FROM admin WHERE email ='$e'");
    while($admin = mysqli_fetch_query($get_admin)){
        $lastname = $admin['last_name'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <?php echo $lastname;?>
    <a href="../login.php">Logout</a>
</body>
</html>