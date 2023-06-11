<?php
    include "connection.php";
    // Include the "connection.php" file which contains the database connection details.

    // Store user input data in variables
    $Product_ID = $_POST["Product_ID"];
    $Product_Brand = $_POST["Product_Brand"];
    $Product_Color = $_POST["Product_Color"];
    $Product_Size = $_POST["Product_Size"];

    extract($_POST);
    // Extract the values from the POST array and assign them to variables.
    // Note: Using extract() can lead to variable collisions and security vulnerabilities. It's generally not recommended.

    // Check if the product ID and brand match in the "product" table
    $sql2="SELECT proc.product_ID, pr.size_id,pr.Quantity, pr.color_no ,proc.product_Brand, pr.price FROM shoe_price pr 
            LEFT JOIN product proc ON proc.product_ID = pr.Product_id 
            LEFT JOIN shoe_sizes siz ON siz.size_id = pr.size_id 
            LEFT JOIN shoe_color col ON col.color_no = pr.color_no 
            WHERE col.shoe_color = '$Product_Color' and siz.shoe_size='$Product_Size' and proc.product_Brand = '$Product_Brand' and proc.product_ID = '$Product_ID';";

    $result1 = mysqli_query($conn, $sql2);

    // Fetch the data from the query
    $row = mysqli_fetch_assoc($result1);

    // Check if there are any matching rows
    if ($result1->num_rows > 0) {
        if($row["Quantity"]>0){
        // Insert the order into the "customer_order" table
        $sql = "INSERT INTO customer_order (Product_id, Product_brand, Product_color, Shoe_size, price ,  `date_time`) VALUES (?, ?, ?, ?,?,?)";

        $stm = $conn->stmt_init();

        if (!$stm->prepare($sql)) {
            die("SQL Error: " . $conn->error());
        }

        $currentDateTime=date('Y-m-d H:i:s');

        $stm->bind_param("issdis", $_POST["Product_ID"], $_POST["Product_Brand"], $_POST["Product_Color"], $_POST["Product_Size"], $row["price"],$currentDateTime);

        // Execute the prepared statement
        $result = $stm->execute();

        if ($result) {
            echo "<script> alert('Order Confirmed'); </script>";
            $sql3 = "update shoe_price set Quantity=Quantity-1 Where Product_id='$row[product_ID]' and size_id='$row[size_id]' and color_no='$row[color_no]';";
            $result1 = mysqli_query($conn, $sql3);
            echo "<script> window.location.href='../custcheckout.php'; </script>";
            // Display a success message and redirect to '../custcheckout.php' if the order is placed successfully
        } else {
            echo "<script> alert('Sorry, the order was not placed.'); </script>";
            echo "<script> window.location.href='../custcheckout.php'; </script>";
            // Display an error message and redirect to the same page if the order placement fails
        }
    }else{
        echo "<script> alert('Sorry, the order was not placed Product is Out of Stock.'); </script>";
            echo "<script> window.location.href='../custcheckout.php'; </script>";
    }
    } else {
        echo "<script> alert('Product ID or Product Brand is wrong.'); </script>";
        echo "<script> window.location.href='../custcheckout.php'; </script>";
        // Display an error message and redirect to the same page if the product ID or brand is incorrect
    }
?>