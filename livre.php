<div>

<?php
  $count = 0;
  // connecto database
  include ('connects.php');
  $conn = db_connect();

  $query = "SELECT titre_ouvrage, images FROM livre";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "n'a pas pu trouvé une données " . mysqli_error($conn);
    exit;
  }

  $title = "Full Catalogs of Books";
  require_once "./template/header.php";
?>
  <p class="lead text-center text-muted">Bibliothèque Virtuelle</p>
    <?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>

      <div class="row">
        <?php while($query_row = mysqli_fetch_assoc($result)){ ?>
          <div class="col-md-2" style="width:292px">
            <a href="biblio_virtuel.php?id_livre=<?php echo $query_row['titre_ouvrage']; ?>">
              <img class="img-responsive img-thumbnail" style="height:400px;"  src="./uploads/<?php echo $query_row['images']; ?>">
            </a>
          </div>
        <?php
          $count++;
          if($count >= 4){
              $count = 0;
              break;
            }
          } ?> 
      </div>
<?php
      }
  if(isset($conn)) { mysqli_close($conn); }
// require_once "./template/footer.php";
?>
          </div>
