<?php
include("forms/config.php");

 session_start();



?>

<!DOCTYPE html>

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Smooth out design</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php
  include('inc/header.php');
?>
<!-- ################################################################################################ -->
<div class="sectiontitle">
      <h6 class="heading font-x2">View Added Designs</h6>
    </div>
<!-- ################################################################################################ -->
    
                   
<!-- ################################################################################################ -->
<div class="row">
<?php
            $get_pro = "select * from products";
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
  <div class="column">
    <img src="../productimages/<?php echo $pro_image;?>" alt="Snow" style="width:500px">
    <h5>ID:<?php echo $id; ?></br> Price:<?php echo $productprice; ?><br>Added by:</a><?php echo $email; ?></h5>
  
<h6><a href="buyproducts.php?id=<?php echo $id; ?> ">Book</a></br></h6>
<!-- <a href="http://localhost/sod%20final/Designer/viewprofile.php?id=<?php echo $id; ?>">View Designer </a>    -->
  </div>
  <?php
                }
              }          
            
                ?>

</div>
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
