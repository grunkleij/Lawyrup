<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>JMM - Justice Matters Most</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body style="background: #1d1f20;">
 

    <?php include '_nav.php';
    

    if(isset($_SESSION['cloggedin']) && $_SESSION['cloggedin']== true){

        echo '<div class="container mt-4"> 
        <form action="/jmm/comp/_forumhandle.php" method="post">

        <div class="form-floating mb-3">
          <textarea class="form-control" name="title" placeholder="Leave a comment here" id="title" ></textarea>
          <label for="title">Title</label>
        </div>
        <div class="form-floating mb-3">
          <textarea class="form-control" placeholder="Leave a comment here" id="desc" name="desc" style="height: 200px" ></textarea>
          <label for="desc">Text</label>
        </div>
        <button name="p" type="submit" class="btn btn-primary">Post</button>
      </form>
      </div>';
      }
      else if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true){

        echo 'hey client';
      }

      else{
        echo "login";
      }
  
      
    ?>
    <?php 
      include '_dbconnect.php';
      
      $sql="select * from forum";
      $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($result)){
        $cuserid=$row['thread_user_id'];
        $sql2="select * from cuser where csno=$cuserid;";
        $result2=mysqli_query($conn,$sql2);
        $row2=mysqli_fetch_assoc($result2);
        $id=$row['thread_id'];
        if(isset($_SESSION['cloggedin']) && $_SESSION['cloggedin']== true){

          echo '<div class="container mt-3">

          <div class="card mb-3" style="border: none; background: linear-gradient(180deg, #198754, #36ac7a 98%); color: white; font-weight: 600; border-top-right-radius: 30px; border-bottom-radius: 30px; border-bottom-right-radius: 30px; border-bottom-left-radius: 30px;">
          
            <div class="card-body">
            <p>'.$row2['cuser_name'].'</p>
              <a href="_thread.php?threadid='.$id.'" class="text-dark text-decoration-none"><h5 class="card-title">'.$row['thread_title'].'</h5></a>
              <p class="card-text">'.$row['thread_desc'].'</p>
            </div>
          </div>
        </div>';
        }
        else{
          echo '<div class="container mt-3">

          <div class="card mb-3" style="border: none; background: linear-gradient(180deg, #198754, #36ac7a 98%); color: white; font-weight: 600; border-top-right-radius: 30px; border-bottom-radius: 30px; border-bottom-right-radius: 30px; border-bottom-left-radius: 30px;">
          
            <div class="card-body" >
            <p>'.$row2['cuser_name'].'</p>
            <a href="_thread.php?threadid='.$id.'" class="text-dark text-decoration-none"><h5 class="card-title">'.$row['thread_title'].'</h5></a>
            <p class="card-text">'.$row['thread_desc'].'</p>
              
            </div>
          </div>
        </div>';
        }
      }

    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>