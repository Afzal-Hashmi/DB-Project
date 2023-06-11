<?php 
    include "connection.php";

    if(isset($_GET['id'])){

        $Product_ID=$_GET['id'];
        $Product_Color = $_GET['color'];
        $Product_Size = $_GET['size'];
        $Product_Time = $_GET['time'];
    }
    
        $sql = "DELETE FROM customer_order WHERE Product_id = '$Product_ID' AND Shoe_size = '$Product_Size' AND Product_color = '$Product_Color' and date_time='$Product_Time'";
        $result1 = mysqli_query($conn, $sql);

        if ($result1) {
            echo "<script> alert('Order Completed'); </script>";
            echo "<script> window.location.href='../Orders.php'; </script>";
        }
         else {
            echo "<script> alert('Order Not Deleted'); </script>";
            echo "<script> window.location.href='../Orders.php'; </script>";
        }

?>