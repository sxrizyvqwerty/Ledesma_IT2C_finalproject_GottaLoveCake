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
    $xml= simplexml_load_file('Ledesma-Manahan_IT2C_Cake Shop/pages.xml');
    ?>
    <!-- Topbar Start -->
    <div class="container-fluid px-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center bg-secondary py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-envelope fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1"><?php echo $xml->navbar->emailus1; ?></h6>
                        <span><?php echo $xml->navbar->gmail; ?></span>
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

    <!-- Service Start -->
    <div class="container-fluid service position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3"><?php echo $xml->navbar->bday; ?></h4>
                        <p><?php echo $xml->navbar->descripbdaycake; ?></p>
                        <a class="text-uppercase text-dark" href="birthday.php"><?php echo $xml->navbar->button3; ?> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3"><?php echo $xml->navbar->wed; ?></h4>
                        <p><?php echo $xml->navbar->descripweddingcake; ?></p>
                        <a class="text-uppercase text-dark" href="wedding.php"><?php echo $xml->navbar->button4; ?> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3"><?php echo $xml->navbar->custo; ?></h4>
                        <p><?php echo $xml->navbar->descripcustomcake; ?></p>
                        <a class="text-uppercase text-dark" href="custom.php"><?php echo $xml->navbar->button5; ?> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 text-center">
                    <h1 class="text-uppercase text-light mb-4"><?php echo $xml->navbar->discount; ?></h1>
                    <a href="menu&pricing.php" class="btn btn-primary border-inner py-3 px-5"><?php echo $xml->navbar->button6; ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Start -->

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
                    <a href="" class="btn btn-primary border-inner py-3 px-5 me-3"><?php echo $xml->navbar->button7; ?></a>
                    <a href="" class="btn btn-dark border-inner py-3 px-5"><?php echo $xml->navbar->button8; ?></a>
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
                        <?php echo '<img class="img-fluid flex-shrink-0" src="img/renna.jpg" style="width: 60px; height: 60px;">'; ?>
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
                        <?php echo '<img class="img-fluid flex-shrink-0" src="img/aliza.jpg" style="width: 60px; height: 60px;">'; ?>
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
                        <?php echo '<img class="img-fluid flex-shrink-0" src="img/jez.jpg" style="width: 60px; height: 60px;">'; ?>
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
                        <?php echo '<img class="img-fluid flex-shrink-0" src="img/cindy.jpg" style="width: 60px; height: 60px;">'; ?>
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
                        <a href="index.php" class="navbar-brand">
                            <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-dark me-3"></i><?php echo $xml->navbar->title; ?></h1>
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
                            <h4 class="text-primary text-uppercase mb-4"><?php echo $xml->navbar->quicklinks; ?></h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $xml->navbar->home; ?></a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $xml->navbar->aboutus; ?></a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $xml->navbar->ours; ?></a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $xml->navbar->meet; ?></a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $xml->navbar->latest; ?></a>
                                <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $xml->navbar->contactus; ?></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4"><?php echo $xml->navbar->newsletter; ?></h4>
                            <p><?php echo $xml->navbar->latest; ?></p>
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                    <button class="btn btn-primary"><?php echo $xml->navbar->search; ?></button>
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
            <p class="mb-0">&copy; <a class="text-white border-bottom" href="#"><?php echo $xml->navbar->site; ?></a>.<?php echo $xml->navbar->all; ?><a class="text-white border-bottom" href="https://htmlcodex.com"></a></p>
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