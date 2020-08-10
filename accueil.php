<?php
include ('connects.php');
require_once "template/header.php";

  session_start();
  $count = 0;
  // connecto database
  
  $title = "Index";
    $conn = db_connect();

  $row = select4LatestBook($conn);

?>
      <!-- Example row of columns -->
      <p class="lead text-center text-muted">Latest books</p>
      <div class="row">
        <?php foreach($row as $book) { ?>
        <div class="col-md-3">
          <a href="book.php?bookisbn=<?php echo $book['id_livre']; ?>">
           <img class="img-responsive img-thumbnail" src="./uploads/<?php echo $book['images']; ?>">
          </a>
        </div>
        <?php } ?>
      </div>
<?php

?>