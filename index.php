<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ARWonderland</title>
    <?php require_once('./php/head.php')?>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/clouds.css">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    

    <?php require_once('./php/nav_bar.php') ?>
        
    <!-- First Div -->
    <div class="center-cropped" style = "background-image: url('./assets/arw_cover_bg/cover_bg_noclouds.png'); background-attachment: fixed; height: 100vh; z-index: 1">
            <!-- Desktop ver -->
            <div class="container d-none d-lg-block" style="position: relative; top: -18%;">
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
    <div class="center-cropped" style = "background-color: #f8abb1; height: calc(100vh - 80px); box-shadow: 0px -5px 25px; overflow: hidden;">
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
        <!-- Mobile ver -->
        <!-- Test -->
        <div class="slideshow-home mx-auto d-lg-none" id="mobile-slideshow">
            <div id = "carouselSlidesHome" class="carousel slide" data-bs-ride = "carousel" style = "position: relative;">
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
    </div>



    
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>