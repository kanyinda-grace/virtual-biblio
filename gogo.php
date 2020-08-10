<?php 
require("connect.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bibliothèque Virtuelle</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Ruda:400,900,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/prettyphoto/css/prettyphoto.css" rel="stylesheet">
  <link href="lib/hover/hoverex-all.css" rel="stylesheet">
  <link href="lib/jetmenu/jetmenu.css" rel="stylesheet">
  <link href="lib/owl-carousel/owl-carousel.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/colors/blue.css">




<H1></H1>

<script type="text/javascript" src="jquery-1.8.2.js"></script>
<script type="text/javascript" src="bootstrap.js"></script>
<script type="text/javascript" src="bootstrap-button.js"></script>
<script type="text/javascript" src="qt/pages.js"></script>        
<link href="style.css" rel="stylesheet" type="text/css" />



      <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>





  <!-- =======================================================
    Template Name: MaxiBiz
    Template URL: https://templatemag.com/maxibiz-bootstrap-business-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <div class="topbar clearfix">
    <div class="container">
      <div class="col-lg-12 text-right">
        <div class="social_buttons">
       <i >Bibliothèque Virtuelle</i>

        </div>
      </div>
    </div>
    <!-- end container -->
  </div>
  <!-- end topbar -->

  <header class="header">
    <div class="container">
      <div class="site-header clearfix">
        <div class="col-lg-3 col-md-3 col-sm-12 title-area">
          <div class="site-title" id="title">
            <img src="img/pp.jpg"  style="height:60px;width:30%;margin-top:;margin-left:;position:" alt="" />
          </div>
        </div>
        <!-- title area -->
        <div class="col-lg-9 col-md-12 col-sm-12">
          <div id="nav" class="right">
            <div class="container clearfix">
              <ul id="jetmenu" class="jetmenu blue">
                <li class="active"><a href="index.html">Accueil</a>
                </li>
            
                <li><a href="#">Livre</a>
                  <ul class="dropdown">
                    <li><a href="enreg_livre.php">Ajouter un livre</a></li>
                    <li><a href="single-product.html">Mise à jour</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="account.html">Account Page</a></li>
                    <li><a href="support.html">Support Center</a></li>
                  </ul>
                </li>
                <li><a href="tab_usager.php">Liste des usagers</a>
                  <ul >
     
                  </ul>
                </li>
                <li><a href="#">Statistiques</a>
                  <ul class="dropdown">
                    <li><a href="recherche_consult_par_date.php">Statistique par date</a></li>
                    <li><a href="tab_consult.php">Statistique complète</a></li>
                    <li><a href="single-with-sidebar.html">Single with Sidebar</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- nav -->
        </div>
        <!-- title area -->
      </div>
      <!-- site header -->
    </div>
    <!-- end container -->
  </header>
  <!-- end header -->

  <section id="intro">
    <div class="container">
      <div class="ror">
        <div class="col-md-8 col-md-offset-2">
          <h1>   <button> Cliquez ici pour accèder à notre bibliothèque</button></h1>
          <p>Merci de vouloir consulter notre bibliothèque virtuelle</p>
        </div>
      </div>
    </div>
  </section>

<div style=" background-color: #ffffff;" class="table-bordered"    >
 

  <div align="center">
 <a href="enreg_livre.php"><img src="img3/logo.png"  style="width:100px;height:120px;width:50%;margin-top:-10px" alt="" /></a>
 </div>
 

 
<div style="width:100%; margin:5px;" align="right" > 

</div>



<div class="add" ><a style="color:white;font-size:20px;" onclick="javascript:printDiv('printablediv')" style="color:white;font-size:15px;background-color:red" name="print" style="cursor:pointer;" class="btn btn-info"><i class="icon-white icon-print"  ></i> Imprimer</a></div>
  </div>
<div id="container" class="table-responsive"  >
  <table border='2'   >

    </table>

      <div class="pagination"></div>

</div>  

       
      
<div>
<label style="color: #0000ff;"></label> 
</div>


</div>

</div>



  

  <footer class="footer" style="height:80px">

    <div class="container">

    <div class="copyrights">
      <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-12 columns footer-left">
          <p>Copyright © 2018 - Tous droits reservés.</p>
          <div class="credits">


            <!--
              You are NOT allowed to delete the credit link to TemplateMag with free version.
              You can delete the credit link only if you bought the pro version.
              Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/maxibiz-bootstrap-business-template/
              Licensing information: https://templatemag.com/license/
            -->
            Dévélopper par Patrick Belangani <a href="index.php">Bella</a>
          </div>
        </div>
        <!-- end widget -->
        <div class="col-lg-6 col-md-6 col-sm-12 columns text-right">
          <div class="footer-menu right">
            <ul class="menu">
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="#">Sitemap</a></li>
              <li><a href="#">Site Terms</a></li>
              <li><a href="contact">Contact</a></li>
            </ul>
          </div>
        </div>
        <!-- end large-6 -->
      </div>
      <!-- end container -->
    </div>
    <!-- end copyrights -->
  </footer>
  <!-- end footer -->
  <div class="dmtop">Scroll to Top</div>

 <!-- JavaScript Libraries -->

</body>

</html>

  <!-- end footer -->

 
