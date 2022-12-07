<?php

require '../connection.php';
session_start();

if(!isset($_SESSION["email"])){
    header("Location: ../../pages/authentication/client/login.php");
}

if(isset($_POST['update'])){
    $id = $_POST['w_id'];
    $name = $_POST['w_name'];
    $phone = $_POST['w_phone'];
    $address = $_POST['w_address'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "UPDATE `workers` SET `w_name`='$name',`w_contact_number`='$phone',`w_address`='$address',`w_type`='$type',`w_description`='$description',`w_price`='$price' WHERE w_id='$id'";

    if (mysqli_query($con,$sql) === TRUE){
        header("Location: ../../index.php?msg=updateSuccess");
    } else{
        header("Location: ../../index.php?msg=updateFailed");
    }
}

if(isset($_POST['do_not_update'])){
    header("Location: ../../index.php");
}






?>