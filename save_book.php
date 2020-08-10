<?php
	require_once 'connect.php';
extract($_POST);

if (!empty($_FILES)) {

$id_classe=htmlspecialchars( $_POST['id_classe']);

 $titre_ouvrage=htmlspecialchars($_POST['titre_ouvrage']);
 $id_type=$_POST['id_type'];
 $titre_ouvrage=$_POST['titre_ouvrage'];
 $auteur=$_POST['auteur'];
  $nombre_page=$_POST['nombre_page'];
 $maison_edit=$_POST['maison_edit'];
  $organ_fin=$_POST['organ_fin'];
  $description=$_POST['description'];

  $file_name=$_FILES['uploaded_file']['name'];
  $file_extension=strrchr($file_name,".");
    
    $file_tmp_name=$_FILES['uploaded_file']['tmp_name'];
    $file_desc='uploads/'.$file_name; 
    
    $extensions_autorisees=$array = array('.pdf','.docx','.doc' );


    if (in_array($file_extension, $extensions_autorisees)) {


      if (move_uploaded_file( $file_tmp_name,$file_desc)) {



       $nomPhoto=$_FILES['photo']['name'];
       $fichierTempo=$_FILES['photo']['tmp_name'];
       move_uploaded_file($fichierTempo, './uploads/'.$nomPhoto);  
  
        $req=$db->prepare('INSERT INTO livre(id_classe ,id_type,titre_ouvrage,auteur,nombre_page,maison_edit,annee_edit,organ_fin,fichier_livre,lien_fichier_livre,images,description)VALUES(?,?,?,?,?,?,?,?,?,?,?,?)')or die("errororres");
            $req->execute(array($id_classe,$id_type,$titre_ouvrage,$auteur,$nombre_page,$maison_edit,$annee_edit,$organ_fin,$file_name,$file_desc,$nomPhoto,$description) )or die("errora");
      echo '<p style="color:red">  <script>alert( "Livre enregistré ");window.location.href="enreg_livre";</script> </p>';

      }else{
             echo '<p style="color:red">  <script>alert( "une erreur est survenue lors denvoie dun fichier ");window.location.href="";</script> </p>';
             echo 'une erreur est survenue lors denvoie dun fichier';
      }

       } else {
             echo '<p style="color:red">  <script>alert( "seuls les fichiers pdf ou word sont autorisés ");window.location.href="";</script> </p>';
                        echo 'seuls les fichiers pdf sont autorisés';
      }
    }



?>


