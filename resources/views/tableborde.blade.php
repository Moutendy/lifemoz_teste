<!--
=========================================================
* Material Kit 2 - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/imoz-logo.png">
  <title>
    calendrier
  </title>
  <!--     Fonts and icons     -->
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

<body class="sign-in-basic">
    <p>
        <a href="{{ route('dashboard') }}" class="btn bg-gradient-success btn-block mb-3">table de bord</a>
    </p>
    <div class="container mt-5" style="max-width: 1000px">
<div class="card">
    <div class="table-responsive">
      <table class="table align-items-center mb-0">
        <thead>
          <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date debut</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date fin</th>

            <th class="text-secondary opacity-7"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tablebord as $bord)
          <tr>



            <td>
              <div class="d-flex px-2 py-1">
                <div>
                  <img src="https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                </div>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-xs">{{ $bord->name }}</h6>
                  <p class="text-xs text-secondary mb-0">{{ $bord->email }}</p>
                </div>
              </div>
            </td>

            <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-normal">{{ $bord->event_start }}</span>
              </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-normal">{{ $bord->event_end }}</span>
            </td>
            <td class="align-middle">
                <button type="button" class="btn bg-gradient-success btn-block mb-3">
                   Calendrier
                  </button>
            </td>

          </tr>

          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<script src="./../js/tablebord.js"></script>
</body>

</html>
