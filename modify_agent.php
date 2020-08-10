<?php session_start();?>
<?php 
include ('connect.php');
if(isset($_SESSION['uname_agent']) ){
}else{
header('location:deconnection.php');  
}

?>

<?php

$mat=$_SESSION['mat_agent'];


  	$requser = $db->prepare("SELECT * from agent where mat_agent=:num ");
	
	$requser->bindValue(':num',$_GET['modify'],PDO::PARAM_INT);
	
$executeIsOk = $requser->execute();

$result = $requser->fetch();


  
 if(isset($_POST['submit'])){
 
   extract($_POST);
     $password=password_hash($_POST['upass_agent'],PASSWORD_BCRYPT);

  		
		$req = $db->prepare("UPDATE agent set nom_agent  =:nom_agent  , 
 postnom_agent =:postnom_agent,postnom_agent =:postnom_agent ,prenom_agent =:prenom_agent , 
 uname_agent=:uname_agent,upass_agent=:upass_agent  WHERE mat_agent=:num LIMIT 1");
 
$req->bindValue(':num',$_POST['modify'],PDO::PARAM_INT);
$req->bindValue(':nom_agent',$_POST['nom_agent'],PDO::PARAM_STR);
$req->bindValue(':postnom_agent',$_POST['postnom_agent'],PDO::PARAM_STR);
$req->bindValue(':nom_agent',$_POST['nom_agent'],PDO::PARAM_INT);
$req->bindValue(':postnom_agent',$_POST['postnom_agent'],PDO::PARAM_INT);
$req->bindValue(':prenom_agent',$_POST['prenom_agent'],PDO::PARAM_INT);
$req->bindValue(':uname_agent',$_POST['uname_agent'],PDO::PARAM_STR);
$req->bindValue(':upass_agent',$password,PDO::PARAM_STR);



$executeIsOk = $req->execute();


  
if($executeIsOk){

echo '<p style="color:red">  <script>alert( "Modification effectuée avec succés ");window.location.href="agent.php";</script> </p>';

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
					<img src = "images/user.png" width = "50px" height = "50px"/>
					<br />
					<br />
					<label class = "text-muted"></label>
				</div>
				<hr style = "border:1px dotted #d3d3d3;"/>
				<ul id = "menu" class = "nav menu">
				
						
					
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "agent.php"><i class = "glyphicon glyphicon-user"></i> Agent</a></li>
					
					</li>
					              <li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "deconnection_agent.php"><i class = "glyphicon glyphicon-log-out"></i> Deconnecter</a></li>

					</li>
				</ul>
			</div>
			<div class = "col-lg-1"></div>
			<div class = "col-lg-9 well" style = "margin-top:60px;">
				<div class = "alert alert-info">MODIFICATION D'UN AGENT</div>
		
						<div class = "col-lg-3"></div>
						<div class = "col-lg-6">
							<form method = "POST" action = "" enctype = "multipart/form-data">
								<div class = "form-group">
									<label>Nom:</label>
									<input type = "text" value="<?= $result['nom_agent']; ?>"  name = "nom_agent" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Postnom:</label>
									<input type = "text" value="<?= $result['postnom_agent']; ?>" name = "postnom_agent" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Prenom:</label>
									<input type = "text" value="<?= $result['prenom_agent']; ?>" name = "prenom_agent" class = "form-control" required = "required"/>
								</div>
								<div class = "form-group">
									<label>Nom d'utilisateur:</label>
									<input type = "text" value="<?= $result['uname_agent']; ?>" name = "uname_agent" class = "form-control" required = "required" />
								</div>
								<div class = "form-group">
									<label>Mot de passe:</label>
									<input type = "password" value="<?= $result['upass_agent']; ?>" name = "upass_agent" required = "required" class = "form-control" />
								</div>
							
													     <input type="hidden" value="<?= $result['mat_agent']; ?>"  name="modify" style="color:black;background-color:white;border-color:silver;width:230px;" class = "form-control"    />

								<div class = "form-group" >
									<button name = "submit" class = "btn btn-primary"><span class = "glyphicon glyphicon-save"></span> Valider</button>
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