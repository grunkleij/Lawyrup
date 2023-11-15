<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JMM - Justice Matters Most</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

   <div class="d-flex justify-content-center mt-5">

   <div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="button" onclick="window.location.href='http://localhost/jmm/comp/_signup.php';">Lawyer</button>
  <button class="btn btn-primary" type="button" onclick="window.location.href='http://localhost/jmm/comp/_signupclient.php';">Client</button>
</div>
        
   </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <div class="container mt-3" >
    

  </body>
</html>

 -->




 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
        .img-container {
            width: 100%;
            height: 100vh;
            display: flex;
            overflow: hidden;
        }

        .img-container .container {
            flex: 1;
            overflow: hidden;
            position: relative;
            text-align: center;
        }

        .img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s; /* Add a transition effect for smoother zoom */
        }

        .img-container .container:hover img {
            filter: brightness(50%); /* Apply a black transparent effect on image hover */
        }

        .img-container img:hover {
            transform: scale(1.1); /* Zoom in by 10% on image hover */
            filter: brightness(100%); /* Reset the brightness to normal on image hover */
        }

        .img-container .container:hover .img-text {
            transform: scale(1.1); /* Zoom in by 10% on text hover */
            
        }

        .img-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 24px;
            transition: transform 0.3s; /* Add a transition effect for text zoom */
        }
        
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <?php include '_nav.php'; ?>
    <div class="img-container">
        <a href="_signup.php" class="container">
            <img src="law.jpg" alt="img">
            <div class="img-text"><h1 style="color:white;">Lawyer</h1></div>
        </a>
        <a href="_signupclient.php" class="container">
            <img src="client.jpg" alt="img">
            <div class="img-text"><h1 style="color:#8d0000;">Client</h1></div>
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


