<?php
require 'connection.php';

if(isset($_POST["submit"])){
  if($_FILES["image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $name=$_POST['name'];
    $contact=$_POST['contact_number'];
    $add=$_POST['address'];
    $type=$_POST['Type'];
    $desc=$_POST['description'];
    $ppd=$_POST['ppd'];
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, '../img/user_image/' . $newImageName);
      $query = "INSERT INTO `workers`(`w_id`, `w_name`, `w_contact_number`, `w_address`, `w_type`, `w_description`, `w_image`, `availability`, `w_price`) VALUES (DEFAULT,'$name', '$contact', '$add','$type','$desc','$newImageName','1','$ppd')";
      mysqli_query($con, $query);
      
      header("Location: ../index.php?msg=workerAddedSuccess");
    }
  }
}

 ?>