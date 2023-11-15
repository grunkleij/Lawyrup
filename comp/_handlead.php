<?php
session_start();

echo $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
