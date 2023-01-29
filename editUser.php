<?php

//TODO Dozvoliti pristup samo admin korisnicima

include_once "dbConnection.php";
$id=$_POST["id"];
$username= $_POST['username'];
$email= $_POST['email'];
$role=$_POST['role'];
$password= $_POST['newPassword'];


if(empty($_POST["username"])||empty($_POST["email"])||empty($_POST["role"])){
echo "error";
}else{
    if(empty($password)){
        $sqlQuery="UPDATE users SET username=?,email=?,role=? WHERE id="."'".$id."'";        
        $stmt=$conn->prepare($sqlQuery);        
        $stmt->bind_param("sss", $username,$email,$role);
        //echo $stmt;
        $stmt->execute();
    }
    else{
        $sqlQuery="UPDATE users SET username=?,email=?,role=?,password=? WHERE id="."'".$id."'";
        $stmt=$conn->prepare($sqlQuery);
        $stmt->bind_param("ssss", $username, $email,$role, password_hash($password,PASSWORD_DEFAULT));
        //echo $stmt;
        $stmt->execute();
    }

}




header("Location: users.php");
?>