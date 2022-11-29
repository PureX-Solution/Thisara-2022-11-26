<?php require '../../../components/connection.php' ?>
<?php session_start(); ?>
<?php

    $email = $_POST['email'];  
    $password = $_POST['pass'];  
  
    $sql = "select * from admin where c_email = '$email' and c_password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        $_SESSION["email"] = $row['c_email'];
        if(isset($_SESSION["email"])){
            header("Location: ../../../index.php?msg=loginSuccess");
        }
    }  
    else{  
        header("Location: ../client/login.php?msg=loginFail");  
    } 

?>