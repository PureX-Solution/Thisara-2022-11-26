<?php
require './connection.php';


$type = $_POST['Type'];
$ppd = $_POST['price'];


if(!$con){
  die("Connection Fails".mysqli_connect_error());
}
else{
  $sql = "INSERT INTO `equipments_description`(`i_id`, `i_type`, `i_price`) VALUES (DEFAULT,'$type','$ppd')";
  $sql1="UPDATE `equipments` SET `e_qty`=e_qty+1,`e_price`='$ppd',`available_count`=available_count+1 WHERE `e_name`='$type'";

  if (mysqli_query($con,$sql) === TRUE){

    // Second push to table
    if (mysqli_query($con,$sql1) === TRUE){
        header("Location: ../index.php?msg=addItemSuccess");
      
    } else {
        header("Location: ../index.php?msg=addItemFailed");
    }
    
  } else {
    header("Location: ../index.php?msg=addItemFailed");
  }
  
}

 ?>