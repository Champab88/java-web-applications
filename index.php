<!DOCTYPE html>

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Smooth out design</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">








</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1 class="logoname"><a href="index.html">SMOOTH <span>out</span>design</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        

        <li><a href="#about">About Us</a></li>
       
        <li><a class="drop" href="#">Register/Login</a>
          <ul>
            <li><a href="Customer/Customerlogin.php">Customer</a></li>
            <li><a href="Designer/Designerlogin.php">Designers </a></li>
          </ul>
        </li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay" style="background-image:url('ws.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <h3 class="heading">SMOOTH OUT DESIGN</h3>
     
      
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <section id="introblocks">
      <ul class="nospace group btmspace-80 elements elements-four">
      <?php
      include("config.php");
          $sql="SELECT * FROM designer ";
          $result=mysqli_query($con,$sql);
        ?>
        <?php
          while($rows=mysqli_fetch_array($result)){
            $pro_image = $rows['pro_image'];
           
       ?>
        <li class="one_quarter">
          <article><a href="Customer/Customerlogin.php">
          <img src="./Designer/pimages/<?php echo $pro_image;?>" style="border-radius:30px; width:500px; height:250px;"></a>
            <h6 class="heading">Name: <?php echo $rows['uname']; ?></h6>
            <p>Experience: <?php echo $rows['exp'];?><br>About:<?php echo $rows['abt'];?><br>Address:<?php echo $rows['address'];?>
            </p>
          </article>
        </li>
        <?php         // close while loop 
} 
            
        
          
          ?>
        <!-- <li class="one_quarter">
          <article><a href="Customer/Customerlogin.php"><img src="cca91ab0df3afc7078bb85f5410b1dc0.jpg" alt=""></a>
            <h6 class="heading">upholster Designer</h6>
            <p><u>Lucas</u></p><br> Quality Standards, Hand Tools, using knowledge of fabric and upholstery methods.</br></p><img src="p3.jpg" alt="">
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="Customer/Customerlogin.php"><img src="portrait-657116__340.jpg" alt=""></a>
            <h6 class="heading">upholster Designer</h6>
            <p></u>Sophia</u></p><br>1 years experience as  designer<br> Ability to draw and interpret design templates.
              Knowledge of upholstery tools including hot knives, nail guns, and sewing equipment..</p><img src="p4.jpg" alt="">
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="Customer/Customerlogin.php"><img src="Beautiful-Profile-Images-4.jpg" alt=""></a>
            <h6 class="heading">upholster Designer</h6>
            <p><u>Olivia</u><br>3 years experience as  designer<br> Refinish,Office Furniture,Seam Cushions,Automotive Interiors
              .</p><img src="p5.jpg" alt="">
          </article>
        </li> -->
      </ul>
    </section>
    <!-- ################################################################################################ -->
    <section class="group shout">
      <figure class="one_half first"><img src="222.jpg" alt="">
        
      </figure>
      <figure class="one_half"><img src="222.jpg" alt="">
       
      </figure>
    </section>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<div class="wrapper coloured" id="about">
  <section id="testimonials" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading font-x2">About Us</h6>
      <p>This website is created for the beginners and professional upholsterers who wants to get into this field. This website basically collects all the information about the upholsterers and provides that information to the customer. The upholsterers, who are willing to present their work can enter their information directly through this webpage. It would be easy for the clients to find several upholsterers, as well as it would be helpful for the upholsterers to get their identity in this particular website.</p>
    </div>
   
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section id="ctdetails" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading font-x2" id="contact">Contact</h6>
    </div>
    <figure class="one_half first">
      <ul class="nospace clear">
        <li class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +00 (123) 456 7890</span></li>
        <li class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> support@domain.com</span></li>
        <li class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong> Directions to <a href="#">our location</a></span></li>
      </ul>
    </figure>
    <article class="one_half">
      <h6 class="heading">Purus nullam arcu integer</h6>
      <p class="nospace btmspace-15">Elementum nisi ac volutpat vestibulum enim mi tincidunt eros sed justo magna odio sed lacus ut non ante sit amet est luctus dictum ut dolor ac.</p>
      <form action="#" method="post">
        <fieldset>
          <legend>Newsletter:</legend>
          <input type="text" value="" placeholder="Name">
          <input type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
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
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">Smooth out design</a></p>
    
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- Homepage specific -->
<script src="layout/scripts/jquery.easypiechart.min.js"></script>
<!-- / Homepage specific -->
</body>
</html>