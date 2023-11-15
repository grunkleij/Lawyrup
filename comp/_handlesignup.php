<?php
$showError="false";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '_dbconnect.php';
    $user_email=$_POST['semail'];
    $pass=$_POST['spassword'];
    $cpass=$_POST['scpassword'];
    $user_name=$_POST['susername'];
    $existSql="select * from `users` where user_email = '$user_email'";
    $result=mysqli_query($conn,$existSql);
    $numrows=mysqli_num_rows($result);
    if($numrows>0){
        $showError="Email already in use";
    }
    else{
        if($pass==$cpass){
            $hash=password_hash($pass,PASSWORD_DEFAULT);
            $sql="INSERT INTO `users` (`user_email`,`user_name`, `user_pass`, `timestamp`,`upvotes`,`ban`) VALUES ('$user_email', '$user_name','$hash', current_timestamp(),0,0)";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                $showAlert= true;
                header("Location: /jmm/comp/_signup.php?signupsuccess=true");
                exit();
            }
        }
        else{
            $showError="Passwords do not match";
            header("Location: /jmm/comp/_signup.php?signupsuccess=false&error=$showError");
        }
    }
    header("Location: /jmm/comp/_signup.php?signupsuccess=false&error=$showError");



}

?>