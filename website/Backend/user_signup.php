<?php
include "connection.php";
$username=$_POST['username'];
$password=$_POST['password'];
$confirm_password=$_POST['Confirm-password'];
$hash=password_hash($password,PASSWORD_DEFAULT);
if($password==$confirm_password){

$sql= "SELECT username from login Where username='$username'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if ($result->num_rows > 0){
    echo "<script> alert('Username Already Exist') </script>";
    echo "<script> window.location.href='../Signup.php' </script>";
}else{
    $sql="INSERT into login (username,pass) Value(?,?)";
    $stm=$conn->stmt_init();
    if (!$stm->prepare($sql)) {
        echo "<script> alert('Facing Problem while executing Query'); </script>";
        echo "<script> window.location.href='../Signup.php'; </script>";
    }
    $stm->bind_param("ss",$username,$hash);
    $result=$stm->execute();
    if($result){
        echo "<script> alert('Profile Created') </script>";
    echo "<script> window.location.href='../login.php' </script>";
    }else{
        echo "<script> alert('Something Went Wrong Please Try Again') </script>";
    echo "<script> window.location.href='../Signup.php' </script>";
    }
}
}else{
    echo "<script> alert('Password Doesnot Match Try Again') </script>";
    echo "<script> window.location.href='../Signup.php' </script>";
}
?>