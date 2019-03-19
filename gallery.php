<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <title>Gallery | Mats Verheyen</title>
</head>
<body>
<?php include 'components/nav.php' ?>
<div id="carousel-gallery" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-gallery" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-gallery" data-slide-to="1"></li>
    <li data-target="#carousel-gallery" data-slide-to="2"></li>
    <li data-target="#carousel-gallery" data-slide-to="3"></li>
    <li data-target="#carousel-gallery" data-slide-to="4"></li>
    <li data-target="#carousel-gallery" data-slide-to="5"></li>
    <li data-target="#carousel-gallery" data-slide-to="6"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="img/Goedemorgen.png" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive custom-h3">Goedemorgen</h3>
        <p class="custom-h3">PHP</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="view">
        <img class="d-block w-100" src="img/Horeca.png" alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive custom-h3">Horeca</h3>
        <p class="custom-h3">Javascript</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="view">
        <img class="d-block w-100" src="img/Lingo.png" alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive custom-h3">Lingo</h3>
        <p class="custom-h3">Javascript</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="view">
        <img class="d-block w-100" src="img/Onkunde.png" alt="Fourth slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive custom-h3">Onkunde</h3>
        <p class="custom-h3">PHP</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="view">
        <img class="d-block w-100" src="img/Pizza.png" alt="Fifth slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive custom-h3">Pizza Calculator</h3>
        <p class="custom-h3">Javascript</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="view">
        <img class="d-block w-100" src="img/Robotarm.png" alt="Sixth slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive custom-h3">Robotarm</h3>
        <p class="custom-h3">Javascript</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="view">
        <img class="d-block w-100" src="img/Css.jpg" alt="Seventh slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive custom-h3">All over grid</h3>
        <p class="custom-h3">CSS</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel-gallery" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-gallery" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php include 'components/footer.php' ?>
</body>
</html>