<?php require './components/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <main>
        <div id="left">
            <h3>New National <span>Rentals</span> <br></h3>
            <ul>
                <a href="#dashboard"><span class="navigation_icon"><i class="fa-solid fa-gauge"></i></span> Dashboard</a>

                <a href="#customer-management"><span class="navigation_icon"><i class="fa-solid fa-user"></i></span>Customer Management</a>

                <a href="#worker-management"><span class="navigation_icon"><i class="fa-solid fa-users"></i></span>Worker Management</a>

                <a href="#equipment-management"><span class="navigation_icon"><i class="fa-solid fa-screwdriver-wrench"></i></span>Equipment Management</a>

                <a href="#approved"><span class="navigation_icon"><i class="fa-solid fa-person-circle-check"></i></span>Approval</a>

                <a href="#"><span class="navigation_icon"><i class="fa-solid fa-right-from-bracket"></i></span>Log Out</a>
            </ul>
        </div><!--left-->

        <div id="right">
            <div class="dashboard" id="dashboard">
                <h1>Dashboard</h1>

                <div class="statusCard">
                    <div class="card">
                        <p>Total Order</p>
                        <h1>28</h1>
                    </div>
                    
                    <div class="card">
                        <p>Total Order</p>
                        <h1>28</h1>
                    </div>
                    
                    <div class="card">
                        <p>Total Order</p>
                        <h1>28</h1>
                    </div>
                    
                    <div class="card">
                        <p>Total Order</p>
                        <h1>28</h1>
                    </div>

                </div>
            </div><!--Dashboard-->

            <div class="customer-management" id="customer-management">
                <h1>Customer Management</h1>

                <div class="search">
                    <p>Search ID  </p>
                    <input type="text" id="customer_management_input" placeholder="Enter Customer ID">
                    <!-- <button onclick="customer_management_searching()">Search</button> -->
                </div>

                <div class="table">
                    <table>
                        <tr>
                            <th>Customer ID</th>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Details</th>
                        </tr>
                        
                        <?php
                            $sql = "SELECT * FROM customers";
                            $result = mysqli_query($con, $sql);

                            if($result){
                                while ($record = mysqli_fetch_assoc($result)){

                            ?>

                            <tr class="customerClass <?php echo $record['c_id'] ?>" id="<?php echo $record['c_id'] ?>">
                                <td><?php echo $record['c_id'] ?></td>
                                <td><?php echo $record['c_fName'] ?></td>
                                <td><?php echo $record['c_contact_number'] ?></td>
                                <td><button>View</button></td>
                            </tr>
                                
                            <?php
                                }
                            }

                            ?>
                
                    </table>
                </div>
            </div><!--customer-management-->
            
            <div class="worker-management" id="worker-management">
                <h1>Worker Management</h1>

                <div class="search">
                    <p>Search ID  </p>
                    <input type="text" id="worker_management_input" placeholder="Enter Worker ID">
                    <!-- <button onclick="">Search</button> -->
                </div>

                <div class="table">
                    <table>
                        <tr>
                            <th>Worker ID</th>
                            <th>Name</th>
                            <th>Work Type</th>
                            <th>Details</th>
                        </tr>

                        <?php
                            $sql = "SELECT * FROM workers";
                            $result = mysqli_query($con, $sql);


                            if($result){
                                while ($record = mysqli_fetch_assoc($result)){

                            ?>


                            <tr class="workerClass <?php echo $record['w_id'] ?>" id="<?php echo $record['w_id'] ?>">

                                <td><?php echo $record['w_id'] ?></td>
                                <td><?php echo $record['w_name'] ?></td>
                                <td><?php echo $record['w_contact_number'] ?></td>
                                <td><button>View</button></td>

                            </tr>
                                
                            <?php

                                }
                            }

                            ?>
                    </table>
                </div>
            </div><!--worker-management-->
            

            <div class="equipment-management" id="equipment-management">
                <h1>Equipment Management <a href="./components/add_equipment.php"><i class="fa-solid fa-square-plus" style="color: #68B984; cursor:pointer"></i></a></h1>

                <div class="search">
                    <p>Select Category  </p>
                    <!-- <input type="text" id="equipment_management_input" placeholder="Enter Equipment ID"> -->
                    <select id="equipment_management_input">
                        <option value="all">All</option>
                        <option value="Power Tools">Power Tools</option>
                        <option value="Portable Machines">Portable Machines</option>
                        <option value="Construction Equipme">Construction Equipment</option>
                    </select>
                </div>

                <div class="table">
                    <table>
                        <tr>
                            <th>Equipment ID</th>
                            <th>Equipment Name</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Available</th>
                            <th>Details</th>
                        </tr>
                        
                        <?php
                            $sql = "SELECT * FROM equipments";
                            $result = mysqli_query($con, $sql);


                            if($result){
                                while ($record = mysqli_fetch_assoc($result)){

                            ?>


                            <tr class="equipmentClass <?php echo $record['e_type'] ?>" id="<?php echo $record['e_id'] ?>">

                                <td><?php echo $record['e_id'] ?></td>
                                <td><?php echo $record['e_name'] ?></td>
                                <td><?php echo $record['e_type'] ?></td>
                                <td><?php echo $record['e_qty'] ?></td>
                                <td><?php echo $record['available_count'] ?></td>
                                <td><button>View</button></td>

                            </tr>
                                
                            <?php

                                }
                            }

                            ?>
                        
                        
                    </table>
                </div>
            </div><!--Equipment-management-->
            
            <div class="approved" id="approved">
                <h1>Approved</h1>

                <h3 style="padding-bottom:7px;">Worker Approved</h3>
                <div class="table">
                    <table>
                        <tr>
                            <th>Worker ID</th>
                            <th>Worker Name</th>
                            <th>Customer Name</th>
                            <th>Dates</th>
                            <th>Approval</th>
                        </tr>

                        <?php
                            // Get Sell Worker Data
                            $sql_sell_worker = "SELECT * FROM sell_worker";
                                $result_sell_worker = mysqli_query($con, $sql_sell_worker);
                            

                            if($result_sell_worker){
                                while ($record_sell_worker = mysqli_fetch_assoc($result_sell_worker)){
                                    // Get Worker Data
                                    $worker = "SELECT * FROM workers WHERE w_id='{$record_sell_worker['worker_id']}'";
                                    $result_worker = mysqli_query($con, $worker);

                                    $worker_record = mysqli_fetch_assoc($result_worker);

                                    // Get Customer Data
                                    $customer = "SELECT * FROM customers WHERE c_id='{$record_sell_worker['customer_id']}'";
                                    $result_customer = mysqli_query($con, $customer);

                                    $customer_record = mysqli_fetch_assoc($result_customer);

                                    echo "<tr>";
                                        echo "<td>{$record_sell_worker['worker_id']}</td>";
                                        echo "<td>{$worker_record['w_name']}</td>";
                                        echo "<td>{$customer_record['c_fName']}</td>";
                                        echo "<td>{$record_sell_worker['how_many_date']}</td>";
                                        echo "<td><button style='background-color: rgb(105, 216, 105);'>Approved</button><button style='background-color: rgb(196, 51, 51);'>Reject</button></td>";
                                    echo "</tr>";

                                }
                            }

                        ?>


   
                    </table>

                    </div>
                    
                    <h3 style="padding:30px 0px; padding-bottom: 10px; ">Equipment Approved</h3>
                    
                    <div class="table">
                    <table>
                        <tr>
                            <th>Equipment ID</th>
                            <th>Equipment Name</th>
                            <th>Customer Name</th>
                            <th>Dates</th>
                            <th>Equipment Qty</th>
                            <th>Price</th>
                            <th>Approval</th>
                        </tr>

                        <?php
                            // Get Sell Item Data
                            $sql_sell_item = "SELECT * FROM sell_item";
                                $result_sell_item = mysqli_query($con, $sql_sell_item);
                            

                            if($result_sell_item){
                                while ($record_sell_item = mysqli_fetch_assoc($result_sell_item)){
                                    // Get Equipments Data
                                    $item = "SELECT * FROM equipments WHERE e_id='{$record_sell_item['item_id']}'";
                                    $result_item = mysqli_query($con, $item);

                                    $item_record = mysqli_fetch_assoc($result_item);

                                    // Get Customer Data
                                    $customer = "SELECT * FROM customers WHERE c_id='{$record_sell_item['customer_id']}'";
                                    $result_customer = mysqli_query($con, $customer);

                                    $customer_record = mysqli_fetch_assoc($result_customer);

                                    echo "<tr>";
                                        echo "<td>{$item_record['e_id']}</td>";
                                        echo "<td>{$item_record['e_name']}</td>";
                                        echo "<td>{$customer_record['c_fName']}</td>";
                                        echo "<td>{$record_sell_item['How_many_date']}</td>";
                                        echo "<td>{$record_sell_item['item_qty']}</td>";
                                        echo "<td>{$record_sell_item['total_price']}</td>";
                                        echo "<td><button style='background-color: rgb(105, 216, 105);'>Approved</button><button style='background-color: rgb(196, 51, 51);'>Reject</button></td>";
                                    echo "</tr>";
                                }
                            }
                        ?>


   
                    </table>
                </div>
            </div><!--Equipment-management-->
        </div><!--right-->
    </main>

<script src="./main.js"></script>
</body>
</html>