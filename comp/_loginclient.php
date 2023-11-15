<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JMM - Justice Matters Most</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<?php include '_nav.php'; ?>
<div class="container px-4 mt-5 h-100 d-flex align-items-center justify-content-center">
    <img src="userl.jpg" alt="">
    <form action="/JMM/comp/_handleuserlogin.php" method="post">
        <h1 class="mb-3">Login</h1>
        <div class="mb-3">
            <label for="cloginemail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="cloginemail" name="cloginemail" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="cloginpass" class="form-label">Password</label>
            <input type="password" class="form-control" name="cloginpass" id="cloginpass">
        </div>
        <button name="s" type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<div class="container mt-3">
    <?php
    if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true") {
        echo '<div class="alert alert-success" role="alert">
        Signup successful
        <a href="http://localhost/jmm/"><button name="s" type="submit" class="btn btn-primary">Go to lawyer page</button></a>
      </div>';
    }
    ?>
</div>
</body>
</html>
