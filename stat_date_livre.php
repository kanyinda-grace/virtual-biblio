<?php session_start();?>
<?php 
include ('connect.php');
if(isset($_SESSION['uname_agent']) ){
}else{
header('location:deconnection_agent.php');  
}

?>
<!DOCTYPE html >
<html lang="en" >

<head>
  <meta charset="utf-8">
  <title>Bibliothèque Virtuelle</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/pp.jpg" rel="icon">
  <link href="img/pp.jpg" rel="apple-touch-icon">

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
    <link rel = "stylesheet" type = "text/css" href = "csstp/bootstrap.css" />
    <link rel = "stylesheet" type = "text/css" href = "csstp/jquery.dataTables.css" />

     <link href="assets/css/bootstrap.css" rel="stylesheet" />

  <!-- =======================================================
    Template Name: MaxiBiz
    Template URL: https://templatemag.com/maxibiz-bootstrap-business-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
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

      <link href="cssw/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/cssw/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
    <link href="cssw/nivo-lightbox.css" rel="stylesheet" />
    <link href="cssw/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="cssw/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="cssw/owl.theme.css" rel="stylesheet" media="screen" />
    <link href="cssw/animate.css" rel="stylesheet" />
    <link href="cssw/style.css" rel="stylesheet">

        <link id="t-colors" href="color/default.css" rel="stylesheet">

</head>

<body   id="page-top" data-spy="scroll" data-target=".navbar-custom">


  <!-- end topbar -->
  <!-- end topbar -->

<div id="wrapper">
    
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="top-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                    <p class="bold text-left" style="color:white;font-size:20px">Bibliothèque du Centre De Documentation  </p>
                    </div>
                    <div class="col-sm-6 col-md-6">
                    <p class="bold text-right">  <a href="deconnection.php" style="text-decoration:none;color:white;font-size:19px" >Déconnecter </a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container navigation">
        
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="img/pp.jpg" alt="" width="60" height="10" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-center navbar-main-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="enreg_livre.php">ACCUEIL</a></li>
           
                            <li><a href="liste_usager.php">Liste des usagers</a></li>

                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
STATISTIQUE <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                 <li><a href="stat_gene.php">Statistique des consultations</a></li>
                 <li><a href="stat_gene_telecha.php">Statistique de lecture des usagers</a></li>
                 <li><a href="stat_gene_livre.php">Statistique de lecture des livres</a></li>

                  </ul>
                </li>
             
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
Document <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="classe.php">Classe</a></li>
                    <li><a href="type.php">Type</a></li>
          

                  </ul>
                </li>
 
                         <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right">Extra</span>
MEDIATHÈQUE <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="enreg_galerie.php">Photo</a></li>
                    <li><a href="#">Vidéo</a></li>
        
                  </ul>
                </li>
    <li><a href="agent.php">Administrateur</a></li>

       

              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav> </br></br></br></br>

  <!-- end head
  <!-- end header -->
    <div class = "container-fluid">
      <div class = "col-lg-2 well" style = "margin-top:60px;">
        <div class = "container-fluid" style = "word-wrap:break-word;">
          <img src = "img/statistik.jpg" style="height:300px;" width = "400px" height = "300px"/>
          <br />
          <br />
          <label class = "text-muted"></label>
        </div>
        <hr style = "border:1px dotted #d3d3d3;"/>
        <ul id = "menu" class = "nav menu">
        
            
          
          <li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "stat_date_teleche.php"><i class = "glyphicon glyphicon-download"></i> Stat livre</a></li>
          
          </li>
              <li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "deconnection_agent.php"><i class = "glyphicon glyphicon-log-out"></i> Deconnecter</a></li>
          
          </li>
        
          </li>
        </ul>
      </div>
      <div class = "col-lg-1"></div>
      <div class = "col-lg-9 well" style = "margin-top:60px;">
        <div class = "alert alert-info">STATISTIQUE DES LIVRES TELECHARGES  PAR DATE</div>
          <form action=""    name="form" > 
              <label>Jour:</label>
             <span>
   <?Php

if(isset($_POST['jour'])){
  $jour = $_POST['jour'];
}
else {
  $jour = NULL;
}

?>
     
        <select name="jour"    placeholder="0" required  id="fn" style="border-radius:6px;height:26px">
<?php
        //Liste du menu déroulant avec tous les fluorochromes
for ($i=1; $i <=31 ; $i++) {

      ?>
<option value="<?php echo $i;?>" <?php if($jour== $i) echo"selected" ?>><?php echo $i; ?></option>
<?php
      }


      ?>
