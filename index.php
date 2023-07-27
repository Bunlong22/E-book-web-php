<?php
session_start();
$count = 0;
$title = "Home";
require_once "./template/header.php";
require_once "./functions/database_functions.php";
$conn = db_connect();
$row = select4LatestBook($conn);
?>
<div class="lead text-center text-dark fw-bolder h4">Latest books</div>
<center>
  <hr class="bg-warning" style="width:5em;height:3px;opacity:1">
</center>
<div class="row">
  <?php foreach ($row as $book) { ?>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 py-2 mb-2 ">
      <a href="book-details.php?bookisbn=<?php echo $book['book_isbn']; ?>"
        class="card rounded-0 shadow book-item text-reset text-decoration-none">
        <img class="img-top" style="height: 250px;" src="./public/img/<?php echo $book['book_image']; ?>">
        <div class="card-body">
          <div class="card-title fw-bolder h6 text-center">
            <?php
            $maxTitleLength = 40;
            $title = $book['book_title'];
            if (strlen($title) > $maxTitleLength) {
              $title = substr($title, 0, $maxTitleLength) . '...';
            }
            echo $title;
            ?>
            <div class="text-center">
              <span class="h6 text-danger">$
                <?= $book['book_price'] ?>
              </span>
            </div>
          </div>
        </div>
      </a>
    </div>

  <?php } ?>
</div>
<?php
if (isset($conn)) {
  mysqli_close($conn);
}
require_once "./template/footer.php";
?>
<style>
  .card-body {
    height: 100px;
    overflow: hidden;
  }

  .card:hover {
    border: 2px solid blue;
  }
</style>