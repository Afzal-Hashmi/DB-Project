<?php
    require "connection.php";

    $Product_ID = $_POST['Product_ID'];
    $Product_Brand = $_POST['Product_Brand'];
    $Product_Name = $_POST['Product_Name'];
    $Product_Color = $_POST['Product_Color'];
    $Product_Size = $_POST['Shoe_Size'];
    $Product_Quantity = $_POST['Product_Quantity'];
    $Product_Price = $_POST['Product_Price'];

    // Check if the product with the specified details exists
    $sql = "SELECT proc.product_ID, proc.product_name, pr.size_id, pr.color_no
            FROM shoe_price pr 
            LEFT JOIN product proc ON proc.product_ID = pr.Product_id 
            LEFT JOIN shoe_sizes siz ON siz.size_id = pr.size_id 
            LEFT JOIN shoe_color col ON col.color_no = pr.color_no 
            WHERE (proc.product_ID = '$Product_ID' AND proc.product_brand='$Product_Brand' and pr.Quantity='$Product_Quantity'and pr.price='$Product_Price'and pr.size_id = '$Product_Size' AND proc.product_name = '$Product_Name' AND pr.color_no = '$Product_Color')";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($result->num_rows > 0) {
        // The product exists, proceed with deletion

        // Deleting from the shoe price table
        $sql = "DELETE FROM shoe_price WHERE Product_id = '$Product_ID' AND size_id = '$Product_Size' AND color_no = '$Product_Color'";
        $result1 = mysqli_query($conn, $sql);

        // Deleting from the Fk id and color table
        $sql = "DELETE FROM fk_id_color WHERE Product_id = '$Product_ID' AND size_id = '$Product_Size' AND color_no = '$Product_Color'";
        $result2 = mysqli_query($conn, $sql);

        // Deleting from the Fk id and size table
        $sql = "DELETE FROM fk_id_size WHERE product_id = '$Product_ID' AND shoe_id = '$Product_Size'";
        $result3 = mysqli_query($conn, $sql);

        // Check if there are any remaining entries for the product
        $sql = "SELECT proc.product_ID
                FROM shoe_price pr 
                LEFT JOIN product proc ON proc.product_ID = pr.Product_id 
                LEFT JOIN shoe_sizes siz ON siz.size_id = pr.size_id 
                LEFT JOIN shoe_color col ON col.color_no = pr.color_no 
                WHERE proc.product_ID = '$Product_ID'";
                
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if ($result->num_rows == 0) {
            // Deleting from the products table
            $sql = "DELETE FROM product WHERE product_ID = '$Product_ID' AND product_name = '$Product_Name'";
            $result4 = mysqli_query($conn, $sql);
        }

        if ($result1 && $result2 && $result3 || $result4) {
            echo "<script> alert('Data Deleted'); </script>";
            echo "<script> window.location.href='../products.php'; </script>";
        } else {
            echo "<script> alert('Facing Problem while executing Query'); </script>";
            echo "<script> window.location.href='../products.php'; </script>";
        }
    } else {
        // The specified data does not exist in the database
        echo "<script> alert('Such Data Does Not Exist in your Database'); </script>";
        echo "<script> window.location.href='../products.php'; </script>";
    }
?>
