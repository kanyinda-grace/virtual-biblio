
<?php
include("connect.php");
isset( $_REQUEST['jour'] ) ? $jour=$_REQUEST['jour'] : $jour='';
isset( $_REQUEST['mois'] ) ? $mois=$_REQUEST['mois'] : $mois='';
isset( $_REQUEST['annee'] ) ? $annee=$_REQUEST['annee'] : $annee='';


if( empty( $jour ) and empty( $mois ) and empty( $annee )){

  //echo '<script> alert("Svp choisissez le jour , le mois et année ensuite vous cliquez sur le button rechercher!")</script>';
}else{
  
  $sql =$db->query( "SELECT livre.id_livre,livre.titre_ouvrage,livre_telechar.jour,livre_telechar.heure,livre_telechar.mois,livre_telechar.annee,livre_telechar.heure, SUM(livre_telechar.nombre) 
  AS NOMBRE FROM livre_telechar join livre on livre_telechar.id_livre=livre.id_livre where livre_telechar.jour=$jour and livre_telechar.mois=$mois and 
  livre_telechar.annee=$annee GROUP BY livre.id_livre,livre_telechar.jour,livre_telechar.mois,livre.titre_ouvrage,livre_telechar.annee
");
  $req =$db->query( "SELECT livre_telechar.heure,livre_telechar.mois,livre_telechar.annee, SUM(livre_telechar.nombre) 
  AS tot FROM livre_telechar join usager on livre_telechar.id=usager.id join pays on usager.id_pays=pays.id_pays 
  JOIN category_usager on usager.id_cat=category_usager.id_cat where livre_telechar.jour=$jour and livre_telechar.mois=$mois and 
  livre_telechar.annee=$annee  GROUP BY livre_telechar.jour,livre_telechar.mois,livre_telechar.annee,livre_telechar.nombre
");

$data=$req->fetch();
$ttgg=$data['tot'];
//echo $ttgg   ;


$num =$sql->RowCount();
   /* Récupère le nombre de lignes qui correspond à la requête SELECT */
   if ($num>= 1) {
        echo "
        
            



        <div style='margin:10px; color:red; font-weight: bold;'>Nombre des livres telechargé : <span style='color:black'>$num</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbspNombre total des téléchargements : <span style='color:blue'>$ttgg</span></div>";
    echo "  <div id = 'book_table'><table id = 'table' class = 'table table-bordered' >
    
</div>
    
";
    echo"        <thead class = 'alert-success'>
<tr >
                  
                    <th class = 'alert alert-info'>Titre de l'ouvrage</th>

                    <th  class = 'alert alert-info'>Nombre de fois téléchargé</th>


                </tr>
                              </thead> 


                </div>  ";
    
    
while ($donnees = $sql->fetch()) {
    
    echo"
    
    <tbody >
                <tr valign='top' class='po' >
                                     
         
               
                    <td align='left' >  
                    ".$donnees['titre_ouvrage']." <br />  
                      </td>
      
                                    <td align='left' >  
                    ".$donnees['NOMBRE']." <br />  
                      </td>
                     
              
                   
                          
                </tr>  

            </tbody>

    ";
   
        }
    }else{
        echo "<script> alert('Aucun resultat trouvé pour votre recherche')</script>";
    }
}
?>