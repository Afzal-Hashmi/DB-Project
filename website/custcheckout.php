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
        body{
            height: 100%;
            width: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(../img/pexels-photo-1598505.jpeg);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .navbar {
            width: 85%;
            margin: auto;
            padding: 35px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;

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

        .contain::after {
            content: "";
            display: table;
            clear: both;
        }

        .contain {
            background: rgb(241, 235, 235);
            border-radius: 20px;

            padding: 20px 60px;
            border-radius: 20px;
            margin-top: 50px;
        }

        .coloumn {
            text-align: center;
            float: left;
            padding: 30px 65px;
            height: 500px;
        }

        .form-center {
            display: flex;
            justify-content: center;
        }

        .form-center h1 {
            font-size: 35px;
            color: rgba(255, 153, 0, 0.774);
            margin-left: 30px;
            text-decoration: none;
        }

        input[type=text] {
            width: 200px;
            padding: 12px 40px;
            margin: 7px 0;
            box-sizing: border-box;
            outline: none;
        }

        input[type=number] {
            width: 200px;
            padding: 12px 40px;
            margin: 7px 0;
            box-sizing: border-box;
            outline: none;
        }

        input {
            border-radius: 12px;
            border-color: rgb(255, 153, 0);
            border-style: solid;
        }

        .Order {
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

        .Order:hover {
            background-color: rgb(253, 173, 52);
            color: white;
        }

        #home {
            color: rgb(255, 153, 0);
        }

        #Checkout {
            color: rgb(255, 153, 0);
        }

        table {
            display: flex;
            justify-content: center;
        }

        th {
            color: rgb(255, 153, 0);
            padding: 10px 20px;
            font-size: 30px;
            justify-content: center;
        }

        th,td {
            border: 2px solid rgb(255, 153, 0);
            border-collapse: collapse;
        }

        td {
            font-size: 30px;
            padding:5px 10px;
            text-align: center;
        }

        #orderhere {
            text-align: center;
        }

        .Order {
            justify-content: end;
        }
        .button {
            color: rgb(253, 173, 52);
            padding: 1.5px 3px;
            font-size: 30px;
            background: none;
            border-radius: 10px;
            font-weight: bold;
            margin: 4px 2px;
            text-decoration:none;
            margin-bottom:5px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-color: transparent;
            border-style: solid;
        }
       
        .button:hover {
            background-color: rgb(253, 173, 52);
            color: white;
         } 
    </style>
</head>

<body>

    <div class="banner">
        <div class="navbar">
            <img src="0" alt="">

            <ul>
                <li><a href="./cust_home.php.php" id="home">Home</a></li>
                <li><a href="./custsearch.php" id="Search">Search</a></li>
                <li><a href="./custcheckout.php" id="Checkout">Checkout</a></li>
                <li><a href="./index.php" id="logout">Logout</a></li>
            </ul>
        </div>

        <div class="form-center">
            <div class="contain">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Brand</th>
                        <th>Color</th>
                        <th>Size</th>
                        <th>Price</th>
                        <th>Order</th>
                    </tr>

                    <?php
                        include"./backend/connection.php";
                        $sql = "select product_id,product_brand,shoes_color,shoes_size,price from searched_data";
                        $result=$conn->query($sql);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<tr>
                                <td>".$row["product_id"]."</td>
                                <td>".$row["product_brand"]."</td>
                                <td>".$row["shoes_color"]."</td>
                                <td>".$row["shoes_size"]."</td>
                                <td>".$row["price"]."</td>
                                <td>
                                <a href='./backend/order_row_usercheckout.php?id=".$row['product_id']."&brand=".$row["product_brand"]."&color=".$row["shoes_color"]."&size=".$row["shoes_size"]."' class='button'>Order</a>
                                </td>
                                </tr>";
                            }
                            echo "</table>";
                        }
                        else{
                            echo "<script>alert '0 Result'</script>";
                        }
                        $conn->close();
                    ?>

                <br>

                <form action="./backend/usercheckout.php" method="POST" >
                    <h1 id="orderhere">Order Here!</h1>
                    <br>
                    <input type="number" name="Product_ID" placeholder="Product_ID" required>
                    <input type="text" name="Product_Brand" placeholder="Product_Brand" required>
                    <input type="text" name="Product_Color" placeholder="Product_Color" required>
                    <input type=number step=any name="Product_Size" placeholder="Shoe_Size" required>
                    <input type="submit" name="submit" class="Order" value="Order">
                </form>

            </div>
        </div>
    </div>
</body>

</html>