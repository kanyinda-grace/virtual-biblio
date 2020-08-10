<?php session_start();

?>
<?php 
include ('connect.php');
if(isset($_SESSION['username']) ){
}else{
header('location:deconnection.php');  
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
                    <p class="bold text-left" style="color:white;font-size:20px">Bibliothèque du Centre de Documentation  </p>
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
                <li class="active"><a href="/biblio_virtuel/">ACCUEIL</a></li>
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
Classe <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="ameliorat_soin.php">Amélioration de l’accès aux soins et traitement </a></li>
                    <li><a href="bonne_directive.php">Bonnes pratiques et Directives </a></li>
                    <li><a href="develop_pauvrete.php">Développements et pauvreté </a></li>
                    <li><a href="formation.php">Formations </a></li>
                    <li><a href="justice_droit.php">Justices et Droits Humains  </a></li>
                     <li><a href="politi_national.php">Politique Nationale  </a></li>
                    <li><a href="plan.php">Plans  </a></li>  
                    <li><a href="rapport_annuel.php">Rapport annuel </a></li>
                    <li><a href="preven_sida.php">Prévention du VIH/sida  </a></li>
                    <li><a href="promotion.php">Promotion d’un environnement favorable aux PVV et PA    </a></li>
                    <li><a href="recherche_enquete.php">Recherches et Enquêtes  </a></li>
                    <li><a href="texte_legaux.php">Textes légaux  </a></li>
                    <li><a href="docum_admin.php">Documents administratifs  </a></li>

                  </ul>
                </li>
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
Type <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="rapp.php">Rapport</a></li>
                    <li><a href="liv.php">Livre</a></li>
                    <li><a href="dof.php">Document officiel</a></li>
                    <li><a href="dop.php">Document partenaire</a></li>
                    <li><a href="revue.php">Revue</a></li>

                  </ul>
                </li>
 
                    <li><a href="tous_doc.php">TOUS LES DOCUMENTS</a></li>
                         <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right">Extra</span>
MEDIATHÈQUE <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="galery.php">Photo</a></li>
                    <li><a href="video.php">Vidéo</a></li>
        
                  </ul>
                </li>
       

              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav> </br></br></br></br>

 
        <div class="container">
                

    <div style=" width:890.5px;height:163px;background:white;border-radius:4px;border-style: outset;font-size:18px;" class="container-fluid" ><b style='color:red;font-size:19px'class="glyphicon glyphicon-plus-sign" ></b> <b ><a style="text-decoration:none;" href="ameliorat_soin.php"> Amélioration de l’accès aux soins et traitement</a> </b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b style='color:red;font-size:19px'class="glyphicon glyphicon-ok" ></b> <b ><a style="text-decoration:none;" href="bonne_directive.php">Bonnes pratiques et Directives </a> </b> </br>
    <b style="color:;font-size:19px;" class="tp"  ></b> <b ><a style="text-decoration:none;" href="justice_droit.php"> <img src="img/re.jpg"style="height:20px;width:1.5%;position:absolute" />&nbsp&nbsp  &nbsp &nbsp Justices et Droits Humains </a> </b>&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp
    &nbsp &nbsp &nbsp&nbsp  <b style='color:green;font-size:19px'class="glyphicon glyphicon-flag" ></b> <b ><a style="text-decoration:none;" href="politi_national.php">Politique Nationale  </a> </b> <b style='color:;font-size:19px'class="glyphicon glyphicon-tasks" ></b> <b ><a style="text-decoration:none;" href="plan.php"> Plans  </a> </b> </br>
      <b style='color:black;font-size:19px'class="glyphicon glyphicon-open" ></b> <b ><a style="text-decoration:none;" href="promotion.php">Promotion d’un environnement favorable aux PVV et PA </a> </b> &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<b style='color:;font-size:19px'class="glyphicon glyphicon-file" ></b> <b ><a style="text-decoration:none;" href="rapport_annuel.php"> 

Rapport annuel et autres     </a> </b>  </br>
  <b style='color:orange;font-size:19px'class="glyphicon glyphicon-search" ></b> <b ><a style="text-decoration:none;" href="recherche_enquete.php">Recherches et Enquêtes   </a> </b> <b style='color:;font-size:19px' ></b>&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp
   <b ><a style="text-decoration:none;" href="texte_legaux.php"> <img src="img/exa.jpg"style="height:20px;width:2%;position:absolute" />&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTextes légaux      </a> </b><br>
   <b style='color:;font-size:19px' ></b> <b ><a style="text-decoration:none;" href="preven_sida.php"><img src="img/si.jpg"style="height:20px;width:1.5%;position:absolute" />&nbsp&nbsp &nbsp  Prévention du VIH/sida  </a> </b> 
&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp<b style='color:yellow;font-size:19px'class="glyphicon glyphicon-folder-open" ></b> <b ><a style="text-decoration:none;" href="docum_admin.php">Documents administratifs  </a> </b> </br> 
<b style='color:green;font-size:19px'class="glyphicon glyphicon-star" ></b> <b ><a style="text-decoration:none;" href="develop_pauvrete.php"> Développements et pauvreté    </a> </b> 
&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b style='color:blue;font-size:19px'class="glyphicon glyphicon-pencil" ></b> <b ><a style="text-decoration:none;" href="formation.php"> 

Formations   </a> </b> 
    </div> 

<?php
  $count = 0;
  // connecto database
  include ('connects.php');
  $conn = db_connect();

  $query = "SELECT id_livre, images FROM livre where id_classe='PEF' ORDER BY id_livre asc ";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "n'a pas pu trouvé une données " . mysqli_error($conn);
    exit;
  }

  $title = "Full Catalogs of Books";
  require_once "./template/header.php";
