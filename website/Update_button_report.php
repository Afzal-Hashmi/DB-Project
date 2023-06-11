<?php
include "./backend/Color_Size.php";
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $color=color($_GET['color']);
    $size=size($_GET['size']);
}
?>

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
        input[type=radio]{
            margin-left:100px;
        }
        #Quantity,#Price {
            accent-color: rgb(255, 153, 0);
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
        p,label{
            color:rgb(255, 153, 0);
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
            <form name="f1" action="./backend/Update_report_btn.php" method="POST">
                <h1 class="outdoor">OURTDOORS</h1><br>
                <input type="number" name="Product_ID" Value="<?php echo "$id" ?>" placeholder="Product_ID" required><br>
                <input type="text" name="Product_Color" value="<?php echo "$color" ?>" placeholder="Color" required><br><br>
                <input type="number" name="Product_Size" value="<?php echo "$size" ?>" placeholder="Size" required><br><br>
                    <br>

                        <p>
                            <b>Please select what you want to Update:</b>
                        </p>
                        <br>
                    <input type="radio" id="Quantity" name="radioo" value="Quantity">
                    <label for="Quantity">Quantity</label><br>
                    <input type="radio" id="Price" name="radioo" value="Price">
                    <label for="Price">Price</label><br><br>

                <input type="number" name="Data" placeholder="Replaced Value" required><br><br>

                <input type="submit" name="sumbit" class="button" id="UPDATE" value="UPDATE">

            </form>
        </div>
    </div>
</body>

</html>