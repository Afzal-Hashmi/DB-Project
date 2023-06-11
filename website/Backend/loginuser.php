<?php
   include "connection.php";

   //storing usered data in variables
   $username=$_POST["username"];
   $password=$_POST["password"];
   extract($_POST);

   //running queries
   $sql="select * from login where username='$username'";

   //running query
   $result=mysqli_query($conn,$sql);

   //checking conditions for customer and admin
   if($result->num_rows==1)
   {
      while($row=mysqli_fetch_assoc($result)){
         if((password_verify($password,$row['pass'])) || ($password == $row['pass']) ){
            if($row["designation"]=='Admin')
            {
               echo "<script> window.location.href='../Admin_home.php'; </script>";
            }
            else if($row["designation"]=='customer')
            {
               echo "<script> window.location.href='../cust_home.php'; </script>";
            }
            else{
               echo "<script> alert('Wrong Input'); </script>"; 
               echo "<script> window.location.href='../login.php'; </script>";
            }
         }
      }
   }
      echo "<script> alert('Password or Username Doesnot match'); </script>";
      echo "<script> window.location.href='../login.php'; </script>";

?>