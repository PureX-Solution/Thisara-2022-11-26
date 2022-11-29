<?php require '../../../components/connection.php' ?>
<?php session_start(); ?>
<?php

    $email = $_POST['email'];  
    $password = $_POST['pass'];  
 
  
    $sql = "select * from customers where c_email = '$email' and c_password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        $_SESSION["email"] = $row['c_email'];
        $_SESSION["fName"] = $row['c_fName'];
        $_SESSION["id"] = $row['c_id'];
        if(isset($_SESSION["email"]) and isset($_SESSION["fName"])){
            header("Location: ../../../index.php");
        }
    }  
    else{  
        header("Location: ../client/login.php?msg=loginFail");  
    } 

?>