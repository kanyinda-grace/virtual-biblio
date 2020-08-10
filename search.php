<?php session_start();

?>
<?php 
include ('connect.php');
if(isset($_SESSION['username']) ){
}else{
header('location:deconnection.php');  
}



?>
<?php



include 'lib/Database.php';


$db = new Database();

?>

<!DOCTYPE html >
<html lang="en" >


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bibliothèque Virtuelle</title>

     <link href="img/pp.jpg" rel="icon">
  <link href="img/pp.jpg" rel="apple-touch-icon">
    <!-- Bootstrap core CSS -->
    <link href="design/bootstrap.css" rel="stylesheet">
    <link href="cssf/style.css" rel="stylesheet">

    <!-- Fontawesome core CSS -->
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <!-- custom CSS here -->
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

   <link rel="stylesheet" href="searchbox.css">

          <link href="pela.css" rel="stylesheet">


    <style type="text/css">
      img { width: 100%;}


.clear  { clear: both;}
.shadow {  box-shadow: 0px 0px 7px #011933;}
.margin30 { margin-top: 30px; }
.center { text-align: center;}




.templatemo_buttongreen { 
    padding: 10px 0px; 
    margin: 10px 0px; 
    text-align: center; 
    border-left: 10px solid #031f23; 
    font-family: 'Oswald', sans-serif;
    background: #25596e; 
    color: #ffffff; 
    width: 180px; 
    float: left; 
    font-size: 16px;
    font-weight: 500;
    }

.templatemo_hometop_stitle { 
    font-size: 30px; 
    line-height: 34px; 
    margin-bottom: 10px;
    color: #001d2b; 
    font-family: 'Oswald', sans-serif; 
    font-weight: bold;
    }















.templatemo_gallerytop_stitle { 
    font-size: 30px; 
    line-height: 34px;
    margin-bottom: 10px;
    color: #001d2b; 
    font-family: 'Oswald', sans-serif; 
    font-weight: bold;
    }
.templatemo_gallery_left { 
    background: #ffffff;
    float: left;
    padding: 20px;
    width: 100%;
 }

.templatemo_gallerymid_title {
    font-size: 36px; 
    line-height: 36px; 
    color: #3e3e3e; 
    font-family: 'Oswald', sans-serif; 
    font-weight: bold;
    margin: 20px 10px;
}

.templatemo_gallery_left .over{ 
    position: absolute;
    background: #000000;
    bottom: 0;
    opacity: 0.7;
    right: 15px;
    left: 15px;
    padding: 15px 0px;
    }
 /* pour la galerie photo */ 
   
/* pour le panel qui est à droite */
.templatemo_gallery_left .over span.title {
    margin-left: 15px;
    font-size: 16px;
    color: #ffffff;
    float: left;
}
.templatemo_gallery_left .over span.text {
    margin-left: 15px;
    color: #127390;
    width: 100%;
    float: left;
}
.templatemo_testi {
    float: left;
    width: 100%;
    background: #ffffff;
    padding-bottom: 30px;
    margin-top: 5px
}
.templatemo_testi .maintitle{ 
    background: #225b6f;
    font-size: 16px;
    font-family: 'Oswald', sans-serif;
    font-weight: 500;
    float: left;
    padding: 10px 20px;
    width: 100%;
    }
.templatemo_testi .para {
    padding: 30px 30px 0px 30px;
    color: #3e3e3e; 
    float: left;
}

.templatemo_testi .para span { color: #ff0000;}
.templatemo_testi .para span.right, .templatemo_testi .para span.right a{ 
    float: right; 
    color: #19576a; 
    font-weight: bold;
    text-decoration: underline;
    }

.templatemo_testi .para span.title { 
    color: #3e3e3e; 
    font-size: 16px; 
    font-weight: bold;
    }








</style>

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
      <?php 


$search = mysqli_real_escape_string($db->link,$_GET['search']);
if (!isset($search) || $search == NULL) {
  header("Location:404.php");
} else {

$search = $search;

}



?>
<?php
  $count = 0;
  // connecto database
  include ('connects.php');
  $conn = db_connect();

  $query = "SELECT  id_livre,images, titre_ouvrage , auteur ,organ_fin,type.libelle_type,classe.libelle_classe ,maison_edit , description
FROM livre
  join type on livre.id_type=type.id_type 
  join classe on livre.id_classe=classe.id_classe WHERE titre_ouvrage LIKE '%$search%' or  auteur LIKE '%$search%' or  organ_fin LIKE '%$search%'  or  libelle_type LIKE '%$search%'  or  libelle_classe LIKE '%$search%' or  maison_edit LIKE '%$search%' or  description LIKE '%$search%' or  titre_ouvrage LIKE '%$search%'";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "n'a pas pu trouvé une données " . mysqli_error($conn);
    exit;
  }

?>
               
    <div class="container" >
            <div class="row margin30" >
                <div class="col-md-10 ">
                    <div class="templatemo_gallery_left shadow">
                        <div class="templatemo_gallerymid_title">OUR GALLERY</div> 
                        <?php while($query_row = mysqli_fetch_assoc($result)){ ?>

                          <div class="col-sm-4  margin30">
                         <a href="biblio_virtuel.php?id_livre=<?php echo $query_row['id_livre']; ?>">

                         <div class="hover01 column"> <figure><img src="./uploads/<?php echo $query_row['images'] ;?>" alt="gallery 6"  class="img-responsive img-rounded" style="max-width: 600px;  height: 410px;"></div>
                       </a>


                        </div>
                        
                        <?php
                          }
                        ?>

                    </div>
                     
                </div>      

                <div class="col-md-2">
                    <div class="templatemo_testi shadow s_margin30" style="width: 340px;">
                        <div class="maintitle">
                            TESTIMONIALS
                        </div>
                        <div class="para">
                            <span>Lorem quis bibendum auctor,</span> nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed cursus a sit amet mauris. 
                            <span class="right"><a href="#">PUTATE CURSUS</a></span></div>
                            <div class="para">
                            <span>Morbi accumsan ipsum velit.</span> Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  auctor eu in elit. 
                            <span class="right"><a href="#">NAM TELLUS ODIO</a></span></div>
                            <div class="para">
                            <span>Class aptent taciti</span> sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.   
                            <span class="right"><a href="#">CONSEQUAT AUCT</a></span></div>
                            <div class="para">
                            <span>Nullam ac urna eu felis</span> dapibus condimentum sit amet a augue. Sed non neque elit.  
                            <span class="right"><a href="#">PORIN CODIMENT</a></span></div>
                    </div>
                    <div class="templatemo_testi shadow margin30" style="width: 340px;">
                        <div class="maintitle">
                            LOREM IPSUM DOLOR
                        </div>
                        <div class="para">
                            <span class="title">NAM NEC TELLUS A ODIO</span>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Nullam ac urna eu felis dapibus condimentum sit amet a augue.</p>

                            <p>Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc.</p>
                            <p>Rvelit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                            <a href="#"><div class="templatemo_buttongreen">LOREM IPSUM</div></a>
                        </div>
                
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
</br>


    
<?php include "footer.php"; ?>
   
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
</body>
</html>
