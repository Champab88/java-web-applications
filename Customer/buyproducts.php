
<?php
include_once 'forms/config.php';

 session_start();

$email= $_SESSION['email'];

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $get_pro = "select * from products where id='$id'";
  $run_pro = mysqli_query($con, $get_pro);
  $row_pro = mysqli_fetch_array($run_pro);
  $id = $row_pro['id'];
  $productname = $row_pro['productname'];
  $productprice = $row_pro['productprice'];

   

}
?>


<?php

if(isset($_POST['submit'])){
    //getting text data from the fields
    $id=$_POST['id'];
    $productname = $_POST['productname'];
    $productprice = $_POST['productprice'];
    $name=$_POST['name'];
   
     $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $address=$_POST['address'];
    
  
    
    $insert_product = "insert into cusbuyproducts (id,productname,productprice,name,email,phonenumber,address,date)
                  VALUES ('$id','$productname','$productprice','$name','$email','$phonenumber','$address',NOW())";
    
   $run_c=mysqli_query($con,$insert_product);

      echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Booked Succesfully')
    window.location.href='products.php';
    </SCRIPT>");
  }
else{
          echo "Something went wrong!";
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
      <h6 class="heading font-x2">Book Product</h6>
    </div>
    <figure class="one_half first">
      <ul class="nospace clear">
      <img src="../images/demo/100x100.png" style="width:100%;height:150px">
      </ul>
    </figure>
    <article class="one_half">
       <?php


          $sql="SELECT * FROM customer where email='$email'";
          $result=mysqli_query($con,$sql);

        ?>
        <?php
          while($rows=mysqli_fetch_array($result)){
              
              $username = $rows['username'];
              $email = $rows['email'];
              $phonenumber = $rows['phonenumber'];
              // $abt = $row_pro['abt'];
              // $exp = $row_pro['exp'];
               $address = $rows['address'];
       
              
        ?>
      <form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">
                       
      <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                          <label for="exampleInputEmail1">Id</label>
                          <input type="text" value="<?php echo $id;?>" name="id"  readonly>
                          
                      </div>

                      <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                          <label for="exampleInputEmail1">Product Name</label>
                          <input type="text"  name="productname"    value="<?php echo $productname;?>"  readonly>
                          
                      </div>
                      <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                          <label for="exampleInputEmail1">Product Price</label>
                          <input type="text"  name="productprice"     value="<?php echo $productprice;?>"  readonly>
                          
                      </div>

                        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                          <label for="exampleInputEmail1"> Name</label>
                          <input type="text" name="name"  value="<?php echo $username;?>" readonly>
                      </div>

                      <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                          <label for="exampleInputEmail1">Email ID</label>
                          <input type="email" name="email" value="<?php echo $email;?>"  readonly>
                      </div>
                      <div class="clearfix"></div>

                      <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                          <label for="exampleInputEmail1">Mobile NO</label>
                          <input type="text" name="phonenumber" value="<?php echo $phonenumber;?>"  required>
                      </div>

                      <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                          <label for="exampleInputEmail1">Adress</label>
                          <input type="text" name="address" value="<?php echo $address;?>"  required>
                      </div>
                      <div class="clearfix"></div>

                      

                  
                     
           
                       <div class="controls">
                        <button type="submit" name="submit" class="btn">Book</button>
                      </div>
                    </form>
                    <?php 
          // close while loop 
          }
          ?>
    </article>
    <!-- ################################################################################################ -->
  </section>
</div>

<!-- ################################################################################################ -->

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