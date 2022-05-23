
<?php
include_once 'forms/config.php';

 session_start();

$email= $_SESSION['email'];

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $get_pro = "SELECT designer.uname, designer.email, products.productname
  FROM designer
  INNER JOIN products ON designer.email = products.email where id='$id'";
  $run_pro = mysqli_query($con, $get_pro);
  while($rows=mysql_fetch_array($run_pro))
  {

  

  $username =  $rows['uname'];
  $email =  $rows ['email'];
  
  // $abt = $row_pro['abt'];
  // $exp = $row_pro['exp'];
   $address = $rows ['address'];
  
        $id = $rows['id'];
        $productname =  $rows['productname'];
        $productprice = $rows ['productprice'];

   
       $pro_image = $rows ['pro_image'];
  

      }
  ?>



<!DOCTYPE html>

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Smooth out design</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php
  include('inc/header.php');
?>
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section id="ctdetails" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading font-x2">Designer profile</h6>
    </div>
    <figure class="one_half first">
      <ul class="nospace clear">
      <img src="../images/demo/100x100.png" style="width:100%;height:150px">
      </ul>
    </figure>
    <article class="row">
    <?php


$sql="SELECT * FROM designer where email='$email'";
$result=mysqli_query($con,$sql);

?>
<?php
while($rows=mysqli_fetch_array($result)){
  
    $username = $rows['uname'];
    $email = $rows['email'];
    $phonenumber = $rows['phonenumber'];
    // $abt = $row_pro['abt'];
    // $exp = $row_pro['exp'];
     $address = $rows['address'];
   
     $id = $row_pro['id'];
  $productname = $rows['productname'];
  $productprice = $rows['productprice'];

   
  $pro_image =$rows['pro_image'];

    
?>
<div class="row">
  <div class="column" style="background-color:white;">
    <h2><img src="./pimages/<?php echo $pro_image;?>" style="border-radius:30px; width:500px; height:250px;"></h2>
    <p><h4>  </h4></p>
  </div>
  <div class="column" style="background-color:white;">
    <h2>DETAILS</h2>
    <p style="color:black;">
   <h5>Name: <?php echo $rows['uname']; ?></br></h5>
   <h5>Email ID: <?php echo $rows['email']; ?></br></h5>
   <h5>Contact NO: <?php echo $rows['phonenumber']; ?></br></h5>
   <h5>About:<?php echo $rows['abt']; ?></br></h5>
   <h5>Experience: <?php echo $rows['exp']; ?></br></h5>
   <h5>address: <?php echo $rows['address']; ?></br></h5>

  </div>
</div>
  <?php 
          // close while loop 
          }
          ?>
    </article>




<div class="row">
  <div class="column" style="background-color:white;">
    <h2><img src="./pimages/<?php echo $pro_image;?>" style="border-radius:30px; width:500px; height:250px;"></h2>
    <p><h4>  </h4></p>
  </div>
  <div class="column" style="background-color:white;">
    <h2>DETAILS</h2>
    <p style="color:black;">
   <h5>Name: <?php echo $rows['uname']; ?></br></h5>
   <h5>Email ID: <?php echo $rows['email']; ?></br></h5>
   <h5>Contact NO: <?php echo $rows['phonenumber']; ?></br></h5>
   <h5>About:<?php echo $rows['abt']; ?></br></h5>
   <h5>Experience: <?php echo $rows['exp']; ?></br></h5>
   <h5>address: <?php echo $rows['address']; ?></br></h5>

  </div>
</div>


<div class="row">
<?php
            $get_pro = "select * from products where email='$email' ";
            $run_pro = mysqli_query($con,$get_pro);
            $count_pro = mysqli_num_rows($run_pro);
            if($count_pro==0){
                echo "<h2> No Product found in selected criteria </h2>";
            }
            else {
                $i = 0;
                while ($row_pro = mysqli_fetch_array($run_pro)) {
                    $id = $row_pro['id'];
                    $productname = $row_pro['productname'];
                    $productdescription = $row_pro['productdescription'];
                    $productprice = $row_pro['productprice'];
                    $email = $row_pro['email'];
                    $pro_image = $row_pro['pro_image'];
                    ?>
  
      
<!-- ################################################################################################ -->
<div class="column">
    <img src="../productimages/<?php echo $pro_image;?>" alt="Snow" style="width:500px">
    <h5>ID:<?php echo $id; ?></br> Price:<?php echo $productprice; ?><br></h5>
    
  </div>
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">Smooth out design</a></p>
    
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<!-- Homepage specific -->
<script src="../layout/scripts/jquery.easypiechart.min.js"></script>
<!-- / Homepage specific -->
</body>
</html>
<?php 
       }
       
      }// close while loop 
          }
          ?>

