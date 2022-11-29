<?php
require './connection.php';
session_start();

if(!isset($_SESSION['email'])){
    header("Location: ./pages/authentication/Client/login.php");
}

$id = $_GET['id'];

if($_GET['command'] === "Approved"){
    $sql1="UPDATE `sell_worker` SET `approval`='Approved' WHERE id='$id'";
}
else{
    $delete = "DELETE FROM sell_worker WHERE id='$id'";
    
    if (!mysqli_query($con,$delete) === TRUE){
        echo 'success';
    }else{
        header("Location: ../index.php?msg=Approval Process Failed");
    }

    $sql1="UPDATE `workers` SET `availability`='1' WHERE w_id='{$_GET['worker_id']}'";
}


if (mysqli_query($con,$sql1) === TRUE){
    header("Location: ../index.php?msg=Approval Process Compleat");
} else {
    header("Location: ../index.php?msg=Approval Process Failed");
}



?>