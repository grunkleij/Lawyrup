<?php
$showError="false";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '_dbconnect.php';
    $email=$_POST['cloginemail'];
    $pass=$_POST['cloginpass'];
    $sql="select * from cuser where cuser_email='$email'";
    $result=mysqli_query($conn,$sql);
    $numrows=mysqli_num_rows($result);
    if($numrows==1){
        $showError="Email already in use";
        $row=mysqli_fetch_assoc($result);
        $userid=$row['csno'];

        if(password_verify($pass,$row['cuser_pass'])&&$row['cban']!=1){
            session_start();
            $_SESSION['cloggedin']= true;
            $_SESSION['cuseremail'] = $email;
               $_SESSION['cuser_id']=$userid; 
                echo "logged in".$email;
                }
                ($row['cban']!=1)?header("Location: /jmm/index.php?ban=0"):header("Location: /jmm/index.php?ban=1");
                }
    
}

?>