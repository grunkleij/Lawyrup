

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
  <body>
  <?php include '_nav.php'; ?>
  <?php include '_dbconnect.php';?>
  <div class="container">

  <form action="" method="POST">

      <div class="form-group">
        <label for="nameId">Name</label>
        <input name="name" type="text" class="form-control" id="nameId" placeholder="Name" required>
      </div>
      <div class="form-group">
        <label for="descId">Description</label>
        <input name="desc" type="text" class="form-control" id="descId" placeholder="Description" required>
      </div>
      <div class="form-group">
        <label for="dateId">Appointment Date</label>
        <input name="date" type="date" class="form-control" id="dateId" placeholder="Another input"  required>
      </div>
      <div class="form-group">
        <label for="feeId">Appointment Fee</label>
        <input name="fee" type="number" class="form-control" id="feeId" placeholder="1000" required>
      </div>
      <!-- payment -->
      <div id="accordion">
      <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
  <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
</svg>  &nbsp;&nbsp;Mode of payment

        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse bg-secondary
" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
        <!-- Credit card form -->
        <section>
  <div class="row">
    <div class="col-md-8 mb-4">
      <hr class="my-4" />
      <h5 class="mb-4">Payment</h5>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="checkoutForm3" checked required/>
        <label class="form-check-label" for="checkoutForm3">Credit card</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="checkoutForm4" required/>
        <label class="form-check-label" for="checkoutForm4">Debit card</label>
      </div>
      <div class="form-check mb-4">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="checkoutForm5" required/>
        <label class="form-check-label" for="checkoutForm5">Paypal</label>
      </div>
      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <input type="text" id="formNameOnCard" class="form-control" required/>
            <label class="form-label" for="formNameOnCard">Name on card</label>
          </div>
        </div>
        <div class="col">
          <div class="form-outline">
            <input type="text" id="formCardNumber" class="form-control" required/>
            <label class="form-label" for="formCardNumber">Credit card number</label>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-3">
          <div class="form-outline">
            <input type="text" id="formExpiration" class="form-control" required/>
            <label class="form-label" for= "formExpiration">Expiration</label>
          </div>
        </div>
        <div class="col-3">
          <div class="form-outline">
            <input type="text" id="formCVV" class="form-control" required/>
            <label class="form-label" for="formCVV">CVV</label>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Credit card form -->
        </div>
      </div>
    </div>
  </div>
      <!-- payment end -->
      <button style="
    margin: 30px;
    width: 200px;
" type="submit" name="finish" class="btn btn-primary">Finish</button>

    </form>
  </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>

<?php


if(isset($_POST["finish"])){
  include '_dbconnect.php';
  $name=$_POST['name'];
  $desc=$_POST['desc'];
  $date=$_POST['date'];
  $fee=$_POST['fee'];
  $cuserid=$_SESSION['cuser_id'];
  $userid=$_GET['userid'];
  echo $cuserid;
  
  $sql="INSERT INTO `details` (`cuser_id`, `user_id`, `name`, `descr`, `date`, `fee`) VALUES ('$cuserid', '$userid', '$name', '$desc', '$date', '$fee')";
  $result=mysqli_query($conn,$sql);
  if($result){

    echo '
    <div class="container"><div class="alert alert-success" role="alert">
    Successful Payment 
  </div></div>';
  }

}
?>