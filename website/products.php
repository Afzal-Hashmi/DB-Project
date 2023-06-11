<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUTDOORS</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .banner {
            height: 100vh;
            width: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(../img/pexels-photo-1598505.jpeg);
            background-size: cover;
            background-position: center;
        }

        .navbar {
            width: 85%;
            margin: auto;
            padding: 35px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;

        }

        .logo {
            width: 120px;
            cursor: pointer;

        }

        .navbar ul li {
            list-style: none;
            display: inline-block;
            margin: 0 20px;
            position: relative;
        }

        .navbar ul li a {
            text-decoration: none;
            font-size: 20px;
            color: white;
            text-transform: uppercase;
        }

        .navbar ul li::after {
            content: '';
            height: 3px;
            width: 0;
            background: rgb(255, 153, 0);
            position: absolute;
            left: 0;
            bottom: -10px;
            transition: 0.5s;
        }

        .navbar ul li:hover::after {
            width: 100%;

        }

        .form-center {
            display: flex;
            justify-content: center;
        }

        .form-center h1 {
            font-size: 35px;
            color: rgba(255, 153, 0, 0.774);
            margin-left: 30px;
            text-decoration: underline rgb(255, 153, 0);
        }

        form {
            background-color: rgb(241, 235, 235);
            padding: 20px 60px;
            border-radius: 20px;
            margin-top: 8px;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 50px;
            margin: 4px 0;
            box-sizing: border-box;
            outline: none;
        }

        input[type=number] {
            width: 100%;
            padding: 12px 50px;
            margin: 4px 0;
            box-sizing: border-box;
            outline: none;
        }

        input {
            border-radius: 12px;
            border-color: rgb(255, 153, 0);
            border-style: solid;
        }

        .button {
            margin-left: 15px;
            justify-content: space-between;
            padding: 10px 30px;
            background-color: none;
            border-color: rgb(253, 173, 52);
            border-style: solid;
            transition: 0.5s;
            border-radius: 12px;
            font-weight: bold;
            color: rgb(187, 126, 33);
        }

        .button:hover {
            background-color: rgb(253, 173, 52);
            color: white;
        }

        input::placeholder {
            text-align: center;
        }

        #home {
            color: rgb(255, 153, 0);
        }

        #report {
            color: rgb(255, 153, 0);
        }

        #UPDATE {
            margin-left: 90px;
        }

        #size,#color{
            color: gray;
            width: 100%;
            padding: 12px 50px;
            margin: 4px 0;
            box-sizing: border-box;
            outline: none;
            border: 2px;
            border-radius: 12px;
            border-color: rgb(255, 153, 0);
            border-style: solid;
        }
    </style>
</head>

<body>

    <div class="banner">
        <div class="navbar">
            <img src="0" alt="">

            <ul>
                <li><a href="./Admin_home.php" id="home">Home</a></li>
                <li><a href="./products.php" id="Product">Products</a></li>
                <li><a href="./report.php" id="report">Report</a></li>
                <li><a href="./Orders.php" id="product">Orders</a></li>
                <li><a href="./Update.php" id="report">Update</a></li>
            </ul>
        </div>

        <div class="form-center">
            <form name="f1"  method="POST">
                <h1 class="outdoor">OURTDOORS</h1><br>
                <input type="number" name="Product_ID" placeholder="Product_ID" required><br>
                <input type="text" name="Product_Brand" placeholder="Product_Brand" required><br>
                <input type="text" name="Product_Name" placeholder="Product_Name" required><br>
                    <select name="Product_Color" id="color" required>
                        <option value=""selected>--- Choose a color ---</option>
                        <option value="1" >Black</option>
                        <option value="2">Blue</option>
                        <option value="3">Beige</option>
                        <option value="4">Brown</option>
                        <option value="5">Gray</option>
                        <option value="6">Cream</option>
                        <option value="7">White</option>
                        <option value="8">Pink</option>
                        <option value="9">Neon</option>
                        <option value="10">Red</option>
                        <option value="11">Tan</option>
                        <option value="12">Green</option>
                        <option value="13">Yellow</option>
                        <option value="14">Orange</option>
                    </select>
                    <br>
                    <select name="Shoe_Size" id="size" required>
                        <option value=""selected>--- Choose a Size ---</option>
                        <option value="1" >4.0</option>
                        <option value="2" >5.0</option>
                        <option value="3">6.0</option>
                        <option value="4">6.5</option>
                        <option value="5">7.0</option>
                        <option value="6">7.5</option>
                        <option value="7">8</option>
                        <option value="8">8.5</option>
                        <option value="9">9</option>
                        <option value="10">9.5</option>
                        <option value="11">10</option>
                        <option value="12">10.5</option>
                        <option value="13">11.0</option>
                        <option value="14">12.0</option>
                        <option value="15">13.0</option>
                    </select>   <br>
                <input type="number" name="Product_Quantity" placeholder="Product_Quantity"><br>
                <input type="number" name="Product_Price" placeholder="Product_Price"><br><br>

                <input type="submit" name="sumbit" class="button" value="ADDITION" onclick="f1.action='backend/Addition_product.php'">
                <input type="submit" name="sumbit" class="button" value="DELETE" onclick="f1.action='backend/Delete_product.php'"><br><br>
                
                <a href="Update.php">
                <input type="button" class="button" id="UPDATE" value="UPDATE" >
                </a>
                
            </form>
        </div>
    </div>
</body>

</html>