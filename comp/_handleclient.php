<?php
$showError="false";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '_dbconnect.php';
    $user_email=$_POST['cemail'];
    $pass=$_POST['cpassword'];
    $cpass=$_POST['ccpassword'];
    $user_name=$_POST['cusername'];
    $existSql="select * from `cuser` where cuser_email = '$user_email'";
    $result=mysqli_query($conn,$existSql);
    $numrows=mysqli_num_rows($result);
    if($numrows>0){
        $showError="Email already in use";
    }
    else{
        if($pass==$cpass){
            $hash=password_hash($pass,PASSWORD_DEFAULT);
            $sql="INSERT INTO `cuser` (`cuser_email`,`cuser_name`, `cuser_pass`, `ctimestamp`,`cban`) VALUES ('$user_email', '$user_name','$hash', current_timestamp(),0)";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                $showAlert= true;
                header("Location: /jmm/comp/_signupclient.php?signupsuccess=true");
                exit();
            }
        }
        else{
            $showError="Passwords do not match";
            header("Location: /jmm/comp/_signupclient.php?signupsuccess=false&error=$showError");
        }
    }
    header("Location: /jmm/comp/_signupclient.php?signupsuccess=false&error=$showError");



}

?>