
<?php
session_start();
// remove all session variables
var_dump($_SESSION);
session_unset();
var_dump($_SESSION);
// destroy the session
session_destroy();

header("Location: index.php");
var_dump($_SESSION);
?>