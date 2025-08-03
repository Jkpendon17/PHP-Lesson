<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
    <a href="index.php">HOME</a>
    <a href="view.php">VIEW</a>
    <a href="login.php">LOGIN</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Number</th>
                <th>lastName</th>
                <th>firstName</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "conn.php";

                $get_data = mysqli_query($conn,"SELECT * FROM students");
                while($data = mysqli_fetch_array($get_data)){

                
            ?>
            <tr>
                <td><?php echo $data['id'];?></td>
                <td><?php echo $data['id_num'];?></td>
                <td><?php echo $data['ln'];?></td>
                <td><?php echo $data['fn'];?></td>
                <td><?php echo $data['address'];?></td>
                <td>
                    <a href="process.php?id= <?php echo $data['id'];?>&&del_acc">Delete</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>    
</body>
</html>