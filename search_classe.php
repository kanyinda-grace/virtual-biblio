<?php
include("connect.php");
isset( $_REQUEST['id_classe'] ) ? $id_classe=$_REQUEST['id_classe'] : $id_classe='';

if(empty($id_classe)){

	//echo '<script> alert("Svp choisissez la classe et ensuite vous cliquez sur le button rechercher!")</script>';
}else{
	
	$sql =$db->query( "SELECT livre.id_livre,livre.id_classe,livre.id_type,livre.titre_ouvrage,livre.auteur,livre.nombre_page,
livre.maison_edit,livre.annee_edit,livre.organ_fin,livre.fichier_livre,livre.lien_fichier_livre,livre.images,
classe.libelle_classe,type.libelle_type FROM livre

join classe on livre.id_classe=classe.id_classe

join type on livre.id_type=type.id_type
 where classe.id_classe='$id_classe'
ORDER by livre.id_livre asc");
 
 $num =$sql->RowCount();
   /* Récupère le nombre de lignes qui correspond à la requête SELECT */
   if ($num>= 1) {



	echo " 
                         <div style='overflow-y:scroll;'  >

			<div style='margin:10px; color:red; font-weight: bold;'>Nombre des livres trouvés : <span style='color:black'>$num</span>   </div>'

	  <div id = 'book_table'>
            <table id = 'table' class = 'table table-bordered'>
	
</div>
	
";
	echo"        <thead class = 'alert-success'>
                <tr>

                    <th class = 'alert alert-info'>N°</th>
                  <th class = 'alert alert-info'>Classe</th>
                  <th class = 'alert alert-info'>Type</th>
                  <th class = 'alert alert-info'>Titre_ouvrage</th>
                  <th class = 'alert alert-info'>Auteur</th>
                   <th class = 'alert alert-info'>Page</th>
                  <th class = 'alert alert-info'>Année_edition</th>
                  <th class = 'alert alert-info'>Catalogue</th>
                  <th class = 'alert alert-info'>Fichier du livre</th>







                </tr>
              </thead> ";
	
	
while ($donnees = $sql->fetch()) {
    echo"
	
	<tbody >
                                     
                <tr valign='top' class='po' >



					    <td>  
                  ".$donnees['id_livre']." <br />
					  </td>
					  		    <td>  
                  ".$donnees['libelle_classe']." <br />
					  </td>
					  		  		    <td>  
                  ".$donnees['libelle_type']." <br />
					  </td>
                           
                           		  		    <td>  
                  ".$donnees['titre_ouvrage']." <br />
					  </td>

                           		  		    <td>  
                  ".$donnees['auteur']." <br />
					  </td>
                           

                           		  		    <td>  
                  ".$donnees['nombre_page']." <br />
					  </td>
                           

                           		  		    <td>  
                  ".$donnees['annee_edit']." <br />
					  </td>

                           		  		    <td> 
               <img src='./uploads/".$donnees['images']."   ' width='90' height='6' /> 
					  </td>

					        <td > <a href='".$donnees['lien_fichier_livre']."' alt='Download' title='Download' class='btn btn-primary' target='_blank'  ><span class = 'glyphicon glyphicon-download'></span>&nbsp Téléchager</a>                                       

					  </td>
	  
                           
                           
                           
                                   </tr>
       
            </tbody>
            </div>
          </div>";
   
		}
	}else{
 echo '<p style="color:red">  <script>alert( "Aucun resultat trouvé pour votre recherche voir sur le site de pnmls");window.location.href="../pnmls.cd/";</script> </p>';
  

	}
}
?>