</select>
       </span>
            <label>Mois:</label>
             <span>
   <?Php

if(isset($_POST['mois'])){
  $mois = $_POST['mois'];
}
else {
  $mois = NULL;
}

?>
     
        <select name="mois"    placeholder="0" required  id="fn" style="border-radius:6px;height:26px">
<?php
        //Liste du menu déroulant avec tous les fluorochromes
for ($i=1; $i <=12 ; $i++) {

      ?>
<option value="<?php echo $i;?>" <?php if($mois== $i) echo"selected" ?>><?php echo $i; ?></option>
<?php
      }


      ?>
</select>
       </span> 
                   <label>Année:</label>

                    <span>

                  <?Php

if(isset($_POST['annee'])){
  $annee = $_POST['annee'];
}
else {
  $annee = NULL;
}

?>
     
        <select name="annee"    placeholder="0" required id="fn" style="border-radius:6px;height:26px">
<?php
        //Liste du menu déroulant avec tous les fluorochromes
for ($i=2019; $i <=2030 ; $i++) {

      ?>
<option value="<?php echo $i;?>" <?php if($annee== $i) echo"selected" ?>><?php echo $i; ?></option>
<?php
      }


      ?>
</select>

             </span> 


            <button  type = "submit" value="Search" id="search-btn" class = "btn btn-primary"><span class = "glyphicon glyphicon-search"></span> Rechercher</button>
<div id = "s-results">
  <!-- Search results here! -->
</div>

<script type = "text/javascript">
$(document).ready(function(){
  $('#s-results').load('search_date_livre.php').show();
  
  
  $('#search-btn').click(function(){
    showValues();
  });
  
  $(function() {
    $('form').bind('submit',function(){
      showValues(); 
      return false; 
    });
  });
    
  function showValues() {
    $('#s-results').html('<img src="img/lo.gif" />');  
    
    $.post('search_date_livre.php', { jour: form.jour.value,mois: form.mois.value,annee: form.annee.value, },
    
    function(result){
      $('#s-results').html(result).show();
    });
  }
    
});
</script>
   
     </form>   

          <br />
          
        
    <br />
    <br />
    <br />
    <nav class = "navbar navbar-default navbar-fixed-bottom">
      <div class = "container-fluid">
<label class = "navbar-text pull-right">Copyright © 2018 - Tous droits reservés.</label>
        <label class = "navbar-text pull-left"><?php echo $_SESSION['prenom_agent']." ".$_SESSION['nom_agent']." ".$_SESSION['postnom_agent'];?>
</label>      </div>
    </nav>
  </body>
  <script src = "jsn/jquery.js"></script>
  <script src = "jsn/bootstrap.js"></script>
  <script src = "jsn/login.js"></script>
  <script src = "jsn/sidebar.js"></script>
  <script src = "jsn/jquery.dataTables.js"></script>
  <script type = "text/javascript">
    $(document).ready(function(){
      $('#table').DataTable();
    });
  </script>
  <script type = "text/javascript">
    $(document).ready(function(){
      $('#add_book').click(function(){
        $(this).hide();
        $('#show_book').show();
        $('#book_table').slideUp();
        $('#book_form').slideDown();
        $('#show_book').click(function(){
          $(this).hide();
          $('#add_book').show();
          $('#book_table').slideDown();
          $('#book_form').slideUp();
        });
      });
    });
  </script>
  <script type = "text/javascript">
    $(document).ready(function(){
      $result = $('<center><label>Deleting...</label></center>');
      $('.delbook_id').click(function(){
        $book_id = $(this).attr('value');
        $(this).parents('td').empty().append($result);
        $('.delbook_id').attr('disabled', 'disabled');
        $('.ebook_id').attr('disabled', 'disabled');
        setTimeout(function(){
          window.location = 'delete_book.php?book_id=' + $book_id;
        }, 1000);
      });
      $('.ebook_id').click(function(){
        $book_id = $(this).attr('value');
        $('#show_book').show();
        $('#show_book').click(function(){
          $(this).hide();
          $('#edit_form').empty();
          $('#book_table').show();
          $('#book_admin').show();
        });
        $('#book_table').fadeOut();
        $('#add_book').hide();
        $('#edit_form').load('load_book.php?book_id=' + $book_id);
      });
    });
  </script>
    <script src="jsw/bootstrap.min.js"></script>

    <!-- JavaScript Libraries -->

  <!-- JavaScript Libraries -->

  <!-- Template Main Javascript File -->
</html>