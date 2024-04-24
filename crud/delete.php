<?php
include 'db_connect.php';
if (isset($_GET['deleteid'])) {
    $sno=$_GET['deleteid'];
    $sql = "DELETE FROM `complexside` WHERE `complexside`.`sno` = $sno";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: display.php");
    }
    else {
         echo(mysqli_error($conn));
    }
}

?>