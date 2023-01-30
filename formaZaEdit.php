<?php 
include_once "dbConnection.php";
session_start();

if($_SESSION["role"]!="admin"){
    header("Location: index.php");
}

$sqlQuery="SELECT * FROM books";
$result = $conn->query($sqlQuery);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/loginForm.css" />
</head>
<body>
<?php include_once "header.php"; ?>
<div class="container">
<table class='table table-striped'>
        <thead>
<tr>
    <th>id</th>
    <th>title</th>
    <th>author</th>
    <th>genre</th>
    <th>price</th>
    <th>count</th>
    <th>year</th>
</tr>
        </thead>
        <tbody>
            <?php
            while($book = $result->fetch_assoc()){
                echo    "<tr class='table-light'>
                            <th>".$book['id']."</th>
                            <th>".$book['title']."</th>
                            <th>".$book['author']."</th>
                            <th>".$book['genre']."</th>
                            <th>".$book['price']."</th>
                            <th>".$book['count']."</th>
                            <th>".$book['year']."</th>
                            <th>"."<a href='deleteBook.php?id=".$book['id']."'".">Delete</a>"."</th>
                            <th>"."<a href='editBookform.php?id=".$book['id']."'".">Edit</a>"."</th>
                        </tr>";
            }

              ?>
        </tbody>
    </table>
    </div>
    <?php include_once "footer.html";; ?>
</body>
</html>
