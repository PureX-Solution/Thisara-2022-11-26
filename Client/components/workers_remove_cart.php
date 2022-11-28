<?php require './connection.php' ?>
<?php session_start(); ?>

<?php

if(!$_SESSION["email"]){
    header("Location: ../pages/authentication/Client/login.php?msg");
}
else{
    if(! $_GET["w_id"]){
        header("Location: ../index.php?msg=deleteFailedFromCarte");
    }
    else{
        $cart_id = $_GET["cart_id"];
        $w_id = $_GET["w_id"];


        // Update Available from table table
        $sql = "UPDATE workers SET `availability`='1' WHERE w_id='{$w_id}'";
        
        if (!mysqli_query($con,$sql) === TRUE) {
            header("Location: ../index.php?msg=updateFailed");
        }
    
        // delete worker sell_worker table
        $sql = "DELETE FROM `sell_worker` WHERE id='{$cart_id}'";
    
        if (mysqli_query($con,$sql) === TRUE) {
            // echo "delete success"
            header("Location: ../index.php?msg=deleteWorkerSuccessInCart");
        }
        else {
            // echo "delete failed"
            header("Location: ../index.php?msg=deleteWorkerFailedInCart");
        }
    
    }
    
}






?>