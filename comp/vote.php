<?php 
include '_dbconnect.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $itemId = $_POST["item_id"];
    $threadId = $_POST["thread_id"];
    $userid = $_POST["user_id"];
    $check="SELECT * FROM `upvotes` WHERE uthread_id=$threadId and uc_id= $itemId";
    $result=mysqli_query($conn,$check);
    $checkd="SELECT * FROM `dvotes` WHERE dthread_id=$threadId and dc_id= $itemId";
    $dresult=(mysqli_query($conn,$checkd));
    
    
    if (isset($_POST["upvote"])&&  mysqli_num_rows($result)==0 ||  mysqli_num_rows($dresult)>0) {
        $insert="INSERT INTO `upvotes`(`uthread_id`, `uc_id`) VALUES ('$threadId','$itemId')";
        mysqli_query($conn,$insert);

        $udelete="DELETE FROM `dvotes` WHERE dthread_id=$threadId and dc_id=$itemId";
        mysqli_query($conn,$udelete);
        $sql = "UPDATE comment SET upvotes = upvotes + 1 WHERE comment_id = $itemId";
        $sql1 = "UPDATE users SET upvotes = upvotes + 1 WHERE sno = $userid";
    } elseif (isset($_POST["downvote"])|| mysqli_num_rows($result)>0) {
        $dinsert="INSERT INTO `dvotes`(`dthread_id`, `dc_id`) VALUES ('$threadId','$itemId')";
        mysqli_query($conn,$dinsert);

        $delete="DELETE FROM `upvotes` WHERE uthread_id=$threadId and uc_id=$itemId";
        mysqli_query($conn,$delete);
        $sql = "UPDATE comment SET upvotes = upvotes - 1 WHERE comment_id = $itemId";
        $sql1 = "UPDATE users SET upvotes = upvotes -1  WHERE sno = $userid";

    }

    if (($conn->query($sql) === TRUE)&&($conn->query($sql1) === TRUE)) {
        header("HTTP/1.1 302 Found");
header("Location: /jmm/comp/_thread.php?threadid=".$threadId);
exit();
    } else {
        echo "Error updating votes: " . $conn->error;
    }
}

$conn->close();
?>