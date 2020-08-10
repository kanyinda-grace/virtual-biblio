<?php session_start();?>
<?php 
require("connect.php");

?>
<?php
if(!empty($_POST)){ 

if(empty($_POST['password']) or $_POST['password'] != $_POST['password_confirm']){ 

$message="Les mots de passe ne correspondent pas";

}else{


$user_id=$_SESSION['id'];

//echo $user_id;

$password=password_hash($_POST['password'],PASSWORD_BCRYPT);


$req=$db->prepare('UPDATE usager set  password=?')->execute([$password]);

echo '<p style="color:red">  <script>alert( "Votre mot de passe est bien changé ");window.location.href="deconnection.php";</script> </p>';

}


}


?>


<html lang = "eng">
  <head>
    <title>Bibliothèque Virtuelle</title>
    <meta charset = "utf-8" />
    <meta name = "viewport" content = "width=device-width, initial-scale=1" />
    <link rel = "stylesheet" type = "text/css" href = "csstp/bootstrap.css" />
      <!-- Favicons -->
  <link href="img/pp.jpg" rel="icon">
  <link href="img/pp.jpg" rel="apple-touch-icon">
  </head>
  <body style = "background-color:#d3d3d3;">
    <nav class = "navbar navbar-default navbar-fixed-top">
      <div class = "container-fluid">
        <div class = "navbar-header">
          <img src = "img/pp.jpg" width = "50px" height = "50px" />
          <h4 class = "navbar-text navbar-right">Bibliothèque Virtuelle</h4>
        </div>
      </div>
    </nav>
    <div class = "container-fluid" style = "margin-top:70px;">
      <div class = "col-lg-3 well">
        <br />
        <br />
        <h4>Changement de mot de passe..</h4>
             <b style="color:red;"> </br> 
    <?php 
    
    if(isset($messages)){
        echo $messages;
        } 
        
    
    if(isset($message)){
        echo $message;
        }

        ?>
           </b>

        <hr style = "border:1px solid #d3d3d3; width:100%;" />
        <form enctype = "multipart/form-data" method="post">  
          <div id = "username_warning" class = "form-group">
            <label class = "control-label">Nouveau Mot de Passe </label>
            <input type = "text" name="password" class = "form-control" id = "username" required/>
          </div>
          <div id = "password_warning" class = "form-group">
            <label class = "control-label">Confirmation du Nouveau Mot de Passe:</label>
            <input type = "password" name="password_confirm" class = "form-control" required id = "password"/>  

          </div>



          <div class = "form-group">
            <button  type="submit" name="submit" id = "login" class = "btn btn-primary btn-block"><span ></span>Changer mon mot de passe</button> 

          </div>
        </form> 
       <div id = "result"></div>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
      </div>
      <div class = "col-lg-1"></div>
      <div class = "col-lg-8 well">
        <img src = "img/back2.jpg" height = "449px" width = "100%" />
      </div>
    </div>
  <nav class = "navbar navbar-default navbar-fixed-bottom">
      <div class = "container-fluid">
        <label class = "navbar-text pull-right">Copyright © 2018 - Tous droits reservés.</label>
        <label class = "navbar-text pull-left"><?php echo $_SESSION['prenom']." ".$_SESSION['username']." ".$_SESSION['postnom'];?>
</label>

      </div>
    </nav>
  </body>
  <script src = "js/jquery.js"></script>
  <script src = "js/bootstrap.js"></script>
  <script src = "js/login.js"></script>
</html>