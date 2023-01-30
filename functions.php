<?php
$conn = new mysqli("localhost", "root", "", "test");

function bookSearch($author='',$title='',$genre=''){
include_once "dbConnection.php";
//$conn = new mysqli("localhost", "root", "", "test");

$authorStrSql='';
$titleStrSql='';
$genreIn="";
$result;
if(!empty($author)){
if(!empty($genre)){

$authorStrSql="AND author LIKE '%".$author."%'";
}else{
    $authorStrSql="author LIKE '%".$author."%'";
}
}
if(!empty($title)){
if(!empty($author)||!empty($genre)){
$titleStrSql="AND title LIKE '%".$title."%'";
}
else{
    $titleStrSql="title LIKE '%".$title."%'";
}
}
if(!empty($genre)){


foreach($genre as $row){
$temp="'".$row."'";
    if(empty($genreIn)){
$genreIn=$temp;
}else{
$genreIn=$genreIn.",".$temp;
}
}
$genreIn="genre IN(".$genreIn.")";
}

  //var_dump($genre);


//TODO Ako ima vremena ispraviti upit umesto * upisati kolone po zeljenom redosledu
if(!empty($genreIn)||!empty($authorStrSql)||!empty($titleStrSql)){
    $sqlQuery="SELECT * FROM books WHERE ".$genreIn.$authorStrSql.$titleStrSql."ORDER BY genre";
    $result = $conn->query($sqlQuery);
    //echo $result->num_rows ;
}else{
    $sqlQuery="SELECT * FROM books ORDER BY genre";
    $result = $conn->query($sqlQuery);
    //echo $result->num_rows ;
}

return $result;
}

function printBooks($result){
if($result->num_rows>1){
    while($row = $result->fetch_assoc()) {       
        echo "id: " . $row["id"]. " - Name: " . $row["title"]. " Author: " . $row["author"]. "<br>". " Genre: " . $row["genre"]. "<br>";
    }   
    }else{
        echo "No books";
    }
}
function booksToJson($author,$title,$genre){
    $result=bookSearch($author,$title,$genre);
    $data=$result->fetch_all(MYSQLI_ASSOC);    
    return json_encode($data);
}

function buyBookByID($id){
    include_once "dbConnection.php";
    $sqlQuery="SELECT count FROM books WHERE id=".$id;
    $result=$conn->query($sqlQuery);
    $book_count=$result->fetch_assoc();
    $remaining_book_count=--$book_count["count"];
    
    if ($remaining_book_count>0){
        $sqlQuery="UPDATE books SET count=".$remaining_book_count." WHERE id=".$id;
        $conn->query($sqlQuery);
        return $sqlQuery ;   
    }else{
        return "-1";
    }
      
}
?>




