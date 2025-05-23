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
    <link rel="stylesheet" href="{{asset('css/stylehome.css')}}">
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

</head>

<body>
<div class="container-fluid">
 <div class="row">
    <a href="{{ route('login')}}" class="col-md-6 left">
    <div class="logo rounded-circle">
         <img class="mx-auto d-block" src="{{ asset('img/logo.png')}}" alt="">
     </div>
     <h1 class="h1">Espace professeur</h1>
     <div class="img1">
        <img src="{{ asset('img/prof.svg')}}" class="mx-auto d-block"  width="500px" alt="hello">
        </div>
    </a>
    <a href="{{ route('etudiant')}}" class="col-md-6 right">
        <h1 class="h2">Espace étudiant</h1>
        <div class="img">
        <img src="{{ asset('img/etd.svg')}}" class="mx-auto d-block"  width="500px" alt="hello">
        </div>

    </a>
 </div>
</div>
<script src="{{ asset('js/app.js')}}"></script>
</body>

</html>