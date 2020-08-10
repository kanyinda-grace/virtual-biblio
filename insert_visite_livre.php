<?php session_start();?>
<?php 
include ('connect.php');
if(isset($_SESSION['username']) ){
}else{
header('location:deconnection.php');  
}



?>

<?php


extract($_POST);

$id_livre=htmlspecialchars( $_POST['id_livre']);


date_default_timezone_set('Africa/Kinshasa');
$jour=date('d');
$mois=date('m');
$annee=date('Y');
$nombre=1;

$heure = date("H").":".$minute = date("i").":".$seconde = date("s");
$req=$db->prepare('INSERT INTO livre_telechar(id_livre,id,jour,mois,annee,heure,nombre)VALUES(?,?,?,?,?,?,?)')or die("errororres");
        $req->execute(array($id_livre,$_SESSION['id'],$jour,$mois,$annee,$heure,$nombre))or die("error");
      //echo '<p style="color:red">  <script>alert( "Agent bien enregistré");window.location.href="";</script> </p>';


//echo '';

?>