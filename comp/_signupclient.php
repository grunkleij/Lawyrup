<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JMM - Justice Matters Most</title>
    <style>
      /* Custom styles */
body {
    background-color: #f5f5f5;
    font-family: Arial, sans-serif;
}

.container {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    margin: 50px auto;
    max-width: 400px;
    text-align: center;
}

h1 {
    font-size: 28px;
    margin: 20px 0;
    color: #007bff;
}

.form-label {
    font-weight: bold;
}

.btn-primary {
    background-color: #007bff;
    border: none;
    width: 100%;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.alert {
    margin-top: 20px;
    background-color: #5cb85c;
    color: #fff;
}

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css"> <!-- Link to your custom CSS file -->
</head>
<body>
<?php include '_nav.php'; ?>
<div style="
    background: #e5e5e5;
" class="container px-4 mt-5 h-100 d-flex align-items-center justify-content-center">
    <form action="/JMM/comp/_handleclient.php" method="post">
        <div class="mb-3">
            <label for="cemail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="cemail" name="cemail" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="cusername" class="form-label">Username</label>
            <input type="text" class="form-control" id="cusername" name="cusername">
        </div>
        <div class="mb-3">
            <label for="cpassword" class="form-label">Password</label>
            <input type="password" class="form-control" name="cpassword" id="cpassword">
        </div>
        <div class="mb-3">
            <label for="ccpassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="ccpassword" id="ccpassword">
        </div>
        <button name="s" type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<div class="container mt-3">
    <?php 
    if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true"){
        echo '<div class="alert alert-success mt-3" role="alert">
        Signup successful
        <a href="http://localhost/jmm/indexc.php/"><button name="s" type="submit" class="btn btn-primary">Go to lawyer page</button></a> 
        </div>';
    }
    ?>
</div>
</body>
</html>
