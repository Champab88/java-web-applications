<?php

include('config.php');

if(isset($_POST['register'])){
$username = $_POST['username'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$address = $_POST['address'];
$query= $_POST['query'];


    $insert_c = "insert into query(username,email,phonenumber,address,query) values('$username','$email','$phonenumber','$address','$query')";

            $run_c=mysqli_query($con,$insert_c);

      echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Added Succesfully')
    window.location.href='../dashboard.php';
    </SCRIPT>");
        }
        else{
          echo "Something went wrong!";
        }
   
?>