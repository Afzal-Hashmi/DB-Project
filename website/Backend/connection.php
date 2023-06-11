<?php
   extract($_POST);
   $conn = new mysqli("localhost:3308", 'root','',"project");
  // // Check connection 
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }
?> 
