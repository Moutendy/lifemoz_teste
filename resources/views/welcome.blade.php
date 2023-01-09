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
</head>

<body>
    <p>
        <a href="{{ route('logout') }}" class="btn bg-gradient-success btn-block mb-3">deconnexion</a>
    </p>
    <p>
        <a href="{{ route('tablebord') }}" class="btn bg-gradient-success btn-block mb-3">table de bord</a>
    </p>

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
</body>

</html>
