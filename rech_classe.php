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
            <img src="img/pp.jpg"  style="height:40px;width:30%;margin-top:;margin-left:;position:" alt="" />
          </div>
        </div>
        <!-- title area -->
        <div class="col-lg-9 col-md-12 col-sm-12">
          <div id="nav" class="right">
            <div class="container clearfix">
              <ul id="jetmenu" class="jetmenu blue">
                <li class="active"><a href="/biblio_virtuel/" style="font-weight:bold">Accueil</a>
                </li>
            
                <li><a href="rech_classe.php" style="font-weight:bold">Recherche par classe</a>
                                  <li><a href="tous_doc.php" style="font-weight:bold">TOUS LES DOCUMENTS</a>

                  <ul >

                  </ul>

                </li>
                  <ul >

     
                  </ul>
                </li>
                                     <li><a href="deconnection.php" style="font-weight:bold">Déconnecter</a>
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

  </header>  <!-- end head
  <!-- end header -->
    <div class = "container-fluid">

      <div class = "col-lg-1"></div>
      <div class = "col-lg-9 well" style = "margin-top:60px;">
        <div class = "alert alert-info">RECHERCHE PAR CLASSE</div>
          <form action=""    name="form" > 
              <label>Classe:</label>
             <span>
     
              <select  name="id_classe" style="border-radius:6px;height:30px"   >
   
      <?php
          $reponse =$db->query("SELECT *  from classe") ;
          while($donnees  =$reponse->fetch()){
          
          echo '<option value = "'.$donnees['id_classe'].'">'.$donnees['libelle_classe'].'</option>';
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
  $('#s-results').load('search_classe.php').show();
  
  
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
    
    $.post('search_classe.php', { id_classe: form.id_classe.value, },
    
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
        <label class = "navbar-text pull-left"><a href="changer_pass.php" style="text-decoration:none">Changer son mot de passe</a> (<?php echo $_SESSION['prenom']." ".$_SESSION['username']." ".$_SESSION['postnom'];?>)
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

  <!-- JavaScript Libraries -->

  <!-- Template Main Javascript File -->
</html>