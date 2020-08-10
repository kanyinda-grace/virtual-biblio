
<?php
include("connect.php");
isset( $_REQUEST['jour'] ) ? $jour=$_REQUEST['jour'] : $jour='';
isset( $_REQUEST['mois'] ) ? $mois=$_REQUEST['mois'] : $mois='';
isset( $_REQUEST['annee'] ) ? $annee=$_REQUEST['annee'] : $annee='';


if( empty( $jour ) and empty( $mois ) and empty( $annee )){

  //echo '<script> alert("Svp choisissez le jour , le mois et année ensuite vous cliquez sur le button rechercher!")</script>';
}else{
  
  $sql =$db->query( "SELECT livre_telechar.id ,usager.username ,usager.postnom , usager.prenom,usager.prenom,pays.libelle_pays,category_usager.libelle_cat_usag,
  usager.ville,usager.entre_institut,livre_telechar.heure,livre_telechar.mois,livre_telechar.annee, SUM(livre_telechar.nombre) 
  AS NOMBRE FROM livre_telechar join usager on livre_telechar.id=usager.id join pays on usager.id_pays=pays.id_pays 
  JOIN category_usager on usager.id_cat=category_usager.id_cat where livre_telechar.jour=$jour and livre_telechar.mois=$mois and 
  livre_telechar.annee=$annee GROUP BY id,usager.username,usager.postnom ,usager.prenom,pays.libelle_pays,category_usager.libelle_cat_usag, 
  usager.prenom,usager.ville,usager.entre_institut,livre_telechar.jour,livre_telechar.mois,livre_telechar.annee  
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
        
            



        <div style='margin:10px; color:red; font-weight: bold;'>Nombre des usagers ayant telechargé : <span style='color:black'>$num</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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
                  
                    <th class = 'alert alert-info' >Nom</th>
          <th class = 'alert alert-info' >Postnom</th>
                    <th class = 'alert alert-info'>Prenom</th>
          <th class = 'alert alert-info' >Pays</th>
                    <th class = 'alert alert-info'>Ville</th>
            <th class = 'alert alert-info' >Categorie</th>
          <th class = 'alert alert-info' >Entrepise/Institution</th>
                    <th  class = 'alert alert-info'>Nbre de téléchargement</th>


                </tr>
                              </thead> 


                </div>  ";
    
    
while ($donnees = $sql->fetch()) {
    
    echo"
    
    <tbody >
                <tr valign='top' class='po' >
                                     
         
                      <td align='left' >  
                    ".$donnees['username']." <br />
                     </td>
                    <td align='left' >  
                    ".$donnees['postnom']." <br />  
                      </td>
                            <td align='left' >  
                    ".$donnees['prenom']." <br />  
                      </td>
                            <td align='left' >  
                    ".$donnees['libelle_pays']." <br />  
                      </td>
                                <td align='left' >  
                    ".$donnees['ville']." <br />  
                      </td>
                                <td align='left' >  
                    ".$donnees['libelle_cat_usag']." <br />  
                      </td>
                                     <td align='left' >  
                    ".$donnees['entre_institut']." <br />  
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