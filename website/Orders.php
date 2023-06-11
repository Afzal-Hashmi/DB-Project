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
            background-size: Cover;
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
            margin-top: 10px;
        }

        .form-center {
            display: flex;
            justify-content: center;
        }

        #home {
            color: rgb(255, 153, 0);
        }

        #report {
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

        table,
        th,
        td {
            border: 1px solid rgb(255, 153, 0);
            border-collapse: collapse;
        }

        td {
            padding:5px 10px;
            font-size: 30px;
            text-align: center;
        }

        .Truncate {
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

        .Truncate:hover {
            background-color: rgb(253, 173, 52);
            color: white;
        }

        .Truncate {
            justify-content: end;
        }

        .bottomright {
            position: fixed;
            bottom: 50px;
            right: 50px;
            font-size: 18px;
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
                <li><a href="./Admin_home.php" id="home">Home</a></li>
                <li><a href="./products.php" id="Product">Products</a></li>
                <li><a href="./report.php" id="report">Report</a></li>
                <li><a href="./Orders.php" id="product">Orders</a></li>
                <li><a href="./Update.php" id="report">Update</a></li>
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
                        <th>Order_Date</th>
                        <th>Shipped</th>
                    </tr>

                    <?php
                        include"./backend/connection.php";
                        $sql = "SELECT * FROM customer_order;";
                        $result=$conn->query($sql);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<tr>
                                <td>".$row["Product_id"]."</td>
                                <td>".$row["Product_brand"]."</td>
                                <td>".$row["Product_color"]."</td>
                                <td>".$row["Shoe_size"]."</td>
                                <td>".$row["price"]."</td>
                                <td>".$row["date_time"]."</td>
                                <td>
                                    <a href='./Backend/Order_delete_report.php?id=".$row["Product_id"]."&color=".$row["Product_color"]."&size=".$row["Shoe_size"]."&time=".$row["date_time"]."'class='button'>Shipped</a>
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

                <div class="bottomright">
                    <form action="./backend/truncate_orders.php" method="POST">
                        <input type="submit" name="submit" class="Truncate" value="Clear">
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>

</html>