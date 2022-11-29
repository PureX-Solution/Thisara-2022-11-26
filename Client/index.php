<?php 
require './components/connection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>New National Rentals</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  

    <link rel="stylesheet" type="text/css" href="static/css/chat.css">
    <link rel="stylesheet" type="text/css" href="static/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

  <!-- ======= Header ======= -->

  <header id="header" class="fixed-top d-flex align-items-center  header-black ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="#">New National Rentals</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li class="dropdown"><a class="nav-link scrollto" href="#"><span>Categories</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              <li class="dropdown"><a href="#portfolio-flters"><span>Equipments</span><i class="bi bi-chevron-down"></i></a>

		<ul>
			<li class="dropdown"><a href="#portfolio-flters"><span>Power Tools</span><i class="bi bi-chevron-down"></i></a>

		<ul>
			<li><a class="nav-link scrollto" href="./components/item.php?name=Grinders&img=../assets/Tools/grinders.jpg">Grinders</a></li>
			<li><a class="nav-link scrollto" href="./components/item.php?name=Drill Machine&img=../assets/Tools/drill-machine.jpg">Drill Machine</a></li>
			<li><a class="nav-link scrollto" href="./components/item.php?name=Power Saws&img=../assets/Tools/power-saws.jpg">Power Saws</a></li>

		</ul>	

		</li>
			<li class="dropdown"><a href="#portfolio-flters"><span>Portable Machines</span><i class="bi bi-chevron-down"></i></a>
		<ul>
			<li><a class="nav-link scrollto" href="./components/item.php?name=Generators&img=../assets/Tools/generators.jpg">Generators</a></li>
			<li><a class="nav-link scrollto" href="./components/item.php?name=Concrete Mix Machines&img=../assets/Tools/concrete-mix-machines.jpeg">Concrete Mix Machines</a></li>
			
		</ul>	
		</li>
		 	<li class="dropdown"><a href="#portfolio-flters"><span>Construction Equipment</span><i class="bi bi-chevron-down"></i></a>
		<ul>
			<li><a class="nav-link scrollto" href="./components/item.php?name=Scaffolding&img=../assets/Tools/scaffolding.jpg">Scaffolding</a></li>
			<li><a class="nav-link scrollto" href="./components/item.php?name=Accrow Jacks&img=../assets/Tools/accrow-jacks.jpg">Accrow Jacks</a></li>
			<li><a class="nav-link scrollto" href="./components/item.php?name=Column Box&img=../assets/Tools/column-box.jpg">Column Box</a></li>>
			
		</ul>	
		</li>

		</ul>
		</li>
      <li class="dropdown"><a href="#startOfPricing"><span>Workers</span><i class="bi bi-chevron-down"></i></a>
      
		<ul>
			<li><a class="nav-link scrollto" href="./components/workers.php?type=carpenters">Carpenters</a></li>
			<li><a class="nav-link scrollto" href="./components/workers.php?type=mason">Mason</a></li>
			<li><a class="nav-link scrollto" href="./components/workers.php?type=digging_Work">Digging Work</a></li>
			<li><a class="nav-link scrollto" href="./components/workers.php?type=glazier">Glazier</a></li>
			<li><a class="nav-link scrollto" href="./components/workers.php?type=backhoe_Driver">Backhoe Driver</a></li>
			<li><a class="nav-link scrollto" href="./components/workers.php?type=electricians">Electricians</a></li>
			
		</ul>		
		</li>
      </ul>
   </li>
   <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            
            <?php
              if(isset($_SESSION["fName"])){
                echo "<li class='dropdown'><a><span style='color:#fff'><i class='bi bi-person-circle' style='color:#fff; font-size:22px; margin:0 10px; cursor:pointer'></i>",$_SESSION["fName"],"</span> <i class='bi bi-chevron-down' style='color:#fff'></i></a>";
                echo "<ul>";
                echo "<li><a href='./pages/authentication/Backend/logout.php'>Logout</a></li>";
                echo "</ul>";
                echo "</li>";
              }else{
                echo "<li class='dropdown'><a href='./pages/authentication/Client/login.php?msg'><span>Login</span> <i class='bi bi-chevron-down'></i></a>";
                echo "<ul>";
                echo "<li><a href='./pages/authentication/Client/signup.php'>Sign Up</a></li>";
                echo "</ul>";
                echo "</li>";
                
              }
            ?>

          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <?php
          if(isset($_SESSION['email'])){
            echo "<i class='bi bi-cart-check-fill' onclick='click_cart()' style='color:#fff; font-size:22px; margin-left:20px; cursor:pointer'></i>";
            echo "<div id='cartContainer' onmouseleave='closeCartList()' style=' position: absolute; top: 51px; right: -30px; padding: 10px; background-color: rgb(241, 241, 241);; width: 60vw; height: fit-content; border-radius: 8px 0 0 8px; display: flex; align-items: center; justify-content: center; display: none'>";
            echo "<table style='width: 100%; font-family: arial; border-collapse: collapse;'>";

            $total_item_is_empty = FALSE;

            // FROM sell_item DATABASE
            $sql1 = "SELECT * FROM sell_item WHERE customer_id='{$_SESSION['id']}'";
            $result1 = mysqli_query($con, $sql1);
      
            $count = mysqli_num_rows($result1);
            if(mysqli_num_rows($result1) > 0){        
              while ($record1 = mysqli_fetch_assoc($result1)){
                $sql2 = "SELECT * FROM equipments WHERE e_id='{$record1['item_id']}'";
                $result2 = mysqli_query($con, $sql2);
                
                while ($record2 = mysqli_fetch_assoc($result2)){
                  echo "<tr style='border-bottom: 1px #eee solid;'>";
                  
                  echo "<td style='text-align: left; padding: 5px; padding-bottom: 5px; color:#000; cursor: pointer; width: 5px'><i class='bi bi-tools'></i></td>";

                  echo "<td style='text-align: left; padding: 5px; padding-bottom: 5px; color:#000; cursor: pointer'>{$record2['e_name']} ({$record1['item_qty']})</td>";
                  
                  $totalPrice = ((int)$record1['item_qty'])*($record2['e_price'])*((int)$record1['How_many_date']);
                  echo "<td style='text-align: left; padding: 5px; padding-bottom: 5px; color:#000; cursor: pointer'>RS. {$totalPrice}</td>";
                  
                  if($record1['approval'] === 'Approved'){
                    echo "<td style='text-align: left; padding: 5px; padding-bottom: 5px; color:green; cursor: pointer'>{$record1['approval']}</td>";
                  }
                  else{
                    echo "<td style='text-align: left; padding: 5px; padding-bottom: 5px; color:orange; cursor: pointer'>{$record1['approval']}</td>";
                  
                  }

                  if($record1['approval'] === 'Approved' or $record1['approval'] === 'Compleat'){
                    echo "<td style='text-align: left; padding: 5px; padding-bottom: 5px;'><a href='#' style='width: fit-content'><i class='bi bi-file-earmark-excel-fill' style='font-size:20px; cursor:pointer; color: gray'></i></td>";
                  }
                  else{
                    echo "<td style='text-align: left; padding: 5px; padding-bottom: 5px;'><a href='./components/item_remove_cart.php?howManyItem={$record1['item_qty']}&cart_id={$record1['id']}&e_id={$record1['item_id']}&presentAvailableCount={$record2['available_count']}' style='width: fit-content'><i class='bi bi-file-earmark-excel-fill' style='font-size:20px; cursor:pointer; color: red'></i></a></td>";
                  }
                  echo "</tr>";
                }
              }
            }else{
              $total_item_is_empty = TRUE;
            }

            // for Workers
            $sql1 = "SELECT * FROM sell_worker WHERE customer_id='{$_SESSION['id']}'";
            $result1 = mysqli_query($con, $sql1);

            $total_worker_is_empty = FALSE;
      
            $count = mysqli_num_rows($result1);
            if(mysqli_num_rows($result1) > 0){        
              while ($record1 = mysqli_fetch_assoc($result1)){
                $sql2 = "SELECT * FROM workers WHERE w_id='{$record1['worker_id']}'";
                $result2 = mysqli_query($con, $sql2);
                
                while ($record2 = mysqli_fetch_assoc($result2)){
                  echo "<tr style='border-bottom: 1px #eee solid;'>";
                  // ---
                  echo "<td style='text-align: left; padding: 5px; padding-bottom: 5px; color:#000; cursor: pointer; width: 5px'><i class='bi bi-person-fill'></i></td>";
                  // ---
                  echo "<td style='text-align: left; padding: 5px; padding-bottom: 5px; color:#000; cursor: pointer'>{$record2['w_name']}</td>";
                  
                  $totalPrice = $record1['how_many_date']*$record2['w_price'];
                  echo "<td style='text-align: left; padding: 5px; padding-bottom: 5px; color:#000; cursor: pointer'>RS. {$totalPrice}</td>";
                  
                  if($record1['approval'] === 'Approved'){
                    echo "<td style='text-align: left; padding: 5px; padding-bottom: 5px; color:green; cursor: pointer'>{$record1['approval']}</td>";
                  }
                  else{
                    echo "<td style='text-align: left; padding: 5px; padding-bottom: 5px; color:orange; cursor: pointer'>{$record1['approval']}</td>";
                  }

                  if($record1['approval'] === 'Approved' or $record1['approval'] === 'Compleat'){
                    echo "<td style='text-align: left; padding: 5px; padding-bottom: 5px;'><a href='#' style='width: fit-content'><i class='bi bi-file-earmark-excel-fill' style='font-size:20px; cursor:pointer; color: gray'></i></td>";
                  }
                  else{
                    echo "<td style='text-align: left; padding: 5px; padding-bottom: 5px;'><a href='./components/workers_remove_cart.php?cart_id={$record1['id']}&w_id={$record2['w_id']}' style='width: fit-content'><i class='bi bi-file-earmark-excel-fill' style='font-size:20px; cursor:pointer; color: red'></i></a></td>";
                  }
                  echo "</tr>";
                }
              }
            }
            else{
              $total_worker_is_empty = TRUE;
            }

            if($total_worker_is_empty == TRUE and $total_item_is_empty == TRUE){
              echo "<h2 style='text-align: center; padding: 20px'>All empty</h2>";
            }
      
            echo "</table>";
            echo "</div>";
          }
        ?>
        
        
        
      </nav>
