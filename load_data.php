

	
<?php
if($_POST['page'])
{
$page = $_POST['page'];
$cur_page = $page;
$page -= 1;
$per_page = 100;
$previous_btn = true;
$next_btn = true;
$first_btn = true;
$last_btn = true;
$start = $page * $per_page;
include ('connect.php');

$reponse =$db->query( "SELECT usager.id,usager.username,usager.postnom,usager.prenom,usager.telephone,usager.email,usager.date_inscrit ,
usager.password,usager.ville,usager.entre_institut,pays.libelle_pays,category_usager.libelle_cat_usag
from usager

join pays on usager.id_pays=pays.id_pays

join category_usager on usager.id_cat=category_usager.id_cat order by usager.id ASC  LIMIT $start, $per_page");

$msg = "";
 $users=$db->prepare("select count(id) as tota from usager ");
  $users->execute(array('id'));

$data=$users->fetch();
$ttgg=$data['tota'];
echo

"<div style='color:red;font-size:17px;margin-left:135px;font-family:verdana;font-weight:bold'>Nombre total de tous les usagers : <b style='color:black;font-family:verdana;font-weight:bold'>".$ttgg."</b> </div>";



while ($donnees = $reponse->fetch()) {  

    $msg .= "

	<!DOCTYPE html>
<html>
  <head>
	    <meta charset='utf-8'>

	<tbody >
                 <tr valign='top'   style='color:black;font-weight:bold;background-color:white;'>
                                     
                 <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>                  
                     <strong></strong> ".$donnees['id']." <br />  
					   </td>
					    <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['username']." <br />
					  </td>
					  <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
					 <strong></strong> ".$donnees['postnom']." <br />
					 </td>
					<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['prenom']." <br />  
					  </td>
					  	<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['telephone']." <br />  
					  </td>
					  	<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['email']." <br />  
					  </td>
					  	<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['libelle_pays']." <br />  
					  </td>
						  	<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['ville']." <br />  
					  </td>

					
				  	<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['libelle_cat_usag']." <br />  
					  </td>
						
				  	<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['entre_institut']." <br />  
					  </td>
					  	<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['date_inscrit']." <br />  
					  </td>
					

					

                          
                </tr>        
            </tbody>
	
    </html>
    ";
  
}
//$msg = "<div class='data'><table>" . $msg . "</table></div>"; // Content for Data
$msg = "
<div class='data' id='printablediv'  >
<div align='center' style='font-size:18px;font-weight:bold;color:red;'>LISTE DES USAGERS</div> 

<table border='0' cellspacing='1' width='100%' align='center' class='table table-bordered' style='border-width:1px;border-style:solid;border-color:black;width:90%' >
            <thead  class=''  >
                <tr style='background-color:#318CE7;' style='border-width:1px;border-style:solid;border-color:black;'>
                    <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:17px'>N°</div></th>
                    <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:17px'>Nom </div></th>
					<th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:17px'>POSTNOM</div></th>
                    <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:17px'>PRENOM</div></th>
					<th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:17px'>TELEPHONE</div></th>
                    <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:17px'>EMAIL</div></th>
					<th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:17px'>PAYS</div></th>
                    <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:17px'>VILLE</div></th>
				    <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:17px'>CATEGORIE</div></th>
					<th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:17px'>ENTREPRISE/INSTITUTION</div></th>
				    <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:17px'>DATE D'INSCRIPTION</div></th>





                </tr>  
            </thead>
    " . $msg . "
</table>
</div>";



$query_pag_num = "SELECT COUNT(*) AS count  FROM usager ";
$result2 =$db->query($query_pag_num);
$row =$result2->fetch();
$count = $row['count'];

$no_of_paginations = ceil($count / $per_page);

/* ---------------Calculating the starting and endign values for the loop----------------------------------- */
if ($cur_page >= 7) {
    $start_loop = $cur_page - 3;
    if ($no_of_paginations > $cur_page + 3)
        $end_loop = $cur_page + 3;
    else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
        $start_loop = $no_of_paginations - 6;
        $end_loop = $no_of_paginations;
    } else {
        $end_loop = $no_of_paginations;
    }
} else {
    $start_loop = 1;
    if ($no_of_paginations > 7)
        $end_loop = 7;
    else
        $end_loop = $no_of_paginations;
}
/* ----------------------------------------------------------------------------------------------------------- */
$msg .= "<div class='pagination'><ul align='left'>";

// FOR ENABLING THE FIRST BUTTON
if ($first_btn && $cur_page > 1) {
    $msg .= "<li p='1' class='active btn btn-sm'>First</li>";
} else if ($first_btn) {
    $msg .= "<li p='1' class='inactive btn btn-sm'>1°</li>";
}

// FOR ENABLING THE PREVIOUS BUTTON
if ($previous_btn && $cur_page > 1) {
    $pre = $cur_page - 1;
    $msg .= "<li p='$pre' class='active btn btn-sm'>Previous</li>";
} else if ($previous_btn) {
    $msg .= "<li class='inactive btn btn-sm'>Precedent</li>";
}
for ($i = $start_loop; $i <= $end_loop; $i++) {

    if ($cur_page == $i)
        $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
    else
        $msg .= "<li p='$i' class='active'>{$i}</li>";
}

// TO ENABLE THE NEXT BUTTON
if ($next_btn && $cur_page < $no_of_paginations) {
    $nex = $cur_page + 1;
    $msg .= "<li p='$nex' class='active btn btn-sm'>Suivant</li>";
} else if ($next_btn) {
    $msg .= "<li class='inactive btn btn-sm'>Suivant</li>";
}

// TO ENABLE THE END BUTTON
if ($last_btn && $cur_page < $no_of_paginations) {
    $msg .= "<li p='$no_of_paginations' class='active btn btn-sm'>Dernier</li>";
} else if ($last_btn) {
    $msg .= "<li p='$no_of_paginations' class='inactive btn btn-sm'>Dernier</li>";
}

$goto = "<input type='text' class='goto' size='1' style='margin-top:50px;margin-left:-326px;'/><input type='button' style='margin-top:45px;margin-left:10px;height:28px;' id='go_btn' class='btn btn-primary' value='Go'/>";
$total_string = "<span class='total' a='$no_of_paginations' style='margin-top:45px;margin-left:3px;'>P <b>" . $cur_page . "</b> sur <b>$no_of_paginations</b></span>";
$msg = $msg . "</ul>" . $goto . $total_string . "</div>";  // Content for pagination
echo $msg;


}

