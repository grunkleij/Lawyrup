<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>JMM - Justice Matters Most</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
  <?php include '_nav.php'; ?>
  <?php include '_dbconnect.php';
  $id=$_GET['threadid'];
  $sql="select * from forum where thread_id='$id' ";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_assoc($result)){
    $title=$row['thread_title'];
    $desc=$row['thread_desc'];
 
  echo '<div class="container-fluid align-left mt-3" >

      <div class="card bg-secondary text-white " style="background: linear-gradient(180deg, #198754, #36ac7a 98%);border-bottom-right-radius: 50px;border-bottom-left-radius: 50px;border-top-right-radius: 50px; margin:20px">
      <h5 class="card-header border-white">'.$title.'</h5>
      <div class="card-body">
        
        <p class="card-text">'.$desc.'</p>
        <p class="text-weight-strong"> </p>

      </div>
    </div>
  </div>';}
  ?>
<div class="container my-3" style="margin-right:0;">


  <?php 
  include '_dbconnect.php';
  $sql4="select * from comment where thread_id=$id";
  $result4=mysqli_query($conn,$sql4);
  while($row2=mysqli_fetch_assoc($result4)){    
    include '_dbconnect.php';
    $userc=$row2['comment_by'];
    $sqlu="select * from users where sno=$userc";
    $result5=mysqli_query($conn,$sqlu);
    $blah=mysqli_fetch_assoc($result5);
    echo ' <div class="container">

    <div class=" card mb-4" style="background: linear-gradient(180deg, #3c7d71, #ad9fbd 98%);color: white;font-weight: bold;border-bottom-left-radius: 50px;border-top-left-radius: 50px;border-bottom-right-radius: 50px; padding:5px;">
              <div class="card-body">
                <p>'.$row2['comment_content'].'</p>
                
                <div class="d-flex justify-content-between">
                  <div class="d-flex flex-row align-items-center">
                    
                    <p class="small mb-0 ms-2 fw-bold">'.$blah['user_name'].'</p>
                    </div>
                    ';
                    echo '<p class="small mb-0 ms-2 fw-bold">'.$row2['upvotes'].'upvotes</p>';
                    if(isset($_SESSION['cloggedin']) && $_SESSION['cloggedin']== true){
                      echo "<form method='post' action='vote.php'>";
                      echo "<input type='hidden' name='item_id' value='" . $row2["comment_id"] . "'>";
                      echo "<input type='hidden' name='thread_id' value='" . $id . "'>";
                      echo "<input type='hidden' name='user_id' value='" . $userc . "'>";
                      echo "<input  class='btn btn-success mx-3'  type='submit' name='upvote' value='Upvote'>";
                      echo "<input  class='btn btn-danger mx-3' type='submit' name='downvote' value='Downvote'>";
                      echo "</form>"; 
                    }
                    echo '
                    </div></div>
                  
                  </div>
                  </div>';
                }
                ?>
</div>

<?php
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true){
    
    echo '<div class="container mt-4"> 
    <form action="" method="post">
    
    
    <div class="form-floating mb-3">
  <textarea class="form-control" placeholder="Leave a comment here" id="content" name="content" style="height: 200px" ></textarea>
  <label for="content">Comment</label>
</div>
<button name="c" type="submit" class="btn btn-primary">Post</button>
</form>
</div>';

if(isset($_POST['c'])) {
  session_start();
  include '_dbconnect.php';
  
  $content=$_POST['content'];
  $userid=$_SESSION['user_id'];
  $sql3="INSERT INTO `comment` (`comment_content`, `thread_id`,`comment_by`, `comment_time`) VALUES ('$content',' $id',$userid, current_timestamp());";
  $result=mysqli_query($conn,$sql3);
  if($result)
  {
    
    header("Location: /jmm/comp/_thread.php?threadid=$id");
    exit();
  }
  else{
    header("Location: /jmm/comp/_thread.php?threadid=$id");
  }
}


}?>
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
<!-- <div class="d-flex flex-row align-items-center">
  <p class="small text-muted mb-0">Upvote?</p>
  <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
  <p class="small text-muted mb-0">3</p>
</div> -->