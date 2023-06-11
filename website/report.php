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
            height: 100%;
            width: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(../img/pexels-photo-1598505.jpeg);
            background-size: Cover;
            background-position: center;
            background-attachment:fixed;
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

        .form-center h1 {
            font-size: 35px;
            color: rgba(255, 153, 0, 0.774);
            margin-left: 30px;
            text-decoration: none;
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
            font-size: 20px;
            padding: 10px 8px;
            text-align: center;
        }
        .button {
            color: rgb(253, 173, 52);
            padding: 2px 5px;
            font-size: 30px;
            background: none;
            border-radius: 10px;
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
                        <th>Name</th>
                        <th>Color</th>
                        <th>Size</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>

                    <?php
                        include"./backend/connection.php";
                        $sql = "SELECT proc.product_ID, proc.product_Brand,proc.product_Name, siz.shoe_size, col.shoe_color, pr.price ,pr.Quantity FROM shoe_price pr LEFT JOIN product proc ON proc.product_ID = pr.Product_id LEFT JOIN shoe_sizes siz ON siz.size_id = pr.size_id LEFT JOIN shoe_color col ON col.color_no = pr.color_no ORDER by proc.product_ID;";
                        $result=$conn->query($sql);
                        if($result->num_rows > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<tr>
                                <td>".$row["product_ID"]."</td>
                                <td>".$row["product_Brand"]."</td>
                                <td class='product_name'>".$row["product_Name"]."</td>
                                <td>".$row["shoe_color"]."</td>
                                <td>".$row["shoe_size"]."</td>
                                <td>".$row["Quantity"]."</td>
                                <td>".$row["price"]."</td>
                                <td><a href='./backend/report_delete.php?id=".$row['product_ID']."&size=".$row['shoe_size']."&color=".$row['shoe_color']."' class='button'>Delete</a></td>
                                <td><a href='Update_button_report.php?id=".$row['product_ID']."&size=".$row['shoe_size']."&color=".$row['shoe_color']."' class='button'>Update</a></td>
                                </tr>";
                            }   
                            echo "</table>";
                        }
                        else{
                            echo "<script>alert '0 Result'</script>";
                        }
                        $conn->close();
                    ?>

            </div>
        </div>
    </div>
</body>

</html>