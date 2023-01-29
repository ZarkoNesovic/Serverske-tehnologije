<?php



include_once "dbConnection.php";


$authorStrSql='';
$titleStrSql='';
$genreIn="";
if(!empty($_GET['author'])){
if(!empty($_GET['genre'])){

$authorStrSql="AND author LIKE '%".$_GET['author']."%'";
}else{
    $authorStrSql="author LIKE '%".$_GET['author']."%'";
}
}
if(!empty($_GET['title'])){
if(!empty($_GET['author'])||!empty($_GET['genre'])){
$titleStrSql="AND title LIKE '%".$_GET['title']."%'";
}
else{
    $titleStrSql="title LIKE '%".$_GET['title']."%'";
}
}
if(!empty($_GET['genre'])){


foreach($_GET["genre"] as $row){
$temp="'".$row."'";
    if(empty($genreIn)){
$genreIn=$temp;
}else{
$genreIn=$genreIn.",".$temp;
}
}
$genreIn="genre IN(".$genreIn.")";
}

  //var_dump($_GET["genre"]);


$result;
if(!empty($genreIn)||!empty($authorStrSql)||!empty($titleStrSql)){
    $sqlQuery="SELECT * FROM books WHERE ".$genreIn.$authorStrSql.$titleStrSql."GROUP BY genre";
    $result = $conn->query($sqlQuery);
    echo $result->num_rows ;
}else{
    $sqlQuery="SELECT * FROM books ";
    $result = $conn->query($sqlQuery);
    echo $result->num_rows ;
}



echo $sqlQuery;
echo '<br>';
if($result->num_rows>1)
{
while($row = $result->fetch_assoc()) {
    
    echo "id: " . $row["id"]. " - Name: " . $row["title"]. " Author: " . $row["author"]. "<br>". " Genre: " . $row["genre"]. "<br>";
  }
  
}else{
    echo "No books";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Book title
        <input type="text" name="title" id="">
        author
        <input type="text" name="author" id="">
        genre
        <br>
    fantasy
      <input type="checkbox"  name="genre[]" value="fantasy">
      history
      <input type="checkbox"  name="genre[]" value="history">
      clasics
      <input type="checkbox"  name="genre[]"value="clasics">
      horor
      <input type="checkbox"  name="genre[]"value="horor">
      music
      <input type="checkbox"  name="genre[]"value="music">
      children
      <input type="checkbox"  name="genre[]"value="children">
      advanture
      <input type="checkbox"  name="genre[]"value="advanture">
     <input type="submit" value="Submit">
    </form>


<input type='button' onclick='tableFromJson()' value='Create Table from JSON data' />
    <p id="showData"></p>

    
</body>

<script>
  let tableFromJson = () => {
    // the json data.
    const myBooks = [
      {'Book ID': '1', 'Book Name': 'Challenging Times',
       'Category': 'Business', 'Price': '125.60','author':'a'
      },
      {'Book ID': '2', 'Book Name': 'Learn JavaScript',
       'Category': 'Programming', 'Price': '56.00','author':'a'
      },
      {'Book ID': '3', 'Book Name': 'Popular Science',
       'Category': 'Science', 'Price': '210.40','author':'a'
      }
    ]

    // Extract value from table header. 
    // ('Book ID', 'Book Name', 'Category' and 'Price')
    let col = [];
    for (let i = 0; i < myBooks.length; i++) {
      for (let key in myBooks[i]) {
        if (col.indexOf(key) === -1) {
          col.push(key);
        }
      }
    }

    // Create table.
    const table = document.createElement("table");

    // Create table header row using the extracted headers above.
    let tr = table.insertRow(-1);                   // table row.

    for (let i = 0; i < col.length; i++) {
      let th = document.createElement("th");      // table header.
      th.innerHTML = col[i];
      tr.appendChild(th);
    }

    // add json data to the table as rows.
    for (let i = 0; i < myBooks.length; i++) {

      tr = table.insertRow(-1);

      for (let j = 0; j < col.length; j++) {
        let tabCell = tr.insertCell(-1);
        tabCell.innerHTML = myBooks[i][col[j]];
      }
    }

    // Now, add the newly created table with json data, to a container.
    const divShowData = document.getElementById('showData');
    divShowData.innerHTML = "";
    divShowData.appendChild(table);
  }
</script>
</html>