<!DOCTYPE php>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Jardín Mágico</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
  

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/modal.css" rel="stylesheet">
    <link href="assets/css/estilos.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <a href="index.html" class="hero-logo" data-aos="zoom-in"><img src="assets/img/hero-logo.png" alt=""></a>
            <h1 data-aos="zoom-in">Bienvenido a Jardín Mágico</h1>
            <h2 data-aos="fade-up">"Si quieres trabajadores creativos, dales tiempo suficiente para jugar". John Cleese</h2>
            <a data-aos="fade-up" data-aos-delay="200" href="#about" class="btn-get-started scrollto">Comencemos</a>
            <a data-aos="fade-up" data-aos-delay="200" href="#login" class="btn-get-started scrollto">Inicie sesión</a>
        </div>

</section><!-- End Hero -->
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#cuentos">Cuentos</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Vocales</a></li>
                    <li><a class="nav-link scrollto" href="#figuras">Figuras Geométricas</a></li>
                    <li><a class="nav-link scrollto" href="#numeros">Números</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="nav-link scrollto" href="#login">Login</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Quiénes somos</h2> <!-- AQUI ES EL TITULO DE PRIMERA PAGINA-->
                    <p>Jardín mágico</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="image">
                            <img src="assets/img/about.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                            <h3>Voluptatem dignissimos provident quasi corporis</h3>
                            <p class="fst-italic">
                                Jardín mágico es una plataforma online que les permite a los pequeños de la casa familiarizarse con los conceptos basicos de la educacion pre-escolar.
                            </p>
                            <ul>
                                <li><i class="bx bx-check-double"></i> La mejor calidad en contenido.</li>
                                <li><i class="bx bx-check-double"></i> Los mejores profesionales trabajando para nosotros.</li>
                                <li><i class="bx bx-check-double"></i> Sitio web en el cúal puedes personalizar el contenido.</li>
                            </ul>
                            <p>
                                Jardín Mágico sitio web creado el año 2021 con el objetivo de brindar entrentención a los pequeños de la casa, cuenta con un diverso material dentro de la pagina, tanto como material videografico y contenido educacional.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->
        <!-- ======= CUENTOS ======= -->
        <section id="cuentos" class="services">
            <div class="section-title" data-aos="fade-up">
                <h2>Cuentos</h2>
                <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
            </div>   
            <?php 
                $inc = include("connection.php");
                if ($inc) {
                $consulta = "SELECT * FROM videos";
                $resultado = mysqli_query($conn,$consulta);
                if ($resultado) {
                        while ($row = $resultado->fetch_array()) {
                        $id = $row['titulo'];
                        $nombre = $row['link'];
                        $email = $row['descripcion'];
                        ?>
                    <div class="section-title" data-aos="fade-up">
                        <h2><?php echo $id; ?></h2>
                        <h3><?php echo $nombre; ?></h3>
                        <h4><?php echo $email; ?></h4>
                    </div> 
                <?php
                        }
                }
            }
            ?>
        </section><!-- End CUENTOS Section -->
        <!-- ======= VOCALES ======= -->
        <section id="vocales" class="portfolio">
            <div class="section-title" data-aos="fade-up">
                <h2>Vocales</h2>
                <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
            </div>   
                    <?php 
                $inc = include("connection.php");
                if ($inc) {
                $consulta = "SELECT * FROM vocales";
                $resultado = mysqli_query($conn,$consulta);
                if ($resultado) {
                        while ($row = $resultado->fetch_array()) {
                        $id = $row['titulo'];
                        $url = $row['url'];
                        ?>
                    <div class="section-title" data-aos="fade-up">
                        <h2><?php echo $id; ?></h2>
                        <h3><?php echo $url; ?></h3>
                    </div> 
                <?php
                        }
                }
            }
            ?>
        </section><!-- End VOCALES Section -->
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">
                <div class="quote-icon">
                    <i class="bx bxs-quote-right"></i>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                </p>
                                <img src="assets/img/team/saul.webp" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                </p>
                                <img src="assets/img/team/walter.webp" class="testimonial-img" alt="">
                                <h3>Walter White</h3>
                                <h4>Profesor</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                </p>
                                <img src="assets/img/team/hank.webp" class="testimonial-img" alt="">
                                <h3>Hank Schrader</h3>
                                <h4>Director</h4>
                            </div>
                        </div><!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->
        <!-- ======= FIGURAS Section ======= -->
        <section id="figuras" class="figuras section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Figuras</h2>
                    <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
                </div>      
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/figura-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/figura-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/figura-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/figura-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/figura-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/figura-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/figura-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/figura-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/figura-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/figura-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>  
                    </div>
                </div>
        </section><!-- END FIGURAS Section -->
        <!-- ======= NUMEROS Section ======= -->
        <section id="numeros" class="numeros section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Contando del 1 al 10</h2>
                    <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
                </div>


                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/numero-1.jpg" class="img-fluid" alt="" style="height:303px;width:260px;">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/numero-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/numero-2.jpg" class="img-fluid" alt="" style="height:303px;width:260px;">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/numero-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/numero-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/numero-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/numero-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/numero-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/numero-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/numero-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/numero-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/numero-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/numero-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/numero-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/numero-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/numero-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/numero-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/numero-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/numero-10.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/numero-10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End NUMEROS Section -->
        <!-- ======= PREGUNTAS Section ======= -->
        <section id="faq" class="faq">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <ul class="faq-list">

                    <li data-aos="fade-up">
                        <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">¿Cúantos lados tiene un rectangulo?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Si tu respuesta fue 4 estas en lo correcto, ¡¡felicitaciones!!
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">¿Cúantas vocales son?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Las vocales son 5, partiendo con la letra A, E , I , O , U. 
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">¿Cómo se llamaba el amigo del árbol?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                El amigo del árbol se llama....
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">¿Cúantas puntas tiene una estrella? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                La estrella tiene 5 puntas. 
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Cúal es la ultima letra de las vocales? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                La última letra de las vocales es la letra U.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="500">
                        <a data-bs-toggle="collapse" data-bs-target="#faq6" class="collapsed">¿Cúantos números pudiste ver?  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                
                            </p>
                        </div>
                    </li>

                </ul>

            </div>
        </section><!-- End PREGUNTAS Section -->
        <!-- ======= Contact Section ======= -->
        <section id="login" class="login section-bg">
            <div class="container h-100">
                <div class="d-flex justify-content-center h-100">
                    <div class="user_card">
                        <div class="d-flex justify-content-center">
                            <div class="brand_logo_container">
                                <img src="assets/img/logo.png" class="brand_logo" alt="Logo">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center form_container">
                            <form method="post" action="validar.php">
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="username" id="username" class="form-control input_user" value="" placeholder="username">
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" name="password" id="password" class="form-control input_pass" value="" placeholder="password">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Remember me</label>
                                    </div>
                                </div>
                                    <div class="d-flex justify-content-center mt-3 login_container">
                             <button type="submit" name="button" class="btn login_btn">Login</button>
                           </div>
                            </form>
                        </div>
                
                        <div class="mt-4">
                            <div class="d-flex justify-content-center links">
                                <a href="#">Olvido su contraseña?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->                                  
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <a href="#header" class="scrollto footer-logo"><img src="assets/img/hero-logo.png" alt=""></a>
                        <h3>Jardín Mágico</h3>
                        <p>"Todas las personas mayores fueron niños, aunque pocas de ellas lo recuerdan"  <br/>
                            (Antoine de Saint-Exupéry)
                        </p>
                    </div>
                </div>

                <div class="row footer-newsletter justify-content-center">
                    <div class="col-lg-6">
                        <form action="" method="post">
                            <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>

                <div class="social-links">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>

            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Jardín mágico</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/knight-free-bootstrap-theme/ -->
                Designed by <a>Joaquin Henriquez</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/login.js"></script>


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>
</html>

