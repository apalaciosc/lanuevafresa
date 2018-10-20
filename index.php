<?php
include('conexion.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>La nueva fresa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Font Icons CSS -->
    <link href="assets/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Include all css plugins (below), or include individual files as needed -->
    <link href="assets/css/flickity.min.css" rel="stylesheet" type="text/css">
    <!-- Theme mis estilos-->
    <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/styles01.css" rel="stylesheet" type="text/css">
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/animations.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bigvideo.css" rel="stylesheet" type="text/css">
    <link href="assets/css/YouTubePopUp.css" rel="stylesheet" type="text/css">
    <link href="assets/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/jplayer.css" type="text/css">
    <!-- Color Scheme CSS -->
    <link href="assets/css/theme_color_red.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="img/png" href="assets/img/basic/icono-nuevafresa.ico">
    <link href="assets/css/estilos01.css" rel="stylesheet" type="text/css">
    <link href="alertifyjs/css/alertify.css" rel="stylesheet" type="text/css">
    <script src="alertifyjs/alertify.js"></script>
</head>

<body id="page-top">
    <!-- =========================
                Header Start
        ============================== -->
    <header class="header-dark fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-12 navbar-header d-lg-none">
                    <a class="navbar-brand page-scroll" href="#page-top">
                        <div class="align-items-center d-flex h-100 justify-content-center text-center">
                            <img src="assets/img/basic/nuevafresa_logo.png">
                        </div>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-header"
                        aria-controls="navbar-header" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bars"><i class="fas fa-bars"></i></span>
                    </button>
                </div>


                <div class="col-lg-12 navbar-wrapper">
                    <div id="navigation" class="navbar navbar-expand-lg">
                        <div class="navbar-collapse collapse" id="navbar-header">
                            <ul class="navbar-nav d-lg-flex justify-content-lg-end pr-lg-4">
                                <li class="nav-item">
                                    <a class="nav-link page-scroll" href="#integrantes">INTEGRANTES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link page-scroll" href="#eventos">EVENTOS</a>
                                </li>
                            </ul>

                            <ul class="navbar-nav navbar-nav-brand align-items-lg-center d-none d-lg-block">
                                <li class="nav-item align-items-center d-flex h-100 justify-content-center text-center w-100">
                                    <img src="assets/img/basic/nuevafresa_logo.png">
                                </li>
                            </ul>

                            <ul class="navbar-nav d-lg-flex justify-content-lg-start pl-lg-4">
                                <li class="nav-item">
                                    <a class="nav-link page-scroll" href="#videos">VIDEOS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link page-scroll" href="#contacto">CONTACTO</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- =========================
                            jplayer Start
                ============================== -->
            <p class="jplayer">
                <a href="assets/music/Corazoncito.mp3" title="" data-artist="La nueva fresa">Corazoncito</a><br />
                <a href="assets/music/Ninamujer.mp3" title="" data-artist="La nueva fresa" data-image="media/cover1.jpg">Niña
                    mujer</a><br />
                <a href="assets/music/Tengoquecolgar.mp3" title="" data-artist="La nueva fresa">Tengo que colgar</a><br />
            </p>
            <!-- =========================
                            jplayer end
                ============================== -->
        </div>
        <!-- //.container -->
    </header>
    <!-- =========================
                Header End
        ============================== -->


    <!-- =========================
                Section Start
         ============================== -->
    <section class="portada hero bg-img-cover bg-overlay-black-2 h-100 p-0 w-100" class="parallax-window" data-parallax="scroll"
        data-image-src="assets/img/banner/banner-05.jpg">
        <div class="container h-100">
            <div class="row align-items-center h-100 justify-content-center no-gutters">
                <div class="col-lg-12 text-center">
                    <div class="hero-text animatedParent go">
                        <h2 class="font-alt2 text-white title-extra-large-2 title-md-extra-large-5 title-xl-big animated bounceInDown">La
                            nueva<span class="text-base-color"> </span>fresa</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- //.container -->
    </section>
    <!-- =========================
                Section End
        ============================== -->


    <!-- =========================
            Integrantes Start
        ============================== -->
    <section id="integrantes" class="integrantes section-divider section-divider-y">
        <div class="container">
            <!-- //.row -->
            <div class="row">
                <div class="col-12 text-center">
                    <div class="tab-content" id="tab-family-content">
                        <div class="tab-pane fade active show" id="family-1" role="tabpanel" aria-labelledby="tab-family-1">
                            <div class="row">
                                <div class="col-12 text-left animatedParent">
                                    <span class="d-block text-white integrantes-titulo font-alt letter-spacing-1 mt-2 text-medium animated fadeInDownShort go">INTEGRANTES</span>
                                    <span class="d-block integrantes-subtitulo  font-alt letter-spacing-1 mt-2 text-medium animated fadeInLeftShort go">La
                                        nueva fresa</span>
                                </div>
                            </div>
                            <!-- //.row -->
                            <div class="row mt-5">
                                <div id="carousel-family-1" class="carousel-custom carousel-base-color carousel-in-tab w-100 animatedParent"
                                    data-autoplay="false" data-prev-next-buttons="true" data-page-dots="false"
                                    data-draggable="false" data-wrap-around="true">
                                    <?php
                                $query="SELECT * FROM v_miembros";
                                
                                $consulta = $conexion->query($query);
                                
                                while ($fila=$consulta->fetch(PDO::FETCH_ASSOC))
                                {
                                    echo '
                                        <div class="carousel-cell col-sm-6 col-md-4 col-lg-3 integrantes-content animated fadeInDownShort go">
                                            <img src="assets/img/news/Avatar'.$fila['id'].'.jpg" alt="" class="img-fluid" />
                                            <div class="mt-3 text-center animated integrantes-info">
                                                <h4 class="font-alt2 m-0 text-white text-large">'.$fila['miembro'].'</h4>
                                                <span class="d-block mt-1 text-red text-medium">'.$fila['rol'].'</span>
                                            </div>
                                            <div class="mt-3 text-center integrantes-info__hover animated slideInUp">
                                                <h4 class="font-alt2 m-0 text-white text-large">'.$fila['miembro'].'</h4>
                                            </div>
                                        </div>
                                    
                                    ';
                                }
                                    ?>
                                </div>
                                <!-- //.carousel-custom -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //.row -->
        </div>
        <!-- //.container -->
    </section>
    <!-- =========================
                Integrantes End
        ============================== -->


    <!-- =========================
             Presentaciones Start
        ============================== -->
    <section id="eventos" class="py-big section-divider section-divider-y">
        <div class="container">
            <div class="col-12 text-left presentaciones animatedParent">
                <span class="d-block text-white integrantes-titulo font-alt letter-spacing-1 mt-2 text-medium animated fadeInDownShort go">PRESENTACIONES</span>
                <span class="d-block integrantes-subtitulo  font-alt letter-spacing-1 mt-2 text-medium animated fadeInLeftShort go">
                    Próximos eventos</span>
            </div>
            <div class="row justify-content-center mb-5 table-responsive-md">
                <table class="table table-hover animatedParent table-dark">
                    <thead>
                        <tr class="animated fadeInDownShort delay-500">
                            <th scope="col">DÍA</th>
                            <th scope="col">LUGAR</th>
                            <th scope="col">LOCAL</th>
                            <th scope="col">HORA</th>
                            <th scope="col">TICKETS</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                                $query="SELECT * FROM p_curso";
                                
                                $consulta = $conexion->query($query);
                                
                                while ($fila=$consulta->fetch(PDO::FETCH_ASSOC))
                                {
                                    echo '
                                        <tr class="animated fadeInDownShort delay-500">
                                <th scope="row">'.$fila['dia'].'</th>
                                <td>'.$fila['lugar'].'</td>
                                <td>'.$fila['local'].'</td>
                                <td>'.$fila['hora'].' PM</td>
                                <td><a type="button" class="presentaciones-button">EN LOCAL</a></td>
                                    ';
                                }
                                    ?>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- //.container -->
    </section>
    <!-- =========================
                Presentaciones End
        ============================== -->

    <!-- =========================
                Musicales Start
        ============================== -->
    <section id="videos" class="musicales section-divider section-divider-y bg-img-cover" class="parallax-window"
        data-parallax="scroll" data-image-src="assets/img/BG/fondo-40.jpg">
        <div class="container">
            <!-- //.row -->
            <div class="row">
                <div class="col-12 text-center">
                    <div class="tab-content" id="">
                        <div class="tab-pane fade active show" id="" role="tabpanel" aria-labelledby="">
                            <div class="row">
                                <div class="col-12 text-left animatedParent">
                                    <span class="d-block text-white integrantes-titulo font-alt letter-spacing-1 mt-2 text-medium animated fadeInDownShort go">VIDEOS
                                        MUSICALES</span>
                                    <span class="d-block integrantes-subtitulo  font-alt letter-spacing-1 mt-2 text-medium animated fadeInLeftShort go">NUEVA
                                        FRESA</span>
                                </div>
                                <!-- //.col-12 -->
                            </div>
                            <!-- //.row -->
                            <div class="row mt-5">
                                <div id="carousel-bridesmaid" class="carousel-custom carousel-base-color w-100"
                                    data-autoplay="false" data-prev-next-buttons="true" data-page-dots="false"
                                    data-draggable="false" data-wrap-around="true">
                                    <div class="carousel-cell col-sm-6 col-md-4 col-lg-3">
                                        <div class="animatedParent musicales-content">
                                            <figure class="animated fadeInUpShort go">
                                                <a class="bla-1" href="https://www.youtube.com/watch?v=iBB6c1zfApg"
                                                    data-toggle="modal" data-target="#gal_pop">
                                                    <img src="assets/img/gallery/niña-mujer.jpg" style="width:100%;height:205px; display:block;"
                                                        alt="Niña Mujer" />
                                                </a>
                                                <div class="figure-musical"></div>
                                                <figcaption>
                                                    <h6>Niña Mujer</h6><br>
                                                    <div class="g-ytsubscribe" data-channelid="UCc_tdYXDCmrvJa_Rv_RvqyxWw"
                                                        data-layout="full" data-count="default" data-onytevent="onYtEvent"></div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <!-- //.mt-3 -->
                                    </div>
                                    <!-- //.carousel-cell -->

                                    <div class="carousel-cell col-sm-6 col-md-4 col-lg-3">
                                        <div class="animatedParent musicales-content">
                                            <figure class="animated fadeInUpShort go">
                                                <a class="bla-1" href="https://www.youtube.com/watch?v=X8Sg8_SaYSE"
                                                    data-toggle="modal">
                                                    <img src="assets/img/gallery/niña-mujer.jpg" style="width:100%;height:205px; display:block;"
                                                        alt="Mis sentimientos" />
                                                </a>
                                                <figcaption>
                                                    <h6>Mis sentimientos</h6><br>

                                                    <!-- <script src="../apis.google.com/js/platform.js"></script> -->

                                                    <script type="js">
                                                        function onYtEvent(payload) {
                                                            if (payload.eventType == 'subscribe') {
                                                                // Add code to handle subscribe event.
                                                            } else if (payload.eventType == 'unsubscribe') {
                                                                // Add code to handle unsubscribe event.
                                                            }
                                                            if (window.console) { // for debugging only
                                                                window.console.log('YT event: ', payload);
                                                            }
                                                        }
                                                    </script>

                                                    <div class="g-ytsubscribe" data-channelid="UCc__tdYXDCmrvJa_Rv_RvqyxWw"
                                                        data-layout="full" data-count="default" data-onytevent="onYtEvent"></div>

                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- //.carousel-cell -->

                                    <div class="carousel-cell col-sm-6 col-md-4 col-lg-3">
                                        <div class="animatedParent musicales-content">
                                            <figure class="animated fadeInUpShort go">
                                                <a class="bla-1" href="https://www.youtube.com/watch?v=iBB6c1zfApg"
                                                    data-toggle="modal" data-target="#gal_pop">
                                                    <img src="assets/img/gallery/niña-mujer.jpg" style="width:100%;height:205px; display:block;"
                                                        alt="Niña Mujer" />
                                                </a>
                                                <figcaption>
                                                    <h6>Niña Mujer</h6><br>
                                                    <div class="g-ytsubscribe" data-channelid="UCc_tdYXDCmrvJa_Rv_RvqyxWw"
                                                        data-layout="full" data-count="default" data-onytevent="onYtEvent"></div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- //.carousel-cell -->

                                    <div class="carousel-cell col-sm-6 col-md-4 col-lg-3">
                                        <div class="animatedParent musicales-content">
                                            <figure class="animated fadeInUpShort go">
                                                <a class="bla-1" href="https://www.youtube.com/watch?v=iBB6c1zfApg"
                                                    data-toggle="modal" data-target="#gal_pop">
                                                    <img src="assets/img/gallery/niña-mujer.jpg" style="width:100%;height:205px; display:block;"
                                                        alt="Niña Mujer" />
                                                </a>
                                                <div class="figure-musical"></div>
                                                <figcaption>
                                                    <h6>Niña Mujer</h6><br>
                                                    <div class="g-ytsubscribe" data-channelid="UCc_tdYXDCmrvJa_Rv_RvqyxWw"
                                                        data-layout="full" data-count="default" data-onytevent="onYtEvent"></div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- //.carousel-cell -->

                                    <div class="carousel-cell col-sm-6 col-md-4 col-lg-3">
                                        <div class="animatedParent musicales-content">
                                            <figure class="animated fadeInUpShort go">
                                                <a class="bla-1" href="https://www.youtube.com/watch?v=iBB6c1zfApg"
                                                    data-toggle="modal" data-target="#gal_pop">
                                                    <img src="assets/img/gallery/niña-mujer.jpg" style="width:100%;height:205px; display:block;"
                                                        alt="Niña Mujer" />
                                                </a>
                                                <div class="figure-musical"></div>
                                                <figcaption>
                                                    <h6>Niña Mujer 2</h6><br>
                                                    <div class="g-ytsubscribe" data-channelid="UCc_tdYXDCmrvJa_Rv_RvqyxWw"
                                                        data-layout="full" data-count="default" data-onytevent="onYtEvent"></div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <!-- //.mt-3 -->
                                    </div>
                                    <!-- //.carousel-cell -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //.row -->
        </div>
        <!-- //.container -->
    </section>
    <!-- =========================
                 Musicales End
         ============================== -->


    <!-- =========================
            Redes sociales Start
        ============================== -->
    <section id="redes" class=" section-divider section-divider-y">
        <div class="container">
            <!-- //.row -->
            <div class="row">
                <div class="col-12 text-center">
                    <div class="tab-content" id="">
                        <div class="tab-pane fade active show" id="" role="tabpanel" aria-labelledby="">
                            <div class="row">
                                <div class="col-12 text-left animatedParent">
                                    <span class="d-block text-white integrantes-titulo font-alt letter-spacing-1 mt-2 text-medium animated fadeInDownShort go">REDES
                                        SOCIALES</span>
                                    <span class="d-block integrantes-subtitulo  font-alt letter-spacing-1 mt-2 text-medium animated fadeInLeftShort go">NUEVA
                                        FRESA</span>
                                </div>
                                <!-- //.col-12 -->
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div id="tab1" class="tab-content active" style="padding-top:50px !important; padding-bottom:50px !important;">
                                        <ul class="channels_list row animatedParent " data-sequence="400">
                                            <li class="col-xs-12 col-sm-6 col-lg-4 animated fadeInLeftShort go" data-id="1">
                                                <a href="#" class="link-icons" target="_blank">
                                                    <i class="fas fa-music icon-redes"></i>NUEVA FRESA - ITUNES
                                                </a>
                                            </li>
                                            <li class="col-xs-12 col-sm-6 col-lg-4 animated fadeInLeftShort go" data-id="2">
                                                <a href="#" class="link-icons" target="_blank">
                                                    <i class="fab fa-soundcloud icon-redes"></i>NUEVA FRESA -
                                                    SOUNDCLOUD
                                                </a>
                                            </li>
                                            <li class="col-xs-12 col-sm-6 col-lg-4 animated fadeInLeftShort go" data-id="3">
                                                <a href="https://www.youtube.com/channel/UCc__tdYXDCmrvJa_RvqyxWw"
                                                    class="link-icons" target="_blank">
                                                    <i class="fab fa-youtube icon-redes"></i>NUEVA FRESA - YOUTUBE
                                                </a>
                                            </li>
                                            <li class="col-xs-12 col-sm-6 col-lg-4 animated fadeInLeftShort go" data-id="4">
                                                <a href="#" class="link-icons" target="_blank">
                                                    <i class="fab fa-instagram icon-redes"></i>NUEVA FRESA - INSTAGRAM
                                                </a>
                                            </li>
                                            <li class="col-xs-12 col-sm-6 col-lg-4 animated fadeInLeftShort go" data-id="5">
                                                <a href="#" class="link-icons" target="_blank">
                                                    <i class="fab fa-spotify icon-redes"></i>NUEVA FRESA - SPOTIFY
                                                </a>
                                            </li>
                                            <li class="col-xs-12 col-sm-6 col-lg-4 animated fadeInLeftShort go" data-id="6">
                                                <a href="https://www.facebook.com/NuevaFresa/" class="link-icons"
                                                    target="_blank">
                                                    <i class="fab fa-facebook-f icon-redes"></i>NUEVA FRESA - FACEBOOK
                                                </a>
                                            </li>
                                            <li class="col-xs-12 col-sm-6 col-lg-4 animated fadeInLeftShort go" data-id="7">
                                                <a href="#" class="link-icons" target="_blank">
                                                    <i class="fab fa-twitter icon-redes"></i>NUEVA FRESA - TWITTER
                                                </a>
                                            </li>
                                            <li class="col-xs-12 col-sm-6 col-lg-4 animated fadeInLeftShort go" data-id="8">
                                                <a href="https://web.whatsapp.com/" class="link-icons" target="_blank">
                                                    <i class="fab fa-whatsapp icon-redes"></i>NUEVA FRESA - WHATSAPP
                                                </a>
                                            </li>
                                            <li class="col-xs-12 col-sm-6 col-lg-4 animated fadeInLeftShort go" data-id="9">
                                                <a class="link-icons">
                                                    <i class="fas fa-phone icon-redes"></i>+511 - 951 97 1733
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //.col-12 -->
            </div>
            <!-- //.row -->
        </div>
        <!-- //.container -->
    </section>
    <!-- =========================
               Redes Sociales End
         ============================== -->



    <!-- =========================
                Contact Start
        ============================== -->
    <section id="contacto" class="contacto section-divider section-divider-y">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 col-lg-5">
                    <img src="assets/img/banner/banner-05.png" alt="" class="img-fluid contacto-img">
                </div>
                <!-- //.col-md-8 -->

                <div class="col-lg-7 pl-lg-5 pt-5 pt-lg-0">
                    <form method="post" id="form-rsvp">
                        <div class="row">
                            <div class="col-12 text-center animatedParent">
                                <span class="d-block text-white integrantes-titulo font-alt letter-spacing-1 mt-2 text-medium animated fadeInDownShort go">CONTACTENOS<i
                                        class="icon-soundcloud"></i></span>
                                <h3 class="d-block integrantes-subtitulo font-alt letter-spacing-1 mt-2 text-medium animated fadeInLeftShort go">NUEVA
                                    FRESA</h3>
                                <span class="bg-base-color d-block mt-1 mx-auto sep-line-thick"></span>
                            </div>
                            <!-- //.col-12 -->
                        </div>
                        <!-- //.row -->

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name" class="text-medium contacto-label">Nombre:</label>
                                    <input type="text" name="name" id="name" class="font-alt form-control required"
                                        placeholder="Nombre completo">
                                </div>
                            </div>
                            <!-- //.col-md-6 
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="text-medium contacto-label">Apellidos:</label>
                                        <input type="text" name="last-name" id="last-name" class="font-alt form-control required" placeholder="Apellidos completos">
                                    </div>
                                </div>
                                <!-- //.col-md-6 -->
                        </div>
                        <!-- //.row -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email" class="text-medium contacto-label">Email:</label>
                                    <input type="email" name="email" id="email" class="font-alt form-control required email"
                                        placeholder="Coloque su correo">
                                </div>
                            </div>
                            <!-- //.col-md-6
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono" class="text-medium contacto-label">Telefono:</label>
                                        <input type="number" name="telefono" id="telefono" class="font-alt form-control required telefono" placeholder="Coloque su telefono">
                                    </div>
                                </div>
                                <!-- //.col-md-6 -->
                        </div>
                        <!-- //.row -->

                        <div class="row">
                            <div class="col-12">
                                <label for="message" class="text-medium contacto-label">Escriba su mensaje:</label>
                                <textarea name="message" id="message" class="font-alt form-control" rows="6"
                                    placeholder="Mensaje..."></textarea>
                            </div>
                            <!-- //.col-12 -->

                            <div class="col-12 mt-4 text-center">
                                <button type="submit" id="btn-form-rsvp" class="btn btn-small btn-lg-medium contacto-button">ENVIAR</button>
                            </div>
                            <!-- //.col-12 -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- //.container -->
    </section>
    <!-- =========================
                 Contact End
        ============================== -->


    <!-- =========================
               Footer Start
         ============================== -->
    <footer class="bg-img-cover bg-overlay-black-5 pb-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 border-top py-5 text-center">
                    <p class="font-alt font-w-600 letter-spacing-1 mb-0 text-extra-small text-gray-300 text-uppercase">&copy;
                        2018 <span class="text-base-color">La Nueva Fresa</span>. All rights reserved.</p>
                    <p class="font-alt font-w-600 letter-spacing-1 mb-0 mt-1 text-extra-small text-gray-300 text-uppercase">
                        by <a href="https://rtsystemperu.com/" class="text-white" target="_blank">RT SYSTEM</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- =========================
                 Footer End
        ============================== -->

    <!-- =========================
                Modal Start
        ============================== -->
    <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true"
        data-backdrop=static>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form role="form" name="sus" id="sus" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">LA NUEVA FRESA<i class="fab fa-whatsapp modal-icon"></i></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="modal-titulo">RECIBE NUESTRA MÚSICA A TU WHATSAPP</h5>
                        <div class="form-group row modal-numero">
                            <label for="" class="col-sm-2 col-form-label">Número</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="numero" name="numero" placeholder="coloque su número">
                            </div>
                        </div>
                        <div class="form-group modal-terminos">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" name="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Aceptó <a href="terminos-condiciones.html" target="_black">Los terminos y
                                        condiciones.</a>
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a type="submit" name="enviar" id="enviar" class="btn modal-btn">Enviar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- =========================
                    Modal End
         ============================== -->

        <!-- Scroll to top -->
        <a href="#page-top" class="page-scroll scroll-to-top">
            <i class="fa fa-angle-up"></i>
        </a>

        <!-- Main JS -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- Include all js plugins (below) -->
        <!-- mis script -->
        <script src="assets/js/css3-animate-it.js"></script>
        <script src="assets/js/bigvideo.js"></script>
        <script src="assets/js/jquery.waitforimages.js"></script>
        <script src="assets/js/video.js"></script>
        <script src="assets/js/parallax.min.js"></script>
        <script src="assets/js/YouTubePopUp.jquery.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/jPlayer/jquery.jplayer.min.js"></script>
        <script src="assets/jPlayer/add-on/jplayer.playlist.min.js"></script>
        <script src="assets/jPlayer/add-on/jplayer.jukebox.js"></script>
        <script src="assets/jPlayer/customs.js"></script>
        <script type="text/javascript">
            jQuery(function () {
                jQuery("a.bla-1").YouTubePopUp();
            });
            $(document).ready(function () {
                $("#mostrarmodal").modal("show");
            });
        </script>
        <!-- template -->
        <script src="assets/js/pace.min.js"></script>
        <script src="assets/js/particles.min.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/flickity.pkgd.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/jquery.countdown.min.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>


        <!-- Theme JS -->
        <script src="assets/js/theme.js"></script>
        <script src="assets/js/switch_style.js"></script>
</body>

</html>
<script src="assets/js/validar.js"></script>
<script src="assets/js/contactar.js"></script>