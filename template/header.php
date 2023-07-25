<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>
    <?php echo $title; ?>
  </title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./bootstrap/css/styles.css" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
    integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript" src="./bootstrap/js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  /* Remove padding from container */
  .navbar>.container,
  .navbar>.container-fluid {
    padding-left: 10;
    padding-right: 10;
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <!-- Page Title -->
      <a class="navbar-brand ml-5" href="index.php">E-book Shop</a>

      <!-- Search Bar -->
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <!-- Navigation Links -->
      <ul class="navbar-nav ml-auto">
        <!-- Add other menu items here -->
        <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true): ?>
          <li class="nav-item"><a class="nav-link" href="admin_book.php"><span class="fa fa-th-list"></span> Book dashboard</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="admin_add.php"><i class="fa-solid fa-plus"></i> Add New
              Book</a></li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="books.php"><span class="fa fa-book"></span>View all Books</a></li>
          <li class="nav-item"><a class="nav-link" href="cart.php"><span class="fa fa-shopping-cart"></span> My Cart</a>
          </li>
        <?php endif; ?>

        <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true): ?>
          <li class="nav-item"><a class="nav-link" href="admin_signout.php"><span class="fa fa-sign-out-alt"></span>
              Logout</a></li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="admin.php"><span class="fa fa-sign-in-alt"></span> Login</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>
  <?php
  if (isset($title) && $title == "Home") {
    ?>
    <div class="container">
      <h1>Welcome to E-Book shop</h1>
      <hr>
    </div>
  <?php } ?>

  <div class="container" id="main">