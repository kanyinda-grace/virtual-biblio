<?php
session_start();
include 'connect.php';

//code pour supprimer un courrier
if(isset($_GET['supagent'])){
	
	$num=$_GET['supagent'];

$suprimer=$db->prepare("DELETE from agent
where mat_agent ='$num' ") or die("erreure de requete");
$suprimer->execute(array($_GET['supagent']))or die("erreure de requete");
echo '<p style="color:red">  <script>alert( "agent supprimé avec succés ");window.location.href="agent.php";</script> </p>';

//header("location:Mise_Ajour.php?Mise_Ajour=courrier");

	
}
?>

