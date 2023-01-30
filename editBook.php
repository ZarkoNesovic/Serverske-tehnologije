<?php
include_once 'dbConnection.php';
//var_dump($_POST);
if(!empty($_POST)){
    $id=$_POST["id"];
    $title=$_POST["title"];
    $author=$_POST["author"];
    $genre =$_POST["genre"];
    $price =$_POST["price"];
    $count =$_POST["count"];
    $year=$_POST["year"];
    $sqlQuery="UPDATE books SET title=?,author=?,genre=?,price=?,count=?,year=? WHERE id=".$id;
    $stmt=$conn->prepare($sqlQuery);
    $stmt->bind_param("ssssss",$title,$author,$genre,$price,$count,$year);
    $stmt->execute();
}
header("Location: formaZaEdit.php");
?>