<!-- .navbar -->
</div>
</header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

      <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/My project-3.png" class="d-block w-100" alt="image2" />
    </div>
    <div class="carousel-item">
      <img src="assets/img/My project-11.png" class="d-block w-100" alt="image1" />
    </div>
    <div class="carousel-item">
    <img src="assets/img/My project-7.png" class="d-block w-100" alt="image3" />
    </div>
  </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>

    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="padding-bottom:10px">
      <div class="container">

        <div class="section-title" style="padding-bottom:10px" data-aos="zoom-out">
          <h2>About</h2>
          <p>Who we are</p>
</div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features" style="padding-top:20px">
      <div class="container">
			<div class="col-lg-6 order-1 order-lg-2 text-center"></div>
     <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3" data-aos="zoom-in">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
              
              <h4 class="d-none d-lg-block">Find Workers</h4>
            </a>
          </li>
          
          <li class="nav-item col-3" data-aos="zoom-in">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
              <h4 class="d-none d-lg-block">Rent Equipments</h4>
            </a>
          </li>
          
          <li class="nav-item col-3" data-aos="zoom-in">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
              <h4 class="d-none d-lg-block">Cash Payment</h4>
            </a>
          </li>
         
          <li class="nav-item col-3" data-aos="zoom-in">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
              <h4 class="d-none d-lg-block">Publish Advertisements </h4>
            </a>
          </li>
        </ul>
        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
            <p>
              When living in the society we need the support of thousands of services to solve the problems we come across in our day-today life. This extends from household to administration of institutions. No matter how many service providers are available, it will be pointless, if they cannot be found when needed & if there is a gap between the clients and the services providers. We have provided a simple and quick solution for customers to locate services/providers and for service providers who have a relatively low capacity on promoting their services.</p>
              
