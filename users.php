<?php
include_once "dbConnection.php";
$sqlQuery="SELECT * FROM users";
$result = $conn->query($sqlQuery);

//var_dump($result->fetch_all()) ;

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
</head>
<body>
<?php include_once "header.php"; ?>
<div class="container">
<table class='table table-striped'>
        <thead>
<tr>
    <th>id</th>
    <th>username</th>
    <th>email</th>
    <th>role</th>
    <th>remove</th>
    <th>edit</th>
</tr>
        </thead>
        <tbody>
            <?php
            while($user = $result->fetch_assoc()){
                echo    "<tr class='table-light'>
                            <th>".$user['id']."</th>
                            <th>".$user['username']."</th>
                            <th>".$user['email']."</th>
                            <th>".$user['role']."</th>
                            <th>"."<a href='deleteuser.php?id=".$user['id']."'".">Delete</a>"."</th>
                            <th>"."<a href='edituserform.php?id=".$user['id']."'".">Edit</a>"."</th>
                        </tr>";
            }

              ?>
        </tbody>
    </table>
        </div>
</body>
</html>