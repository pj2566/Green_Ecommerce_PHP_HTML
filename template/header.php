<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>
  <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php" style="background-color: #03C03C; color: white;">GREEN Ecommerce Bookstore</a>

      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp; Publisher</a></li>
          <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Books</a></li>
          <li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp; Contact</a></li>
          <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; My Cart</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <?php if(isset($title) && $title == "Index") { ?>
    <div class="jumbotron">
      <div class="container">
        <div class="text-center"> <!-- Centering the text -->
          <h1>Green Books</h1>
        </div>
      </div>
    </div>
  <?php } ?>
  <div class="container" id="main">
    <!-- Rest of your content goes here -->
  </div>

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="./bootstrap/js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
