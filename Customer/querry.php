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


<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section id="ctdetails" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading font-x2">Send querries</h6>
    </div>
    <figure class="one_half first">
      <ul class="nospace clear">
        <img src="../images/demo/100x100.png" style="width:100%;height:150px">
      </ul>
    </figure>
    <article class="one_half">
     

       <form  action="forms/query.php" method="POST" class="register-form" id="register-form">
        <fieldset>
          <legend>Send Querries:</legend>
          <input type="text" name="username"  placeholder="Username" required>
          <input type="email" name="email" placeholder="Email" required>
         
          <input type="number" name="phonenumber"  placeholder="phonenumber" required>
          <input type="text" name="address" value="" placeholder="Address" required>
          <textarea name="query" cols="70" rows="10" placeholder="Message" required></textarea>
          <br><br>
          <div class="form-submit">
                        <input type="submit" value="Submit" class="submit submit1" name="register"  id="submit" />
                        </div>
        
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
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<!-- Homepage specific -->
<script src="../layout/scripts/jquery.easypiechart.min.js"></script>
<!-- / Homepage specific -->
</body>
</html>