<div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              
<p>
When a piece of critical equipment or power system breaks down, or you come up against an application that falls outside the capabilities of your fleet, it pays to have a go-to source for temporary rental solutions. If you're searching for a way to access productive and reliable equipment on demand, The New national rentals Store has everything you require in a single, convenient place. Our global network offers the largest construction equipment rental fleet in the world. 
</p>
</div>               

     <div class="col-lg-6 order-1 order-lg-2 text-center">
      <img src="assets/img/My project-11.png" alt="" class="img-fluid">
     </div>
    </div>
   </div>
</section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Services</h2>
          <p>What we do </p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              <div class="icon"><i class="bi bi-tools" style="color: #e9bf06; margin-left: 35px; font-size: 50px"></i></div>
              <h4 class="title" style="margin-left: 55px"><a href="">Rent Tools & Machines</a></h4>
              <p class="description" style="margin-left: 50px"> Our global network offers the largest construction equipment rental fleet in Sri Lanka.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-list" style="color: #e9bf06; margin-left: 35px; font-size: 50px"></i></div>
              <h4 class="title" style="margin-left: 55px"><a href="">Rent Construction Accessories</a></h4>
              <p class="description" style="margin-left: 50px">The New national rentals Store has everything you require in a single, convenient place.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
         <div class="icon"><i class="bi bi-briefcase" style="color: #e9bf06; margin-left: 35px; font-size: 50px"></i></div>
              <h4 class="title" style="margin-left: 55px"><a href="">Worker Advertisements</a></h4>
              <p class="description" style="margin-left: 50px">We have provided a simple and quick solution for customers to locate services/providers and for service providers who have a relatively low capacity on promoting their services.</p>
            </div>
          </div>
          
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Equipment Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Find Equipment</h2>
          <p>What we have </p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-card">Portable Machines</li>
          <li data-filter=".hand-tools">Power Tools</li>
          <li data-filter=".filter-web">Construction Equipment</li>

        </ul>

 <!--tools -->
      <?php
      $sql = "SELECT * FROM equipments";
      $result = mysqli_query($con, $sql);
      ?>

        <div class="row portfolio-container" data-aos="fade-up">

      <?php

        if($result){
          while ($record = mysqli_fetch_assoc($result)){
            if($record['available_count'] > 0){
                echo "<div class='col-lg-4 col-md-6 portfolio-item {$record['e_sub_type']}'>";
                if($record['e_name'] === 'Grinders'){
                  echo '<div class="portfolio-img"><img src="assets/Tools/grinders.jpg" class="img-fluid"></div>';
                }
                elseif($record['e_name'] === 'Drill Machine'){
                  echo '<div class="portfolio-img"><img src="assets/Tools/drill-machine.jpg" class="img-fluid"></div>';
                }
                elseif($record['e_name'] === 'Power Saws'){
                  echo '<div class="portfolio-img"><img src="assets/Tools/power-saws.jpg" class="img-fluid"></div>';
                }
                elseif($record['e_name'] === 'Generators'){
                  echo '<div class="portfolio-img"><img src="assets/Tools/generators.jpg" class="img-fluid"></div>';
                }
                elseif($record['e_name'] === 'Concrete Mix Machines'){
                  echo '<div class="portfolio-img"><img src="assets/Tools/concrete-mix-machines.jpeg" class="img-fluid"></div>';
                }
                elseif($record['e_name'] === 'Scaffolding'){
                  echo '<div class="portfolio-img"><img src="assets/Tools/scaffolding.jpg" class="img-fluid"></div>';
                }
                elseif($record['e_name'] === 'Accrow Jacks'){
                  echo '<div class="portfolio-img"><img src="assets/Tools/accrow-jacks.jpg" class="img-fluid"></div>';
                }
                elseif($record['e_name'] === 'Column Box'){
                  echo '<div class="portfolio-img"><img src="assets/Tools/column-box.jpg" class="img-fluid"></div>';
                }

                
                // echo '<div class="portfolio-img"><img src="assets/Tools/hammerset.jpeg" class="img-fluid" alt=""></div>';
                echo '<div class="portfolio-info" style="display: flex; justify-content: space-between">';
              echo '<div>';
              echo "<h3 style='color:yellow; font-size: 20px; font-family: arial'>Rs.{$record['e_price']} <span style='font-size:15px;'> / 1</span></h3>";
              echo "<h4>{$record['e_type']}</h4>";
              echo "<p>{$record['e_name']}</p>";
              echo '</div>';
                  echo '<form action="./components/allocate-item.php" id="myFormItem" method="GET" style="display: flex; align-item:center; justify-content:center">';
                    echo "<div>";
                      echo "<div style='display:flex'>";
                        echo "<input type='number' value='1' name='howManyItem' id='{$record['e_id']}' style='width: 50px; height: 30px; border:none;'>";
                        echo "<h5 style='color:#fff; padding:5px; font-size: 15px'>/{$record['available_count']}</h5>";
                      echo "</div>";

                      echo "<div style='display:flex'>";
                        echo "<input type='number' value='1' name='howManyDate' style='width: 50px; height: 30px; border:none;'>";
                        echo "<h5 style='color:#fff; padding:5px; font-size: 15px'>/Days</h5>";
                      echo "</div>";
                    echo "</div>";    
                    echo "<input type='number' name='e_id' value='{$record['e_id']}' style='display:none;'>";
                    echo "<input type='number' name='e_price' value='{$record['e_price']}' style='display:none;'>";
                    echo "<input type='number' name='available_count' value='{$record['available_count']}' style='display:none;'>";
                    echo "<input type='number' name='total_count' value='{$record['e_qty']}' style='display:none;'>";
                    // echo "<button type='button' onclick='submitGetItem({$record['available_count']}, {$record['e_id']})' style='width: 50px; height: 40px; border:none; margin-left:5px; background-color: red; color:#fff'; border-radius: 10px>Rent</button>";
                    echo "<button type='submit' style='width: 50px; height: 40px; border:none; margin-left:5px; background-color: red; color:#fff'; border-radius: 10px>Rent</button>";
                  echo '</form>';
                echo "</div>";
                echo "</div>";
            }
          }
        }
      ?>   
      </div>
    </section><!-- End Equipment Section -->


    <!-- ======= Workers Section ======= -->
    <!-- <div id="startOfPricing"></div> -->
     
    <!--#################-->
    <section id="pricing" class="pricing">
      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>Find Workers</h2>
          <p>Electricians</p>
        </div>

        <div class="row">
        <?php
          $sql = "SELECT * FROM workers WHERE w_type='electricians'";
          $result = mysqli_query($con, $sql);

          if($result){
            $i = 0;
            while ($record = mysqli_fetch_assoc($result)){
              if($record['availability'] === "1"){
                if(!$i<4){
                  break;
                }
                  echo "<div class='col-lg-3 col-md-6' style='margin-bottom: 25px;'>";
                    echo "<div class='box' data-aos='zoom-in'>";
                      echo "<span class='advanced' style='background-color: green;'>Available</span>";
                      echo "<h3>Electrician</h3>";
                      echo "<h4><sup>Rs.</sup>{$record['w_price']}<span> / day</span></h4>";
                      echo "<ul>";
                      echo "  <li>",ucfirst($record['w_name']),"</li>";
                      echo "</ul>";
                      echo "<div class='btn-wrap'>";

                        echo "<form action='./components/allocate-worker.php' method='GET' id='myForm' name='myForm' style='display: flex; justify-content: space-between;'>";
                          echo "<label>Date : </label> <input type='number' id='{$record['w_id']}' name='howMany' value='' require min='1' style='width: 50px;'>";
                          echo "<input type='number'  name='Worker_id' value='{$record['w_id']}' require style='display: none'>";
                          // echo "<button style='border:none; width: 110px;' class='btn-buy' type='button' name='submitBtn' onclick='submitForm({$record['w_id']})' name='{$record['w_id']}'>Hires</button>";
                          echo "<button style='border:none; width: 110px;' class='btn-buy' type='submit'>Hires</button>";
                        echo "</form>";

                      echo "</div>";
                    echo "</div>";
                  echo "</div>";

                  $i = $i + 1;
              }
              
            }
          }
        ?>

        </div><!--Row-->
      </div>

      <div style='height: 80px'></div>

      <!-- carpenters -->
      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>Find Workers</h2>
          <p>Carpenters</p>
        </div>

        <div class="row">
        <?php
          $sql = "SELECT * FROM workers WHERE w_type='carpenters'";
          $result = mysqli_query($con, $sql);

          if($result){
            $i = 0;
            while ($record = mysqli_fetch_assoc($result)){
              if($record['availability'] === "1"){
                if($i>4){
                  break;
                }
                  echo "<div class='col-lg-3 col-md-6' style='margin-bottom: 25px;'>";
                    echo "<div class='box' data-aos='zoom-in'>";
                      echo "<span class='advanced' style='background-color: green;'>Available</span>";
                      echo "<h3>Carpenters</h3>";
                      echo "<h4><sup>Rs.</sup>{$record['w_price']}<span> / day</span></h4>";
                      echo "<ul>";
                      echo "  <li>",ucfirst($record['w_name']),"</li>";
                      echo "</ul>";
                      echo "<div class='btn-wrap'>";

                        echo "<form action='./components/allocate-worker.php' id='myForm' name='myForm' style='display: flex; justify-content: space-between;'>";
                          echo "<label>Date : </label> <input type='number' id='{$record['w_id']}' name='howMany' value='' require min='1' style='width: 50px;'>";
                          echo "<input type='number'  name='Worker_id' value='{$record['w_id']}' require style='display: none'>";
                          echo "<button style='border:none; width: 110px;' class='btn-buy' type='button' name='submitBtn' onclick='submitForm({$record['w_id']})' name='{$record['w_id']}'>Hires</button>";
                        echo "</form>";

                      echo "</div>";
                    echo "</div>";
                  echo "</div>";

                  $i = $i + 1;
              }
              
            }
          }
        ?>

        </div><!--Row-->
      </div>

      <div style='height: 80px'></div>

      <!-- mason -->
      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>Find Workers</h2>
          <p>Mason</p>
        </div>

        <div class="row">
        <?php
          $sql = "SELECT * FROM workers WHERE w_type='mason'";
          $result = mysqli_query($con, $sql);

          if($result){
            $i = 0;
            while ($record = mysqli_fetch_assoc($result)){
              if($record['availability'] === "1"){
                if($i>4){
                  break;
                }
                  echo "<div class='col-lg-3 col-md-6' style='margin-bottom: 25px;'>";
                    echo "<div class='box' data-aos='zoom-in'>";
                      echo "<span class='advanced' style='background-color: green;'>Available</span>";
                      echo "<h3>Mason</h3>";
                      echo "<h4><sup>Rs.</sup>{$record['w_price']}<span> / day</span></h4>";
                      echo "<ul>";
                      echo "  <li>",ucfirst($record['w_name']),"</li>";
                      echo "</ul>";
                      echo "<div class='btn-wrap'>";

                        echo "<form action='./components/allocate-worker.php' id='myForm' name='myForm' style='display: flex; justify-content: space-between;'>";
                          echo "<label>Date : </label> <input type='number' id='{$record['w_id']}' name='howMany' value='' require min='1' style='width: 50px;'>";
                          echo "<input type='number'  name='Worker_id' value='{$record['w_id']}' require style='display: none'>";
                          echo "<button style='border:none; width: 110px;' class='btn-buy' type='button' name='submitBtn' onclick='submitForm({$record['w_id']})' name='{$record['w_id']}'>Hires</button>";
                        echo "</form>";

                      echo "</div>";
                    echo "</div>";
                  echo "</div>";

                  $i = $i + 1;
              }
              
            }
          }
        ?>

        </div><!--Row-->
      </div>

      <div style='height: 80px'></div>
      
      <!-- digging_Work -->
      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>Find Workers</h2>
          <p>Digging Work</p>
        </div>

        <div class="row">
        <?php
          $sql = "SELECT * FROM workers WHERE w_type='digging_Work'";
          $result = mysqli_query($con, $sql);

          if($result){
            $i = 0;
            while ($record = mysqli_fetch_assoc($result)){
              if($record['availability'] === "1"){
                if($i>4){
                  break;
                }
                  echo "<div class='col-lg-3 col-md-6' style='margin-bottom: 25px;'>";
                    echo "<div class='box' data-aos='zoom-in'>";
                      echo "<span class='advanced' style='background-color: green;'>Available</span>";
                      echo "<h3>Digging Work</h3>";
                      echo "<h4><sup>Rs.</sup>{$record['w_price']}<span> / day</span></h4>";
                      echo "<ul>";
                      echo "  <li>",ucfirst($record['w_name']),"</li>";
                      echo "</ul>";
                      echo "<div class='btn-wrap'>";

                        echo "<form action='./components/allocate-worker.php' id='myForm' name='myForm' style='display: flex; justify-content: space-between;'>";
                          echo "<label>Date : </label> <input type='number' id='{$record['w_id']}' value='' name='howMany' require min='1' style='width: 50px;'>";
                          echo "<input type='number'  name='Worker_id' value='{$record['w_id']}' require style='display: none'>";
                          echo "<button style='border:none; width: 110px;' class='btn-buy' type='button' name='submitBtn' onclick='submitForm({$record['w_id']})' name='{$record['w_id']}'>Hires</button>";
                        echo "</form>";

                      echo "</div>";
                    echo "</div>";
                  echo "</div>";

                  $i = $i + 1;
              }
              
            }
          }
        ?>

        </div><!--Row-->
      </div>

      <div style='height: 80px'></div>
      
      <!-- glazier -->
      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>Find Workers</h2>
          <p>Glazier</p>
        </div>

        <div class="row">
        <?php
          $sql = "SELECT * FROM workers WHERE w_type='glazier'";
          $result = mysqli_query($con, $sql);

          if($result){
            $i = 0;
            while ($record = mysqli_fetch_assoc($result)){
              if($record['availability'] === "1"){
                if(!$i<4){
                  break;
                }
                  echo "<div class='col-lg-3 col-md-6' style='margin-bottom: 25px;'>";
                    echo "<div class='box' data-aos='zoom-in'>";
                      echo "<span class='advanced' style='background-color: green;'>Available</span>";
                      echo "<h3>Glazier</h3>";
                      echo "<h4><sup>Rs.</sup>{$record['w_price']}<span> / day</span></h4>";
                      echo "<ul>";
                      echo "  <li>",ucfirst($record['w_name']),"</li>";
                      echo "</ul>";
                      echo "<div class='btn-wrap'>";

                        echo "<form action='./components/allocate-worker.php' id='myForm' name='myForm' style='display: flex; justify-content: space-between;'>";
                          echo "<label>Date : </label> <input type='number' id='{$record['w_id']}' name='howMany' value='' require min='1' style='width: 50px;'>";
                          echo "<input type='number'  name='Worker_id' value='{$record['w_id']}' require style='display: none'>";
                          echo "<button style='border:none; width: 110px;' class='btn-buy' type='button' name='submitBtn' onclick='submitForm({$record['w_id']})' name='{$record['w_id']}'>Hires</button>";
                        echo "</form>";

                      echo "</div>";
                    echo "</div>";
                  echo "</div>";

                  $i = $i + 1;
              }
              
            }
          }
        ?>

        </div><!--Row-->
      </div>

      <div style='height: 80px'></div>
     
      <!-- backhoe_Driver -->
      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>Find Workers</h2>
          <p>Backhoe Driver</p>
        </div>

        <div class="row">
        <?php
          $sql = "SELECT * FROM workers WHERE w_type='backhoe_Driver'";
          $result = mysqli_query($con, $sql);

          if($result){
            $i = 0;
            while ($record = mysqli_fetch_assoc($result)){
              if($record['availability'] === "1"){
                if(!$i<4){
                  break;
                }
                  echo "<div class='col-lg-3 col-md-6' style='margin-bottom: 25px;'>";
                    echo "<div class='box' data-aos='zoom-in'>";
                      echo "<span class='advanced' style='background-color: green;'>Available</span>";
                      echo "<h3>Backhoe Driver</h3>";
                      echo "<h4><sup>Rs.</sup>{$record['w_price']}<span> / day</span></h4>";
                      echo "<ul>";
                      echo "  <li>",ucfirst($record['w_name']),"</li>";
                      echo "</ul>";
                      echo "<div class='btn-wrap'>";

                        echo "<form action='./components/allocate-worker.php' id='myForm' name='myForm' style='display: flex; justify-content: space-between;'>";
                          echo "<label>Date : </label> <input type='number' id='{$record['w_id']}' value='1' name='howMany' value='' require min='1' style='width: 50px;'>";
                          echo "<input type='number'  name='Worker_id' value='{$record['w_id']}' require style='display: none'>";
                          echo "<button style='border:none; width: 110px;' class='btn-buy' type='button' name='submitBtn' onclick='submitForm({$record['w_id']})' name='{$record['w_id']}'>Hires</button>";
                        echo "</form>";

                      echo "</div>";
                    echo "</div>";
                  echo "</div>";

                  $i = $i + 1;
              }
              
            }
          }
        ?>

        </div><!--Row-->
      </div>

      <div style='height: 80px'></div>

     
    </section><!-- End worker Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

  
        <div class="section-title" data-aos="zoom-out">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>No: 08,Kurunegala road,Ridigama.</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>newnationalrentals@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p> 037 2252101</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">
				 
        <form class="row g-3" action="https://formsubmit.co/ramya009937@gmail.com" method="POST">
          <!-- Honeypot -->
          <input type="text" name="_honey" style="display: none;">

          <!-- Disable Captcha -->
          <input type="hidden" name="_captcha" value="false">

          <input type="hidden" name="_next" value="#" >

          <div class="col-md-6">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" name="name" id="firstName" required>
          </div>
          <div class="col-md-6">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="Last&nbsp;Name" id="lastName" required>
          </div>
          <div class="col-md-8">
            <label for="emailInfo" class="form-label">E-mail</label>
            <input type="email" class="form-control" name="email" id="emailInfo" required>
          </div>
          <div class="col-md-4">
            <label for="phoneNumber" class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="phone" id="phoneNumber" placeholder="071 1234567">
          </div>
          <div class="col-md-12">
            <label for="comments" class="form-label">Comments, questions?</label>
            <textarea class="form-control" id="comments" name="comments,&nbsp;questions" rows="3" required></textarea>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-warning">Submit</button>
          </div>
        </form>
          </div>

        </div>

      </div>
      
      
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>New National Rentals</h3>
      <p>The BEST Place to Find Workers & Hire Equipment.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>New National Rentals</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Developed by <a href="#">TRAGI Technologies.</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- CHAT BAR BLOCK -->
    <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Chat with us!
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button>

        <div class="content">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                        </div>

                        <!-- User input box -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg"
                                    placeholder="Tap 'Enter' to send a message">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                    onclick="sendButton()"></i>
                            </div>
                        </div>

                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
<!-- END CHAT BAR BLOCK -->


<script>
  function click_cart() {
    document.getElementById('cartContainer').style="position: absolute; top: 51px; right: -30px; padding: 10px; background-color: rgb(241, 241, 241); width: 60vw; height: fit-content; display:display; border-radios: 7px"
  }

  function closeCartList(){
    document.getElementById('cartContainer').style="display: none";
  }

  function submitForm(x){
    let value = document.getElementById(x).value;
    // console.log(typeof(value));
    console.log(value);
    if(value > 0){
      document.getElementById("myForm").submit()
    }
    else{
      alert("Please Insert DATE(S) Worker hire..")
    }
  }

  function submitGetItem(available_count, id){
    let value = Math.floor(document.getElementById(id).value);
    console.log(available_count + " " + value);
    if(available_count < value || value < 0 || value == ''){
      alert("Pleas enter available item quantity..")
    }
    else{
      document.getElementById("myFormItem").submit()
    }
  }

</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="static/script/chat.js"></script>
<script src="static/script/responses.js"></script>
</body>

</html>