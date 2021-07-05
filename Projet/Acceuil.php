<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page D'acceuil</title>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./js/jquery-3.3.1.slim.min.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
</head>
<body>
  <header>
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-sm bg-dark pl-5">
            <a class="text-white" style="text-decoration:none" href="#">
                <h1 style="font-family:Georgia"> ONCF 
                    <span style="color:orange">.</span>
                </h1>
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ml-5">
                    <li class="nav-item active">
                        <a class="nav-link" href="Acceuil.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Voyages.php">Trajets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Reservation.php">Reservation</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
  </header>
  <main>
    <section>
      <div class="container" id="acc"> 
          <div 
            class="jumbotron jumbotron-fluid text-white" 
            style="background-image: url('./images/oncf.jpg'); background-size: cover; background-position: center">
            <div 
              class="display-4 pl-2"   
              style="color:white">C'est Bon Vous etes Chez <br/> ONCF.
            </div>
        </div>
      </div>
    </section>
    <section id="destinations">
    <div class="container"> 
      <div class="carousel slide" data-ride="carousel" id="carouselExample">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample" data-slide-to="1"></li>
          <li data-target="#carouselExample" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/slide0.jpg"  class="d-block w-75 h-75 mx-auto"/>
            <div class="carousel-caption"></div>
          </div> 
          <div class="carousel-item">
            <img src="./images/slide1.jpg"  class="d-block w-75 h-75 mx-auto"/>
            <div class="carousel-caption"></div>
          </div>
          <div class="carousel-item">
            <img src="./images/slide2.jpg"  class="d-block w-75 h-75 mx-auto" />
            <div class="carousel-caption"></div>
          </div>
        </div>
        <a class="carousel-control-prev" data-slide-to="prev" href="#carouselExample">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" data-slide="next" href="#carouselExample">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
    </section>
  </main>
  <footer>
    <div 
      class="container m-5 mx-auto text-center" 
      style="background-color: #444">
        <h3 
          style="font-family:Georgia" 
          class="text-white"> ONCF 
          <span style="color:orange;font-size:50">.</span>
        </h3>
        <div>Copyright © Tous droits reservés.</div>
      </div>
  </footer>
 </body>
</footer>
