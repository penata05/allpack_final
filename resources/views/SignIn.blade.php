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
    <div class = "container">
        <a href="welcome" class="navbar-brand">
            <img src="assets/logo.png" class ="logo" alt="Logo">

        </a>
        <ul class="navbar-nav navbar-nav-custom" id="ul_nav">
            <li class="nav-item dropdown" id="hover-dropdown"> <!-- Add id attribute -->
                <a class="nav-link text-light dropdown-toggle" href="interior.html" id="navbarDropdown"
                    type="button" aria-haspopup="true" aria-expanded="false">
                    Интериорен дизайн
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Интериорни Решения</a>
                    <a class="dropdown-item" href="#">Вдъхновения</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="packs">Опаковки</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="contacts.html">Контакти</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="contacts.html"><i class="fa-solid fa-cart-shopping"></i></a>
            </li>
        </ul>
    </div>
</nav>
<video autoplay loop muted class="video_bg" src="assets/dmo.mp4"></video>
<body>
    
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>
</html>