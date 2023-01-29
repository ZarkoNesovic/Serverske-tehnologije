<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"
            >Home</a
          >
        </li>
        <li class="nav-item">
          <a
            class="nav-link active"
            aria-current="page"
            href="formaZaPretrazivanje.php"
            >Pretrazivanje</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="galerija.php">Galerija</a>
        </li>
<?php 
if(empty($_SESSION)){
  echo("
 <li class='nav-item'>
          <a class='nav-link' href='login.php'>Log in</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='register.php'>Register</a>
        </li>"
);}

?>
        

      </ul>

      <?php 
      if($_SESSION){
        echo("<form class='d-flex'>");
        if($_SESSION["role"]=="admin"){
         echo("<a class='btn btn-outline-success' href='users.php'>Edit users</a>") ;
        
        }
        echo("<a class='btn btn-outline-success' href='logout.php'>Logout</a>
      </form>");
        
      var_dump($_SESSION["role"]);
      }
      ?>


     
    </div>
  </div>
</nav>
