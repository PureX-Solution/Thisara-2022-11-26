<?php require './connection.php' ?>
<?php session_start(); ?>

<?php

if(!$_SESSION["email"]){
    header("Location: ../pages/authentication/Client/login.php?msg");
}
else{
    if(! $_GET["howManyItem"] and $_GET["e_id"]){
        header("Location: ../index.php?msg=updateFailed");
    }
    else{
        $num_item = (int)$_GET["howManyItem"];
        $e_id = $_GET["e_id"];
        $available_count = (int)$_GET["available_count"];
        $total_count = (int)$_GET["total_count"];
        $how_many_date = (int)$_GET["howManyDate"];
        $one_item_price = (int)$_GET["e_price"];
        $total_price = $num_item * $one_item_price * $how_many_date;
    
        // Update Available quantity of item in equipments table
        $new_available_count = $available_count - $num_item;
        $sql = "UPDATE equipments SET `available_count`='{$new_available_count}' WHERE e_id='{$e_id}'";
        
        if (!mysqli_query($con,$sql) === TRUE) {
            header("Location: ../index.php?msg=updateFailed");
        }
    
        // Update sell_item table
        $sql = "INSERT INTO sell_item (`item_id`, `customer_id`, `item_qty`, `approval`, `How_many_date`, `total_price`)
        VALUES('{$e_id}', '{$_SESSION['id']}', '{$num_item}','Pending', '{$how_many_date}', '{$total_price}')";
    
        if (mysqli_query($con,$sql) === TRUE) {
            header("Location: ../index.php?msg=updateSuccess");
        }
        else {
            header("Location: ../index.php?msg=updateFailed");
        }
    }  
}
?>