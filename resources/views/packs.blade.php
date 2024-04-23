<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Allpack.ood</title>
    <link rel="stylesheet" href="styles.css">
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
<video autoplay loop muted class="video_bg" src="assets/vid1.mp4"></video>

<body>
    <!-- Item List Container -->
    <div class="container mt-4">
        <div class="row">
            @foreach ($opakovkis as $opakovka)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <img src="{{ asset('uploads/' . $opakovka->image) }}" class="card-img-top" alt="Item 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $opakovka->name }}</h5>
                            <p class="card-text">{{ $opakovka->description }}</p>
                            <a href="{{ url('add-to-cart/' . $opakovka->id) }}"
                                class="btn btn-primary">{{ $opakovka->price }}лв</a>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Add more item cards as needed -->

        </div>
    </div>


   
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="script.js"></script>
</body>

</html>
