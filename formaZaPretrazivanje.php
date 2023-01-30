<?php
//TODO LOGIN
session_start();
if(empty($_SESSION)){
  header("Location:login.php");
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pretrazivanje</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
</head>
<body>
    <?php include_once "header.php"; ?>
<div class='container pt-3'>
    <form action="" method="get" id='searchForm'>
        
        <p>Naslov knjige</p>
        <input type="text" name="title" id="">
        <p>Autor</p>
        <input type="text" name="author" id="">
        <p>Zanr</p>
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
     <input type="submit" value="Submit" id="submit">
    </form>
</div>
<div class="container">
<p id="showData"></p>
</div>
    <?php if($_SESSION["role"]=="admin"){
  echo("<a href='formaZaEdit.php'>Edit</a>");  
} ?>
      <?php include_once "footer.html"; ?>
      <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
</body>

<script>

let form = document.querySelector('#searchForm');
form.submit.addEventListener("click",(e)=>{
e.preventDefault();
let data = new FormData(form);
let queryString = new URLSearchParams(data).toString();
console.log(queryString);
const xhttp = new XMLHttpRequest();
  xhttp.open("GET", "booksAjax.php?"+queryString, true);
  xhttp.onload = function() {    
    //console.log(this.responseText);
    tableFromJson(this.responseText)
  }
  xhttp.send();
})

    
</script>

<script>
  let tableFromJson = (data) => {
    // the json data.
    const myBooks = JSON.parse(data)
    console.log(JSON.parse(data));
    console.log(myBooks)

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
    table.className="table table-striped"

    // Create table header row using the extracted headers above.
    let tr = table.insertRow(-1);  
    tr.className="table-light"                 // table row.

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
      tr.insertCell(-1).innerHTML="<a href=bookBuyTest.php?id="+myBooks[0][col[i]]+">Buy</a>";
    }

    // Now, add the newly created table with json data, to a container.
    const divShowData = document.getElementById('showData');
    divShowData.innerHTML = "";
    divShowData.appendChild(table);
  }
  
</script>
</html>