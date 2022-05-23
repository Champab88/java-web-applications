<?php
include_once 'forms/config.php';
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
    background-color: black;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  
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

<!-- ################################################################################################ -->
<center><h6 class="heading font-x2"> Designers </h6></center>
<!-- ################################################################################################ -->
<div class="row">


<?php
            $get_pro = "select * from designer";
            $run_pro = mysqli_query($con,$get_pro);
            $count_pro = mysqli_num_rows($run_pro);
            if($count_pro==0){
                echo "<h2> No Product found in selected criteria </h2>";
            }
            else {
                $i = 0;
                while ($row_pro = mysqli_fetch_array($run_pro)) {
                  // $pro_image = $row_pro['pro_image'];
                    $username = $row_pro['uname'];
                    $email = $row_pro['email'];
                    $phonenumber = $row_pro['phonenumber'];
                    $address = $row_pro['address'];
                    $pro_image = $row_pro['pro_image'];
                    ?>
                    <div class="column">
                        <p style="color:blue" >
                        <img src="../Designer/pimages/<?php echo $pro_image;?>" style="border-radius:30px; width:500px; height:250px;"></a>

                    <h3 style="text-align: center">Username:<?php echo $username; ?></h3>
                    <h3 style="text-align: center">Email:<?php echo  $email; ?></h3>
                    <h3 style="text-align: center">Contact No:<?php echo $phonenumber; ?></h3>
                    <h3 style="text-align: center">Addess:<?php echo  $address; ?></h3>
                </p>

                        
                          </div>
  <?php
                }
              }          
            
                ?>

</div>         
                   
    
         
   
            
        
            <!-- ?>
     </div>
     </div>
    </div> -->

        <!-- <li class="one_quarter">
          <article><a href="Customer/Customerlogin.php">
            <img src=".../productimages/$pro_image/<?php echo $pro_image;?>" alt=""></a>
            <h6 class="heading">Name: <?php echo $rows['uname']; ?></h6>
            <p>Experience: <?php echo $rows['exp']; ?>
            </p>
          </article>
        </li>
        } 
            
        
          
          ?>
 -->


    </div> 
    </div>
    </div>



   



<!-- <div class="wrapper row2">
  <section id="ctdetails" class="hoc container clear"> 
    ################################################################################################ -->
    <!-- <div class="sectiontitle">
      <!-- <h6 class="heading font-x2">View designers details</h6> -->
    <!-- </div>
    
    <table class="table table-striped">
            <thead>
            <tr> --> 
                <!-- <th style="text-align: center">Username</th>
          <th style="text-align: center">Email</th>
          <th style="text-align: center">Phone Number</th>
          <th style="text-align: center">Address</th> -->
          
           

          
            <!-- </tr>
            </thead>
            <tbody>
            <!-- <?php
            $get_pro = "select * from designer";
            $run_pro = mysqli_query($con,$get_pro);
            $count_pro = mysqli_num_rows($run_pro);
            if($count_pro==0){
                echo "<h2> No Product found in selected criteria </h2>";
            }
            else {
                $i = 0;
                while ($row_pro = mysqli_fetch_array($run_pro)) {
                    
                    $username = $row_pro['uname'];
                    $email = $row_pro['email'];
                    $phonenumber = $row_pro['phonenumber'];
                    $address = $row_pro['address'];
                    ?>
                    <tr>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $phonenumber; ?></td>
                        <td><?php echo $address; ?></td>
                        

                        
                    </tr>
                    <?php
                }
            }
            ?> -->
            </tbody>
        
          </table>
    <!-- ################################################################################################ -->
  </section>
                 </div> -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
 <!-- Posts -->
 <!-- <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Popular Posts</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
          <li class="w3-padding-16">
            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Denim</span>
            <br>
            <span>Sed mattis nunc</span>
          </li>
          <li class="w3-padding-16">
            <img src="/w3images/bandmember.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Sweaters</span>
            <br>
            <span>Praes tinci sed</span>
          </li>
          <li class="w3-padding-16">
            <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Workshop</span>
            <br>
            <span>Ultricies congue</span>
          </li>
          <li class="w3-padding-16">
            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
            <span class="w3-large">Trends</span>
            <br>
            <span>Lorem ipsum dipsum</span>
          </li>
        </ul>
      </div>
      <hr> -->
      <?php
                
            
            ?> 
