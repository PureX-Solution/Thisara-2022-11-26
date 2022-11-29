<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width: 100%;
            height: 100%;
        }
        #reg_box{
            position: absolute;
            width: 30%;
            height: 90%;
            background: rgba(000, 000, 000, 0.7);
            margin-top: 2%;
            margin-left: 35%;
            border: 1px solid;
            padding: 10px;
            box-shadow: 2px 2px 30px #c50a0a;
        }
        #reg_form{
            position: absolute;
            width: 96%;
            height: 97%;
            background: rgba(255, 255, 255, 0.5);
            margin-top: 0%;
            margin-left: 0%;
            border-radius: 15px;
        }
        #icon{
            width: 16%;
            height: 12%;
            margin-left: 42%;
            margin-top: 3%;
        }
        .lable{
            position: absolute;
            line-height: 40px;
            margin-left: 10%;
        }
        .value{
            position: absolute;
            margin-left: 45%;
            margin-top: 3%;
        }
        .hr{
            visibility: hidden;
        }
        #but{
            position: absolute;
            margin-left: 70%;
            margin-top: 10%;
            border-radius: 7px;
        }
        
    </style>
</head>
<body>
    <div id="reg_box">
        <div id="reg_form">
            <img src="../img/icon/logo.png" alt="icon" id="icon"><br><br>
                <h2 style="text-align:center; font-family:arial; position: absolute; top:55px; left: 85px;">New National Rentals</h2>
            <hr><br><br>


            <form action="worker_registation_submit.php" method="post" autocomplete="off" enctype="multipart/form-data">
                <span class="lable" id="lbl1">Name</span>
                <span class="value"><input type="text" placeholder="Name" name="name"></span><br><hr class="hr">
                <span class="lable" id="lbl2">Contact Number</span>
                <span class="value"><input type="text" placeholder="Contact Number" name="contact_number"></span><br><hr class="hr">
                <span class="lable" id="lbl3">Address</span>
                <span class="value"><input type="text" placeholder="Address" name="address"></span><br><hr class="hr">
                <span class="lable" id="lbl4">Type</span>
                <span class="value">
                    <select name="Type" id="type">
                        <option value="carpenters" selected>Carpenters</option>
                        <option value="mason">Mason</option>
                        <option value="digging_Work">Digging Work</option>
                        <option value="glazier">Glazier</option>
                        <option value="backhoe_Driver">Backhoe Driver</option>
                        <option value="electricians">Electricians</option>
                    </select>
                </span><br><hr class="hr">
                <span class="lable" id="lbl5">Description</span>
                <span class="value"><input type="text" placeholder="Description" name="description"></span><br><hr class="hr">
                <span class="lable" id="lbl6">Image</span>


                <span class="value"><input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""></span><br><hr class="hr">
                
                
                <span class="lable" id="lbl7">Price Per Day</span>
                <span class="value"><input type="text" placeholder="Price Per Day" name="ppd"></span><br><hr class="hr">
                <span id="but"><button type = "submit" name = "submit">Register</button></span>
                
            </form>
        </div>
    </div>
</body>
</html>