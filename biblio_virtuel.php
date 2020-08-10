<?php session_start();?>
<?php 
include ('connect.php');
if(isset($_SESSION['username']) ){

}else{
header('location:deconnection.php');  
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

  <link href="css/style.css" rel="stylesheet">
    <link rel = "stylesheet" type = "text/css" href = "csstp/bootstrap.css" />
    <link rel = "stylesheet" type = "text/css" href = "csstp/jquery.dataTables.css" />


    <link href="cssf/style.css" rel="stylesheet">

    <link href="design/bootstrap.css" rel="stylesheet">



    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <!-- custom CSS here -->
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

   <link rel="stylesheet" href="searchbox.css">

       <link href="pela.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: MaxiBiz
    Template URL: https://templatemag.com/maxibiz-bootstrap-business-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->

  <!-- Template Main Javascript File -->
</head>

<body>
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
          <a href="#" style="text-decoration: none;"><i class="fa fa-street-view"></i>Classe<i class="fa fa-angle-down"></i></a>
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

        <li class="sub-menu"><a href="#" style="text-decoration: none;"><i class="fa fa-eye-slash"></i>Type<i class="fa fa-angle-down"></i></a>

          <ul class="children">
              <li><a href="rapp.php" style="text-decoration: none;">Rapport</a></li>
              <li><a href="liv.php" style="text-decoration: none;"> Livre</a></li>
              <li><a href="dof.php" style="text-decoration: none;"> Document officiel</a></li>
              <li><a href="dop.php" style="text-decoration: none;"> Document partenaire</a></li>
              <li><a href="revue.php" style="text-decoration: none;"> Revue</a></li>
          </ul>

        </li>
                <li><a href="tous_doc.php" style="text-decoration: none;"><i class="fa fa-book"></i>Tous les documents</a></li>

      <li class="sub-menu"><a href="#" style="text-decoration: none;"><i class="fa fa-picture-o"></i>Galerie<i class="fa fa-angle-down"></i></a>

          <ul class="children">
              <li><a href="galery.php" style="text-decoration: none;">Photo</a></li>
              <li><a href="video.php" style="text-decoration: none;"> Vidéo</a></li>
    
          </ul>

        </li>

      <li class="sub-menu" ><a href="#"><i class="fa fa-user"></i><i class="fa fa-angle-down"></i></a>

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
     </br> 


<?php
  include ('connects.php');

  $id_livre = $_GET['id_livre'];
  // connecto database
  $conn = db_connect();

  $query = "SELECT livre.id_livre,livre.id_classe,livre.id_type,livre.titre_ouvrage,livre.auteur,livre.nombre_page,
livre.maison_edit,livre.annee_edit,livre.organ_fin,livre.fichier_livre,livre.lien_fichier_livre,livre.images,livre.description,
classe.libelle_classe,type.libelle_type FROM livre

join classe on livre.id_classe=classe.id_classe

join type on livre.id_type=type.id_type
 WHERE id_livre = '$id_livre'";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "n'a pas pu trouvé une données " . mysqli_error($conn);
    exit;
  }

  $row = mysqli_fetch_assoc($result);
  if(!$row){
    echo "vide pas de liste";
    exit;
  }

  $title = $row['titre_ouvrage'];
  require "./template/header.php";
?>     

      <!-- Example row of columns -->   
      <div class="row">
        <div class="col-md-5 text-center">
              <img class="img-responsive img-thumbnail" style="height:400px;width:300px"  src="./uploads/<?php echo $row['images']; ?>">
        </div>
                <div >

        <div class="col-md-6">
               <h4  style="margin: 20 ">Titre</h4>
          <p><?php echo $row['titre_ouvrage']; ?></p>
          <h4  style="margin: 20 ">Source</h4>
          <p><?php echo $row['auteur']; ?></p>
            <h4  style="margin: 20 ">Classe</h4>
          <p><?php echo $row['libelle_classe']; ?></p>
            <h4  style="margin: 20 ">Type</h4>
          <p><?php echo $row['libelle_type']; ?></p>
            <h4  style="margin: 20 ">Nombre de page</h4>
          <p><?php echo $row['nombre_page']; ?></p>
           <h4  style="margin: 20 ">Année d'édition</h4>
          <p><?php echo $row['annee_edit']; ?></p>
             <h4  style="margin: 20 ">Description</h4>
          <p><?php echo $row['description']; ?></p>
  
          <table class="table">
                 

        
    
            <?php 
      
              if(isset($conn)) {mysqli_close($conn); }
 
            ?>
          </table>
          <form method="post" id="frmBox" onsubmit="return formSubmit();" action="insert_visite_livre">
            <input type="hidden" name="id_livre" value="<?php echo $id_livre;?>">
         <button id = "add_book" type="submit" name="submit" value=""    class="btn btn-primary ">Lire</button>
         <button id = "add_book" type="submit" name="submit" value=""    class="btn btn-primary ">Details</button>

                <a  id = "show_book"style = "display:none;"  href="<?php echo $row['lien_fichier_livre']?>" alt='Download' title='Download' class='btn btn-primary' target='_blank' >
                  <span class = "glyphicon glyphicon-download"></span></a>

             
          <h3 id="success">  </h3>
          </form>

            <script src = "jsn/jquery.js"></script>


  <script type = "text/javascript">
   
   function formSubmit(){
   $.ajax({
    type:'POST',
    url:'insert_visite_livre.php',
    data:$('#frmBox').serialize(),
    success:function(response){
      $('#success').html(response);
      }

    });
    
    var form=document.getElementById('frmBox').reset();
    return false;
  
   }
    
  </script>
        </div>
      </div>
                 </div>
   

<?php
 // require "./template/footer.php";
?>
          </div>

    <br />
    <br />
    <nav class = "navbar navbar-default navbar-fixed-bottom">
      <div class = "container-fluid">
        <label class = "navbar-text pull-right">Copyright © 2019 - Tous droits reservés.</label>
        <label class = "navbar-text pull-left"><a href="changer_pass.php" style="text-decoration:none">Changer son mot de passe</a> (<?php echo $_SESSION['prenom']." ".$_SESSION['username']." ".$_SESSION['postnom'];?>)
</label>

      </div>
    </nav>
  </body>

  <script type = "text/javascript">
    $(document).ready(function(){
      $('#add_book').click(function(){
       $('#show_book').hide();
    var form=document.getElementById('show_book').click();
    //return false;

        //$(this).hide();

    
      });
    });
  </script>

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


    <!-- JavaScript Libraries -->

  <!-- JavaScript Libraries -->

  <!-- Template Main Javascript File -->
</html>


