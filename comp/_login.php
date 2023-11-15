<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JMM - Justice Matters Most</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background-color: #f7f7f7;
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
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        /* Additional Styling */
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 400px;
        }
    </style>
</head>

<body>
<?php include '_nav.php'; ?>
<div class="login-container">
    <div class="login-form">
      <div class="text-center">

        <img src="llogo.jpg" alt="" style="
    width: 166px;
    align-items: center;"
 class="img-fluid mb-3">
</div>
        <h1 class="text-center">Login</h1>
        <form action="/JMM/comp/_handlelogin.php" method="post">
            <div class="mb-3">
                <label for="loginemail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="loginemail" name="loginemail" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="loginpass" class="form-label">Password</label>
                <input type="password" class="form-control" name="loginpass" id="loginpass">
            </div>
            <a href="/jmm/index.php">
                <button name="s" type="submit" class="btn btn-primary btn-block">Login</button>
            </a>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<div class="container mt-3">
    <?php
    if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true") {
        echo '<div class="alert alert-success mt-3" role="alert">
          Signup successful
          <a href="http://localhost/jmm/"><button name="s" type="submit" class="btn btn-primary">Go to lawyer page</button></a> 
        </div>';
    }
    ?>
</div>
</body>
</html>
