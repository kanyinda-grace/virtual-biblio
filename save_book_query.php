<?php
	require_once 'connect.php';
	if(ISSET($_POST['save_book'])){
		extract($_POST);

$mat_agent="123".rand(5,4);


$nom_agent=htmlspecialchars( $_POST['nom_agent']);
$postnom_agent =htmlspecialchars( $_POST['postnom_agent']);
$prenom_agent=htmlspecialchars( $_POST['prenom_agent']);



$req=$db->prepare('INSERT INTO agent(mat_agent,nom_agent,postnom_agent,prenom_agent,uname_agent,upass_agent)VALUES(?,?,?,?,?,?)')or die("errororres");
        $req->execute(array($mat_agent,$nom_agent ,$postnom_agent,$prenom_agent,$uname_agent,$upass_agent) )or die("error");


		
		echo'
			<script type = "text/javascript">
				alert("Agent bien enregistré");
				window.location = "agent.php";
			</script>
		';
	}





