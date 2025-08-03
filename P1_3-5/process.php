<?php 
include "conn.php";

//
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
//Delete account
if(isset($_GET['del_acc'])){
    $acc_id = $_GET['id'];
    
    $delete = mysqli_query($conn,"DELETE FROM students WHERE id='$acc_id'");
    
    if($delete){
       ?>
        <script>
            alert("Account deleted successfully");
            location.href="view.php";
        </script>
       <?php
    }

}


?>