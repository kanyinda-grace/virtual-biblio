<!DOCTYPE html>
<?php
	require_once 'connect.php';
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
                <li class="active"><a href="index.html">Accueil</a>
                </li>
            
                <li><a href="#">Livre</a>
                  <ul class="dropdown">
                    <li><a href="enreg_livre.php">Ajouter un livre</a></li>
                    <li><a href="single-product.html">Mise à jour</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="account.html">Account Page</a></li>
                    <li><a href="support.html">Support Center</a></li>
                  </ul>
                </li>
                <li><a href="tab_usager.php">Liste des usagers</a>
                  <ul >
     
                  </ul>
                </li>
                <li><a href="#">Statistiques</a>
                  <ul class="dropdown">
                    <li><a href="recherche_consult_par_date.php">Statistique par date</a></li>
                    <li><a href="tab_consult.php">Statistique complète</a></li>
                    <li><a href="single-with-sidebar.html">Single with Sidebar</a></li>
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
				
						
					
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "book.php"><i class = "glyphicon glyphicon-book"></i> Books</a></li>
					
					</li>
						<ul style = "list-style-type:none;">
							<li><a style = "font-size:15px;" href = "logout.php"><i class = "glyphicon glyphicon-log-out"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class = "col-lg-1"></div>
			<div class = "col-lg-9 well" style = "margin-top:60px;">
				<div class = "alert alert-info">Book</div>
					<button id = "add_book" type = "button" class = "btn btn-primary"><span class = "glyphicon glyphicon-plus"></span> Ajouter un livre</button>
					<button id = "show_book" type = "button" style = "display:none;" class = "btn btn-success"><span class = "glyphicon glyphicon-circle-arrow-left"></span> Retour</button>
					<br />
					<br />
					<div id = "book_table">
						<table id = "table" class = "table table-bordered">
							<thead class = "alert-success">
								<tr>
									<th>Nom</th>
									<th>Postnom</th>
									<th>Prenom</th>
									<th>Nom d'utilisateur</th>
									<th>Mot de passe</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$qbook = $db->query("SELECT * FROM `agent`") or die("hyhuhu");
									while($fbook = $qbook->fetch()){
										
								?>
								<tr>
									<td><?php echo $fbook['nom_agent']?></td>
									<td><?php echo $fbook['postnom_agent']?></td>
									<td><?php echo $fbook['prenom_agent']?></td>
									<td><?php echo $fbook['uname_agent']?></td>
									<td><?php echo $fbook['upass_agent']?></td>

									<td><a class = "btn btn-danger delbook_id" value = "<?php //echo $fbook['book_id']?>"><span class = "glyphicon glyphicon-remove"></span> Delete</a> <a value = "<?php// echo $fbook['book_id']?>" class = "btn btn-warning ebook_id"><span class = "glyphicon glyphicon-edit"></span> Edit</a></td>
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
							<form method = "POST" action = "save_book_query.php" enctype = "multipart/form-data">
								<div class = "form-group">
									<label>Book Title:</label>
									<input type = "text" name = "book_title" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Book Description:</label>
									<input type = "text" name = "book_desc" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Book Category:</label>
									<input type = "text" name = "book_category" class = "form-control" required = "required"/>
								</div>
								<div class = "form-group">
									<label>Book Author:</label>
									<input type = "text" name = "book_author" class = "form-control" required = "required" />
								</div>
								<div class = "form-group">
									<label>Date Published:</label>
									<input type = "date" name = "date_publish" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Quantity:</label>
									<input type = "number" min = "0" name = "qty" required = "required" class = "form-control" />
								</div>
										<div class = "form-group">
									<label>Quantity:</label>
									<input type = "number" min = "0" name = "qty" required = "required" class = "form-control" />
								</div>
										<div class = "form-group">
									<label>Quantity:</label>
									<input type = "number" min = "0" name = "qty" required = "required" class = "form-control" />
								</div>

										<div class = "form-group">
									<label>Quantity:</label>
									<input type = "number" min = "0" name = "qty" required = "required" class = "form-control" />
								</div>
										<div class = "form-group">
									<label>Quantity:</label>
									<input type = "number" min = "0" name = "qty" required = "required" class = "form-control" />
								</div>

										<div class = "form-group">
									<label>Quantity:</label>
									<input type = "number" min = "0" name = "qty" required = "required" class = "form-control" />
								</div>
										<div class = "form-group">
									<label>Quantity:</label>
									<input type = "number" min = "0" name = "qty" required = "required" class = "form-control" />
								</div>
										<div class = "form-group">
									<label>Quantity:</label>
									<input type = "number" min = "0" name = "qty" required = "required" class = "form-control" />
								</div>
										<div class = "form-group">
									<label>Quantity:</label>
									<input type = "number" min = "0" name = "qty" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<button name = "save_book" class = "btn btn-primary"><span class = "glyphicon glyphicon-save"></span> Submit</button>
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
			</div>
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