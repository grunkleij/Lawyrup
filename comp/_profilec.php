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
  <body style=" background: #14181c url(https://s.ltrbxd.com/static/img/content-bg.0d9a0f0f.png) 0 -1px repeat-x;">
    <?php include '_nav.php'; ?>
    <div class="container" style="display: flex; justify-content: space-evenly; flex-wrap: wrap;">

  <?php include '_dbconnect.php';?>
  <?php 
  $sql="select * from cuser where csno=".$_GET['cuserid']."";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
  $sql2="select *  from details where cuser_id=".$row['csno']."";
  $result2=mysqli_query($conn,$sql2);
  $row2=mysqli_fetch_assoc($result2);
  $qs="select *  from forum where thread_user_id=".$row['csno']."";
  $resultQ=mysqli_query($conn,$qs);
  $rowq=mysqli_fetch_assoc($resultQ);
  ?>
  <div  class="container">
  <sectionstyle=" background: #14181c url(https://s.ltrbxd.com/static/img/content-bg.0d9a0f0f.png) 0 -1px repeat-x;" class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-md-9 col-lg-7 col-xl-5" style="width:800px;">
        <div class="card" style="border-radius: 15px; background-color: #93e2bb;">
          <div class="card-body p-4 text-black">
            <div>
              <h6 class="mb-4">Client</h6>
              <div class="d-flex align-items-center justify-content-between mb-3">
                <p class="small mb-0"><i class="far fa-clock me-2"></i>Appointment Date: <b><?php  if(isset($row2['date'])){
                    echo $row2['date'];
                }
                else  echo "no appointment"; ?></b></p>
                <p class="fw-bold mb-0">Fee paid: <?php if(isset($row2['fee'])) 
                echo $row2['fee'];
            else  
            echo "not paid";
                ?></p>
              </div>
            </div>
            <div class="d-flex align-items-center mb-4">
              <div class="flex-shrink-0">
                <img src="profilec.jpg"
                  alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3"
                  style="width: 70px;">
              </div>
              <div class="flex-grow-1 ms-3">
                <div class="d-flex flex-row align-items-center mb-2">
                  <p class="mb-0 me-2"><?php echo $row['cuser_name'] ?></p>
                  <ul class="mb-0 list-unstyled d-flex flex-row" style="color: #1B7B2C;">
                    <li>
                      <i class="fas fa-star fa-xs"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-xs"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-xs"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-xs"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-xs"></i>
                    </li>
                  </ul>
                </div>
                <div class="d-flex flex-row align-items-center mb-2">
                  <p class="mb-0 me-2"><b><?php echo $row['cuser_email'] ?></b></p>
</div>
                <!-- <div>
                  <button type="button" class="btn btn-outline-dark btn-rounded btn-sm"
                    data-mdb-ripple-color="dark">+ Follow</button>
                  <button type="button" class="btn btn-outline-dark btn-rounded btn-sm"
                    data-mdb-ripple-color="dark">See profile</button>
                  <button type="button" class="btn btn-outline-dark btn-floating btn-sm"
                    data-mdb-ripple-color="dark"><i class="fas fa-comment"></i></button>
                </div> -->
              </div>
            </div>
            <hr>
            <h3>Asked questions</h3>
            <div class="d-flex flex-row align-items-center mb-2">
                  <p class="mb-0 me-2"><b><?php  if(isset($rowq['thread_title']))
                    echo $rowq['thread_title'];
                    else
                    echo "No questions Yet";
                    ?></b></p>
                  
</div>
            <div class="d-flex flex-row align-items-center mb-2">
                  <p class="mb-0 me-2"><?php if(isset($rowq['thread_desc']))
                  echo $rowq['thread_desc'];
                else 
                echo  "";
                  ?></p>
                  
</div>
            <div class="d-flex flex-row align-items-center mb-2">
                  <p class="mb-0 me-2"><?php if($row2['conf']==1){
                      
                    echo "We've declined your appointment. There is a refund for the appointment cost.";
                  }
                else if($row2['conf']==2) echo  "The appointment has been verified.
                ";
                
                else 
                echo "Waiting...";
                  ?></p>
                  
</div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  </div>
  
    </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>