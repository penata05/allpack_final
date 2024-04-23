<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    @vite(['resources/sass/app.scss','resources/js/app.js', 'resources/js/script.js', 'resources/css/styles.css', 'resources/assets/'])
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
<video autoplay loop muted class="video_bg" src="assets/dmo.mp4"></video>
<body>
    
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>
</html>