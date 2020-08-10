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


  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
    <link rel = "stylesheet" type = "text/css" href = "csstp/jquery.dataTables.css" />
    <link rel = "stylesheet" type = "text/css" href = "csstp/bootstrap.css" />


   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <!-- css files -->
  <link rel="stylesheet" href="cssf/style.css">
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- js files -->

   <link rel="stylesheet" href="searchbox.css">

  <!-- =======================================================
    Template Name: MaxiBiz
    Template URL: https://templatemag.com/maxibiz-bootstrap-business-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->


  <!-- Template Main Javascript File -->

      <link href="cssw/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/cssw/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
    <link href="cssw/nivo-lightbox.css" rel="stylesheet" />
    <link href="cssw/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="cssw/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="cssw/owl.theme.css" rel="stylesheet" media="screen" />
    <link href="cssw/animate.css" rel="stylesheet" />
    <link href="cssw/style.css" rel="stylesheet">


</head>

<body   >

      <div class="container">
            <img src="img/logos.png"  style="height:100px;width:20%;margin-top:;margin-left:;position:" alt="" />


        </div>
 <header>
    <!-- responsive nav bar -->
    <div class="nav-bar">
      <a href=""><i class="fa fa-bars"></i><span>Menu</span></a>
    </div>
    <!-- navigation -->
    <nav>
      <ul>
        <li ><a href="acceder.php" style="text-decoration: none;"><i class="fa fa-home" ></i>Accueil</a></li>
        <li class="sub-menu">
          <a href="#" style="text-decoration: none;"><i class="fa fa-street-view"></i>Classe <i class="fa fa-angle-down"></i></a>
          <!-- children nav -->
          <ul class="children">
              <li><a href="ameliorat_soin.php" style="text-decoration: none;"> Amélioration de l’accès aux soins et traitement</a></li>
              <li><a href="bonne_directive.php" style="text-decoration: none;"> Bonnes pratiques et Directives</a></li>
              <li><a href="develop_pauvrete.php" style="text-decoration: none;"> Développements et pauvreté</a></li>
                <li><a href="formation.php" style="text-decoration: none;"> Formations</a></li>
              <li><a href="justice_droit.php" style="text-decoration: none;">Justices et Droits Humains</a></li>
              <li><a href="politi_national.php" style="text-decoration: none;"> Politique Nationale</a></li>
              <li><a href="rapport_annuel.php" style="text-decoration: none;"> Rapport annuel </a></li>
              <li><a href="preven_sida.php" style="text-decoration: none;"> Prévention du VIH/sida</a></li>
              <li><a href="promotion.php" style="text-decoration: none;"> Promotion d’un environnement favorable aux PVV et PA </a></li>
              <li><a href="recherche_enquete.php" style="text-decoration: none;">Recherches et Enquêtes</a></li>
              <li><a href="recherche_enquete.php" style="text-decoration: none;">Textes légaux </a></li>
              <li><a href="docum_admin.php" style="text-decoration: none;">Documents administratifs</a></li>

          </ul>
        </li>

        <li class="sub-menu"><a href="#" style="text-decoration: none;"><i class="fa fa-eye-slash"></i>Type <i class="fa fa-angle-down"></i></a>

          <ul class="children">
              <li><a href="rapp.php" style="text-decoration: none;">Rapport</a></li>
              <li><a href="liv.php" style="text-decoration: none;"> Livre</a></li>
              <li><a href="dof.php" style="text-decoration: none;"> Document officiel</a></li>
              <li><a href="dop.php" style="text-decoration: none;"> Document partenaire</a></li>
              <li><a href="revue.php" style="text-decoration: none;"> Revue</a></li>
          </ul>

        </li>

          <li class="sub-menu"><a href="#" style="text-decoration: none;"><i class="fa fa-eye-slash"></i>Recherches & Enquêtes <i class="fa fa-angle-down"></i></a>

          <ul class="children">
              <li><a href="rapp.php" style="text-decoration: none;">Rapport</a></li>
              <li><a href="liv.php" style="text-decoration: none;"> Livre</a></li>
              <li><a href="dof.php" style="text-decoration: none;"> Document officiel</a></li>
              <li><a href="dop.php" style="text-decoration: none;"> Document partenaire</a></li>
              <li><a href="revue.php" style="text-decoration: none;"> Revue</a></li>
          </ul>

        </li>
                <li><a href="tous_doc.php" style="text-decoration: none;"><i class="fa fa-book"></i>Tous les documents</a></li>

      <li class="sub-menu"><a href="#" style="text-decoration: none;"><i class="fa fa-picture-o"></i>Galerie <i class="fa fa-angle-down"></i></a>

          <ul class="children">
              <li><a href="galery.php" style="text-decoration: none;">Photo</a></li>
              <li><a href="video.php" style="text-decoration: none;"> Vidéo</a></li>
    
          </ul>

        </li>

      <li class="sub-menu" ><a href="#"><i class="fa fa-user"></i> <i class="fa fa-angle-down"></i></a>

          <ul class="children" >
              <li ><a href="deconnection.php" style="text-decoration: none;" >Se déconnecté</a></li>
    
          </ul>

        </li>
      </ul>
              <div class="search-box-wrapper" style="float:right;margin-top:10px" >

            <form action="search.php" method="get">
              <input type="text" value="Recherche" name="search" class="search-box-input" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Recherche';}">
              <input type="submit" name="submit" class="search-box-button"  value="Go">
            </form>
          </div>
    </nav> <!-- navigation end -->
        
  </header>
               

  <!-- end topbar -->
  <!-- end topbar -->



  <!-- end head
  <!-- end header -->

    <div class = "container-fluid" >
      <div class = "col-lg-1"></div>
      <div class = "col-lg-10 well" style = "margin-top:60px;">
        <div class = "alert alert-info">RECHERCHER UN DOCUMENT</div>
                 <div style="overflow-y:scroll;" >

          <div id = "book_table">
            <table id = "table" class = "table table-bordered">
              <thead class = "alert-success">
                <tr >
                  <th class = "alert alert-info">N°</th>
                  <th  class = "alert alert-info">Classe</th>
                  <th class = "alert alert-info">Type</th>
                  <th  class = "alert alert-info">Titre_ouvrage</th>
                  <th  class = "alert alert-info">Auteur</th>
                   <th  class = "alert alert-info">Page</th>
                  <th  class = "alert alert-info">Année_edition</th>
                  <th  class = "alert alert-info">Catalogue</th>
                  <th  class = "alert alert-info">Fichier du livre</th>




                </tr>
              </thead>
              <tbody>
                <?php
                  $qbook = $db->query("SELECT livre.id_livre,livre.id_classe,livre.id_type,livre.titre_ouvrage,livre.auteur,livre.nombre_page,
livre.maison_edit,livre.annee_edit,livre.organ_fin,livre.fichier_livre,livre.lien_fichier_livre,livre.images,
classe.libelle_classe,type.libelle_type FROM livre

join classe on livre.id_classe=classe.id_classe

join type on livre.id_type=type.id_type

ORDER by livre.id_livre asc ") or die("hyhuhu");
                  while($fbook = $qbook->fetch()){
                    
                ?>
                <tr>
                  <td><?php echo $fbook['id_livre']?></td>
                  <td><?php echo $fbook['libelle_classe']?></td>
                  <td><?php echo $fbook['libelle_type']?></td>
                  <td><?php echo $fbook['titre_ouvrage']?></td>
                  <td><?php echo $fbook['auteur']?></td>
                  <td><?php echo $fbook['nombre_page']?></td>
                  <td><?php echo $fbook['annee_edit']?></td>
                  <td><a href="uploads/<?php echo $fbook['images']; ?>"><img src="./uploads/<?php echo  $fbook['images'];?>" width="100" height="10" /></a> </td>


                 <td>  <a href="<?php echo $fbook['lien_fichier_livre']?>" alt='Download' title='Download' class='btn btn-primary' target='_blank' >
                  <span class = "glyphicon glyphicon-download"></span>&nbsp Téléchager</a>
     </td>




                </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
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

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>


  <script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
  <script src="jsf/main.js"></script>  
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
 <script src = "jsn/jquery.js"></script>
  <script src = "jsn/jquery.dataTables.js"></script>
  <script type = "text/javascript">
    $(document).ready(function(){
      $('#table').DataTable();
    });
  </script>


  </body>
 
    <!-- JavaScript Libraries -->

  <!-- JavaScript Libraries -->

  <!-- Template Main Javascript File -->
</html>