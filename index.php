<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
       body, html {
  height: 100%;
  scroll-behavior: smooth;
}

.bg {
  /* The image used */
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("cover.jpg");
text-align: center;
    display: flex;
    align-items: center;
    color: rgb(234, 234, 234);
    
  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;}

  .text{
    display: inline;
    font-size: 100px;

  }

  .btw{
    width:500px;
    opacity: 40%;
    background:
  }

  .btw span{
    opacity: 100%;
  }
    .law{
      transition: font-size .2s;
      position: relative;
    }
    .law:hover{
      color:#dad7cd;
      font-size:140px;

      
    }

    .s{
      transition: font-size .2s;
    }
   .s:hover{
    font-size:200px;
   }

    </style>
    <title>JMM - Justice Matters Most</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body style=" background: #14181c url(https://s.ltrbxd.com/static/img/content-bg.0d9a0f0f.png) 0 -1px repeat-x;">
    <?php include 'comp/_nav.php'; ?>
    <div class="bg ">
        <div class="container center">
        <a href="#law"  style="text-decoration:none; color:white;" >
            <h1 class="text law"><span class="s">L</span> <span class="s">A</span> <span class="s">W</span> <span class="s">Y</span><span class="s"> </span>R <span class="s">U</span> <span class="s">P</span></h1>
            </a>
            <p style="
            position:static;
            height:240px;
    padding: 0 346px 0 346px;
    font-weight:bold;
    filter: drop-shadow(0 0 0.75rem black);
">Did you know that you have rights? The Constitution says you do. And so do we. We believe that until proven guilty, every man, woman, and child in this country is innocent. And that’s why I fight for you,  Better Lawyrup!</p>

        </div>
    </div>
    <h1 id="law" class="mt-2" style="text-align:center;  color:white;">Choose the Law</h1>
    <div class="container" style="display: flex; justify-content: space-evenly; flex-wrap: wrap;">
  <?php include 'comp/_dbconnect.php';?>
  <?php
      $sql="select * from ad";
      $result=mysqli_query($conn,$sql);
      
      while($row=mysqli_fetch_assoc($result)){
        $userid=$row['user_id'];
        $catid=$row['cat_id'];
        $catname=$row['cat_name'];
        $catdes=$row['cat_des'];  
        $timestamp=$row['timestamp'];
        $sql2="select * from users where sno='$userid'";
        $result2=mysqli_query($conn,$sql2);
        $row2=mysqli_fetch_assoc($result2);
        echo '<div class="container mt-3" style="width: 18rem; margin: 10px; ">
        <div class="card text-bg-dark mb-3" style="width: 18rem;">
        <img src="https://source.unsplash.com/featured/1600x900?'.$catname.',laywer" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">'.$catname.' <a href="/jmm/comp/_lawyerpage.php/" style="text-decoration:none; font-size: 14px;">'. $row2['user_name'].'&nbsp'.$row2['upvotes'].' upvotes</a></h5>
          <p class="card-text">'.$catdes.'</p>
          <a href="/jmm/comp/_lawyerpage.php?userid='.$userid.'"class="btn btn-primary">hire</a>
          </div>
          
       
      </div>
        </div>';
      }
      
  ?>
    </div>
      <div class="container mt-3" style="display: flex;
    justify-content: center;">

        <a style="width:25%; align-item:center;" href="/jmm/comp/_adenter.php/" type="button" class="btn btn-success">    +    </a>
      </div>

      <?php $ban=$_GET['ban'];
      if($ban==1){
        
      echo '
      <div class="container">
      <div class="alert alert-danger" role="alert">
      You  have been banned
    </div></div>';
      }
      else{
        
      }
      ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>