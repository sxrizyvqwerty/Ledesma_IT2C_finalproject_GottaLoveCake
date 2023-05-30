<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CakeZone - Cake Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    $xml= simplexml_load_file('Ledesma-Manahan_IT2C_Cake Shop/readmore.xml');
    ?>
    <!-- Topbar Start -->
    <div class="container-fluid px-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center bg-secondary py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-envelope fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1"><?php echo $xml->navbar->emailus; ?></h6>
                        <span><?php echo $xml->navbar->email; ?></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center bg-primary border-inner py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <a href="index.php" class="navbar-brand">
                        <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-dark me-3"></i><?php echo $xml->navbar->title; ?></h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-center bg-secondary py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1"><?php echo $xml->navbar->contactus; ?></h6>
                        <span><?php echo $xml->navbar->callus; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.php" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-primary me-3"></i>CakeZone</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="index.php" class="nav-item nav-link active"><?php echo $xml->navbar->home; ?></a>
                <a href="about.php" class="nav-item nav-link"><?php echo $xml->navbar->aboutus; ?></a>
                <a href="menu.php" class="nav-item nav-link"><?php echo $xml->navbar->menu; ?></a>
                <a href="team.php" class="nav-item nav-link"><?php echo $xml->navbar->masterchefs; ?></a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $xml->navbar->pages; ?></a>
                    <div class="dropdown-menu m-0">
                        <a href="service.php" class="dropdown-item"><?php echo $xml->navbar->ourservice; ?></a>
                        <a href="testimonial.php" class="dropdown-item"><?php echo $xml->navbar->testimonial; ?></a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link"><?php echo $xml->navbar->contctus; ?></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="font-secondary text-primary mb-4"><?php echo $xml->navbar->delight; ?></h1>
                    <h1 class="display-1 text-uppercase text-white mb-4"><?php echo $xml->navbar->gottalovecake; ?></h1>
                    <h1 class="text-uppercase text-white"><?php echo $xml->navbar->bestcake; ?></h1>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="" class="btn btn-primary border-inner py-3 px-5 me-5"><?php echo $xml->navbar->button1; ?></a>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ms-4 d-none d-sm-block"><?php echo $xml->navbar->button2; ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $xml->navbar->youtube; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary"><?php echo $xml->navbar->aboutus; ?></h2>
                <h1 class="display-4 text-uppercase"><?php echo $xml->navbar->greetings; ?></h1>
            </div>
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <?php echo '<img class="position-absolute w-100 h-100" src="img/about3.jpg" style="object-fit: cover;">'; ?>
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <h4 class="mb-4"><?php echo $xml->navbar->content; ?></h4>
                    <p class="mb-5"><?php echo $xml->navbar->content1; ?></p>
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4" style="width: 90px; height: 90px;">
                                <i class="fa fa-heartbeat fa-2x text-white"></i>
                            </div>
                            <h4 class="text-uppercase"><?php echo $xml->navbar->healthy; ?></h4>
                            <p class="mb-0"><?php echo $xml->navbar->content2; ?></p>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4" style="width: 90px; height: 90px;">
                                <i class="fa fa-award fa-2x text-white"></i>
                            </div>
                            <h4 class="text-uppercase"><?php echo $xml->navbar->award; ?></h4>
                            <p class="mb-0"><?php echo $xml->navbar->content3; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid bg-img py-5 mb-5">
        <div class="container py-5">
            <div class="row gx-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary border-inner d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-star text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase"><?php echo $xml->navbar->experience; ?></h6>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up"><?php echo $xml->navbar->numbers; ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary border-inner d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase"><?php echo $xml->navbar->cakespecialist; ?></h6>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up"><?php echo $xml->navbar->numbers1; ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary border-inner d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase"><?php echo $xml->navbar->complete; ?></h6>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up"><?php echo $xml->navbar->numbers2; ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary border-inner d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-mug-hot text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase"><?php echo $xml->navbar->clients; ?></h6>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up"><?php echo $xml->navbar->numbers3; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Products Start -->
    <div class="container-fluid about py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary"><?php echo $xml->navbar->menu1; ?></h2>
                <h1 class="display-4 text-uppercase"><?php echo $xml->navbar->explore; ?></h1>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase border-inner p-4 mb-5">
                    <li class="nav-item">
                        <a class="nav-link text-white active" data-bs-toggle="pill" href="#tab-1"><?php echo $xml->navbar->button3; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" data-bs-toggle="pill" href="#tab-2"><?php echo $xml->navbar->button4; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" data-bs-toggle="pill" href="#tab-3"><?php echo $xml->navbar->button5; ?></a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <?php echo '<img class="img-fluid" src="img/funfetti.jpg" alt="" style="width: 150px; height: 85px;">'; ?>
                                        <h4 class="bg-dark text-primary p-2 m-0"><?php echo $xml->navbar->price; ?></h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase"><?php echo $xml->navbar->funfetti; ?></h5>
                                        <span><?php echo $xml->navbar->content4; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <?php echo '<img class="img-fluid" src="img/ok.jpg" alt="" style="width: 150px; height: 85px;">'; ?>
                                        <h4 class="bg-dark text-primary p-2 m-0"><?php echo $xml->navbar->price1; ?></h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase"><?php echo $xml->navbar->mocha; ?></h5>
                                        <span><?php echo $xml->navbar->content5; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <?php echo '<img class="img-fluid" src="img/nut.jpg" alt="" style="width: 150px; height: 85px;">'; ?>
                                        <h4 class="bg-dark text-primary p-2 m-0"><?php echo $xml->navbar->price2; ?></h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase"><?php echo $xml->navbar->nutella; ?></h5>
                                        <span><?php echo $xml->navbar->content6; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <?php echo '<img class="img-fluid" src="img/ube.jpg" alt="" style="width: 150px; height: 85px;">'; ?>
                                        <h4 class="bg-dark text-primary p-2 m-0"><?php echo $xml->navbar->price3; ?></h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase"><?php echo $xml->navbar->ube; ?></h5>
                                        <span><?php echo $xml->navbar->content7; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <?php echo '<img class="img-fluid" src="img/flower.jpg" alt="" style="width: 150px; height: 85px;">'; ?>
                                        <h4 class="bg-dark text-primary p-2 m-0"><?php echo $xml->navbar->price4; ?></h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase"><?php echo $xml->navbar->floral; ?></h5>
                                        <span><?php echo $xml->navbar->content8; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <?php echo '<img class="img-fluid" src="img/sup.jpg" alt="" style="width: 150px; height: 85px;">'; ?>
                                        <h4 class="bg-dark text-primary p-2 m-0"><?php echo $xml->navbar->price5; ?></h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase"><?php echo $xml->navbar->suprise; ?></h5>
                                        <span><?php echo $xml->navbar->content9; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <?php echo '<img class="img-fluid" src="img/boho.jpg" alt="" style="width: 150px; height: 85px;">'; ?>
                                        <h4 class="bg-dark text-primary p-2 m-0"><?php echo $xml->navbar->price6; ?></h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase"><?php echo $xml->navbar->boho; ?></h5>
                                        <span><?php echo $xml->navbar->content10; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <?php echo '<img class="img-fluid" src="img/two.jpg" alt="" style="width: 150px; height: 85px;">'; ?>
                                        <h4 class="bg-dark text-primary p-2 m-0"><?php echo $xml->navbar->price7; ?></h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase"><?php echo $xml->navbar->mini; ?></h5>
                                        <span><?php echo $xml->navbar->content11; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <?php echo '<img class="img-fluid" src="img/but.jpg" alt="" style="width: 150px; height: 85px;">'; ?>
                                        <h4 class="bg-dark text-primary p-2 m-0"><?php echo $xml->navbar->price8; ?></h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase"><?php echo $xml->navbar->buttrcrm; ?></h5>
                                        <span><?php echo $xml->navbar->content12; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <?php echo '<img class="img-fluid" src="img/rus.jpg" alt="" style="width: 150px; height: 85px;">'; ?>
                                        <h4 class="bg-dark text-primary p-2 m-0"><?php echo $xml->navbar->price9; ?></h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase"><?php echo $xml->navbar->rustic; ?></h5>
                                        <span><?php echo $xml->navbar->content13; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <?php echo '<img class="img-fluid" src="img/lop.jpg" alt="" style="width: 150px; height: 85px;">'; ?>
                                        <h4 class="bg-dark text-primary p-2 m-0"><?php echo $xml->navbar->price10; ?></h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase"><?php echo $xml->navbar->tier; ?></h5>
                                        <span><?php echo $xml->navbar->content14; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <?php echo '<img class="img-fluid" src="img/suc.jpg" alt="" style="width: 150px; height: 85px;">'; ?>
                                        <h4 class="bg-dark text-primary p-2 m-0"><?php echo $xml->navbar->price11; ?></h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase"><?php echo $xml->navbar->succulent; ?></h5>
                                        <span><?php echo $xml->navbar->content15; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <?php echo '<img class="img-fluid" src="img/n.jpg" alt="" style="width: 150px; height: 85px;">'; ?>
                                        <h4 class="bg-dark text-primary p-2 m-0"><?php echo $xml->navbar->price12; ?></h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase"><?php echo $xml->navbar->alp; ?></h5>
                                        <span><?php echo $xml->navbar->content16; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <?php echo '<img class="img-fluid" src="img/hb.jpg" alt="" style="width: 150px; height: 85px;">'; ?>
                                        <h4 class="bg-dark text-primary p-2 m-0"><?php echo $xml->navbar->price12; ?></h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase"><?php echo $xml->navbar->miniml; ?></h5>
                                        <span><?php echo $xml->navbar->content17; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <?php echo '<img class="img-fluid" src="img/sol.jpg" alt="" style="width: 150px; height: 85px;">'; ?>
                                        <h4 class="bg-dark text-primary p-2 m-0"><?php echo $xml->navbar->price13; ?></h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase"><?php echo $xml->navbar->customcake; ?></h5>
                                        <span><?php echo $xml->navbar->content18; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <?php echo '<img class="img-fluid" src="img/pal.jpg" alt="" style="width: 150px; height: 85px;">'; ?>
                                        <h4 class="bg-dark text-primary p-2 m-0"><?php echo $xml->navbar->price14; ?></h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase"><?php echo $xml->navbar->pallete; ?></h5>
                                        <span><?php echo $xml->navbar->content19; ?>/span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <?php echo '<img class="img-fluid" src="img/flo.jpg" alt="" style="width: 150px; height: 85px;">'; ?>
                                        <h4 class="bg-dark text-primary p-2 m-0"><?php echo $xml->navbar->price15; ?></h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase"><?php echo $xml->navbar->floralcake; ?></h5>
                                        <span><?php echo $xml->navbar->content20; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <?php echo '<img class="img-fluid" src="img/bento.jpg" alt="" style="width: 150px; height: 85px;">'; ?>
                                        <h4 class="bg-dark text-primary p-2 m-0"><?php echo $xml->navbar->price16; ?></h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase"><?php echo $xml->navbar->bento; ?></h5>
                                        <span><?php echo $xml->navbar->content21; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Service Start -->
    <div class="container-fluid service position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3"><?php echo $xml->navbar->bday; ?></h4>
                        <p><?php echo $xml->navbar->descripbdaycake; ?></p>
                        <a class="text-uppercase text-dark" href="bday.php"><?php echo $xml->navbar->button9; ?> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3"><?php echo $xml->navbar->wed; ?></h4>
                        <p><?php echo $xml->navbar->descripweddingcake; ?></p>
                        <a class="text-uppercase text-dark" href="wedding.php"><?php echo $xml->navbar->button9; ?> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3"><?php echo $xml->navbar->custo; ?></h4>
                        <p><?php echo $xml->navbar->descripcustomcake; ?></p>
                        <a class="text-uppercase text-dark" href="custom.php"><?php echo $xml->navbar->button9; ?> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 text-center">
                    <h1 class="text-uppercase text-light mb-4"><?php echo $xml->navbar->discount; ?></h1>
                    <a href="" class="btn btn-primary border-inner py-3 px-5"><?php echo $xml->navbar->button6; ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Start -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary"><?php echo $xml->navbar->team; ?></h2>
                <h1 class="display-4 text-uppercase"><?php echo $xml->navbar->chefs; ?></h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <?php echo '<img class="img-fluid w-100" src="img/iza.jpg" alt="">'; ?>
                            <div class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-dark border-inner text-center p-4">
                            <h4 class="text-uppercase text-primary"><?php echo $xml->navbar->namechef1; ?></h4>
                            <p class="text-white m-0"><?php echo $xml->navbar->designation; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/daniel.jpg" alt="">
                            <div class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-dark border-inner text-center p-4">
                            <h4 class="text-uppercase text-primary"><?php echo $xml->navbar->namechef2; ?></h4>
                            <p class="text-white m-0"><?php echo $xml->navbar->designation2; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <?php echo '<img class="img-fluid w-100" src="img/darwin.jpg" alt="">'; ?>
                            <div class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-dark border-inner text-center p-4">
                            <h4 class="text-uppercase text-primary"><?php echo $xml->navbar->namechef3; ?></h4>
                            <p class="text-white m-0"><?php echo $xml->navbar->designation3; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title position-relative text-center mx-auto mb-4 pb-3" style="max-width: 600px;">
                        <h2 class="text-primary font-secondary"><?php echo $xml->navbar->special; ?></h2>
                        <h1 class="display-4 text-uppercase text-white"><?php echo $xml->navbar->super; ?></h1>
                    </div>
                    <p class="text-white mb-4"><?php echo $xml->navbar->description; ?></p>
                    <a href="readmore.php" class="btn btn-primary border-inner py-3 px-5 me-3"><?php echo $xml->navbar->button9; ?></a>
                    <a href="menu.php" class="btn btn-dark border-inner py-3 px-5"><?php echo $xml->navbar->button10; ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary"><?php echo $xml->navbar->testimonial; ?></h2>
                <h1 class="display-4 text-uppercase"><?php echo $xml->navbar->testiclients; ?></h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <?php echo '<img class="img-fluid flex-shrink-0" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;">'; ?>
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1"><?php echo $xml->navbar->clientname; ?></h4>
                            <span><?php echo $xml->navbar->profession; ?></span>
                        </div>
                    </div>
                    <p class="mb-0"><?php echo $xml->navbar->comments; ?>
                    </p>
                </div>
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <?php echo '<img class="img-fluid flex-shrink-0" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;">'; ?>
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1"><?php echo $xml->navbar->clientname1; ?></h4>
                            <span><?php echo $xml->navbar->profession1; ?></span>
                        </div>
                    </div>
                    <p class="mb-0"><?php echo $xml->navbar->comments1; ?>
                    </p>
                </div>
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <?php echo '<img class="img-fluid flex-shrink-0" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;">'; ?>
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1"><?php echo $xml->navbar->clientname2; ?></h4>
                            <span><?php echo $xml->navbar->profession2; ?></span>
                        </div>
                    </div>
                    <p class="mb-0"><?php echo $xml->navbar->comments2; ?>
                    </p>
                </div>
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <?php echo '<img class="img-fluid flex-shrink-0" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;">'; ?>
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1"><?php echo $xml->navbar->clientname3; ?></h4>
                            <span><?php echo $xml->navbar->profession3; ?></span>
                        </div>
                    </div>
                    <p class="mb-0"><?php echo $xml->navbar->comments3; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    

    <!-- Footer Start -->
    <div class="container-fluid bg-img text-secondary" style="margin-top: 90px">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 mb-lg-n5">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary border-inner p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-dark me-3"></i><?php echo $xml->navbar->cakezone; ?></h1>
                        </a>
                        <p class="mt-3"><?php echo $xml->navbar->designation4; ?></p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4"><?php echo $xml->navbar->getintouch; ?></h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0"><?php echo $xml->navbar->address; ?></p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0"><?php echo $xml->navbar->email; ?></p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0"><?php echo $xml->navbar->telephonenumber; ?></p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Quick Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $xml->navbar->home; ?></a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $xml->navbar->aboutus; ?></a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $xml->navbar->serv; ?></a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $xml->navbar->meet; ?></a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $xml->navbar->latest; ?></a>
                                <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $xml->navbar->cs; ?></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4"><?php echo $xml->navbar->newsletter; ?></h4>
                            <p><?php echo $xml->navbar->latest; ?></p>
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                    <button class="btn btn-primary">c</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-secondary py-4" style="background: #111111;">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-white border-bottom" href="#"><?php echo $xml->navbar->site; ?></a>.<?php echo $xml->navbar->all; ?><a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-inner py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>