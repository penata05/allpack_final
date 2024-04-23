<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/script.js', 'resources/css/styles.css', 'resources/assets/'])

</head>
<nav class="navbar navbar-expand bg-transparent">
    <div class="container-fluid">
        <a href="welcome" class="navbar-brand">
            <img src="assets/logo.png" class ="logo" alt="Logo">

        </a>
        <ul class="navbar-nav navbar-nav-custom" id="ul_nav">

            <li class="nav-item dropdown" id="hover-dropdown">
                <a class="nav-link text-light dropdown-toggle" href="interior" id="navbarDropdown" type="button"
                    aria-haspopup="true" aria-expanded="false">
                    Интериорен дизайн
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li class="nav-item dropend">
                        <a class="nav-link dropdown-toggle" href="#" id="interiorSubMenu" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Интериорни Решения
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="interiorSubMenu">
                            <li><a class="dropdown-item" href="#">Подкатегория 1</a></li>
                            <li><a class="dropdown-item" href="#">Подкатегория 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropend">
                        <a class="nav-link dropdown-toggle" href="#" id="inspirationSubMenu" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Вдъхновения
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="inspirationSubMenu">
                            <li><a class="dropdown-item" href="#">Подкатегория 12121 </a></li>
                            <li><a class="dropdown-item" href="#">Подкатегория 2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="packs">Опаковки</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="contacts">Контакти</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="signin">sign in</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="admin">admin sign in</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="cart"> <img src="assets/shopping-cart.svg" alt=""></a>
            </li>
        </ul>

</nav>
<video autoplay loop muted class="video_bg" src="assets/vid 2.mp4"></video>

<body>
    <div class = "container" id="container_main">
        <h1>ALLPAK OOD</h1>
        <a href="forus">За нас</a>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>

</html>
