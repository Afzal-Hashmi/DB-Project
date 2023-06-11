<?php 
    include "connection.php";
    include "Color_Size.php";

    if(isset($_GET['id'])){

        $Product_ID=$_GET['id'];
        $Product_Color = color($_GET['color']);
        $Product_Size = size($_GET['size']);
    
    
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
            $sql = "DELETE FROM product WHERE product_ID = '$Product_ID'";
            $result4 = mysqli_query($conn, $sql);
        }

        if ($result1 && $result2 && $result3 || $result4) {
            echo "<script> window.location.href='../report.php'; </script>";
        } else {
            echo "<script> alert('Facing Problem while executing Query'); </script>";
            echo "<script> window.location.href='../report.php'; </script>";
        }
    } else {
    // The specified data does not exist in the database
    echo "<script> alert('Such Data Does Not Exist in your Database'); </script>";
    echo "<script> window.location.href='../report.php'; </script>";
    }

?>