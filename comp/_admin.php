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
  <body >
    <?php include '_nav.php'; ?>
    <?php include '_dbconnect.php';?>
    <div class="container" style="
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
    align-items: flex-start;
    flex-direction: row;
    width: 790px;
    ">
<!-- card start -->
<div class="card"   style="width: 18rem;margin: 30px;">
  <div class="card-body">
    <h5 class="card-title">Show all clients</h5>
    <p class="card-text"></p>
    <form action="" method="POST">
    <button name="sAll"  type="submit"  href="#" id="first" class="  btn btn-primary">Show</button>
</form>
  </div>
</div>
<!-- card end -->
<!-- card start -->
<div class="card"  style="width: 18rem;margin: 30px;">
  <div class="card-body">
    <h5 class="card-title">Show all Lawyers</h5>
    <p class="card-text"></p>
    <form action="" method="POST">
    <button name="sLaw"  type="submit"  href="#" id="first" class="  btn btn-primary">Show</button>
</form>
  </div>
</div>
<!-- card end -->
<!-- card start -->
<div class="card"  style="width: 18rem;margin: 30px;">
  <div class="card-body">
    <h5 class="card-title">Show Questions </h5>
    <p class="card-text"></p>
    <form action="" method="POST">
    <button type="submit" name="qs"  href="#" id="third" class="btn btn-primary">Go somewhere</button>
</form>
  </div>
</div>
<!-- card end -->
<!-- card start -->
<div class="card"  style="width: 18rem;margin: 30px;">
  <div class="card-body">
    <h5 class="card-title">Show answers</h5>
    <p class="card-text"></p>
    <form action="" method="POST">
    <button type="submit" name="ans"  href="#" id="third" class="btn btn-primary">Go somewhere</button>
</form>
  </div>
</div>
<!-- card end -->
    </div>
    <!-- ... (your existing HTML code) ... -->

<div class="container">

<?php
if (isset($_POST['sAll'])) {
    include '_dbconnect.php';
    $sql = "select * from cuser";
    $result = mysqli_query($conn, $sql);

    echo '<table name="sAll" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User Email</th>
            <th scope="col">User Name</th>
            <th scope="col">Time joined</th>
            <th scope="col">Ban or Unban</th>

        </tr>
    </thead>
    <tbody>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <tr>
            <th scope="row">'.$row['csno'].'</th>
            <td>'.$row['cuser_email'].'</td>
            <td>'.$row['cuser_name'].'</td>
            <td>'.$row['ctimestamp'].'</td>
            <td>'.($row['cban']==0 ? '<form method="post" action="">
            <input type="hidden" name="cuseridban" value='.$row['csno'].'>
            <button name="cban" type="submit" class="btn btn-danger">Ban</button></form>' : '<form method="post" action="">
            <input type="hidden" name="cuseridunban" value='.$row['csno'].'>
            <button name="cunban" type="submit" class="btn btn-success">Unban</button></form>').'

            
        </tr>';
    }

    echo '</tbody></table>';
}
// the laywers part
if (isset($_POST['sLaw'])) {
    include '_dbconnect.php';
    $sql = "select * from users";
    $result = mysqli_query($conn, $sql);

    echo '<table name="sAll" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User Email</th>
            <th scope="col">User Name</th>
            <th scope="col">Time joined</th>
            <th scope="col">Ban or Unban</th>
        </tr>
    </thead>
    <tbody>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <tr>
            <th scope="row">'.$row['sno'].'</th>
            <td>'.$row['user_email'].'</td>
            <td>'.$row['user_name'].'</td>
            <td>'.$row['timestamp'].'</td>
            <td>'.($row['ban']==0 ? '<form method="post" action="">
            <input type="hidden" name="useridban" value='.$row['sno'].'>
            <button name="ban" type="submit" class="btn btn-danger">Ban</button></form>' : '<form method="post" action="">
            <input type="hidden" name="useridunban" value='.$row['sno'].'>
            <button name="unban" type="submit" class="btn btn-success">Unban</button></form>').'

            
        </tr>';
        
       
        
      }

      
    echo '</tbody></table>';
  

}

// start of the questions part
if (isset($_POST['qs'])) {
    include '_dbconnect.php';
    $sql = "select * from forum";
    $result = mysqli_query($conn, $sql);

    echo '<table name="sAll" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Thread Title</th>
            <th scope="col">Thread Description</th>
            <th scope="col">User Name</th>
            <th scope="col">Time of Submission</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>';

    while ($row = mysqli_fetch_assoc($result)) {
      $sql2="select * from cuser where csno=".$row['thread_user_id']. "";
      $result3=mysqli_query($conn,$sql2);
      $rowU=mysqli_fetch_assoc($result3);
        echo '
        <tr>
            <th scope="row">'.$row['thread_id'].'</th>
            <td>'.$row['thread_title'].'</td>
            <td>'.$row['thread_desc'].'</td>
            <td>'.$rowU['cuser_name'].'</td>
            <td>'.$row['timestamp'].'</td>
            <td><form method="POST" action="">
            <input type="hidden" name="thread_id" value='.$row['thread_id'].'>
            <button type="submit" name="deleteQ" class="btn btn-danger">Delete</button>

            </form>
            </td>
            

            
        </tr>';
        
       
        
      }

      
    echo '</tbody></table>';
  

}

