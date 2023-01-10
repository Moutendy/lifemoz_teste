<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calendrer</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="../assets/img/imoz-logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
</head>

<body>

    <!-- Navbar Dark -->
<nav
class="navbar navbar-expand-lg navbar-dark bg-gradient-dark z-index-3 py-3">
<div class="container">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navigation">
    <ul class="navbar-nav navbar-nav-hover mx-auto">


      <li class="nav-item px-3">

        <a href="{{ route('updateprofil', auth()->user()->id ) }}" class="btn bg-gradient-success btn-block mb-3">update profil</a>
      </li>

      <li class="nav-item px-3">

        <a href="{{ route('tablebord') }}" class="btn bg-gradient-success btn-block mb-3">table de bord</a>
      </li>

      <li class="nav-item px-3">



      </li>
    </ul>

    <ul class="navbar-nav ms-auto">

      <a href="{{ route('logout') }}" class="btn bg-gradient-primary mb-0">deconnexion</a>
    </ul>
  </div>
</div>
</nav>
<!-- End Navbar -->


<!-- Navbar Light -->

<!-- End Navbar -->


</div>


    <div class="container mt-5" style="max-width: 1000px">
        <div>Nombre d'evenement:   <span id="event"></span></div>
        <h2 class="h2 text-center mb-5 border-bottom pb-3">Calendrier</h2>
        <div id='full_calendar_events'>
        </div>
    </div>{{-- Scripts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="./../js/calendrier.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
