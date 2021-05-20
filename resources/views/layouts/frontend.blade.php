<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Father Matthias </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Law Firm Website Template" name="keywords">
        <meta content="Law Firm Website Template" name="description">
        <link rel="stylesheet" type="text/css" href="frontend/css/lightbox.min.css">

        <!-- Favicon -->
        <link href="frontend/img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="frontend/lib/animate/animate.min.css" rel="stylesheet">
        <link href="frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="frontend/css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <h1 >Father Matthias</h1>
                                    <!-- <img src="frontend/img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="top-bar-right">
                                <div class="text">
                                    <h2 id="follow"> Follow pages </h2>
                            
                                </div>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="/" class="nav-item nav-link {{ Request::segment(1) === ' ' ? 'active' : '' }}">Home</a>
                                <a href="/about" class="nav-item nav-link {{Request::segment(1) === 'about' ? 'active' : '' }}">About</a>
                                <a href="/lectuers" class="nav-item nav-link {{ Request::segment(1) === 'lectuers' ? 'active' : '' }}">lectures & speeches</a>
                                <a href="/gallery" class="nav-item nav-link {{ Request::segment(1) === 'gallery' ? 'active' : '' }}">Gallery</a>
                                <a href="/books" class="nav-item nav-link {{ Request::segment(1) === 'books' ? 'active' : '' }}">Book Store</a>
                                <a href="/witness" class="nav-item nav-link {{ Request::segment(1) === 'witness' ? 'active' : '' }}">Witness</a>
                                <a href="/masses" class="nav-item nav-link {{ Request::segment(1) === 'masses' ? 'active' : '' }}">Masses</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Language</a>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">English</a>
                                        <a href="../arabic/index.html" class="dropdown-item">عربي </a>
                                    </div>
                                </div>
                                <a href="/contact" class="nav-item nav-link {{ Request::segment(1) === 'contact' ? 'active' : '' }}">Contact</a>
                            </div>
                            <div class="ml-auto">
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            
            <!-- Blog End -->
            @yield('content')
            
            <!-- Newsletter Start -->


            <!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-about">
                                <h2>About Father Matthias</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu lectus a leo tristique dictum nec non quam. Suspendisse convallis, tortor eu placerat rhoncus, lorem quam iaculis felis, sed eleifend lacus neque id eros. Integer convallis volutpat neque
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Speeches and lectures</h2>
                                <a href="">faith lectures </a>
                                <a href="">how to pray lectures</a>
                                <a href="">humanity lectures</a>
                                <a href="">love lectures</a>
                                <a href=""> speeches</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="">About Us</a>
                                <a href="">Practices</a>
                                <a href="">Attorneys</a>
                                <a href="">Case Studies</a>
                                <a href="">FAQs</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                                <p><i class="fa fa-phone-alt"></i>0123456789</p>
                                <p><i class="fa fa-envelope"></i>info@example.com</p>
                                <div class="footer-social">
                                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.youtube.com/channel/UC6aTsmu7wRnXYfgEzxKx8fg" target="_blank"><i class="fab fa-youtube"></i></a>
                                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://soundcloud.com/abona-mattias" target="_blank"><i class="fab fa-soundcloud"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="https://htmlcodex.com/law-firm-website-template">FadyNGco.</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Designed By <a href="https://htmlcodex.com">FadyNG</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="frontend/lib/easing/easing.min.js"></script>
        <script src="../../../frontend/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="frontend/lib/isotope/isotope.pkgd.min.js"></script>
        <script src="frontend/js/lightbox-plus-jquery.min.js"></script>

        <!-- Template Javascript -->
        <script src="frontend/js/main.js"></script>
    </body>
</html>
