<?php 
include "conn.php";

//Insert query
if(isset($_POST['reg'])){

$id_num = $_POST['id_num'];
$ln = $_POST['ln'];
$fn =$_POST['fn'];
$address =$_POST['address'];

//check if id number exist
$check = mysqli_query($conn,
"SELECT * FROM students WHERE id_num ='$id_num'");
 if($check -> num_rows >=1){
    echo "This id number exist";
 }else{
    $insert = mysqli_query($conn,
    "INSERT INTO students VALUES('0','$id_num','$ln','$fn','$address')");

    if($insert){
        echo "Data inserted";
    }else{
        echo"Data not inserted";
    }
 }
}
//admin Login
if(isset($_POST['admin_login'])){
    $admin_email = mysqli_real_escape_string($conn,$_POST['admin_email']);
    $admin_pass = mysqli_real_escape_string($conn,$_POST['admin_pass']);

    //query for login
    $login = mysqli_query($conn,"SELECT * FROM admin WHERE email ='$admin_email' AND password ='$admin_pass'");
    if($login-> num_rows>=1){
        $_SESSION['email'] = $admin_email;
?>
<script>
    alert("Login Success");
    location.href ='index.php';
</script>
<?php

    }else{
        ?>
        <script>
            alert("Wrong email or Password");
            location.href ='login.php';
        </script>
        <?php
    }
    
}

?>