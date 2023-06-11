<?php
    include "connection.php";
    
    // Get values from the form
    $Option = $_POST['radioo'];
    $Product_ID = $_POST['Product_ID'];
    $Product_Color = $_POST['Product_Color'];
    $Product_Size = $_POST['Product_Size'];
    $Replace = $_POST['Data'];

    $sql="SELECT * from shoe_price Where Product_id='$Product_ID' and size_id='$Product_Size' and color_no='$Product_Color'";
    $result= mysqli_query($conn,$sql);
    $row= mysqli_fetch_assoc($result);

    if($result->num_rows==1){
        // Update price if the selected option is 'Price'
        if($Option=='Price'){
            $sql="UPDATE shoe_price SET price='$Replace' Where Product_id='$Product_ID' and size_id='$Product_Size' and color_no='$Product_Color';";
            $result= mysqli_query($conn,$sql);
            echo "<script> alert($result)</script>";
            if($result){
                // Show success message and redirect
                echo "<script> alert('Update Successful')</script>";
                echo "<script> window.location.href='../Update.php'</script>";
            } else{
                // Show error message if no data exists
                echo "<script> alert('No Data Exist Against '$Product_ID','$Product_Size','$Product_Color'')</script>";
                echo "<script> window.location.href='../Update.php'</script>";
            }
        }
        // Update quantity if the selected option is 'Quantity'
        else if($Option=='Quantity'){
            $sql="UPDATE shoe_price SET Quantity='$Replace' Where (Product_id='$Product_ID' and size_id='$Product_Size' and color_no='$Product_Color');";
            $result= mysqli_query($conn,$sql);
            if($result){
                // Show success message and redirect
                echo "<script> alert('Update Successful')</script>";
                echo "<script> window.location.href='../Update.php'</script>";
            } else{
                // Show error message if no data exists
                echo "<script> alert('No Data Exist Against '$Product_ID','$Product_Size','$Product_Color'')</script>";
                echo "<script> window.location.href='../Update.php'</script>";
            }
        }
        // Handle the case when the selected option is neither 'Price' nor 'Quantity'
        else{
            echo "<script> alert('Updation Not Successful')</script>";
            echo "<script> window.location.href='../Update.php'</script>";
        }
    } else{
        echo "<script> alert('No Such Data Exist')</script>";
        echo "<script> window.location.href='../Update.php'</script>";
    }
?>