?>
    <?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>

     </br> <div class="row">
        <?php while($query_row = mysqli_fetch_assoc($result)){ ?>
          <div class="col-md-2" style="width:292px">
            <a href="biblio_virtuel.php?id_livre=<?php echo $query_row['id_livre']; ?>">
              <img class="img-responsive img-thumbnail" style="height:400px;"  src="./uploads/<?php echo $query_row['images']; ?>">
            </a>
          </div>
        <?php
          $count++;
          if($count >= 4){
              $count = 0;
              break;
            }
          } ?> 
      </div>
<?php
      }
  if(isset($conn)) { mysqli_close($conn); }
// require_once "./template/footer.php";
?>
          </div>
 </div>

     <footer>
    
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="widget">
                        <h5>Apropos de Nous</h5>
                        <p>
Le CRESSOM est une association, créée en 2012 sous l’égide de Gilbert MUBANGI Bet’ukany réunissant des universitaires et des praticiens partageant une même conviction : comprendre la société congolaise pour la faire bouger et la changer. En tant que groupe de recherche spécialisé sur les changements, le CRESSOM regroupe des chercheurs en sciences sociales ...
                        </p>
                    </div>
                    </div>
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="widget">
                        <h5>NAVIGATION</h5>
                        <ul>
                            <li><a href="index.php">Accueil</a></li>
                            <li><a href="#">Nos activités</a></li>
                            <li><a href="#">Mediathèque</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="widget">
                        <h5>Nos Coordonnées</h5>
                        <p>
Departement de suivi et evaluation  (SEV)
KINSHASA - RDC
Téléphone : +243 81 86 49 964
E-mail : 
patrick.belangani@pnmls.cd
patrickbelangani@gmail.com
patrickbelangani@yahoo.fr

                        <ul>
                            <li>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
                                </span>Ouvert du Lundi au Vendredi, de 8h à 16h
                            </li>
                            <li>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                                </span> +243 81 86 49 964
                            </li>
                            <li>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                                </span> patrickbelangani@gmail.com
                            </li>

                        </ul>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="widget">
                        <h5>Notre Adresse</h5>
                        <p>Croisement Boulevard.Triomphale et ex.24 Novembre/Kasavubu au sein du bâtiment du PNMLS</p>       
                        
                    </div>
                    </div>
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="widget">
                        <h5>SUIVEZ NOUS SUR</h5>
                        <ul class="company-social">
                                <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                <li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="text-left">
                    <p>&copy;Copyright © 2019 - Tous droits réservés - CENTRE DE DOCUMENTATION.</p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                    <div class="text-right">
                        <p><a href="http://bootstraptaste.com/">Developpé par Patrick</a>belangani@gmail.com</p>
                    </div>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Medicio
                    -->
                    </div>
                </div>
            </div>  
        </div>
        </div>
    </footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

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


      <script src="jsw/jquery.min.js"></script>    
    <script src="jsw/bootstrap.min.js"></script>
    <script src="jsw/jquery.easing.min.js"></script>
    <script src="jsw/wow.min.js"></script>
    <script src="jsw/jquery.scrollTo.js"></script>
    <script src="jsw/jquery.appear.js"></script>
    <script src="jsw/stellar.js"></script>
    <script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script src="jsw/owl.carousel.min.js"></script>
    <script src="jsw/nivo-lightbox.min.js"></script>
    <script src="jsw/custom.js"></script>




    <!-- JavaScript Libraries -->

  <!-- JavaScript Libraries -->

  <!-- Template Main Javascript File -->
</html>