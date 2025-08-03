<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Home</a>
    <a href="view.php">View</a>
    <table>
        <thead>
            <tr>
            <th>ID</th>
            <th>ID_NUM</th>
            <th>LastName</th>
            <th>FirstName</th>
            <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conn.php';
            $get_data = mysqli_query($conn,"SELECT * FROM students");
            while($data = mysqli_fetch_array($get_data)){
            ?>
            <tr>
                <td><?php echo $data['id'];?></td>
                <td><?php echo $data['id_num'];?></td>
                <td><?php echo $data['lastname'];?></td>
                <td><?php echo $data['firstname'];?></td>
                <td><?php echo $data['address'];?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>