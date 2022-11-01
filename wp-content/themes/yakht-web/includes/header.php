<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="assets/css/myStyle.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="assets/js/jquery.cycle2.js"></script>
    <script src="assets/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    <script src="assets/js/myJquery.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link rel="icon" type="image/ico" href="assets/pictures/favicon.ico"/>
    <title>Yacht Vision</title>
</head>

<body>
    <!-- header section start  -->

    <header class="<?= $header ?>">
        <div class="row upper-bar">
            <div class="container">
                <div class="col ">
                    <ul class="nav justify-content-md-end justify-content-center align-items-center">
                        <li class="nav-item ">
                            <a href="#" class="nav-link h-100">
                                <img src="https://www.countryflags.io/gb/flat/32.png" class="my-auto">
                                <span class="d-inline-block my-auto">EN</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#signupmodal">
                                <img src="https://www.countryflags.io/fr/flat/32.png">
                                <span class="d-inline-block">FR</span>
                            </a>
                        </li>
                        <li class="nav-item d-none d-sm-block">
                            <a href="contact.php" class="nav-link">
                                Contact us
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link social-icon">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <nav>
            <div class="row">
                <div class="container">
                    <div class="col p-0">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.php"><img src="assets/pictures/logo.png" class="img-fluid logo" alt="not found"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.php">About</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            brands
                                        </a>
                                        <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="absolute.php">Absolute</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="used.php">used boats</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            products
                                        </a>
                                        <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="products.php">products-1</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="services.php">services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="news.php">news</a>
                                    </li>
                                    <li class="nav-item d-block d-sm-none">
                                        <a href="contact.php" class="nav-link">
                                            Contact us
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="#"><i class="fa fa-search"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- header section end  -->