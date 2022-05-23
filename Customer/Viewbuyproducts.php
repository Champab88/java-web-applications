<?php
include_once 'forms/config.php';
 session_start();

$email= $_SESSION['email'];
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
      <h6 class="heading font-x2">View buy Product details</h6>
    </div>
    
    <table class="table table-striped">
            <thead>
            <tr>
                <th style="text-align: center">ID</th>
          <th style="text-align: center">Product Name</th>
          <th style="text-align: center">Product Model</th>
          <th style="text-align: center">Product Description</th>
          <th style="text-align: center">Product Price</th>
          <th style="text-align: center"> Date</th>
         

          
            </tr>
            </thead>
            <tbody>
            <?php
            $get_pro = "select * from cusbuyproducts where email='$email' ";
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
                    $productmodel = $row_pro['productmodel'];
                    $productdescription = $row_pro['productdescription'];
                    $productprice = $row_pro['productprice'];
                    $date = $row_pro['date'];
                    
                    ?>
                    <tr>
                       <td style="text-align: center"><?php echo $id; ?></td>
                        <td style="text-align: center"><?php echo $productname; ?></td>
                        <td style="text-align: center"><?php echo $productmodel; ?></td>
                        <td style="text-align: center"><?php echo $productdescription; ?></td>
                        <td style="text-align: center"><?php echo $productprice; ?></td>
                        <td style="text-align: center"><?php echo $date; ?></td>
                       
                        


                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<div class="wrapper row9">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">Smooth out design</a></p>
    
    <!-- ################################################################################################ -->
  </div>
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