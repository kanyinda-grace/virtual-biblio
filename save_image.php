<?php
	require_once 'connect.php';
extract($_POST);

if (!empty($_FILES)) {


 $auteur=htmlspecialchars($_POST['auteur']);

       $nomPhoto=$_FILES['photo']['name'];
       $fichierTempo=$_FILES['photo']['tmp_name'];
       move_uploaded_file($fichierTempo, './uploadss/'.$nomPhoto);  
  
        $req=$db->prepare('INSERT INTO galerie(auteur,images)VALUES(?,?)')or die("errororres");
            $req->execute(array($auteur,$nomPhoto) )or die("errora");
      echo '<p style="color:red">  <script>alert( "Image enregistré ");window.location.href="enreg_galerie.php";</script> </p>';


    }



?>