// end of the questions part
if (isset($_POST['ans'])) {
  include '_dbconnect.php';
  $sql = "select * from comment";
  $result = mysqli_query($conn, $sql);

  echo '<table name="sAll" class="table table-bordered table-hover">
  <thead>
      <tr>
          <th scope="col">#</th>
          <th scope="col">content</th>
          <th scope="col">thread id</th>
          <th scope="col">comment by</th>
          <th scope="col">comment time  </th>
          <th scope="col">upvotes  </th>
      </tr>
  </thead>
  <tbody>';

  while ($row = mysqli_fetch_assoc($result)) {
      echo '
      <tr>
          
          <td>'.$row['comment_id'].'</td>
          <td>'.$row['comment_content'].'</td>
          <td>'.$row['thread_id'].'</td>
          <td>'.$row['comment_by'].'</td>
          <td>'.$row['comment_time'].'</td>
          <td>'.$row['upvotes'].'</td>
          

          
      </tr>';
      
     
      
    }

    
  echo '</tbody></table>';


}

?>

</div>

<!-- ... (the rest of your HTML) ... -->

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="_adminhandle.js"></script>

  </body>
</html>

<?php
if (isset($_POST['ban'])) {
  // Code to handle the "Ban" button click for user with ID $row['sno']
  $bsno=$_POST['useridban'];
  $banningornot = "SELECT * FROM users WHERE sno=" . $bsno;
  $result2 = mysqli_query($conn, $banningornot);
  $rowB = mysqli_fetch_assoc($result2);
  if ($rowB['ban'] == 0) {
    $banit = "UPDATE users SET ban = 1 WHERE sno = " . $bsno;
    if (mysqli_query($conn, $banit)) {
      echo "User with ID " . $bsno . " has been banned.";
    } else {
      echo "Error updating the user's ban status: " . mysqli_error($conn);
    }
  }
  // You can replace this with your actual logic
}



if (isset($_POST['unban'])) {
  // Code to handle the "Ban" button click for user with ID $row['sno']
  $bsno=$_POST['useridunban'];
  $banningornot = "SELECT * FROM users WHERE sno=" . $bsno;
  $result2 = mysqli_query($conn, $banningornot);
  $rowB = mysqli_fetch_assoc($result2);
  if ($rowB['ban'] == 1) {
    $banit = "UPDATE users SET ban = 0 WHERE sno = " . $bsno;
    if (mysqli_query($conn, $banit)) {
      echo "User with ID " . $bsno . " has been banned.";
    } else {
      echo "Error updating the user's ban status: " . mysqli_error($conn);
    }
  }
  // You can replace this with your actual logic
}


if (isset($_POST['cban'])) {
  // Code to handle the "Ban" button click for user with ID $row['sno']
  $bcsno=$_POST['cuseridban'];
  $cbanningornot = "SELECT * FROM cuser WHERE csno=" . $bcsno;
  $result2 = mysqli_query($conn, $cbanningornot);
  $rowB = mysqli_fetch_assoc($result2);
  if ($rowB['cban'] == 0) {
    $cbanit = "UPDATE cuser SET cban = 1 WHERE csno = " . $bcsno;
    if (mysqli_query($conn, $cbanit)) {
      echo "User with ID " . $bcsno . " has been banned.";
    } else {
      echo "Error updating the user's ban status: " . mysqli_error($conn);
    }
  }
  // You can replace this with your actual logic
}




if (isset($_POST['cunban'])) {
  // Code to handle the "Ban" button click for user with ID $row['sno']
  $bcsno=$_POST['cuseridunban'];
  $cbanningornot = "SELECT * FROM cuser WHERE csno=" . $bcsno;
  $result2 = mysqli_query($conn, $cbanningornot);
  $rowB = mysqli_fetch_assoc($result2);
  if ($rowB['cban'] == 1) {
    $banit = "UPDATE cuser SET cban = 0 WHERE csno = " . $bcsno;
    if (mysqli_query($conn, $banit)) {
      echo "User with ID " . $bcsno . " has been banned.";
    } else {
      echo "Error updating the user's ban status: " . mysqli_error($conn);
    }
  }
  // You can replace this with your actual logic
}


if (isset($_POST['deleteQ'])) {
  // Code to handle the "Ban" button click for user with ID $row['sno']
  $threadid=$_POST['thread_id'];
  $sqlDel="delete from forum where thread_id=".$threadid."";
  if(mysqli_query($conn,$sqlDel)){
    echo "deleted successfuly";
  }
  else{
    echo "error in deletion";
  }

  // You can replace this with your actual logic
}
?>