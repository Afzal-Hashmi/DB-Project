<?php
    require "connection.php";

    $Product_ID = $_POST['Product_ID'];
    $Product_Brand = $_POST['Product_Brand'];
    $Product_Name = $_POST['Product_Name'];
    $Product_Color = $_POST['Product_Color'];
    $Product_Size = $_POST['Shoe_Size'];
    $Product_Quantity = $_POST['Product_Quantity'];
    $Product_Price = $_POST['Product_Price'];

    // Check if the product with the specified ID already exists
    $sql6 = "SELECT product_ID
            FROM product 
            WHERE product_ID = '$Product_ID'";

    $result5 = mysqli_query($conn, $sql6);
    $row3 = mysqli_fetch_assoc($result5);

    if ($result5->num_rows == 0) {
        // Insert the product into the products table
        $sql = "INSERT INTO product VALUES (?, ?, ?, ?)";
        $stm = $conn->stmt_init();

        if (!$stm->prepare($sql)) {
            echo "<script> alert('Facing Problem while executing Query'); </script>";
            echo "<script> window.location.href='../products.php'; </script>";
        }

        $currentDateTime = date('Y-m-d H:i:s');
        $stm->bind_param("isss", $Product_ID, $Product_Brand, $Product_Name, $currentDateTime);

        $result1 = $stm->execute();
    }

    // Check if the product with the specified ID, size, and color already exists
    $sql = "SELECT proc.product_ID, pr.size_id, pr.color_no
            FROM shoe_price pr 
            LEFT JOIN product proc ON proc.product_ID = pr.Product_id 
            LEFT JOIN shoe_sizes siz ON siz.size_id = pr.size_id 
            LEFT JOIN shoe_color col ON col.color_no = pr.color_no 
            WHERE (proc.product_ID = '$Product_ID' AND pr.size_id = '$Product_Size' AND pr.color_no = '$Product_Color')";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($result->num_rows == 0) {
        // The product does not exist, proceed with insertion

        // Insert into the Fk id and size table
        $sql = "INSERT INTO fk_id_size(product_id, shoe_id) VALUES (?, ?)";
        $stm = $conn->stmt_init();

        if (!$stm->prepare($sql)) {
            echo "<script> alert('Facing Problem while executing Query'); </script>";
            echo "<script> window.location.href='../products.php'; </script>";
        }

        $stm->bind_param("ii", $Product_ID, $Product_Size);
        $result2 = $stm->execute();

        // Insert into the Fk id and color table
        $sql = "INSERT INTO fk_id_color(Product_id, size_id, color_no) VALUES (?, ?, ?)";
        $stm = $conn->stmt_init();

        if (!$stm->prepare($sql)) {
            echo "<script> alert('Facing Problem while executing Query'); </script>";
            echo "<script> window.location.href='../products.php'; </script>";
        }

        $stm->bind_param("iii", $Product_ID, $Product_Size, $Product_Color);
        $result3 = $stm->execute();

        // Insert into the shoe price table
        $sql = "INSERT INTO shoe_price(Product_id, size_id, color_no, price, Quantity) VALUES (?, ?, ?, ?, ?)";
        $stm = $conn->stmt_init();

        if (!$stm->prepare($sql)) {
            echo "<script> alert('Facing Problem while executing Query'); </script>";
            echo "<script> window.location.href='../products.php'; </script>";
        }

        $stm->bind_param("iiiii", $Product_ID, $Product_Size, $Product_Color, $Product_Price, $Product_Quantity);
        $result4 = $stm->execute();

        if ($result2 && $result3 && $result4) {
            echo "<script> alert('Data Inserted'); </script>";
            echo "<script> window.location.href='../products.php'; </script>";
        } else {
            echo "<script> alert('Facing Problem while executing Query'); </script>";
            echo "<script> window.location.href='../products.php'; </script>";
        }
    } else {
        // The product already exists with the specified ID, size, and color
        echo "<script> alert('Product with Similar ID already exists.'); </script>";
        echo "<script> window.location.href='../products.php'; </script>";
    }
?>
