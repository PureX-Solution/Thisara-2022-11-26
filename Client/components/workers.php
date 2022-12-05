<?php require './connection.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Workers</title>


  <!-- Favicons -->
  <link href="../assets/img/logo.png" rel="icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">


</head>
  <body style="background: #eee">
  <header id="header" class="fixed-top d-flex align-items-center  header-black ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="#">New National Rentals</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="../../client/#<?php echo $_GET['type']; ?>">Home</a></li>
      </nav>
<!-- .navbar -->
</div>
</header><!-- End Header -->
    <h1 style="text-align: center; width: 100%; padding:20px; margin-top:100px"><?php echo ucfirst($_GET['type']); ?></h1>

    <?php
      $sql = "SELECT * FROM workers WHERE w_type='{$_GET['type']}'";
      $result = mysqli_query($con, $sql);

      if($result){
        while ($record = mysqli_fetch_assoc($result)){
          if($record['availability'] === "1"){
            echo "<div id='container' style='display:flex; width: 100%; flex-direction: row; justify-content: center'>";

            echo "<div class='card mb-3' style='width: 75%; height: fit-content'>";

            echo "<div class='row g-0'>";

            echo "<div class='col-md-4'>";

            echo "<img src='../../Admin/img/user_image/{$record['w_image']}' class='img-fluid rounded-start' style='width: 250px; height:250px;' />";

            echo "</div>";

            echo "<div class='col-md-8'>";

            echo "<div class='card-body'>";

            echo "<h3 class='card-titl'>",ucfirst($record['w_name']),"<span class='card-text' style='color:green; font-size:17px' font-weight: 100px><small > | Available</small></span></h3>";

            echo "<p class='card-text'>{$record['w_description']}</p>";

            echo "<h1 style='color:rgb(244,112,17)'><sup>RS.</sup>{$record['w_price']}<span style='color:#434242; font-size:20px'>/day</span></h1>";

            echo "<a href='../../client/#{$_GET['type']}'><button type='button' class='btn btn-primary'>Hires ", ucfirst($record['w_name']), " </button></a>";

            echo "</div>";

            echo "</div>";

            echo "</div>";

            echo "</div>";

            echo "</div>";

          }            
          
        }
      }

    ?>
    

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
