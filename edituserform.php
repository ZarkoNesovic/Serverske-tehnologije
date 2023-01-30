<?php
session_start();

include_once 'dbConnection.php';
//echo $_GET['id'];

if(!empty($_GET['id'])){
$sqlQuery="SELECT id,username,email,role FROM users WHERE id=".$_GET['id'];
$result=$conn->query($sqlQuery);
$user=$result->fetch_assoc();
//echo $user["username"];
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
</head>
<body>
    <?php include_once "header.php"; ?>

<div class="container">
    <form action="editUser.php" method="POST">
        
        <input type="hidden" name="id" value=<?php echo $user["id"] ?>>
        <p>Username</p>
    <input type="text" name="username" id="" value=<?php echo $user["username"] ?>>
    <p>Email</p>
        <input type="text" name="email" id="" value=<?php echo $user["email"] ?>>
        <p>New password</p>
        <input type="text" name="newPassword" id="">
        <p>Role</p>
    <select name="role" >        
        <option value="user" <?php if($user['role']==="user") echo "selected"?>>User</option>
        <option value="admin" <?php if($user['role']==="admin") echo "selected"?>>Admin</option>
  </select>
  <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>