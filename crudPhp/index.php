<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body>
  <nav class="navbar bg-light ">
    
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=new-user">Novo usuário</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=list">Listar usuários</a>
          </li>
          
        </ul>
    
    </div>
  </div>
</nav>


<div class="container">
<div class="row">
<div class="col mt-5">

<?php

include("config.php");
switch(@$_REQUEST["page"]) {
    case "new-user":
        include("new-user.php");
        break;

    case "list":
        include("list-user.php");
        break;

    case "save":
        include("save-user.php");
        break;

    case "edit":
        //ini_set( 'error_reporting', E_ALL );
        //ini_set( 'display_errors', true );
        include("edit-user.php");
        break;


    default:
        print "<h1>Bem vindos!</h1>";
}

?>


</div>

</div>

</div>





</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>