<?php
 session_start();
 include ("connect.php");
//$mat=$_SESSION['mat_agent'];


    $requser = $db->prepare("SELECT * from livre where id_livre=:num ");
  
  $requser->bindValue(':num',$_GET['modify'],PDO::PARAM_INT);
  
$executeIsOk = $requser->execute();

$result = $requser->fetch();


  
 if(isset($_POST['submit'])){
 
   extract($_POST);

      

       $nomPhoto=$_FILES['photo']['name'];
       $fichierTempo=$_FILES['photo']['tmp_name'];
       move_uploaded_file($fichierTempo, './uploads/'.$nomPhoto);  

    $req = $db->prepare("UPDATE livre set images=:images WHERE id_livre=:num LIMIT 1");
 
$req->bindValue(':num',$_POST['modify'],PDO::PARAM_INT);
$req->bindValue(':images',$nomPhoto,PDO::PARAM_STR);



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
  
        <div class = "alert alert-info">MODIFICATION DU CATALOGUE DU LIVRE</div>
    
            <div class = "col-lg-3"></div>
            <div class = "col-lg-6">
             <form method = "POST"  enctype = "multipart/form-data">
          
                <input type="hidden" value="<?= $result['id_livre']; ?>"  name="modify" style="color:black;background-color:white;border-color:silver;width:230px;" class = "form-control"    />
                  <a href=""><?php if($result['images'] != ""): ?>
                    <img src="uploads/<?php echo $result['images']; ?>" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
                    <?php else: ?>
                    <img src="images/user.png" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
                    <?php endif; ?>
                    </a>
                                       <div class = "form-group">
                  <input type = "file" name = "photo" value="<?= $result['images']; ?>" style="width:280px" required  class = "form-control" />
                </div>
              
              
              
              
              
              
              
            
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