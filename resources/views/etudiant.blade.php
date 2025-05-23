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
  <link rel="stylesheet" href="{{asset('css/styleetud.css')}}">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
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
  <!--ajax link-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
              <a class="nav-link active" aria-current="page" href="{{ route('etudiant')}}">
                <i class='bx bx-home-alt'></i> Accueil
              </a>
            </li>
            <li class="nav-item dropdown-submenu">
              <a class="nav-link dropdown-toggle" href="{{ route('etudiant')}}" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bx-book'></i>Cours</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('etudiant')}}#algo">Algorithmique</a></li>
                <li><a class="dropdown-item" href="{{ route('etudiant')}}#arch">Archetecture des ordinateur</a></li>
                <li><a class="dropdown-item" href="{{ route('etudiant')}}#c">C</a></li>
                <li><a class="dropdown-item" href="{{ route('etudiant')}}#css">Css</a></li>
                <li><a class="dropdown-item" href="{{ route('etudiant')}}#cpp">C++</a></li>
                <li><a class="dropdown-item" href="{{ route('etudiant')}}#electro">Electronique numérique</a></li>
                <li><a class="dropdown-item" href="{{ route('etudiant')}}#html">Html</a></li>
                <li><a class="dropdown-item" href="{{ route('etudiant')}}#java">Java</a></li>
                <li><a class="dropdown-item" href="{{ route('etudiant')}}#js">JavaScript</a></li>
                <li><a class="dropdown-item" href="{{ route('etudiant')}}#math">Mathématiques appliquées</a></li>
                <li><a class="dropdown-item" href="{{ route('etudiant')}}#oracle">Oracle</a></li>
                <li><a class="dropdown-item" href="{{ route('etudiant')}}#php">Php</a></li>
                <li><a class="dropdown-item" href="{{ route('etudiant')}}#res">Réseaux informatique</a></li>
                <li><a class="dropdown-item" href="{{ route('etudiant')}}#std">Structure de donnée</a></li>
                <li><a class="dropdown-item" href="{{ route('etudiant')}}#se">Système d'exploitation</a></li>
                <li><a class="dropdown-item" href="{{ route('etudiant')}}#si">Systèmes d'information</a></li>
                <li><a class="dropdown-item" href="{{ route('etudiant')}}#uml">UML</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown-submenu">
              <a class="nav-link dropdown-toggle" href="{{ route('etd')}}" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bxs-graduation'></i>QCM</a>
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
          </ul>
          <form class="d-flex" action="{{ route('etudiant') }}" method="GET">
            <input class="form-control me-2" type="search" name="search" placeholder="Chercher..." aria-label="Search">
            <button class="btn btn-dark" type="submit">Chercher</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <!-- <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>-->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <svg class="bd-placeholder-img " width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <img src="{{asset('img/raw.png')}}" class="img-fluid" alt="img">
            <rect width="100%" height="100%" fill="#777" />
          </svg>
        </div>
        <!--  <div class="carousel-item">
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
        </div>-->
      </div>
    </div>
    <div class="bg-white py-4 shadow-sm" style="margin-top:-80px;padding-top:20px;">
      <div class="container">
        <div class="align-items-center g-0 row">
          <div class="mb-lg-0 mb-4 col-xl-4 col-lg-4 col-md-6">
            <div class="d-flex align-items-center">
              <span class="icon-sahpe icon-lg rounded-circle text-center fs-2" style="background:#9b51e073;width:42px;color:#9c51e0;">
                <i class='bx bxs-file-pdf'></i>
              </span>
              <div class="ms-3">
                <h4 class="mb-0 fw-semi-bold" style="color:#9c51e0;">Plus de {{ $nbr_cour }} cours</h4>
                <p class="mb-0">Vous pouvez trouver tous les cours.</p>
              </div>
            </div>
          </div>
          <div class="mb-lg-0 mb-4 col-xl-4 col-lg-4 col-md-6">
            <div class="d-flex align-items-center">
              <span class="icon-sahpe icon-lg rounded-circle text-center fs-2" style="background:#9b51e073;width:42px;color:#9c51e0;">
                <i class='bx bx-group'></i>
              </span>
              <div class="ms-3">
                <h4 class="mb-0 fw-semi-bold" style="color:#9c51e0;">Plus de {{ $nbr_user }} enseignants</h4>
                <p class="mb-0">Des proffesseur d'informatique.</p>
              </div>
            </div>
          </div>
          <div class="mb-lg-0 mb-4 col-xl-4 col-lg-4 col-md-6">
            <div class="d-flex align-items-center">
              <span class="icon-sahpe icon-lg rounded-circle text-center fs-2" style="background:#9b51e073;width:42px;color:#9c51e0;">
                <i class='bx bx-brain'></i>
              </span>
              <div class="ms-3">
                <h4 class="mb-0 fw-semi-bold" style="color:#9c51e0;">Plus de 17 QCM</h4>
                <p class="mb-0">Passez les QCM pour examiner votre package.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><br><br>
    <!--slick slider cours-->
    <div class="slider" id="cour">
      <div class="container">
        <hr class="hr-algo">
        <div class="row center">
          @foreach($cour as $cours)
          @if($cours->element_id == 7)
          <div class="col-3" style="padding-left: 15px;">
            <a href="{{ $cours->file_path}}" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
              <div class="cour" id="algo">
                <img src="{{ asset('img/algo.jpg')}}" alt="algo" class="img-fluid">
                <h5>{{$cours->titre}}</h5>
              </div>
            </a>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
    <!--end slick slider-->
    <!--slick slider cours-->
    <div class="slider">
      <div class="container">
        <hr class="hr-arch">
        <div class="row center">
          @foreach($cour as $cours)
          @if($cours->element_id == 8)
          <div class="col-3" style="padding-left: 15px;">
            <a href="{{ $cours->file_path}}" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
              <div class="cour" id="arch">
                <img src="{{ asset('img/arch.jpg')}}" alt="arch" class="img-fluid">
                <h5>{{$cours->titre}}</h5>
              </div>
            </a>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
    <!--end slick slider-->
    <!--slick slider cours-->
    <div class="slider">
      <div class="container">
        <hr class="hr-c">
        <div class="row center">
          @foreach($cour as $cours)
          @if($cours->element_id == 2)
          <div class="col-3" style="padding-left: 15px;">
            <a href="{{ $cours->file_path}}" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
              <div class="cour" id="c">
                <img src="{{ asset('img/c.jpg')}}" alt="c" class="img-fluid">
                <h5>{{$cours->titre}}</h5>
              </div>
            </a>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
    <!--end slick slider-->
    <!--slick slider cours-->
    <div class="slider">
      <div class="container">
        <hr class="hr-css">
        <div class="row center">
          @foreach($cour as $cours)
          @if($cours->element_id == 9)
          <div class="col-3" style="padding-left: 15px;">
            <a href="{{ $cours->file_path}}" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
              <div class="cour" id="css">
                <img src="{{ asset('img/css.png')}}" alt="css" class="img-fluid">
                <h5>{{$cours->titre}}</h5>
              </div>
            </a>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
    <!--end slick slider-->
    <!--slick slider cours-->
    <div class="slider">
      <div class="container">
        <hr class="hr-cplus">
        <div class="row center">
          @foreach($cour as $cours)
          @if($cours->element_id == 3)
          <div class="col-3" style="padding-left: 15px;">
            <a href="{{ $cours->file_path}}" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
              <div class="cour" id="cpp">
                <img src="{{ asset('img/cplus.jpg')}}" alt="c++" class="img-fluid">
                <h5>{{$cours->titre}}</h5>
              </div>
            </a>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
    <!--end slick slider-->
    <!--slick slider cours-->
    <div class="slider">
      <div class="container">
        <hr class="hr-electro">
        <div class="row center">
          @foreach($cour as $cours)
          @if($cours->element_id == 10)
          <div class="col-3" style="padding-left: 15px;">
            <a href="{{ $cours->file_path}}" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
              <div class="cour" id="electro">
                <img src="{{ asset('img/electro.jpg')}}" alt="electro" class="img-fluid">
                <h5>{{$cours->titre}}</h5>
              </div>
            </a>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
    <!--end slick slider-->
    <!--slick slider cours-->
    <div class="slider">
      <div class="container">
        <hr class="hr-html">
        <div class="row center">
          @foreach($cour as $cours)
          @if($cours->element_id == 4)
          <div class="col-3" style="padding-left: 15px;">
            <a href="{{ $cours->file_path}}" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
              <div class="cour" id="html">
                <img src="{{ asset('img/html.png')}}" alt="html" class="img-fluid">
                <h5>{{$cours->titre}}</h5>
              </div>
            </a>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
    <!--end slick slider-->
    <!--slick slider cours-->
    <div class="slider">
      <div class="container">
        <hr class="hr-java">
        <div class="row center">
          @foreach($cour as $cours)
          @if($cours->element_id == 1)
          <div class="col-3" style="padding-left: 15px;">
            <a href="{{ $cours->file_path}}" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
              <div class="cour" id="java">
                <img src="{{ asset('img/java.jpg')}}" alt="java" class="img-fluid">
                <h5>{{$cours->titre}}</h5>
              </div>
            </a>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
    <!--end slick slider-->
    <!--slick slider cours-->
    <div class="slider">
      <div class="container">
        <hr class="hr-js">
        <div class="row center">
          @foreach($cour as $cours)
          @if($cours->element_id == 5)
          <div class="col-3" style="padding-left: 15px;">
            <a href="{{ $cours->file_path}}" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
              <div class="cour" id="js">
                <img src="{{ asset('img/js.webp')}}" alt="js" class="img-fluid">
                <h5>{{$cours->titre}}</h5>
              </div>
            </a>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
    <!--end slick slider-->
    <!--slick slider cours-->
    <div class="slider">
      <div class="container">
        <hr class="hr-math">
        <div class="row center">
          @foreach($cour as $cours)
          @if($cours->element_id == 11)
          <div class="col-3" style="padding-left: 15px;">
            <a href="{{ $cours->file_path}}" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
              <div class="cour" id="math">
                <img src="{{ asset('img/math.jpg')}}" alt="math" class="img-fluid">
                <h5>{{$cours->titre}}</h5>
              </div>
            </a>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
    <!--end slick slider-->
    <!--slick slider cours-->
    <div class="slider">
      <div class="container">
        <hr class="hr-oracle">
        <div class="row center">
          @foreach($cour as $cours)
          @if($cours->element_id == 12)
          <div class="col-3" style="padding-left: 15px;">
            <a href="{{ $cours->file_path}}" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
              <div class="cour" id="oracle">
                <img src="{{ asset('img/oracle.jpg')}}" alt="oracle" class="img-fluid">
                <h5>{{$cours->titre}}</h5>
              </div>
            </a>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
    <!--end slick slider-->
    <!--slick slider cours-->
    <div class="slider">
      <div class="container">
        <hr class="hr-php">
        <div class="row center">
          @foreach($cour as $cours)
          @if($cours->element_id == 13)
          <div class="col-3" style="padding-left: 15px;">
            <a href="{{ $cours->file_path}}" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
              <div class="cour" id="php">
                <img src="{{ asset('img/php.jpg')}}" alt="png" class="img-fluid">
                <h5>{{$cours->titre}}</h5>
              </div>
            </a>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
    <!--end slick slider-->
    <!--slick slider cours-->
    <div class="slider">
      <div class="container">
        <hr class="hr-res">
        <div class="row center">
          @foreach($cour as $cours)
          @if($cours->element_id == 14)
          <div class="col-3" style="padding-left: 15px;">
            <a href="{{ $cours->file_path}}" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
              <div class="cour" id="res">
                <img src="{{ asset('img/res.webp')}}" alt="reseau" class="img-fluid">
                <h5>{{$cours->titre}}</h5>
              </div>
            </a>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
    <!--end slick slider-->
    <!--slick slider cours-->
    <div class="slider">
      <div class="container">
        <hr class="hr-std">
        <div class="row center">
          @foreach($cour as $cours)
          @if($cours->element_id == 15)
          <div class="col-3" style="padding-left: 15px;">
            <a href="{{ $cours->file_path}}" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
              <div class="cour" id="std">
                <img src="{{ asset('img/std.png')}}" alt="structure de donnee" class="img-fluid">
                <h5>{{$cours->titre}}</h5>
              </div>
            </a>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
    <!--end slick slider-->
    <!--slick slider cours-->
    <div class="slider">
      <div class="container">
        <hr class="hr-exp">
        <div class="row center">
          @foreach($cour as $cours)
          @if($cours->element_id == 16)
          <div class="col-3" style="padding-left: 15px;">
            <a href="{{ $cours->file_path}}" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
              <div class="cour" id="se">
                <img src="{{ asset('img/exp.webp')}}" alt="systeme exploiatation" class="img-fluid">
                <h5>{{$cours->titre}}</h5>
              </div>
            </a>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
    <!--end slick slider-->
    <!--slick slider cours-->
    <div class="slider">
      <div class="container">
        <hr class="hr-si">
        <div class="row center">
          @foreach($cour as $cours)
          @if($cours->element_id == 17)
          <div class="col-3" style="padding-left: 15px;">
            <a href="{{ $cours->file_path}}" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
              <div class="cour" id="si">
                <img src="{{ asset('img/si.png')}}" alt="si" class="img-fluid">
                <h5>{{$cours->titre}}</h5>
              </div>
            </a>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
    <!--end slick slider-->
    <!--slick slider cours-->
    <div class="slider">
      <div class="container">
        <hr class="hr-uml">
        <div class="row center">
          @foreach($cour as $cours)
          @if($cours->element_id == 18)
          <div class="col-3" style="padding-left: 15px;">
            <a href="{{ $cours->file_path}}" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
              <div class="cour" id="uml">
                <img src="{{ asset('img/uml.png')}}" alt="UML" class="img-fluid">
                <h5>{{$cours->titre}}</h5>
              </div>
            </a>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
    <!--end slick slider-->
  </main>
  <!-- FOOTER -->
  <footer class="text-dark" id="foot">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 text-center">
          <h2 class="footer-heading logo">QCM_Génie</h2>
          <p class="menu">
            <a href="{{ route('etudiant') }}">Accueil</a>
            <a href="{{ route('etudiant') }}#cour">Cour</a>
            <a href="{{ route('etd') }}">QCM</a>
          </p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-12 text-center">
          <p class="copyright">
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> ESTBM | Chayma ELMAKKAOUI - Hada OUHMAD
          </p>
        </div>
      </div>
    </div>
  </footer>
  <script>
    $(document).ready(function() {
      $('.center').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: false,
        speed: 800,
        autoplaySpeed: 2000,
        prevArrow: '<i class="bx bxs-chevron-left-circle    left_arrow"></i>',
        nextArrow: '<i class="bx bxs-chevron-right-circle text-end   right_arrow"></i>',
        responsive: [{
            breakpoint: 769, // tablet breakpoint
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3
            }
          },
          {
            breakpoint: 600, // mobile breakpoint
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          }
        ]

      });
    });
  </script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="{{asset('js/app.js')}}"></script>
</body>

</html>