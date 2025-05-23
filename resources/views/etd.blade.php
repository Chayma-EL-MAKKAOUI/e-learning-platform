<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x icon">
  <title>QCM_Génie</title>

  <!--font-->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">
  <!--style-->
  <link rel="stylesheet" href="{{asset('css/styleetd.css')}}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <!--icon-->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <!--alert-->
  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal@4/minimal.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <!-- Include a required theme -->
  <link rel="stylesheet" href="@sweetalert2/themes/minimal/minimal.css">
  <script src="sweetalert2/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('etd')}}">
          <img class="logo-sidebar" src="{{asset('img/logo.png')}}" width="30px" height="30px" />QCM_Génie</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item active">
              <a class="nav-link active" aria-current="page" href="{{ route('etd')}}">
                <i class='bx bx-home-alt'></i> Accueil
              </a>
            </li>
            <li class="nav-item dropdown-submenu">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bxs-graduation'></i>QCM</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('Algo')}}">Algorithmique</a></li>
                <li><a class="dropdown-item" href="{{ route('Arch')}}">Archetecture des ordinateur</a></li>
                <li><a class="dropdown-item" href="{{ route('C')}}">C</a></li>
                <li><a class="dropdown-item" href="#">Css</a></li>
                <li><a class="dropdown-item" href="{{ route('Cplus')}}">C++</a></li>
                <li><a class="dropdown-item" href="{{ route('electro')}}">Electronique numérique</a></li>
                <li><a class="dropdown-item" href="#">Html</a></li>
                <li><a class="dropdown-item" href="#">Java</a></li>
                <li><a class="dropdown-item" href="#">JavaScript</a></li>
                <li><a class="dropdown-item" href="#">Mathématiques appliquées</a></li>
                <li><a class="dropdown-item" href="#">Oracle</a></li>
                <li><a class="dropdown-item" href="#">Php</a></li>
                <li><a class="dropdown-item" href="#">Réseaux informatique</a></li>
                <li><a class="dropdown-item" href="#">Structure de donnée</a></li>
                <li><a class="dropdown-item" href="#">Système d'exploitation</a></li>
                <li><a class="dropdown-item" href="#">Systèmes d'information</a></li>
                <li><a class="dropdown-item" href="#">UML</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown-submenu">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bx-book'></i>Cour</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Algorithmique</a></li>
                <li><a class="dropdown-item" href="#">Archetecture des ordinateur</a></li>
                <li><a class="dropdown-item" href="#">C</a></li>
                <li><a class="dropdown-item" href="#">Css</a></li>
                <li><a class="dropdown-item" href="#">C++</a></li>
                <li><a class="dropdown-item" href="#">Electronique numérique</a></li>
                <li><a class="dropdown-item" href="#">Html</a></li>
                <li><a class="dropdown-item" href="#">Java</a></li>
                <li><a class="dropdown-item" href="#">JavaScript</a></li>
                <li><a class="dropdown-item" href="#">Mathématiques appliquées</a></li>
                <li><a class="dropdown-item" href="#">Oracle</a></li>
                <li><a class="dropdown-item" href="#">Php</a></li>
                <li><a class="dropdown-item" href="#">Réseaux informatique</a></li>
                <li><a class="dropdown-item" href="#">Structure de donnée</a></li>
                <li><a class="dropdown-item" href="#">Système d'exploitation</a></li>
                <li><a class="dropdown-item" href="#">Systèmes d'information</a></li>
                <li><a class="dropdown-item" href="#">UML</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Chercher..." aria-label="Search">
            <button class="btn btn-dark" type="submit">Chercher</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <img src="{{asset('img/estbm.jpeg')}}" alt="img">
            <rect width="100%" height="100%" fill="#777" />
          </svg>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <img src="{{asset('img/pc.jpg')}}" alt="img">
            <rect width="100%" height="100%" fill="#777" />
          </svg>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <img src="{{asset('img/sale.jpg')}}" alt="img">
            <rect width="100%" height="100%" fill="#777" />
          </svg>
        </div>
      </div>
    </div>
    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          <div class="col">
            <div class="card shadow-sm">
             <a href="{{ route('Algo')}}"><img src="{{asset('img/photo.jpg')}}" class="bd-placeholder-img card-img-top img" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
             <div class="texte_centrer">Algorithmique</div>
            </a> 

            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
             <a href="{{ route('Arch')}}"><img src="{{asset('img/photo.jpg')}}" class="bd-placeholder-img card-img-top img" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
             <div class="texte_centrer">Architecture</div>
            </a> 

            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
             <a href="{{ route('C')}}"><img src="{{asset('img/photo.jpg')}}" class="bd-placeholder-img card-img-top img" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
             <div class="texte_centrer">C</div>
            </a> 

            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
             <a href="{{ route('Cplus')}}"><img src="{{asset('img/photo.jpg')}}" class="bd-placeholder-img card-img-top img" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
             <div class="texte_centrer">C++</div>
            </a> 

            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
             <a href="#"><img src="{{asset('img/photo.jpg')}}" class="bd-placeholder-img card-img-top img" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
             <div class="texte_centrer">Css</div>
            </a> 

            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
             <a href="{{ route('electro')}}"><img src="{{asset('img/photo.jpg')}}" class="bd-placeholder-img card-img-top img" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
             <div class="texte_centrer">Electronique numérique</div>
            </a> 

            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
             <a href="#"><img src="{{asset('img/photo.jpg')}}" class="bd-placeholder-img card-img-top img" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
             <div class="texte_centrer">Html</div>
            </a> 

            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
             <a href="#"><img src="{{asset('img/photo.jpg')}}" class="bd-placeholder-img card-img-top img" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
             <div class="texte_centrer">Java</div>
            </a> 

            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
             <a href="#"><img src="{{asset('img/photo.jpg')}}" class="bd-placeholder-img card-img-top img" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
             <div class="texte_centrer">JavaScript</div>
            </a> 

            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
             <a href="#"><img src="{{asset('img/photo.jpg')}}" class="bd-placeholder-img card-img-top img" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
             <div class="texte_centrer">Mathématiques appliquées</div>
            </a> 

            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
             <a href="#"><img src="{{asset('img/photo.jpg')}}" class="bd-placeholder-img card-img-top img" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
             <div class="texte_centrer">Oracle</div>
            </a> 

            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
             <a href="#"><img src="{{asset('img/photo.jpg')}}" class="bd-placeholder-img card-img-top img" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
             <div class="texte_centrer">Php</div>
            </a> 

            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
             <a href="#"><img src="{{asset('img/photo.jpg')}}" class="bd-placeholder-img card-img-top img" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
             <div class="texte_centrer">Réseaux informatique</div>
            </a> 

            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
             <a href="#"><img src="{{asset('img/photo.jpg')}}" class="bd-placeholder-img card-img-top img" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
             <div class="texte_centrer">Structure de donnée</div>
            </a> 

            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
             <a href="#"><img src="{{asset('img/photo.jpg')}}" class="bd-placeholder-img card-img-top img" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
             <div class="texte_centrer">Système d'exploitation</div>
            </a> 

            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
             <a href="#"><img src="{{asset('img/photo.jpg')}}" class="bd-placeholder-img card-img-top img" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
             <div class="texte_centrer">Systèmes d'information</div>
            </a> 

            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
             <a href="#"><img src="{{asset('img/photo.jpg')}}" class="bd-placeholder-img card-img-top img" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
             <div class="texte_centrer">UML</div>
            </a> 

            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="{{asset('js/app.js')}}"></script>
</body>

</html>