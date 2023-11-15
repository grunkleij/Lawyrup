<?php 
if($_SERVER["REQUEST_METHOD"]=="POST") {
    session_start();
    include '_dbconnect.php';
    $title=$_POST['title'];
    $desc=$_POST['desc'];
    $userid=$_SESSION['cuser_id'];
    echo $userid;
    $sql="INSERT INTO `forum` ( `thread_title`, `thread_desc`, `thread_user_id`, `timestamp`) VALUES ('$title', '$desc', '$userid', current_timestamp());";
    $result=mysqli_query($conn,$sql);
            if($result)
            {

                header("Location: /jmm/comp/_query.php");
                exit();
            }
            else{
                header("Location: /jmm/comp/_query.php");
            }
        }



       




?>