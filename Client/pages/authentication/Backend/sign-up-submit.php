<?php require '../../../components/connection.php' ?>
<?php session_start(); ?>

<?php

// Check connection
if (!$con) {
  die("Connection failed: " . $conn->connect_error);
}

$FName=$_POST['fName'];
$LName=$_POST['idNumber'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$pass=$_POST['pass1'];

$sql = "INSERT INTO customers (c_fName,c_nic,c_address,c_contact_number,c_email,c_password)
VALUES ('$FName', '$LName', '$address','$mobile','$email','$pass')";

if (mysqli_query($con,$sql) === TRUE) {
  header("Location: ../client/login.php?msg");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>  