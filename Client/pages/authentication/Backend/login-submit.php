<?php require '../../../components/connection.php' ?>
<?php session_start(); ?>
<?php
// $host = "localhost";  
// $user = "root";  
// $password = '';  
// $db_name = "instrument_store";  
  
// $con = mysqli_connect($host, $user, $password, $db_name);  
// if(mysqli_connect_errno()) {  
//     die("Failed to connect with MySQL: ". mysqli_connect_error());  
// } 

    $email = $_POST['email'];  
    $password = $_POST['pass'];  
  
    // //to prevent from mysqli injection  
    // $username = stripcslashes($username);  
    // $password = stripcslashes($password);  
    // $username = mysqli_real_escape_string($con, $username);  
    // $password = mysqli_real_escape_string($con, $password);  
  
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