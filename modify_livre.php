<?php
 session_start();
 include ("connect.php");
//$mat=$_SESSION['mat_agent'];


    $requser = $db->prepare("SELECT livre.id_livre,livre.id_classe,livre.id_type,livre.titre_ouvrage,livre.auteur,livre.nombre_page,
livre.maison_edit,livre.annee_edit,livre.organ_fin,livre.fichier_livre,livre.lien_fichier_livre,livre.description,
livre.images,type.libelle_type,classe.libelle_classe FROM livre

JOIN type on livre.id_type=type.id_type

JOIN classe on livre.id_classe=classe.id_classe

 where livre.id_livre=:num ");
  
  $requser->bindValue(':num',$_GET['modify'],PDO::PARAM_INT);
  
$executeIsOk = $requser->execute();

$result = $requser->fetch();


  
 if(isset($_POST['submit'])){
 
   extract($_POST);

      
    $req = $db->prepare("UPDATE livre set id_classe=:id_classe, 
 id_type=:id_type,titre_ouvrage=:titre_ouvrage,auteur =:auteur, 
 nombre_page=:nombre_page,maison_edit=:maison_edit,annee_edit=:annee_edit,organ_fin=:organ_fin 
 ,fichier_livre=:fichier_livre,lien_fichier_livre=:lien_fichier_livre,description=:description WHERE id_livre=:num LIMIT 1");
 
$req->bindValue(':num',$_POST['modify'],PDO::PARAM_INT);
$req->bindValue(':id_classe',$_POST['id_classe'],PDO::PARAM_STR);
$req->bindValue(':id_type',$_POST['id_type'],PDO::PARAM_STR);
$req->bindValue(':titre_ouvrage',$_POST['titre_ouvrage'],PDO::PARAM_STR);
$req->bindValue(':auteur',$_POST['auteur'],PDO::PARAM_STR);
$req->bindValue(':nombre_page',$_POST['nombre_page'],PDO::PARAM_INT);
$req->bindValue(':maison_edit',$_POST['maison_edit'],PDO::PARAM_STR);
$req->bindValue(':annee_edit',$_POST['annee_edit'],PDO::PARAM_INT);
$req->bindValue(':organ_fin',$_POST['organ_fin'],PDO::PARAM_STR);
$req->bindValue(':fichier_livre',$_POST['file_name'],PDO::PARAM_STR);
$req->bindValue(':lien_fichier_livre',$_POST['file_desc'],PDO::PARAM_STR);
$req->bindValue(':description',$_POST['description'],PDO::PARAM_STR);



$executeIsOk = $req->execute();


  
if($executeIsOk){

echo '<p style="color:red">  <script>alert( "Modification effectuée avec succés ");window.location.href="enreg_livre.php";</script> </p>';

    } 
    
else{

echo 'echec';

    } 
  
  
  
  
  
  
  
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
                <li class="active"><a href="/biblio_virtuel/">Accueil</a>
                </li>
            
                <li><a href="enreg_livre">Livre</a>
                  <ul >
    
                  </ul>
                </li>
                <li><a href="liste_usager.php">Liste des usagers</a>
                  <ul >
     
                  </ul>
                </li>
                <li><a href="#">Statistiques</a>
                  <ul class="dropdown">
                    <li><a href="stat_date.php">Statistique par date</a></li>
                    <li><a href="stat_gene.php">Statistique complète</a></li>
                  </ul>
                </li>
                       <li><a href="agent">Agent</a>
                  <ul >
      
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
  <!-- end head
  <!-- end header -->
    <div class = "container-fluid">
      <div class = "col-lg-2 well" style = "margin-top:60px;">
        <div class = "container-fluid" style = "word-wrap:break-word;">
          <img src = "img/book.gif" width = "100%" height = "80px"/>
          <br />
          <br />
          <label class = "text-muted"></label>
        </div>
        <hr style = "border:1px dotted #d3d3d3;"/>
        <ul id = "menu" class = "nav menu">
        
            
          
          <li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "enreg_livre.php"><i class = "glyphicon glyphicon-book"></i> Livre</a></li>
              <li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "deconnection_agent.php"><i class = "glyphicon glyphicon-log-out"></i> Deconnecter</a></li>
          
          </li>
        
          </li>
        </ul>
      </div>
      <div class = "col-lg-1"></div>
      <div class = "col-lg-9 well" style = "margin-top:60px;">
  
        <div class = "alert alert-info">MODIFICATION D'UN LIVRE</div>
    
            <div class = "col-lg-3"></div>
            <div class = "col-lg-6">
             <form method = "POST"  enctype = "multipart/form-data">
                <div class = "form-group">
                  <label>Classe:</label>

              <select  name="id_classe"  class = "form-control"  >

    <option value = "<?= $result['id_classe']; ?>"><?= $result['libelle_classe']; ?></option>;
  
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
 

    <option value = "<?= $result['id_type']; ?>"><?= $result['libelle_type']; ?></option>;
  
      <?php
          $reponse =$db->query("SELECT *  from type") ;
          while($donnees  =$reponse->fetch()){
          
          echo '<option value = "'.$donnees['id_type'].'">'.$donnees['libelle_type'].'</option>';
          }

        ?>

      </select>
                </div>                <div class = "form-group">
                  <label>Titre de l'ouvrage:</label>
                  <input type = "text" name = "titre_ouvrage" value="<?= $result['titre_ouvrage']; ?>" class = "form-control" required = "required"/>
                </div>
                <div class = "form-group">
                  <label>Source:</label>
                  <input type = "text" name = "auteur"   value="<?= $result['auteur']; ?>" class = "form-control" required = "required" />
                </div>
                <div class = "form-group">
                  <label>Nombre de page:</label>
                  <input type = "number" name = "nombre_page" value="<?= $result['nombre_page']; ?>" required = "required" class = "form-control" />
                </div>
                    <div class = "form-group">
                  <label>Description:</label>
                  <input type = "text" name = "description" value="<?= $result['description']; ?>" required = "required" class = "form-control" />
                </div>
                      <div class = "form-group">
                  <label>Maison d'édition:</label>
                  <input type = "text" name = "maison_edit" value="<?= $result['maison_edit']; ?>" required = "required" class = "form-control" />
                </div>
                         <div class = "form-group">
                  <label>Année d'édition:</label>
                  <input type = "number" name = "annee_edit" value="<?= $result['annee_edit']; ?>" required = "required" class = "form-control" />
                </div>
                                <div class = "form-group">
                  <label>Organisation de financement :</label>
                  <input type = "text" name = "organ_fin" value="<?= $result['organ_fin']; ?>"  required = "required" class = "form-control" />
                </div>
                  <input type = "hidden" name = "file_name" value="<?= $result['fichier_livre']; ?>" required = "required" class = "form-control" />
                  <input type = "hidden" name = "file_desc" value="<?= $result['lien_fichier_livre']; ?>" required = "required" class = "form-control" />

                <input type="hidden" value="<?= $result['id_livre']; ?>"  name="modify" style="color:black;background-color:white;border-color:silver;width:230px;" class = "form-control"    />
                    <img src="uploads/<?php echo $result['images']; ?>" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;"></br></br>

                  
                  <input type = "hidden" name = "photo" value="<?= $result['images']; ?>"  class = "form-control" />
              
              
              
              
              
              
              
              
              
            
                <div class = "form-group">
                  <button name = "submit" class = "btn btn-primary"><span class = "glyphicon glyphicon-save"></span>Valider</button>
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

    <!-- JavaScript Libraries -->


  <!-- Template Main Javascript File -->
</html>