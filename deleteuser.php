<?php 

//TODO:Dozvoliti pristup samo admin korisnicima

include_once 'dbConnection.php';
echo $_GET['id'];
if(!empty($_GET['id'])){
$sqlQuery="DELETE FROM users WHERE id=".$_GET['id'];
$conn->query($sqlQuery);
header("Location: users.php");
}
?>