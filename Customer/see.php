<!-- <?php
include("forms/config.php");
 session_start();

$email= $_SESSION['email'];
if(isset($_GET['email'])){
    $email = $_GET['email'];
    $get_pro = "select * from products where id='$email'";
    $run_pro = mysqli_query($con, $get_pro);
    $row_pro = mysqli_fetch_array($run_pro);
    $id = $row_pro['id'];
    $productname = $row_pro['productname'];
    $productprice = $row_pro['productprice'];
    $email = $row_pro['email'];
}
?>
<!-- include("forms/config.php");
?> -->
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
<?php
  include('inc/header.php');
?>
<!-- ################################################################################################ -->
<?php
            $get_pro = "select * from designer where email='$email' ";
            $run_pro = mysqli_query($con,$get_pro);
            $count_pro = mysqli_num_rows($run_pro);
            if($count_pro==0){
                echo "<h2> No Product found in selected criteria </h2>";
            }
            else {
                $i = 0;
                while ($row_pro = mysqli_fetch_array($run_pro)) {
                    $id = $row_pro['id'];
                    $username = $row_pro['uname'];
                    $email = $row_pro['email'];
                    $phonenumber = $row_pro['phonenumber'];
                    $abt = $row_pro['abt'];
                    $exp = $row_pro['exp'];
                    $address = $row_pro['address'];
                    $pro_image = $row_pro['pro_image'];
                    ?>


<!-- ################################################################################################ -->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>
<body>

<h2>Designer Profile</h2>

<p><h4>WELCOME to MY profile</h4>.</p>

<div class="row">
  <div class="column" style="background-color:white;">
    <!-- <h2><img src="./productimages/<?php echo $pro_image;?>" style="border-radius:30px; width:500px; height:250px;"></h2> -->
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


<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<!-- Homepage specific -->
<script src="../layout/scripts/jquery.easypiechart.min.js"></script>
<!-- / Homepage specific -->


 <?php         // close while loop 
} 
            }
        
          }
          ?>
         

<!-- ################################################################################################ -->

          </html> -->