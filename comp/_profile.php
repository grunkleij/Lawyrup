<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>JMM - Justice Matters Most</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="clientcard.css">
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style>
      
      .gradient-custom {
/* fallback for old browsers */
background: #f6d365;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right bottom, rgb(133 73 131), rgba(253, 160, 133, 1));
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body style=" background: #14181c url(https://s.ltrbxd.com/static/img/content-bg.0d9a0f0f.png) 0 -1px repeat-x;" >
    <?php include '_nav.php'; ?>

  <?php include '_dbconnect.php';
  $sql="select * from users where sno=".$_GET['luserid']."";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
  ?>
    <!-- start of profile container -->
    <section  style=" background: #14181c url(https://s.ltrbxd.com/static/img/content-bg.0d9a0f0f.png) 0 -1px repeat-x;" class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0" style="
    width: 100%;
">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
            style="align-items: center;border-top-left-radius: .5rem;border-bottom-left-radius: .5rem;display: flex;flex-direction: column;justify-content: center;">
              
              <h5><?php echo $row['user_name'] ?></h5>
              <p>Lawyer</p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted"><?php echo $row['user_email'] ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p class="text-muted">123 456 789</p>
                  </div>
                </div>
                <h6>Projects</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Recent</h6>
                    <p class="text-muted">Lorem ipsum</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Upvotes</h6>
                    <p class="text-muted"><?php echo $row['upvotes']?></p>
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- end of profile container -->
  <!-- clients -->
  
  <div style="color:white;"  class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <h3>Clients </h3>
              <p>Justice matters most</p>
              <div class="line"></div>
            </div>
          </div>
        </div>
        <div class="row">
        <?php
  $sql2="select * from details where user_id=".$_GET['luserid']."";
  $result2=mysqli_query($conn,$sql2);
  while($row2=mysqli_fetch_assoc($result2)){
    $cuserd="select * from cuser where csno=".$row2['cuser_id']."";
    $resultin=mysqli_query($conn,$cuserd);;
    $rowin=mysqli_fetch_assoc($resultin);
    if($row2['fee']=="1000"){
      $feeDetails="Payment complete";
    }
    else{
      $feeDetails="Not Payed ";
    }
    echo '<!-- Single Advisor-->
    <div style="
    color: black;
" class="col-12 col-sm-6 col-lg-3">
    <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
    <!-- Team Thumb-->
    <div class="advisor_thumb">
    <!-- Social Info-->
    <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
        </div>
        <!-- Team Details-->
        <div class="single_advisor_details_info">
          <h6>'.$rowin['cuser_name'].'</h6>
          <p class="designation">'.$row2['descr'].'<br> <span style="font-weight:bold;">'.$feeDetails.'</span> </p>
          <!-- Start of modal -->';
          if($row2['conf']==0){
          echo '<form method="POST" action="">
          <input type="hidden" name="dno" value="'.$row2['dsno'].'">
          <button name="confirm" type="submit" class="btn btn-success" onclick="reloadPage()">Confirm</button>
          <input type="hidden" name="dno" value="'.$row2['dsno'].'">
          <button name="deny" type="submit" class="btn btn-danger onclick="reloadPage()">Deny</button>

          </form>';}
          else if($row2['conf']==2){
            echo '<p class="designation">Accepted</p>';}
          else{
           echo '
           <p class="designation">Denied</p>

          ';
          }
       echo '       <!-- End of modal -->
        </div>
      </div>
    </div>
    <!-- Single Advisor-->
    <!-- Button trigger modal -->
        ';
      }
  ?>
          
        </div>
      </div>
  <div class="container">
  
  

  </div>
  <!-- end of clients -->
    </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
      function reloadPage() {
    location.reload();
  }
      var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
    </script>
  </body>
</html>

<?php
if(isset($_POST['deny'])){
  $userid=$_GET['luserid'];
  $dno=$_POST['dno'];
  echo $dno;
  $conf="update details set conf=1, fee=0 where dsno=".$dno."";
  mysqli_query($conn,$conf);
  header("Location: /jmm/comp/_profile.php?luserid=".$userid);
}
if(isset($_POST['confirm'])){
  $userid=$_GET['luserid'];
  $dno=$_POST['dno'];
  echo $dno;
  $conf="update details set conf=2 where dsno=".$dno."";
  mysqli_query($conn,$conf);
  header("Location: /jmm/comp/_profile.php?luserid=".$userid);
}
?>


<!-- if($row2['conf']==0){
          echo '<form method="POST" action="">
          <input type="hidden" name="dno" value="'.$row2['dsno'].'">
          <button name="deny" type="submit" class="btn btn-danger">Deny</button>

          </form>';}
          else{
           echo ' <form method="POST" action="">
           <input type="hidden" name="dno" value="'.$row2['dsno'].'">
          <button name="confirm" type="submit" class="btn btn-success">Confirm</button>

          </form>';
          } -->