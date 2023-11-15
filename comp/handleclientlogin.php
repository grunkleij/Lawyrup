<?php
$showError="false";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '_dbconnect.php';
    $email=$_POST['loginemail'];
    $pass=$_POST['loginpass'];
    $sql="select * from cuser where cuser_email='$email'";
    $result=mysqli_query($conn,$sql);
    $numrows=mysqli_num_rows($result);
    if($numrows==1){
        $showError="Email already in use";
        $row=mysqli_fetch_assoc($result);
        $_SESSOIN['username']=$row['cuser_name'];
            if(password_verify($pass,$row['cuser_pass'])){
                session_start();
                $_SESSION['loggedin']= true;
                $_SESSION['useremail'] = $email;
                
                echo "logged in".$email;
                }
                header("Location: /jmm/indexc.php");
                }
    
}

?>