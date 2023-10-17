<!DOCTYPE html>
<html>

<head>
    <title>MediFiches @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Navbar (sit on top) -->
    <div class="pbteam-top">
        <div class="pbteam-bar pbteam-white pbteam-wide pbteam-padding pbteam-card">
            <a href="/" class="pbteam-bar-item pbteam-button"><b>Medi</b>Fiches</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="pbteam-right pbteam-hide-small">
                <a href="/fiche-medicale" class="pbteam-bar-item pbteam-button">Fiche Médicale</a>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="pbteam-display-container pbteam-content pbteam-wide" style="max-width:1500px;" id="home">
        <img class="pbteam-image" src="{{ asset('images/medi-banner.jpg') }}" alt="Banner" width="1500" height="800">
        <div class="pbteam-display-middle pbteam-margin-top pbteam-center">
            <h1 class="pbteam-xxlarge pbteam-text-white"><span class="pbteam-padding pbteam-black pbteam-opacity-min"><b>Medi</b></span> <span class="pbteam-hide-small pbteam-text-light-grey">Fiches</span></h1>
        </div>
    </header>

    <!-- Page content -->
    <div class="pbteam-content pbteam-padding" style="max-width:1564px">
        @yield('content') <!-- this is where we include the content -->
        <!-- End page content -->
    </div>

    <!-- Footer -->
    <footer class="pbteam-center pbteam-black pbteam-padding-16">
        <p>Made by PBTeam</p>
    </footer>
</body>

</html>