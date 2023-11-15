<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JMM - Justice Matters Most</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <?php include '_nav.php'; ?>
  <div class="container">

      <form action="" method="POST">
      <div class="mb-3">
        <label for="catname" class="form-label">Your Law</label>
        <input type="text" class="form-control" name="catname" id="catname" aria-describedby="emailHelp">
        
      </div>
      <div class="mb-3">
      <label for="catdes" class="form-label">Description</label>
      <textarea class="form-control" name="catdes" id="catdes" rows="3"></textarea>
    </div>
    
      <button name="s" type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>

<?php
echo $_SESSION['user_id'];

if (isset($_POST['s'])) {
    include '_dbconnect.php';
    $catname = $_POST['catname'];
    $catdes = $_POST['catdes'];
    $userid = $_SESSION['user_id'];

    $sql = "INSERT INTO `ad` (`user_id`, `cat_name`, `cat_des`, `timestamp`) VALUES ('$userid', '$catname', '$catdes', current_timestamp());";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>