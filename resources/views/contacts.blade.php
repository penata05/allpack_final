<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us</title>
</head>

<body>

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
                    <a class="nav-link text-light" href="contacts.html">Контакти</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="contacts.html"> <img src="assets/shopping-cart.svg"
                            alt=""></a>
                </li>
            </ul>

    </nav>
    <video autoplay loop muted class="video_bg" src="assets/vid1.mp4"></video>


    <!-- Contact Form -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Contact Us</h2>
                <form method="POST" action="{{ url('messageSent') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <b><label for="name">Name:</label></b>  
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                       <b><label for="email">Email:</label></b> 
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <b><label for="message">Message:</label></b>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
