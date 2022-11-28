<?php require './connection.php' ?>
<?php session_start(); ?>

<?php

if(!$_SESSION["email"]){
    header("Location: ../pages/authentication/Client/login.php?msg");
}
else{
    if(! $_GET["howManyItem"] and $_GET["e_id"]){
        header("Location: ../index.php?msg=deleteFailedFromCarte");
    }
    else{
        $num_item = (int)$_GET["howManyItem"];
        $present_available_count_in_equipments_table = (int)$_GET["presentAvailableCount"];
        $cart_id = $_GET["cart_id"];
        $e_id = $_GET["e_id"];


        // Update Available quantity of item in equipments table
        $new_available_count = $present_available_count_in_equipments_table + $num_item;
        $sql = "UPDATE equipments SET `available_count`='{$new_available_count}' WHERE e_id='{$e_id}'";
        
        if (!mysqli_query($con,$sql) === TRUE) {
            header("Location: ../index.php?msg=updateFailed");
        }
    
        // delete sell_item table
        $sql = "DELETE FROM `sell_item` WHERE id='{$cart_id}'";
    
        if (mysqli_query($con,$sql) === TRUE) {
            header("Location: ../index.php?msg=deleteItemSuccess");
        }
        else {
            header("Location: ../index.php?msg=deleteItemFailed");
        }
    
    }
    
}






?>