<?php
    include "connection.php";
    // Include the "connection.php" file which contains the database connection details.

    // Retrieve user input data from the form
    $Product_Brand = $_POST["Product_Brand"];
    $Product_Color = $_POST["Product_Color"];
    $Product_Size = $_POST["Product_Size"];
    $Budget = $_POST["Budget"];

    // Truncate the "searched_data" table
    $sql = "TRUNCATE TABLE searched_data;";
    $result = mysqli_query($conn, $sql);

    // Select data based on user input
    $sql2 = "SELECT proc.product_ID, proc.product_brand, siz.shoe_size, col.shoe_color, pr.price, pr.Quantity 
            FROM shoe_price pr 
            LEFT JOIN product proc ON proc.product_ID = pr.Product_id 
            LEFT JOIN shoe_sizes siz ON siz.size_id = pr.size_id 
            LEFT JOIN shoe_color col ON col.color_no = pr.color_no 
            WHERE ((pr.size_id = '$Product_Size' or pr.color_no = '$Product_Color')and proc.product_brand = '$Product_Brand' ) AND pr.price <= '$Budget';";

    $result1 = mysqli_query($conn, $sql2);


    // Check if there are any matching rows
    if ($result1->num_rows > 0) {
       
        // Insert retrieved data into the "searched_data" table
        $sql = "INSERT INTO searched_data (product_id, product_brand, shoes_color, shoes_size, price) VALUES (?, ?, ?, ?, ?)";
        $stm = $conn->stmt_init();

        if (!$stm->prepare($sql)) {
            die("SQL Error: " . $conn->error());
        }

        while ($row = mysqli_fetch_assoc($result1)) {
            if($row["Quantity"]!=0){
            // Bind values to the prepared statement
            $stm->bind_param("issdi", $row["product_ID"], $row["product_brand"], $row["shoe_color"], $row["shoe_size"], $row["price"]);

            // Execute the prepared statement
            $result = $stm->execute();
            }else{
                echo "<script> alert('Product Not Avaliable'); </script>";
                echo "<script> window.location.href='../custsearch.php'; </script>";
            }
        

        if ($result) {
            echo "<script> window.location.href='../custsearch.php'; </script>";
            // Redirect to '../custsearch.php' if the insertion is successful
    } else {
        echo "<script> alert('Product Not Avaliable'); </script>";
        echo "<script> window.location.href='../custsearch.php'; </script>";
        // Display a message indicating no matching orders and redirect to the same page
    }
  }  } else {
        echo "<script> alert('No orders match the description.'); </script>";
        echo "<script> window.location.href='../custsearch.php'; </script>";
        // Display a message indicating no matching orders and redirect to the same page
    }
?>