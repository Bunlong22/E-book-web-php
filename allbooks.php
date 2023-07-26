<?php
session_start();
$count = 0;
require_once "./functions/database_functions.php";
$conn = db_connect();

$query = "SELECT book_isbn, book_image, book_title, book_price FROM books";
$result = mysqli_query($conn, $query);
if (!$result) {
  echo "Can't retrieve data " . mysqli_error($conn);
  exit;
}
$title = "List of Books";
require_once "./template/header.php";
?>
<p class="lead text-center text-muted">List of All Books</p>
<div class="row">
  <?php while ($book = mysqli_fetch_assoc($result)) { ?>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 py-2 mb-2 ">
      <a href="book-details.php?bookisbn=<?php echo $book['book_isbn']; ?>"
        class="card rounded-0 shadow book-item text-reset text-decoration-none">
        <img class="img-top" alt="images" style="height: 250px; " src="./public/img/<?php echo $book['book_image']; ?>">
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
          </div>

          <div class="text-center">
            <span class="h6 text-danger">$
              <?= $book['book_price'] ?>
            </span>
          </div>
        </div>
      </a>
    </div>
    <?php
  } ?>
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