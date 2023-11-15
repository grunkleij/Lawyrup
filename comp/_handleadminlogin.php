<?php
$showError="false";
if($_SERVER["REQUEST_METHOD"]=="POST"){
   $aemail=$_POST['aemail'];
   $apass=$_POST['apass'];
   if($aemail=="admin@gmail.com"){
    if($apass=="admin@1234"){
        header("Location: /jmm/comp/_admin.php");

    }
    else{
        header("Location: /jmm/index.php");

    }
   }
   else{
    header("Location: /jmm/index.php");
   }
} 

?>