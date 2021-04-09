<!doctype html>
<html lang="tr">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./favicon.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Ana Sayfa</title>
</head>

<body>
    <header id='header'>
        <?php include 'inc/navbar.php' ?>
    </header>
    <div class="container container-border pb-5">
        <!-- Slide -->
        <div class="container-lg  pb-0 px-0">
            <div id="carouselCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/slideimg/1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Lorem Ipsum(1)</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slideimg/2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Lorem Ipsum(2)</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slideimg/3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Lorem Ipsum(3)</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <hr/>
        <!--        içerik         -->
        <section id='content'>
            <h2 class="text-start">Yeni Makaleler</h2>
            <div class='row justify-content-evenly'>
                <div class='col-4'>
                    <div class=" container content-border">
                        <h3 class="text-center mt-2">Lorem ipsum </h3>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.</p>
                        <div class="text-end mb-2"><a href="#" class="btn btn-secondary">Devamını Oku</a></div>
                    </div>
                </div>
                <div class=' col-4 '>
                    <div class="container content-border">
                    <h3 class="text-center mt-2">Lorem ipsum </h3>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.</p>
                        <div class="text-end mb-2"><a href="#" class="btn btn-secondary">Devamını Oku</a></div>
                    </div>
                </div>
                <div class='  col-4 '>
                    <div class="container content-border">
                    <h3 class="text-center mt-2">Lorem ipsum </h3>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.</p>
                        <div class="text-end mb-2"><a href="#" class="btn btn-secondary">Devamını Oku</a></div>
                    </div>
                </div>
            </div>
            <hr/>
            <!-- Alt -->
            <h2 class="text-start">Popüler Makaleler</h2>
            <div class='row justify-content-evenly'>
                <div class='col-4'>
                    <div class=" container content-border">
                        <h3 class="text-center mt-2">Lorem ipsum </h3>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.</p>
                        <div class="text-end mb-2"><a href="#" class="btn btn-secondary">Devamını Oku</a></div>
                    </div>
                </div>
                <div class=' col-4 '>
                    <div class="container content-border">
                    <h3 class="text-center mt-2">Lorem ipsum </h3>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.</p>
                        <div class="text-end mb-2"><a href="#" class="btn btn-secondary">Devamını Oku</a></div>
                    </div>
                </div>
                <div class='  col-4 '>
                    <div class="container content-border">
                    <h3 class="text-center mt-2">Lorem ipsum </h3>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.</p>
                        <div class="text-end mb-2"><a href="#" class="btn btn-secondary">Devamını Oku</a></div>
                    </div>
                </div>
            </div>

        </section>


    </div>
    
    <?php include 'inc/footer.php'; ?>
    
    <!-- JavaScript -->

    <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>