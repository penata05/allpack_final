<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
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
<video autoplay loop muted class="video_bg" src="assets/vid1.mp4"></video>
<body>
    <div class="container_forus">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non repellendus laboriosam ab minus neque officia consequuntur magni repellat placeat quaerat quasi temporibus harum est, aspernatur numquam, sunt maiores veniam incidunt nihil! Eos quae omnis ratione. Mollitia dolores odit dolorum sint, consequuntur fugit laudantium libero dignissimos quisquam, est voluptas aut illum ipsam debitis cupiditate non repellat numquam! Accusamus suscipit nihil illo quo repellendus inventore in esse, aliquam harum natus similique error iusto ducimus voluptatibus? Harum quo sunt inventore beatae tenetur voluptates ullam, placeat nemo minima consectetur nam dolores quidem facere odio vero voluptatibus officiis optio aliquam deleniti possimus magni fugiat. Nihil quas soluta quaerat repellat iusto at magni minima nostrum debitis. Veniam dicta tempore delectus tempora sint, quis fugit eum est consequuntur doloremque id minus sequi quasi eligendi inventore recusandae cumque atque, at laboriosam ex totam, officiis eius! Quidem facilis quibusdam quisquam mollitia aliquam error nihil sunt similique laborum, minima molestiae voluptate, laboriosam pariatur facere perferendis at cupiditate quis inventore, corporis sit repellendus officia aspernatur! Blanditiis, qui. Sapiente dolorum vitae corporis facilis atque possimus, quo vero deserunt. Ipsa sed enim excepturi, velit dicta, accusantium optio eius ex hic laboriosam voluptas corrupti quas placeat reiciendis numquam facere magnam! Voluptatem asperiores voluptas saepe aut. Eveniet atque voluptatum ex quasi dolore obcaecati, vel non eaque culpa autem beatae libero optio ad vitae perspiciatis iure exercitationem eum, a quis est velit. Ipsam temporibus error enim libero sunt, voluptas nam odit tenetur consequatur eum ipsa. Libero, placeat. Nam corporis iste praesentium fuga id velit quam provident!
    </div>
</body>
<script src="script.js"></script>
</html>