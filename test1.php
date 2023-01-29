


<?php
session_start();
/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $data = [ 'name' => 'God', 'age' => -1 ];
echo json_encode( $data );
  
}
*/

if(empty($_SESSION)){
  header("Location:login.php");
  }
?>