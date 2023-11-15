<?php
  session_start();
  
echo '<nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
<div class="container-fluid">

  <a class="navbar-brand" href="/jmm/"><ion-icon name="book-outline"></ion-icon>  L A W Y R U P</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/jmm/comp/_query.php">Query</a>
      </li>
      <li class="nav-item">
      <!-- Button trigger modal -->
      <button type="button"  class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Admin
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div style="color:white;" class="modal-body">
            <form action="comp/_handleadminlogin.php" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Admin Email address</label>
              <input type="email" name="aemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Admin Password</label>
              <input name="apass" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            
            <button name="asub" type="submit" class="btn btn-primary">Submit</button>
          </form>
            </div>
            
          </div>
        </div>
      </div>
        
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
    
    <div class="row mx-2">
    
    ';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true){

      echo '<form method="POST" action="JMM/com/signup.php" class="d-flex" role="search">
      <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button name="search" class="btn btn-outline-success  me-3" type="submit">Search</button>
      <p class="text-light my-0"><a style="text-decoration:none;
        font-weight:bold; color:white; " href="comp/_profile.php?luserid='.$_SESSION['user_id'].'">Welcome Lawyer '. $_SESSION['useremail'].'</a></p>
        <a href="/jmm/comp/logout.php/" type="button" class="btn btn-outline-success mx-1">Logout</a>
      </form>';
    }

    else if(isset($_SESSION['cloggedin']) && $_SESSION['cloggedin']== true){

      echo '<form method="POST" action="JMM/com/signup.php" class="d-flex" role="search">
      <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button name="search" class="btn btn-outline-success  me-3" type="submit">Search</button>
      <p class="text-light my-0"><a style="text-decoration:none;
        font-weight:bold; color:white; " href="comp/_profilec.php?cuserid='.$_SESSION['cuser_id'].'">Welcome Client '. $_SESSION['cuseremail'].'</a></p>
        <a href="/jmm/comp/logout.php/" type="button" class="btn btn-outline-success mx-1">Logout</a>
      </form>';
    }

    else{
      echo '<form method="POST" action="JMM/com/signup.php" class="d-flex" role="search">
      <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button name="search" class="btn btn-outline-success  me-3" type="submit">Search</button>
      <a href="/jmm/comp/_cllogin.php"><button type="button" class="btn btn-outline-success mx-1">login</button></a>
        <a href="/jmm/comp/clientorlaw.php"><button type="button" class="btn btn-outline-success mx-1">signup</button></a>
      </form>';
    }
 echo' </div>
</div>
</nav>';




?>