<?php
 
if(!empty($_POST) && !empty($_POST['search']))
{
  extract($_POST);
  $search = strip_tags($search);
   
  try{
  $bdd = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', '') or die(print_r($bdd->errorInfo()));
  $bdd->exec('SET NAMES utf8');
  }
   
  catch(Exeption $e){
  die('Erreur:'.$e->getMessage());
  }
   
  $req = $bdd->query("SELECT * FROM livre WHERE MATCH (titre_ouvrage) AGAINST ('%$search%') ");
   
  if($req->rowCount()>0)
  {
    while($data = $req->fetch(PDO::FETCH_OBJ))
    {
      echo '<h2>'.$data->titre_ouvrage.'</h2>';
      echo '<p>'.$data->titre_ouvrage.'</p>';
      echo '<hr />';
    }
  }
  else
  {
    echo '<h2>Aucun resultat</h2>';
  }
}
 
else
{
  echo '<h2>Aucun resultat</h2>';
}
 
?>

<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <head>
    <title></title>
    <link rel="stylesheet" href="style.css" />
    <script src="jquery-1.4.2.min.js"></script>
    <script>
    $(document).ready(function(){
        $('.loader').hide();
         
         
        $('#search').keyup(function(){
          $field = $(this);
          $('#result').html('');
           
          if($field.val().length>3)
          {
            $.ajax({
              type: 'POST',
              url: 'search.php',
              data: 'search='+$('#search').val(),
               
              beforeSend:function(){
                $('.loader').stop().fadeIn();
              },
               
              success: function(data){
                $('.loader').fadeOut();
                $('#result').html(data);
              }
            });
          }
        });
      });
    </script>
  </head>
  <body>
    <div id="content">
       
      <form action="search.php" method="post">
         
        <label for="search">Rechercher:</label>
        <input type="text" name="search" id="search" />
         
        <div class="loader"></div>
         
      </form>
       
      <div id="result"></div>
       
    </div>
  </body>
</html>