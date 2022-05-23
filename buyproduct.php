
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
    $productmodel = $row_pro['productmodel'];
    $productdescription = $row_pro['productdescription'];
    $productprice = $row_pro['productprice'];
   
    $pro_image = $row_pro['pro_image'];
    

}
?>

<?php

if(isset($_POST['submit'])){
    //getting text data from the fields
    $productname=$_POST['productname'];
    $productmodel=$_POST['productmodel'];
    $productdescription=$_POST['productdescription'];
    $productprice=$_POST['productprice'];
     $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $address=$_POST['address'];
    
    $insert_product = "insert into cusbuyproducts (productname,productmodel,productdescription,productprice,email,phonenumber,address,date) 
                  VALUES ('$productname','$productmodel','$productdescription','$productprice','$email','$phonenumber','$address',NOW())";
    
   $run_c=mysqli_query($con,$insert_product);

      echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Added Succesfully')
    window.location.href='Viewbuyproducts.php';
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
      <h6 class="heading font-x2">Buy</h6>
    </div>
    <figure class="one_half first">
      <ul class="nospace clear">
        <img class="img-thumbnail" src='./img/img1.jpg' width='80' height='80'>
      </ul>
    </figure>
    <article class="one_half">
       <?php


          $sql="SELECT * FROM customer where email='$email'";
          $result=mysqli_query($con,$sql);
        ?>
        <?php
          while($rows=mysqli_fetch_array($result)){
        ?>
      <form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">
                       
                        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                          <label for="exampleInputEmail1">Id</label>
                          <input type="text" value="<?php echo $id;?>" name="id" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" readonly>
                      </div>
                        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                          <label for="exampleInputEmail1">Product Name</label>
                          <input type="text" value="<?php echo $productname;?>" name="productname" class="form-control" id="exampleInputEmail1"  readonly>
                      </div>

                      <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                          <label for="exampleInputEmail1">Product Model</label>
                          <input type="text" name="productmodel" value="<?php echo $productmodel;?>" class="form-control" id="exampleInputEmail1"  readonly>
                      </div>
                      <div class="clearfix"></div>

                      <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                          <label for="exampleInputEmail1">Product Description</label>
                          <input type="text"  name="productdescription" value="<?php echo $productdescription;?>" class="form-control" id="exampleInputEmail1" readonly>
                      </div>

                      <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                          <label for="exampleInputEmail1">Product price</label>
                          <input type="text" name="productprice" value="<?php echo $productprice;?>" class="form-control" id="exampleInputEmail1" readonly>
                      </div>
                      <div class="clearfix"></div>

                      

                  
                       <input type="email" name="email" value="<?php echo $rows['email']; ?>"  readonly>
         <input type="number" name="phonenumber" value="<?php echo $rows['phonenumber']; ?>"  readonly>
          <input type="text" name="address" value="<?php echo $rows['address']; ?>"  readonly>
                   
           
                       <div class="controls">
                        <button type="submit" name="submit" class="btn">Insert</button>
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