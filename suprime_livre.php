<?php
session_start();
include 'connect.php';

//code pour supprimer un courrier
if(isset($_GET['suplivre'])){
	
	$num=$_GET['suplivre'];

$suprimer=$db->prepare("DELETE from livre
where id_livre ='$num' ") or die("erreure de requete");
$suprimer->execute(array($_GET['suplivre']))or die("erreure de requete");
echo '<p style="color:red">  <script>alert( "Livre supprimé avec succés ");window.location.href="enreg_livre.php";</script> </p>';

//header("location:Mise_Ajour.php?Mise_Ajour=courrier");

	
}
?>

