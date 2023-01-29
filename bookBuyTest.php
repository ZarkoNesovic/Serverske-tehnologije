<?php  
include_once "functions.php";
//TODO Stilizacija ove stranice je neophodna

if($_GET["id"]){
//echo $_GET["id"];
   echo buyBookByID($_GET["id"]);
echo "Cestitamo uspesno ste kupili knjigu";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uspesna kupovina</title>
</head>
<body>
    <a href="formaZaPretrazivanje.php">Pretrazuj dalje</a>
</body>
</html>



