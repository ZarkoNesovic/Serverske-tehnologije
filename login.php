<?php
session_start();

if(!empty($_SESSION)){
  header("Location:galerija.php");
  }


//NOTE:Podesiti sesiju
include_once "dbConnection.php";
//TODO Korisnik treba da dobije odgovor od servera ukoliko su uneti podatci netacni
if ($_SERVER["REQUEST_METHOD"] == "POST"){


$email="";
$password="";

  if(!empty($_POST["email"]||!empty($_POST["password"]))){
      $email=$_POST["email"];
      $password= $_POST['password'];
      
      $sql = "SELECT id, username, password,role FROM users WHERE email = ?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s",$email);
      $stmt->execute();                        
    $result = $stmt->get_result();
    $userSQL=$result->fetch_assoc();
if($result->num_rows===1){
  if(password_verify($password, $userSQL['password'])){
  $_SESSION["username"]=$userSQL["username"];
  $_SESSION["role"]=$userSQL["role"];
  header("Location:index.php");
  }else{    
   header("Location:login.php");
  }

  //var_dump($userSQL["username"]);
}

    //$result->num_rows      
    
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log in</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/loginForm.css" />
  </head>
  <body class="d-flex justify-content-center align-items-lg-center">

    <div class="container form-container-size">
      <form method="post" action="login.php" name="register-form">        
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Email address</label
          >
          <input type="text" name="email" class="form-control" value="a123@123.com" minlength="5" maxlength="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>        
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Password</label>
          <input type="text" class="form-control" name="password" value="Zarneso93@" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/>         
        </div>       
        <button type="submit" class="btn btn-primary" id="register">Login</button>
        <br>
        <a href="register.php">If u dont have account sign up here</a>
      </form>
    </div>
  </body>
  <script src="assets/js/formValidation.js"></script>
</html>
