<?php
    include "connection.php";
    // Include the "connection.php" file which contains the database connection details.

    // Truncate the "customer_order" table
    $sql = "TRUNCATE TABLE customer_order;";
    $result = mysqli_query($conn, $sql);
    echo "<script> window.location.href='../Orders.php'; </script>";
?>