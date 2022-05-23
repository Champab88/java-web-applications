<?php

include('forms/config.php');

if(isset($_POST['submit'])){
    //getting text data from the fields
    $productname=$_POST['productname'];
   
    $productdescription=$_POST['productdescription'];
    $productprice=$_POST['productprice'];
    $email=$_POST['email'];

    //getting image from the field
    $pro_image = $_FILES['pro_image']['name'];
    $pro_image_tmp = $_FILES['pro_image']['tmp_name'];

    move_uploaded_file($pro_image_tmp,"../productimages/$pro_image");

    $insert_product = "insert into products (productname,productdescription,productprice,email,pro_image) 
                  VALUES ('$productname','$productdescription','$productprice','$email','$pro_image')";
    $insert_pro = mysqli_query($con, $insert_product);
  
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Record Modified Successfully')
    window.location.href='viewbuyproducts.php';
    </SCRIPT>");
  }
else{
          echo "Something went wrong!";
        }

?>

<?php
 session_start();

$email= $_SESSION['email'];
include("forms/config.php");
?>
<?php
          $sql="SELECT * FROM designer where email ='$email'";
          $result=mysqli_query($con,$sql);
        ?>
        <?php
          while($rows=mysqli_fetch_array($result)){
           
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
      <h6 class="heading font-x2">Add Designs</h6>
    </div>
    <figure class="one_half first">
      <ul class="nospace clear">
        <img src="../images/demo/100x100.png" style="width:100%;height:150px">
      </ul>
    </figure>
    <article class="one_half">
     
     <form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">
                        
                        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                          <label for="exampleInputEmail1">Product Name</label>
                          <input type="text"  name="productname" class="form-control" id="exampleInputEmail1"  required>
                      </div>

                     
                     
                     
                      <div class="clearfix"></div>


                      <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                          <label for="exampleInputEmail1">Product Description</label>
                          <input type="text"  style="height: 120px;" name="productdescription" class="form-control" id="exampleInputEmail1" required>
                      </div>
                      <div class="clearfix"></div>
                       <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                          <label for="exampleInputEmail1">Product Price</label>
                          <input type="number" name="productprice" class="form-control" id="exampleInputEmail1"  required>
                      </div>
                      <div class="clearfix"></div>
                      <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                          <label for="exampleInputEmail1">EMail ID</label>
                          <input type="text"  name="email" value="<?php echo $rows['email']; ?>" class="form-control" id="exampleInputEmail1"  readonly>

                      </div>


                      <div class="control-group">
<label class="control-label" for="basicinput">Product Image1</label>
<div class="controls">
<input type="file" name="pro_image" id="productimage1" value="" class="span8 tip" required>
</div>
</div>



                     <div class="controls">
                        <button type="submit" name="submit" class="btn">Insert</button>
                      </div>
                    </form>
    </article>
    <!-- ################################################################################################ -->
  </section>
</div>

<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#"></a>Smooth out design</p>
    
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

<?php         // close while loop 

            
        
          }
          ?>