<?php
include_once "functions.php";
session_start();
if(!empty($_SESSION)){
$author="";
$title="";
$genre="";
if(!empty($_GET["author"]))
$author=$_GET["author"];
if(!empty($_GET["title"]))
$title=$_GET["title"];
if(!empty($_GET["genre"]))
$genre=$_GET["genre"];
echo booksToJson($author,$title,$genre);
  }else{
    echo "Please log in";
  }

