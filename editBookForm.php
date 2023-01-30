<?php
if($_SESSION["role"]!="admin"){
    header("Location: index.php");
}

include_once 'dbConnection.php';
//echo $_GET['id'];
session_start();
if(!empty($_GET['id'])){
$sqlQuery="SELECT id,title,author,genre,price,count,year FROM books WHERE id=".$_GET['id'];
$result=$conn->query($sqlQuery);
$book=$result->fetch_assoc();
//echo $user["username"];
//var_dump($book);
}

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
<body >
<?php include_once "header.php"; ?>
<div class="d-flex justify-content-center align-items-lg-center flex-column">
<form action="editBook.php" method="POST">
      
        
    
        id
        <input type="text" class="form-control" name="id"value="<?php echo htmlspecialchars($book['id']); ?>">
       
        Title
        <input type="text" class="form-control" name="title"value="<?php echo htmlspecialchars($book['title']); ?>">
        
        Author
        <input type="text" class="form-control" name="author" id="" value="<?php echo htmlspecialchars($book['author']); ?>">
   
        Genre
        <input type="text" class="form-control" name="genre" id="" value="<?php echo htmlspecialchars($book['genre']); ?>">
    
        Price
        <input type="number" class="form-control" name="price" id="" value="<?php echo htmlspecialchars($book['price']); ?>">
   
        Count
        <input type="number" class="form-control" name="count" id="" value="<?php echo htmlspecialchars($book['count']); ?>">
     
        Year
        <input type="number" class="form-control" name="year" id="" value="<?php echo htmlspecialchars($book['year']); ?>">
  
        <input type="submit" value="Edit">
    </form>

</div>
<?php include_once "footer.html";; ?>
</body>
</html>