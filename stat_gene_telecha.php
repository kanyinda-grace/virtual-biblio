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
        
            
          
          <li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "stat_gene.php"><i class = "glyphicon glyphicon-book"></i> Téléchargement </a></li>
          
          </li>
               <li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "deconnection_agent.php"><i class = "glyphicon glyphicon-log-out"></i> Deconnecter</a></li>
          
          </li>
        
          </li>
        </ul>
      </div>
      </br></br>
            <div align="right" style="font-size:16px;font-weight:bold"><a href="stat_date_teleche.php"style="text-decoration:none;">Rechercher par date </a></div>

      <div class = "col-lg-1"></div>
      <div class = "col-lg-9 well" style = "margin-top:10px;">
        <div class = "alert alert-info">STATISTIQUE DES TELECHARGEMENTS COMPLETS</div>

  <?php 

  $users=$db->prepare("select sum(nombre) as tota from livre_telechar ");
  $users->execute(array('nombre'));

$data=$users->fetch();
$ttgg=$data['tota'];
//echo $ttgg ; 


 $sql =$db->query( "SELECT livre_telechar.id ,usager.username ,usager.postnom , usager.prenom,usager.prenom,pays.libelle_pays,category_usager.libelle_cat_usag,
  usager.ville,usager.entre_institut,livre_telechar.jour,livre_telechar.mois,livre_telechar.annee, SUM(livre_telechar.nombre) 
  AS NOMBRE FROM livre_telechar join usager on livre_telechar.id=usager.id join pays on usager.id_pays=pays.id_pays 
  JOIN category_usager on usager.id_cat=category_usager.id_cat  GROUP BY id,usager.username,usager.postnom ,usager.prenom,pays.libelle_pays,category_usager.libelle_cat_usag, 
  usager.prenom,usager.ville,usager.entre_institut 
");

$num =$sql->RowCount();
   /* Récupère le nombre de lignes qui correspond à la requête SELECT */
   if ($num>= 1) {
      //  echo  $num; 
        
 }

 ?>
<div style='color:red;font-size:12px;font-family:verdana;font-weight:bold'>Nombre des usagers ayant téléchargé  :<b style='color:black;font-family:verdana;font-weight:bold'> <?php echo $num ; 
 ?></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Nombre total des téléchargements :<b style='color:blue;font-family:verdana;font-weight:bold'> <?php echo $ttgg ; 
 ?></b>
 </div>


          <br />
          <div id = "book_table">
            <table id = "table" class = "table table-bordered">
              <thead class = "alert-success">
                <tr>
                    <th class = 'alert alert-info' >Nom</th>
                    <th class = 'alert alert-info' >Postnom</th>
                    <th class = 'alert alert-info'>Prenom</th>
                    <th class = 'alert alert-info'>Pays</th>
                    <th class = 'alert alert-info'>Ville</th>
                    <th class = 'alert alert-info'>Categorie</th>
                    <th class = 'alert alert-info'>Entrepise/Institution</th>
                    <th class = 'alert alert-info'>Date téléchargement</th>
                    <th class = 'alert alert-info' >Nbre de téléchargement</th>



                </tr>
              </thead>
              <tbody>
                <?php
                  $qbook = $db->query("SELECT livre_telechar.id ,usager.username ,usager.postnom  ,

usager.prenom,usager.prenom,pays.libelle_pays,category_usager.libelle_cat_usag,usager.ville,usager.entre_institut,livre_telechar.jour,livre_telechar.mois,livre_telechar.annee,
SUM(livre_telechar.nombre) AS NOMBRE FROM livre_telechar 

 join usager  on livre_telechar.id=usager.id

join pays on usager.id_pays=pays.id_pays

JOIN category_usager on usager.id_cat=category_usager.id_cat

GROUP BY id,usager.username,usager.postnom ,usager.prenom,pays.libelle_pays,category_usager.libelle_cat_usag,
usager.prenom,usager.ville,usager.entre_institut,livre_telechar.jour,livre_telechar.mois,livre_telechar.annee
  ORDER BY id ASC ") or die("hyhuhu");
                  while($fbook = $qbook->fetch()){
                    
                ?>
                <tr class="po">
                  <td><?php echo $fbook['username']?></td>
                  <td><?php echo $fbook['postnom']?></td>
                  <td><?php echo $fbook['prenom']?></td>
                  <td><?php echo $fbook['libelle_pays']?></td>
                  <td><?php echo $fbook['ville']?></td>
                  <td><?php echo $fbook['libelle_cat_usag']?></td>
                  <td><?php echo $fbook['entre_institut']?></td>
                  <td><?php echo $fbook['jour']." ".'/'.$fbook['mois']."".'/'.$fbook['annee']?></td>
                  <td><?php echo $fbook['NOMBRE']?></td>
                </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
          <div id = "edit_form"></div>
          <div id = "book_form" style = "display:none;">
            <div class = "col-lg-3"></div>
            <div class = "col-lg-6">
              <form method = "POST" action = "save_book.php" enctype = "multipart/form-data">
                <div class = "form-group">
                  <label>Classe:</label>

              <select  name="id_classe"  class = "form-control"  >
   
      <?php
          $reponse =$db->query("SELECT *  from classe") ;
          while($donnees  =$reponse->fetch()){
          
          echo '<option value = "'.$donnees['id_classe'].'">'.$donnees['libelle_classe'].'</option>';
          }




        ?>
      </select>
                </div>
                <div class = "form-group">
                           <label>Type:</label>

              <select  name="id_type"  class = "form-control"  >
   
      <?php
          $reponse =$db->query("SELECT *  from type") ;
          while($donnees  =$reponse->fetch()){
          
          echo '<option value = "'.$donnees['id_type'].'">'.$donnees['libelle_type'].'</option>';
          }




        ?>
      </select>
                </div>                <div class = "form-group">
                  <label>Titre de l'ouvrage:</label>
                  <input type = "text" name = "titre_ouvrage" class = "form-control" required = "required"/>
                </div>
                <div class = "form-group">
                  <label>Auteur:</label>
                  <input type = "text" name = "auteur" class = "form-control" required = "required" />
                </div>
                <div class = "form-group">
                  <label>Nombre de page:</label>
                  <input type = "number" name = "nombre_page" required = "required" class = "form-control" />
                </div>
                      <div class = "form-group">
                  <label>Maison d'édition:</label>
                  <input type = "text" name = "maison_edit" required = "required" class = "form-control" />
                </div>
                         <div class = "form-group">
                  <label>Année d'édition:</label>
                  <input type = "text" name = "annee_edit" required = "required" class = "form-control" />
                </div>
                                <div class = "form-group">
                  <label>Organisation de financement :</label>
                  <input type = "text" name = "organ_fin" required = "required" class = "form-control" />
                </div>
                                        <div class = "form-group">
                  <label>Fichier du livre  :</label>
                  <input type = "file" name = "uploaded_file" required = "required" class = "form-control" />
                </div>
              
              
              
              
              
              
              
            
                <div class = "form-group">
                  <button name = "save_book" class = "btn btn-primary"><span class = "glyphicon glyphicon-save"></span> Enregistrer</button>
                </div>
              </form>   
            </div>  
          </div>
      </div>
    </div>
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