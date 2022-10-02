<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ARWonderland</title>
    <?php require_once('./php/head.php')?>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/clouds.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>
    

    <?php require_once('./php/nav_bar.php') ?>
    <?php require_once('./php/floater.php') ?>
        
    <!-- First Div -->
    <div class="center-cropped" style = "background-image: url('./assets/arw_cover_bg/cover_bg_noclouds.png'); background-attachment: fixed; height: 100vh; z-index: 1">
            <!-- Desktop ver -->
            <div class="container d-none d-lg-block" style="position: relative; top: -50px;">
                <img src="./assets/arw_cover_bg/cover_text.png" style="width:100%; z-index: 3;" alt="">
                
            </div>
            <img src="./assets/arw_cover_bg/clouds.png" class="clouds_moving d-none d-lg-block" id="_clouds" alt="">

            <!-- Mobile ver -->
            <div class="container d-lg-none" style="position: relative;">
                <img src="./assets/arw_cover_bg/cover_text.png" class="img-fluid" alt="">
            </div>

            <img src="./assets/arw_cover_bg/moving_clouds.png" class="clouds_mobile d-lg-none" id="_clouds" alt="">
            
            <!-- Both -->
            


        </div>
        
    </div>

    <!-- Second Div -->
    <section class="center-cropped" style = "background-color: #f8abb1; height: calc(100vh - 50px); box-shadow: 0px -5px 25px; overflow: hidden;">
        <!-- Desktop ver -->
        <div class="slideshow-home mx-auto w-75 d-none d-lg-block" id = "desktop-slideshow">
            <div id = "carouselSlidesHome" class="carousel slide" data-bs-ride = "carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./assets/arw_elements/Backdrop.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/arw_elements/Backdrop (3).png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/arw_elements/Backdrop (4).png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlidesHome" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselSlidesHome" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div> 
        <!-- Tablet ver -->
        <div class="slideshow-home p-2 mx-auto d-none d-md-block d-lg-none" id="tablet-slideshow">
            <div id = "carouselSlidesHome" class="carousel slide" data-bs-ride = "carousel" >
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./assets/arw_elements/Backdrop.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/arw_elements/Backdrop (3).png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/arw_elements/Backdrop (4).png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlidesHome" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselSlidesHome" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div> 
        <!-- Mobile ver -->
        <!-- Test -->
        <div class="slideshow-home mx-auto d-sm-block d-md-none d-lg-none" id="mobile-slideshow">
            <div id = "carouselSlidesHome" class="carousel slide" data-bs-ride = "carousel" >
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./assets/arw_elements/Backdrop.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/arw_elements/Backdrop (3).png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/arw_elements/Backdrop (4).png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlidesHome" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselSlidesHome" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div> 
    </section>
    <!-- Third Div -->
    <section class="center-cropped" style = "background-color: #FFFFFF; height: 150vh;  overflow: hidden;">
        <!-- Desktop version -->
        <div class="container mx-auto rounded py-5 px-1 w-75 text-xl-center mt-4"></div>
            <h1 class="m-3" style = "font-family: 'EB Garamond'; text-align:center;">
                We would like to thank the following
            </h1>
        </div>
        <div class="container d-none d-lg-block mx-auto swiper">
            <!-- Diamond Sponsors -->
            <div class="row">
                <div class="container">
                    <h2 class = "p-4" style = "font-family: 'EB Garamond'; text-align:center;">Diamond Sponsors</h2>
                    <section class="logo-carousel slider" data-arrows="true">
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/_Ask Lex PH Academy.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/01 - Bukas.png" style="height: auto; width: 90%; margin-right: -800px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/1_logowhite.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/02 - SSV .png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/03 -  HENRY + LUCY.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/04 - Rae Lifestyle .png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/05 - UFOTO.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/06 - Mazars .png" style="height: auto; width: 100%; margin-right: -1250px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/07 - Accenture .png" style="height: auto; width: 100%; margin-right: -1250px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/08 - Amihan.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/09 - Bratpack.png" style="height: auto; width: 90%; margin-right: -800px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/B_lue Logo.jpg" style="height: auto; width: 100%; margin-right: -3050px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/Great Taste Logo.png" style="width: 120%; margin-right: -160px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/Japanmatcha.ph logo.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/MINILA_LOGO NEW_RL TRANSPARENT.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/MSI 3.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/SACO-Logo [WHITE].png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/Shopee_logo_white.png"></div>
                    </section>
                </div>
            </div>
            <!-- Platinum Sponsors -->
            <div class="row">
                <div class="container">
                    <h2 class = "p-4" style = "font-family: 'EB Garamond'; text-align:center;">Platinum Sponsors</h2>
                    <section class="logo-carousel slider" data-arrows="true">
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/_Ask Lex PH Academy.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/01 - Bukas.png" style="height: auto; width: 90%; margin-right: -800px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/1_logowhite.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/02 - SSV .png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/03 -  HENRY + LUCY.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/04 - Rae Lifestyle .png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/05 - UFOTO.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/06 - Mazars .png" style="height: auto; width: 100%; margin-right: -1250px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/07 - Accenture .png" style="height: auto; width: 100%; margin-right: -1250px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/08 - Amihan.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/09 - Bratpack.png" style="height: auto; width: 90%; margin-right: -800px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/B_lue Logo.jpg" style="height: auto; width: 100%; margin-right: -3050px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/Great Taste Logo.png" style="width: 120%; margin-right: -160px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/Japanmatcha.ph logo.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/MINILA_LOGO NEW_RL TRANSPARENT.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/MSI 3.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/SACO-Logo [WHITE].png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[1] Diamond Logos/Shopee_logo_white.png"></div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    
    
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script type = "text/javascript">
       $(document).ready(function(){
        $('.logo-carousel').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            variableWidth: true,
            centerMode: true,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
    </script>
</body>
</html>