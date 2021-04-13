<!DOCTYPE html>
<html lang="en">

<head>
  <title>COMPRA CERTA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>

<body>

  <?php include 'Navbar.html'; ?>

  <!-- carrosel -->
  <div class="container">
    <h2>USE AGORA O CUPOM: DESCONTO50 </h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="barra1.png" alt="Los Angeles" style="width:100%;">
        </div>

        <div class="item">
          <img src="barra2.jpg" alt="Chicago" style="width:100%;">
        </div>

        <div class="item">
          <img src="barra3.jpg" alt="New york" style="width:100%;">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div class="container-fluid bg-3 text-center">
    <h3>OFERTAS</h3><br>
    <div class="row">
      <div class="col-sm-3">

        <img src="img1.jpg" class="img-responsive" style="width:100%" alt="Image">
      </div>
      <div class="col-sm-3">

        <img src="img2.jpg" class="img-responsive" style="width:100%" alt="Image">
      </div>
      <div class="col-sm-3">

        <img src="img3.jpg" class="img-responsive" style="width:100%" alt="Image">
      </div>
      <div class="col-sm-3">

        <img src="img4.jpg" class="img-responsive" style="width:100%" alt="Image">
      </div>
    </div>
  </div><br>

  <div class="container-fluid bg-3 text-center">
    <div class="row">
      <div class="col-sm-3">

        <img src="img5.jpg" class="img-responsive" style="width:100%" alt="Image">
      </div>
      <div class="col-sm-3">

        <img src="img6.jpg" class="img-responsive" style="width:100%" alt="Image">
      </div>
      <div class="col-sm-3">

        <img src="img7.jpg" class="img-responsive" style="width:100%" alt="Image">
      </div>
      <div class="col-sm-3">

        <img src="img8.jpg" class="img-responsive" style="width:100%" alt="Image">
      </div>
    </div>
  </div><br><br>

  <?php include 'Footer.html'; ?>

</body>

</html>