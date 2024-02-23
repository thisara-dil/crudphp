<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?=include('dbcon.php');?>
<h1>Crud Application in PHP </h1>
<div class="container">
    <div class="table">
        <table>
            <thead>
            <tr>
                <td>ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Age</td>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT * FROM students";
            $result = mysqli_query($connection, $sql);
            if(!$result){
                die("Query Failed");
            }
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?=$row['id']?></td>
                    <td><?=$row['first_name']?></td>
                    <td><?=$row['last_name']?></td>
                    <td><?=$row['age']?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
