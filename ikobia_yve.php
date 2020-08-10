<?php session_start();?>
<?php 
include ('connect.php');
if(isset($_SESSION['uname_agent']) ){
}else{
header('location:deconnection_agent.php');  
}



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
          <h1>   <button>bibliothèque virtuelle</button></h1>
          <p>Bienvenu</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section4 text-center">
    <div class="portfolio-wrapper">
      <div id="owl-demo" class="owl-carousel">


        <div class="item">
          <a data-rel="prettyPhoto" href="img/portfolio_02.jpg">
                        	<img class="lazyOwl" src="img/portfolio_02.jpg" data-src="img/portfolio_02.jpg" alt="">
                        	<div>
                             <small>Virtuel </small>
                                <span> Bibliothèque</span>
                                <i class="fa fa-search"></i>
                            </div>
                        </a>
        </div>

        <div class="item">
          <a href="">
                        	<img class="lazyOwl" src="img/portfolio_07.jpg" data-src="img/portfolio_07.jpg" alt="">
                        	<div>
                            <small>Virtuel </small>
                                <span> Bibliothèque</span>
                                <i class="fa fa-link"></i>
                            </div>
                        </a>
        </div>

        <div class="item">
          <a href="">
                        	<img class="lazyOwl" src="img/portfolio_05.jpg" data-src="img/portfolio_05.jpg" alt="">
                        	<div>
                         <small>Virtuel </small>
                                <span> Bibliothèque</span>
                                <i class="fa fa-link"></i>
                            </div>
                        </a>
        </div>

        <div class="item">
          <a data-rel="prettyPhoto" href="img/portfolio_09.jpg">
                        	<img class="lazyOwl" src="img/portfolio_09.jpg" data-src="img/portfolio_09.jpg" alt="">
                        	<div>
                           <small>Virtuel </small>
                                <span> Bibliothèque</span>
                                <i class="fa fa-search"></i>
                            </div>
                        </a>
        </div>

        <div class="item">
          <a data-rel="prettyPhoto" href="img/portfolio_10.jpg">
                        	<img class="lazyOwl" src="img/portfolio_10.jpg" data-src="img/portfolio_10.jpg" alt="">
                        	<div>
                          <small>Virtuel </small>
                                <span> Bibliothèque</span>
                                <i class="fa fa-search"></i>
                            </div>
                        </a>
        </div>

        <div class="item">
          <a data-rel="prettyPhoto" href="img/portfolio_06.jpg">
                        	<img class="lazyOwl" src="img/portfolio_06.jpg" data-src="img/portfolio_06.jpg" alt="">
                        	<div>
                       <small>Virtuel </small>
                                <span> Bibliothèque</span>
                                <i class="fa fa-search"></i>
                            </div>
                        </a>
        </div>

      </div>
      <!-- end owl-demo -->
    </div>
    <!-- end portfolio-wrapper -->
  </section>
  <!-- end section1 -->


  

  <footer class="footer">
    <div class="container">
      <div class="widget col-lg-3 col-md-3 col-sm-12">
        <h4 class="title">A propos</h4>
        <p>Cette bibliothèque virtuelle est une bibliothèque appartenant au centre de documentation du Programme National Multi 
          Sectoriels de Lutte Contre Le Sida En signe PNMLS Gerée par Monsieur Yve Ikobia </p>
      </div>
      <!-- end widget -->
      <div class="widget col-lg-3 col-md-3 col-sm-12">
        <h4 class="title">Recent Posts</h4>
        <ul class="recent_posts">
          <li>
            <a>
						<img src="img/recent_post_01.png" alt="" /><b class="readmore"><i> <a href="deconnection_agent.php" style="color:#318CE7;font-size:13px">Déconnection  </a></i></b>(<?php echo $_SESSION['nom_agent'].' '.$_SESSION['postnom_agent'].' '.$_SESSION['prenom_agent'];  ?>)</a>
            <a class="readmore" href="#">read more</a>
          </li>
          <li>
            <a href="home1.html#">
						<img src="img/recent_post_02.png" alt="" />Design Is In The Air</a>
            <a class="readmore" href="#">read more</a>
          </li>
        </ul>
        <!-- recent posts -->
      </div>
      <!-- end widget -->
      <div class="widget col-lg-3 col-md-3 col-sm-12">
        <h4 class="title">Nous Contacter</h4>
        <ul class="contact_details">
          <li><i class="fa fa-envelope-o"></i> yveikobia@pnmls.cd</li>
          <li><i class="fa fa-phone-square"></i> +34 5565 6555</li>
          <li><i class="fa fa-home"></i> Some Fine Address, 887, Madrid, Spain.</li>
          <li><a href="#"><i class="fa fa-map-marker"></i> View large map</a></li>
        </ul>
        <!-- contact_details -->
      </div>
      <!-- end widget -->
      <div class="widget col-lg-3 col-md-3 col-sm-12">
        <h4 class="title">Flickr Stream</h4>
        <ul class="flickr">
          <li><a href="#"><img alt="" src="img/flickr_01.jpg"></a></li>
          <li><a href="#"><img alt="" src="img/flickr_02.jpg"></a></li>
          <li><a href="#"><img alt="" src="img/flickr_03.jpg"></a></li>
          <li><a href="#"><img alt="" src="img/flickr_04.jpg"></a></li>
          <li><a href="#"><img alt="" src="img/flickr_05.jpg"></a></li>
          <li><a href="#"><img alt="" src="img/flickr_06.jpg"></a></li>
          <li><a href="#"><img alt="" src="img/flickr_07.jpg"></a></li>
          <li><a href="#"><img alt="" src="img/flickr_08.jpg"></a></li>
        </ul>
      </div>
      <!-- end widget -->
    </div>
    <!-- end container -->

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
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/prettyphoto/js/prettyphoto.js"></script>
  <script src="lib/isotope/isotope.min.js"></script>
  <script src="lib/hover/hoverdir.js"></script>
  <script src="lib/hover/hoverex.min.js"></script>
  <script src="lib/unveil-effects/unveil-effects.js"></script>
  <script src="lib/owl-carousel/owl-carousel.js"></script>
  <script src="lib/jetmenu/jetmenu.js"></script>
  <script src="lib/animate-enhanced/animate-enhanced.min.js"></script>
  <script src="lib/jigowatt/jigowatt.js"></script>
  <script src="lib/easypiechart/easypiechart.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
