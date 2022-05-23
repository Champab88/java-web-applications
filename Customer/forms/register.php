<?php

include('config.php');

if(isset($_POST['register'])){
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$phonenumber = $_POST['phonenumber'];
$address = $_POST['address'];


    $insert_c = "insert into customer(username,email,password,phonenumber,address) values('$username','$email','$password','$phonenumber','$address')";

            $run_c=mysqli_query($con,$insert_c);

      echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Added Succesfully')
    window.location.href='../Customerlogin.php';
    </SCRIPT>");
        }
        else{
          echo "Something went wrong!";
        }
   
?>