<?php require './connection.php' ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Worker</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- Favicons -->
  <link href="../assets/img/logo.png" rel="icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  

    <link rel="stylesheet" type="text/css" href="../static/css/chat.css">
    <link rel="stylesheet" type="text/css" href="../static/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="../style.css">
  </head>

  <body style="background: #eee">
    <?php require './nav.php' ?>
    <h1 style="text-align: center; width: 100%; padding:20px; margin-top:100px"><?php echo ucfirst($_GET['name']); ?></h1>

    <?php
      $sql = "SELECT * FROM equipments WHERE e_name='{$_GET['name']}'";
      $result = mysqli_query($con, $sql);

      if($result){
        while ($record = mysqli_fetch_assoc($result)){
          if($record['available_count'] > 0){
            echo "<div id='container' style='display:flex; width: 100%; flex-direction: row; justify-content: center'>";

            echo "<div class='card mb-3' style='width: 75%; height: fit-content'>";

            echo "<div class='row g-0'>";

            echo "<div class='col-md-4'>";

            echo "<img src='{$_GET['img']}' class='img-fluid rounded-start' style='width: 250px; height:250px;' />";

            echo "</div>";

            echo "<div class='col-md-8'>";

            echo "<div class='card-body'>";

            echo "<h3 class='card-titl' style='font-family:arial; padding: 20px 0px'>{$record['available_count']} Item(s) <span style='color:green'>Available</span></h3>";

            // echo "<p class='card-text'>Hello</p>";

            echo "<h1 style='color:rgb(244,112,17)'><sup>RS.</sup>{$record['e_price']}<span style='color:#434242; font-size:20px'>/day</span></h1>";

            echo "<button type='button' class='btn btn-primary' style='margin: 20px 0px'> RENT </button>";

            echo "</div>";

            echo "</div>";

            echo "</div>";

            echo "</div>";

            echo "</div>";

          }            
          
        }
      }

    ?>
    

    <!-- <div id="container" style="display:flex; width: 100%; flex-direction: row; justify-content: center">
      <div class="card mb-3" style="width: 75%; height: fit-content">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="..." style="width: 250px; height:250px;" />
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting</p>
              <p class="card-text"><small class="text-muted">Status</small></p>
              <h2 style='color:rgb(244,112,17)'><sup>RS.</sup>1500 <span style='color:#434242; font-size:20px'>/day</span></h2>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
