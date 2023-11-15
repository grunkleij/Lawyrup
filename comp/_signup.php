<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JMM - Justice Matters Most</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
body {
  background-image: url('https://images.unsplash.com/photo-1505664194779-8beaceb93744?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8bGF3eWVyfGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  
}
</style>
  </head>
  <body>
  <?php include '_nav.php'; ?>




  <div >
    <div class="container px-4 mt-5 h-100 d-flex align-items-center justify-content-center " style="flex-direction:column;border-radius: 30px;background-color: #2b3035;color: white;padding: 23px;">
 
      
      <form action="/JMM/comp/_handlesignup.php" method="post">
      <div class="mb-3">
        <label for="semail" class="form-label">Email address</label>
        <input type="email" class="form-control" id="semail" name="semail" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
      <div class="mb-3">
        <label for="susername" class="form-label">Username</label>
        <input type="text" class="form-control" id="susername" name="susername" >
      </div>
      <div class="mb-3">
        <label for="spassword" class="form-label">Password</label>
        <input type="password" class="form-control" name="spassword" id="spassword">
      </div>
      <div class="mb-3">
        <label for="scpassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="scpassword" id="scpassword">
      </div>
      
      <a href="/jmm/index.php"><button name="s" type="submit" class="btn btn-primary">Lawyre</button></a>
    </form> 
  </div>
  
  <div class="container mt-3" >
    <?php 
      if(isset($_GET['signupsuccess'])&&$_GET['signupsuccess']=="true"){
        echo '<div class="alert alert-success mt-3" role="alert">
        Signup successful
        <a href="http://localhost/jmm/"><button name="s"  type="submit" class="btn btn-primary" >Go to lawyer page</button></a> 
        </div>';
      }
      ?>
  </div></div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  </body>
</html>


