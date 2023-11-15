<?php
$showError="false";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '_dbconnect.php';
    $email=$_POST['loginemail'];
    $pass=$_POST['loginpass'];
    $sql="select * from users where user_email='$email'";
    $result=mysqli_query($conn,$sql);
    $numrows=mysqli_num_rows($result);
    if($numrows==1){
        $showError="Email already in use";
        $row=mysqli_fetch_assoc($result);
        $userid=$row['sno'];
        
        if(password_verify($pass,$row['user_pass'])&&$row['ban']!=1){
            session_start();
            $_SESSION['loggedin']= true;
            $_SESSION['useremail'] = $email;
               $_SESSION['user_id']=$userid; 
                echo "logged in".$email;
                }
                ($row['ban']!=1)?header("Location: /jmm/index.php?ban=0"):header("Location: /jmm/index.php?ban=1");
                }
    
}

?>