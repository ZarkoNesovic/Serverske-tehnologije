<?php
include_once "test.php";
include_once "dbConnection.php";

$usernameErr = $emailErr = $passwordErr =$emailExists= "";
  if(!empty($_GET['username']) && !empty($_GET['password'])&& !empty($_GET['email'])){

    $username= $_GET['username'];
    $password= password_hash($_GET['password'],PASSWORD_DEFAULT);
    $email= $_GET['email'];
    $role="user";

  if(empty($username)||empty($password)||empty($email)){
    header("Location:/STI/login.php?loginError=empty");
    
  }
  //Provera parametara forme koriscenjem regExp izraza
  //Provera sifre
  if(!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/",$password)){
    $passwordErr="Invalid password format";
  }
  //Provera korisnickog imena
  if(!preg_match("/^[a-zA-Z]*$/",$username)){
    $usernameErr="Invalid username format";
  }
  //Provera email adrese koriscenjem ugradjenog filtera
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $emailErr="Enter valid email adress";
  }
  /*
  Nakon utvrdjivanja da li postoji greska podataka unetih u formi postoji ili ne pristupa se akcijama
  Ukoliko greska ne postoji pokusava se unos podataka u bazu. Ovde moze doci do greske da se uneta adresa
  vec nalazi u bazi te se stoga korisnik obavestava o tome. Ukoliko nema greske korisnik se preusmerava na 
  login stranicu 
  */
  if(empty($passwordErr)&&empty($usernameErr)&&empty($emailErr)){
    $stmt = $conn->prepare("INSERT INTO users (username, password, email,role) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $password, $email,$role);
    $stmt->execute();
  //echo $conn->error;

  //Provera da li je doslo do greske prilikom sql upita ukolilo jeste prikazujemo korisniku poruku
  if($conn->error){
    $emailExists="Email already exists";
    }else{
    header("Location:login.php");
    }
  }
  // /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/
  //var_dump(preg_match("/^[a-zA-Z]*$/",$password));
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/registerForm.css" />
  </head>
  <body class="d-flex justify-content-center align-items-lg-center">

    <div class="container form-container-size">
      <form method="get" action="register.php" name="register-form">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="text" class="form-control" name="username" value="Zarko" pattern="[a-zA-Z0-9.]+"/>
          <span class="error"><?php echo $usernameErr;?></span>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Email address</label
          >
          <input type="text" name="email" class="form-control" value="a123@123.com" minlength="5" maxlength="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
          <span class="error"><?php echo $emailErr;?></span>
          <span class="error"><?php echo $emailExists;?></span>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Password</label>
          <input type="text" class="form-control" name="password" value="Zarneso93@" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/>
          <span class="error"><?php echo $passwordErr;?></span>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password_check" value="Zarnesoooo" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/>
        </div>
        <button type="submit" class="btn btn-primary" id="register" name="register">Register</button>
      </form>
    </div>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/js/formValidation.js"></script>
  </body>
</html>




