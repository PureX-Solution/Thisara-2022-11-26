<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Equipment</title>
    <style>
        html{
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }
        .container{
            width: 100vw;
            height: 100vh;
            overflow-x: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(247, 247, 247);
        }
        form{
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            width: 500px;
            height: fit-content;
            padding: 20px 40px;
            background-color: rgb(255, 255, 255);
            border-radius: 7px;
        }

        h1{
            text-align: center;
            color: rgb(245, 115, 40);
            margin: 20px auto;
        }

        .nameUnitPrice{
            display: flex;
            flex-direction: column;
            padding: 10px;
        }

        input, select{
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: rgb(240, 240, 240);
            box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
            padding: auto 10px;
            font-size: 14px;
        }

        label{
            font-size: 19px;
            padding-bottom: 10px;
            font-weight: 600;
            color: rgb(68, 68, 68);
        }

        .btn{
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        .btn input{
            width: 200px;
            text-align: center;
            background-color: rgb(36, 84, 243);
            margin-bottom: 20px;
            color: #fff;
            cursor: pointer;
        }
        .btn input:hover{
            background-color: rgb(38, 0, 255);
            color: #fff
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="./submit_add_item.php" method="POST">
            <h1>Add Equipment</h1>

            <div class="innerContainer">
                <div class="name nameUnitPrice">
                    <label for="type">Item Name</label>
                    <select name="Type" id="type">
                        <option value="Grinders" selected>Grinders</option>
                        <option value="Drill Machine">Drill Machine</option>
                        <option value="Power Saws">Power Saws</option>
                        <option value="Generators">Generators</option>
                        <option value="Concrete Mix Machines">Concrete Mix Machines</option>
                        <option value="Scaffolding">Scaffolding</option>
                        <option value="Accrow Jack">Escrow Jack</option>
                        <option value="Column Box">Column Box</option>
                    </select>
                </div>

                <div class="price nameUnitPrice">
                    <label for="price">Unit Price</label>
                    <input type="number" required placeholder="Enter Unit Price" id="price" name="price">
                </div>
            </div>

            <div class="btn">
                <input type="submit" value="Submit" >
            </div>
        </form>
    </div>
</body>
</html>