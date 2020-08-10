<?php session_start();?>
<?php 
require("connect.php");
if(isset($_SESSION['uname_agent'])){
header('location:enreg_livre.php');

}else{
}
?>
<?php
if(isset($_POST['submit']))
{ 


$req=$db->prepare('select * from agent where uname_agent=:uname_agent  OR nom_agent= :uname_agent') or die("errororres");

$req->execute(['uname_agent' => $_POST['uname_agent']]);
$user=$req->fetch();
$pass=$_POST['upass_agent'];
$us=$user['upass_agent'];
if(password_verify($pass,$us)){

//$_SESSION['auth']=$user;

$_SESSION['uname_agent']=$user['uname_agent'];
$_SESSION['mat_agent']=$user['mat_agent'];
$_SESSION['nom_agent']=$user['nom_agent'];
$_SESSION['postnom_agent']=$user['postnom_agent'];
$_SESSION['prenom_agent']=$user['prenom_agent'];
header("location:enreg_livre.php");


exit();

}else{
  
$message="identifiant ou mot de passe incorrect";
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
        <h4>Connexion..</h4>
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
            <label class = "control-label">Nom d'utilisateur </label>
            <input type = "text" name="uname_agent" class = "form-control" id = "username" required/>
          </div>
          <div id = "password_warning" class = "form-group">
            <label class = "control-label">Mot de passe:</label>
            <input type = "password" name="upass_agent" class = "form-control" required id = "password"/>  

          </div>



          <div class = "form-group">
            <button  type="submit" name="submit" id = "login" class = "btn btn-primary btn-block"><span ></span> Se connecter</button> 

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
      </div>
    </nav>
  </body>
  <script src = "js/jquery.js"></script>
  <script src = "js/bootstrap.js"></script>
  <script src = "js/login.js"></script>
</html>