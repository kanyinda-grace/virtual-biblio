<?php session_start();?>
<?php
if(isset($_SESSION['username']) ){
unset($_SESSION['username']);
if(session_destroy()){
header('location:index.php');	
}else{
echo'Erreur de connexion';
}
}else{
header('location:index.php');
}
?>

	