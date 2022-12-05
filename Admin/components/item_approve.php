<?php
require './connection.php';
session_start();

if(!isset($_SESSION['email'])){
    header("Location: ./pages/authentication/Client/login.php");
}

$id = $_GET['id'];

if($_GET['command'] === "Approved"){
    $sql1="UPDATE `sell_item` SET `approval`='Approved' WHERE id='$id'";
    if (mysqli_query($con,$sql1) === TRUE){
        echo 'success';
    }
}
else{
    $delete = "DELETE FROM sell_item WHERE id='$id'";
    $sql2="UPDATE `equipments` SET `available_count`=available_count+1 WHERE e_id='{$_GET['item_id']}'";
    if (!mysqli_query($con,$delete) === TRUE){
        echo 'success';
    }
    if (mysqli_query($con,$sql2) === TRUE){
        header("Location: ../index.php?msg=Approval Process Compleat");
    }
    else{
        header("Location: ../index.php?msg=Approval Process Failed");
    }   
}

header("Location: ../index.php?msg=Approval Process Compleat");


?>