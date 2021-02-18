<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./images/logo2.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta name="description" content="Agencia de Marketing Digital en Argentina. Desarrollamos estrategias y aumentamos tus ventas."/>
    <!-- Facebook metatags -->

    <meta property="og:site_name" content="Trabajo profesional"/>
    <meta property="og:title" content="HAWKS AGENCIA DE MARKETING"/>
    <meta property="og:image" content="https://midominio.com/images/Logo3.png"/>
    <meta property="og:url" content="https://hawksagencia.com"/>
    <meta property="og:description" content="Llevamos tu negocio al siguiente nivel."/>
    <!--google-->  
    
    <meta name="Googlebot" content="all" />
    <meta name="author" content="Omar Dario Melendrez" />
    <!-- ---google-fonts--- -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- ---Font-awesome--- -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- ---Bootstrap--- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- ---animate-scroll-library--- -->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <!-- ---estilos-css--- -->
    <link rel="stylesheet" href="./css/main.css">
    <title>Hawk Agencia | Marketing digital</title>
</head>

<body>
    <div class="hero-container">
        <video src="./images/video-bg.mp4" class="video-bg" autoPlay loop muted></video>
        <!-- -------HEADER------------- -->
        <header class="main-header">
            <div class="container container--flex">
                <div class="main-logo">
                    <a href="./"><img src="./images/logo.png" alt="logo hawks"></a>
                </div>
                <nav class="main-nav">
                    <button class="icon-menu" id="btn-menu"><i class="fas fa-bars"></i></button>
                    <ul class="menu" id="menu">
                        <li class="menu__item"><a href="#services" class="menu__link "><span>SERVICIOS</span></a>
                        </li>
                        <li class="menu__item"><a href="#proyects" class="menu__link"><span>CASOS DE EXITO</span></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- -------END-HEADER------------- -->
    
        <!-- -------HERO------------- -->
        <div class="banner">
            <div class="banner__content">
                <h1 class="banner__title">AGENCIA MARKETING DIGITAL </h1>
                <p class="banner__subtitle">
                    Llevamos tu negocio al siguiente nivel.<br>
                </p>
                <!-- <button class="banner__button">QUIERO VENDER MAS <span class="arrow"><i
                    class="fas fa-arrow-right"></i></span> </button> -->
                </div>
                <video class="video" src="./images/video.mp4" controls poster="./images/poster-01.jpg" ></video>
        </div>
        <!-- -------END-HERO------------- -->

    </div>
    <div class="web-wrapper">

    <!-- -------CONTACT------------- -->
    <section class="contact">
        <div class="contact__container" data-aos="fade-up">
            <h4 class="contact__title">Consulta por nuestros servicios!</h4>
            <p class="contact__subtitle">Completa los siguientes datos, te respondemos lo antes posible.</p>
            <form method="POST" class="form">
                <input type="text" class="form__input  nombre" placeholder="Nombre" name="nombre" id="" required>
                <input type="email" class="form__input  email" placeholder="Email" name="email" id="" required>
                <input type="number" class="form__input  telefono" placeholder="Teléfono" name="telefono" id="" required>
                <input type="text" class="form__input  mensaje" placeholder="Mensaje" rows="2" name="mensaje" id="" required>
                <button type="submit" name="enviar" class="form__button">ENVIAR</button>
            </form>
            <?php
            include("correo.php");
            ?>
        </div>
    </section>
    <!-- -------END-CONTACT------------- -->
    <!-- -------SERVICES------------- -->
    <section class="services" >
        <div class="services__wrapper" id="services">
            <div class="services__container"  data-aos="fade-up">
                <h4 class="services__title">SERVICIOS</h4>
                <img src="https://images.pexels.com/photos/533424/pexels-photo-533424.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                    alt="" class="services__image">
                <div class="services__cards">
                    <div class="services__card" data-aos="fade-right">
                        <img src="https://dk0k1i3js6c49.cloudfront.net/landingpage/images/v4/empretienda_simple.png"
                            alt="" class="services__card--image">
                        <div class="services__card--description">
                            <h4 class="services__card--title">Te hacemos Vender Más</h4>
                            <p class="services__card--body">Estudiamos a fondo todas las herramientas más eficientes para lograr el objetivo. Aumentar tus Ventas.</p>
                        </div>
                    </div>
                    <div class="services__card" data-aos="fade-left">
                        <img src="https://dk0k1i3js6c49.cloudfront.net/landingpage/images/v4/empretienda_full.png"
                            alt="" class="services__card--image">
                        <div class="services__card--description">
                            <h4 class="services__card--title">Gestión y Diseño de Redes Sociales</h4>
                            <p class="services__card--body">Un equipo de Expertos en Redes y Diseño detrás de la identidad de tu marca. Nada puede salir mal.</p>
                        </div>
                    </div>
                    <div class="services__card" data-aos="fade-right">
                        <img src="https://dk0k1i3js6c49.cloudfront.net/landingpage/images/v4/empretienda_simple.png"
                            alt="" class="services__card--image">
                        <div class="services__card--description">
                            <h4 class="services__card--title">Nos encargamos de tu Tienda Online</h4>
                            <p class="services__card--body">Nuestra experiencia y conocimientos enfocados a crear y gestionar un Ecommerce que venda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -------END-SERVICES------------- -->
    <!-- -------PROYECTS------------- -->
    <section id="proyects">
    <h2 class="proyects__title"  data-aos="fade-up">PROYECTOS</h2>
    <main class="proyects" data-aos="fade-up">
        <a href="" target="_blank" class="card">
            <div class="card__content">
                <h2 class="card__title">Cristalmet</h2>
                <p class="card__copy">Es una empresa con mas de 15 años de trayectoria, dedicada a la producción e instalación de aberturas en los mejores edificios
                    Trabajamos en conjunto en gestión de redes, e-commerce y publicidad.
                </p>
            </div>
        </a>
        <a href="https://www.mentesbrillantesacademy.com" target="_blank" class="card">
            <div class="card__content">
                <h2 class="card__title">Mentes brillantes
                </h2>
                <p class="card__copy">Es una empresa dedicada a la educación en temas como educación financiera, empresa y desarrollo personal.
                    Trabajamos en conjunto en creación de contenido, publicidad y gestión de redes y YouTube.</p>
            </div>
        </a>
        <a href="https://www.charlottezapatos.com.ar" target="_blank" class="card">
            <div class="card__content">
                <h2 class="card__title">Charlotte zapatos</h2>
                <p class="card__copy">Es una empresa dedicada a la venta de calzados, tanto en sus negocios locales como a través de internet.
                    Trabajamos en conjunto en administración de e-commerce y gestión publicitaria, para tráfico a web y a negocios locales.</p>
            </div>
        </a>
    </main>
</section>
</div>
    <!-- -------END-PROYECTS------------- -->
    <!-- -------FOOTER------------- -->
    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Servicios</h3>
                        <ul>
                            <li><a href="#services">Te hacemos vender más</a></li>
                            <li><a href="#services">Gestion de contenido de redes</a></li>
                            <li><a href="#services">E-commerce</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Casos de éxito</h3>
                        <ul>
                            <li><a href="#proyects">Cristalmet</a></li>
                            <li><a href="#proyects">Mentes Brillantes</a></li>
                            <li><a href="#proyects">Charlotte Zapatos</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Contacto</h3>
                        <ul>
                            <!-- <li><a href="#">Whatsapp</a></li> -->
                            <li><a href="mailto:hawksagencia@gmail.com">hawksagencia@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social">
                        <!-- <a href="#"><i class="icon ion-social-facebook"></i></a>
                        <a href="#"><i class="icon ion-social-twitter"></i></a> -->
                        <a href="https://www.instagram.com/hawksmkt/" target="_blank"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">Hawks © 2021</p>
                    </div>
                </div>
            </div>
            <p></p>
        </footer>
    </div>
    <!-- -------END-FOOTER------------- -->


    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>