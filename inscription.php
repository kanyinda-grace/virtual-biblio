<?php session_start();?>
<?php 
include ('connect.php');

//include ('function.php');
?>
<?php
if(isset($_POST['submit']))
{ 
  $username=htmlspecialchars($_POST['username']);
  $email=htmlspecialchars($_POST['email']);
  $postnom=htmlspecialchars($_POST['postnom']);
  $prenom=htmlspecialchars($_POST['prenom']);
  $code_sexe=htmlspecialchars($_POST['code_sexe']);
  $telephone=htmlspecialchars($_POST['telephone']);
  $id_pays=htmlspecialchars($_POST['id_pays']);
  $ville=htmlspecialchars($_POST['ville']);
  $id_cat=htmlspecialchars($_POST['id_cat']);
  $entre_institut=htmlspecialchars($_POST['entre_institut']);
  $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
//$token=str_random(60);

    $req=$db->prepare("select email,username from usager where  email=? and username=?");
$req->execute(array($_POST['email'],$_POST['username']));
$res=$req->fetch();
if($res){
  
echo '<p style="color:red">  <script>alert( "Echec Cet email '.$res['email'].' et Ce '.$res['username'].' sont déjà utilisé par un autre compte");window.location.href="";</script> </p>';
}

if($_POST['password'] != $_POST['password_confirm'] )
{ 
$message='Vos mots de passe ne correspondent pas' ;


}

else{
  

$users=$db->prepare("INSERT INTO usager (username,postnom,prenom,code_sexe,telephone,email,password,id_pays,ville,id_cat,entre_institut,date_inscrit)VALUES(?,?,?,?,?,?,?,?,?,?,?,NOW())") or die("errororres");

$executeIsOk = $users->execute(array($username,$postnom,$prenom,$code_sexe,$telephone,$email,$password,$id_pays,$ville,$id_cat,$entre_institut)) or die ("error");
 
 //echo '<p style="color:red">  <script>alert( "Votre compte est bien crée vous pouvez maintenant vous conneceter");window.location.href="index.php";</script> </p>';


//$message='Votre compte est bien crée' ;
//$user_id=$db->LastInsertId();
//mail($_POST['email'],'Confirmation de votre compte',"Afin de valider votre compte merci de cliquez sur ce lien\n\n\http:bibliotheque_virtuel/confirm.php?id=$user_id&token=$token");

//$_SESSION['flash']['success']='un email de confirmation vous a été validé pour valider votre compte';
  
if($executeIsOk){

 echo '<p style="color:red">  <script>alert( "Votre compte est bien crée vous pouvez maintenant vous conneceter");window.location.href="index.php";</script> </p>';

    } 
    
else{

 echo '<p style="color:red">  <script>alert( "Echec");window.location.href="index.php";</script> </p>';

    } 
  

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
        <h4>Inscription..</h4>
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
        <form  method="post">  
          <div id = "username_warning" class = "form-group">
            <label class = "control-label">Nom d'utilisateur:</label>
            <input type = "text" name="username" class = "form-control"  required/>
          </div>
          <div id = "username_warning" class = "form-group">
            <label class = "control-label">Postnom:</label>
            <input type = "text" name="postnom" class = "form-control" required/>
          </div>
          <div id = "username_warning" class = "form-group">
            <label class = "control-label">Prenom:</label>
            <input type = "text" name="prenom" class = "form-control"  required/>
          </div>
   <div id = "username_warning" class = "form-group">
            <label class = "control-label">Sexe:</label>
              <select  name="code_sexe"  class = "form-control"  >
   
      <?php
          $reponse =$db->query("SELECT *  from sexe") ;
          while($donnees  =$reponse->fetch()){
          
          echo '<option value = "'.$donnees['code_sexe'].'">'.$donnees['lib_sexe'].'</option>';
          }




        ?>
      </select>
                </div>
          <div id = "username_warning" class = "form-group">
            <label class = "control-label">Téléphone:</label>
            <input type = "text" name="telephone" class = "form-control"  required/>
          </div>
            <div id = "username_warning" class = "form-group">
            <label class = "control-label">Email:</label>
            <input type = "email" name="email" class = "form-control"  required/>
          </div>
          <div id = "password_warning" class = "form-group">
            <label class = "control-label">Mot de passe:</label>
            <input type = "password" name="password" class = "form-control" required />  

          </div>
                <div id = "password_warning" class = "form-group">
            <label class = "control-label">Confirmation Mot de passe:</label>
            <input type = "password" name="password_confirm" class = "form-control" required />  

          </div>
               <div id = "username_warning" class = "form-group">
            <label class = "control-label">Pays de Résidence:</label>
            <select type = "text" name="id_pays" class = "form-control"  required>
             <?php
          $reponse =$db->query("SELECT * from pays order by libelle_pays  ") ;
          while($donnees  =$reponse->fetch()){
          
          echo '<option value = "'.$donnees['id_pays'].'">'.$donnees['libelle_pays'].'</option>';
          }
        ?>          </select>

          </div>
             <div id = "username_warning" class = "form-group">
            <label class = "control-label">Ville de Résidence:</label>
            <input type = "text" name="ville" class = "form-control"  required/>
          </div>
                <div id = "username_warning" class = "form-group">
            <label class = "control-label">Categorie:</label>
            <select type = "text" name="id_cat" class = "form-control"  required>
          
      <?php
          $reponse =$db->query("SELECT *  from category_usager") ;
          while($donnees  =$reponse->fetch()){
          
          echo '<option value = "'.$donnees['id_cat'].'">'.$donnees['libelle_cat_usag'].'</option>';
          }
        ?>         </select>

          </div>
             <div id = "username_warning" class = "form-group">
            <label class = "control-label">Entreprise ou Institution:</label>
            <input type = "text" name="entre_institut" class = "form-control"  required/>
          </div>




          <div class = "form-group">
            <button  type="submit" name="submit" class = "btn btn-primary btn-block"><span ></span> S'inscrire</button>  <br />
           

                                 <div align="center"> 
<a href="index.php">Vous avez déjà un compte ?</a></div>

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