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
    <div class="center-cropped" style = "background-image: url('./assets/arw_cover_bg/cover_bg_noclouds.png'); background-attachment: fixed; height: 100vh; z-index: 1; overflow: hidden;">
            <!-- Desktop ver -->
            <div class="container d-none d-lg-block" style="position: relative;">
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
    <!-- Desktop Version -->
    <section class="center-cropped d-none d-lg-block" style = "background-image: url('./assets/Important Dates.png'); height:1080px; width: 1920px; box-shadow: 0px -5px 25px; overflow: hidden;"></section>
    <!-- Tablet Version -->
    <section class="center-cropped d-none d-md-block d-lg-none" style = "background-color: #f8abb1; height: calc(100vh - 50px); box-shadow: 0px -5px 25px; overflow: hidden;">
        <div class="p-3 align-self-center" id = "dates-tab" >
            <img src="./assets/Important Dates.png" alt="" style = "max-width: 100%; height:auto; border-radius: 8px;" id = "dates-tab">
        </div>
    </section>
    <!-- Mobile Version -->
    <section class="center-cropped d-block d-md-none d-lg-none" style = "background-color: #f8abb1; height: calc(100vh - 200px); box-shadow: 0px -5px 25px; overflow: hidden;">
        <div class="p-3 align-self-center">
            <img src="./assets/Important Dates.png" alt="" style = "max-width: 100%; height:auto; border-radius: 15px;" id = "dates-mob">
        </div>
    </section>
    <!--         
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
        </div> -->
    </section>  
    <!-- Third Div -->
    <section class="center-cropped d-none d-lg-block" style = "background-color: #FFFFFF; height: 250vh;  overflow: hidden;">
        <!-- Desktop version -->
        <div class="container mx-auto rounded pt-5 px-1 w-75 text-xl-center mt-4"></div>
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
                    <h2 class = "p-4 mt-5" style = "font-family: 'EB Garamond'; text-align:center;">Platinum Sponsors</h2>
                    <section class="logo-carousel slider" data-arrows="true">
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[2] Platinum Logos/01 - Del Monte.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[2] Platinum Logos/02 - Meetbit.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[2] Platinum Logos/03 - Loreal - white.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[2] Platinum Logos/04 - Dormy (white) .png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[2] Platinum Logos/05 - Closeup White.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[2] Platinum Logos/Dulcet Corporate Logo - Green.png"></div>
                    </section>
                </div>
            </div>
            <!-- Gold Sponsors -->
            <div class="row">
                <div class="container">
                    <h2 class = "p-4 mt-5" style = "font-family: 'EB Garamond'; text-align:center;">Gold Sponsors</h2>
                    <section class="logo-carousel slider" data-arrows="true">
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/01 - Guess.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/02 - Motivo .png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/03 - Silvanas Las Pinas.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/04 - Nextile - with background.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/05 - Eden.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/07 - Swiftlet - horizontal.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/08 - Splore.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/09 - The Everyday.jpg"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/10 - Ur Lola PH.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/11 - Ysera Skin (png).png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/12 - K-Cool.jpg"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/13 - Chic Nail Color Logo.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/Bloom Logo.jpg"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/Commune Picks Logo.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/Franchise Manila Logo-151.png" style="height: auto; width: 90%; margin-right: -100px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/image003.png" style="height: auto; width: 90%; margin-right: -500px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/KONSULTA MD 1.png" style="height: auto; width: 90%; margin-right: -1000px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/new_dn_logo_white_500x500_png.png" style="height: auto; width: 80%; margin-right: -800px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/Polarix_Logo.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/The Collective_White.png" style="height: auto; width: 90%; margin-right: -1000px;"></div>
                    </section>
                </div>
            </div>
            <!-- Silver Sponsors -->
            <div class="row">
                <div class="container">
                    <h2 class = "p-4 mt-5" style = "font-family: 'EB Garamond'; text-align:center;">Silver Sponsors</h2>
                    <section class="logo-carousel slider" data-arrows="true">
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/01 - HS Fashionwear Logo.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/02 - Camalig Media Group.JPG"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/02 - Udenna.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/03 - Hiraya Journal (white).png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/04 - Tasty Snacks.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/AKIPOP_LOGO_V2_SQUARELOGO.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/FGC Logo Black Text.jpg"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/Liang Logo_1.jpg"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/MALAYA WHITE LOGO (1).png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/MIT Logo Horizontal (WHITE).png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/Mitasu Yakiniku Landscape WHITE_1.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/nabe new logo.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/NYFD Logo-3.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/ZAPPP_White Transparent with text.png"></div>
                    </section>
                </div>
            </div>
            <!-- Bronze Sponsors -->
            <div class="row">
                <div class="container">
                    <h2 class = "p-4 mt-5" style = "font-family: 'EB Garamond'; text-align:center;">Bronze Sponsors</h2>
                    <section class="logo-carousel slider" data-arrows="true">
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[5] Bronze Logos/01 - Yummy2Tummy .png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[5] Bronze Logos/03 - Transcendent MNL.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[5] Bronze Logos/04 - Jacinto _ Lirio .jpg" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[5] Bronze Logos/Kleo Active Logo (new).png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[5] Bronze Logos/Papa K_s Logo (v. 5) YELLOW.png"></div>
                    </section>
                </div>
            </div>
            <!-- Media Sponsors -->
            <div class="row">
                <div class="container">
                    <h2 class = "p-4 mt-5" style = "font-family: 'EB Garamond'; text-align:center;">Media Sponsors</h2>
                    <section class="logo-carousel slider" data-arrows="true">
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/01 - Spotted .png" style="height: auto; width: 100%; margin-right: -3000px;" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/02 - You Magazine.jpeg"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/03 - Diyaryo Milenyo.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/COLORED VERSION.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/GGFM Logo_Dark.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/IKOTLOGO_colored.png" style="height: auto; width: 100%; margin-right: -1750px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/INQUIRER-DOT-NET-blue-bg.jpg" style="height: auto; width: 100%; margin-right: -1750px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/Logo LSM White.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/Pop 2021 violet x pink.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[7] Major Media/04 - APP White.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[7] Major Media/ARCH LOGO White.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[7] Major Media/SparkUp white.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[7] Major Media/wtp logo name.png"></div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section class="center-cropped d-none d-md-block d-lg-none" style = "background-color: #FFFFFF; height: 230vh;  overflow: hidden;">
        <!-- Tablet Version -->
        <div class="container mx-auto rounded pt-5 px-1 w-75 text-xl-center mt-4"></div>
            <h1 class="m-3" style = "font-family: 'EB Garamond'; text-align:center;">
                We would like to thank the following
            </h1>
        </div>
        <div class="container d-none d-md-block d-lg-none mx-auto swiper-tab mb-5">
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
                    <h2 class = "p-4 mt-5" style = "font-family: 'EB Garamond'; text-align:center;">Platinum Sponsors</h2>
                    <section class="logo-carousel slider" data-arrows="true">
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[2] Platinum Logos/01 - Del Monte.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[2] Platinum Logos/02 - Meetbit.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[2] Platinum Logos/03 - Loreal - white.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[2] Platinum Logos/04 - Dormy (white) .png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[2] Platinum Logos/05 - Closeup White.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[2] Platinum Logos/Dulcet Corporate Logo - Green.png"></div>
                    </section>
                </div>
            </div>
            <!-- Gold Sponsors -->
            <div class="row">
                <div class="container">
                    <h2 class = "p-4 mt-5" style = "font-family: 'EB Garamond'; text-align:center;">Gold Sponsors</h2>
                    <section class="logo-carousel slider" data-arrows="true">
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/01 - Guess.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/02 - Motivo .png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/03 - Silvanas Las Pinas.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/04 - Nextile - with background.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/05 - Eden.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/07 - Swiftlet - horizontal.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/08 - Splore.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/09 - The Everyday.jpg"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/10 - Ur Lola PH.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/11 - Ysera Skin (png).png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/12 - K-Cool.jpg"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/13 - Chic Nail Color Logo.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/Bloom Logo.jpg"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/Commune Picks Logo.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/Franchise Manila Logo-151.png" style="height: auto; width: 90%; margin-right: -100px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/image003.png" style="height: auto; width: 90%; margin-right: -500px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/KONSULTA MD 1.png" style="height: auto; width: 90%; margin-right: -1000px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/new_dn_logo_white_500x500_png.png" style="height: auto; width: 80%; margin-right: -800px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/Polarix_Logo.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/The Collective_White.png" style="height: auto; width: 90%; margin-right: -1000px;"></div>
                    </section>
                </div>
            </div>
            <!-- Silver Sponsors -->
            <div class="row">
                <div class="container">
                    <h2 class = "p-4 mt-5" style = "font-family: 'EB Garamond'; text-align:center;">Silver Sponsors</h2>
                    <section class="logo-carousel slider" data-arrows="true">
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/01 - HS Fashionwear Logo.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/02 - Camalig Media Group.JPG"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/02 - Udenna.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/03 - Hiraya Journal (white).png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/04 - Tasty Snacks.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/AKIPOP_LOGO_V2_SQUARELOGO.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/FGC Logo Black Text.jpg"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/Liang Logo_1.jpg"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/MALAYA WHITE LOGO (1).png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/MIT Logo Horizontal (WHITE).png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/Mitasu Yakiniku Landscape WHITE_1.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/nabe new logo.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/NYFD Logo-3.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/ZAPPP_White Transparent with text.png"></div>
                    </section>
                </div>
            </div>
            <!-- Bronze Sponsors -->
            <div class="row">
                 <div class="container">
                    <h2 class = "p-4 mt-5" style = "font-family: 'EB Garamond'; text-align:center;">Bronze Sponsors</h2>
                    <section class="logo-carousel slider" data-arrows="true">
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[5] Bronze Logos/01 - Yummy2Tummy .png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[5] Bronze Logos/03 - Transcendent MNL.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[5] Bronze Logos/04 - Jacinto _ Lirio .jpg" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[5] Bronze Logos/Kleo Active Logo (new).png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[5] Bronze Logos/Papa K_s Logo (v. 5) YELLOW.png"></div>
                    </section>
                </div>
            </div>
            <!-- Media Sponsors -->
            <div class="row">
                <div class="container">
                    <h2 class = "p-4 mt-5" style = "font-family: 'EB Garamond'; text-align:center;">Media Sponsors</h2>
                    <section class="logo-carousel slider" data-arrows="true">
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/01 - Spotted .png" style="height: auto; width: 100%; margin-right: -3000px;" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/02 - You Magazine.jpeg"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/03 - Diyaryo Milenyo.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/COLORED VERSION.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/GGFM Logo_Dark.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/IKOTLOGO_colored.png" style="height: auto; width: 100%; margin-right: -1750px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/INQUIRER-DOT-NET-blue-bg.jpg" style="height: auto; width: 100%; margin-right: -1750px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/Logo LSM White.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/Pop 2021 violet x pink.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[7] Major Media/04 - APP White.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[7] Major Media/ARCH LOGO White.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[7] Major Media/SparkUp white.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[7] Major Media/wtp logo name.png"></div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!--Mobile Version-->
    <section class="center-cropped d-block d-md-none" style = "background-color: #FFFFFF; height: 270vh;  overflow: hidden;">
        <div class="container mx-auto rounded pt-5 px-1 w-75 text-xl-center mt-4"></div>
            <h1 class="m-3" style = "font-family: 'EB Garamond'; text-align:center;">
                We would like to thank the following
            </h1>
        </div>
        <div class="container d-block d-md-none mx-auto swiper-mob">
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
                    <h2 class = "p-4 mt-5" style = "font-family: 'EB Garamond'; text-align:center;">Platinum Sponsors</h2>
                    <section class="logo-carousel slider" data-arrows="true">
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[2] Platinum Logos/01 - Del Monte.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[2] Platinum Logos/02 - Meetbit.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[2] Platinum Logos/03 - Loreal - white.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[2] Platinum Logos/04 - Dormy (white) .png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[2] Platinum Logos/05 - Closeup White.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[2] Platinum Logos/Dulcet Corporate Logo - Green.png"></div>
                    </section>
                </div>
            </div>
            <!-- Gold Sponsors -->
            <div class="row">
                <div class="container">
                    <h2 class = "p-4 mt-5" style = "font-family: 'EB Garamond'; text-align:center;">Gold Sponsors</h2>
                    <section class="logo-carousel slider" data-arrows="true">
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/01 - Guess.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/02 - Motivo .png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/03 - Silvanas Las Pinas.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/04 - Nextile - with background.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/05 - Eden.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/07 - Swiftlet - horizontal.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/08 - Splore.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/09 - The Everyday.jpg"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/10 - Ur Lola PH.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/11 - Ysera Skin (png).png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/12 - K-Cool.jpg"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/13 - Chic Nail Color Logo.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/Bloom Logo.jpg"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/Commune Picks Logo.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/Franchise Manila Logo-151.png" style="height: auto; width: 90%; margin-right: -100px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/image003.png" style="height: auto; width: 90%; margin-right: -500px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/KONSULTA MD 1.png" style="height: auto; width: 90%; margin-right: -1000px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/new_dn_logo_white_500x500_png.png" style="height: auto; width: 80%; margin-right: -800px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/Polarix_Logo.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[3] Gold Logos/The Collective_White.png" style="height: auto; width: 90%; margin-right: -1000px;"></div>
                    </section>
                </div>
            </div>
            <!-- Silver Sponsors -->
            <div class="row">
                <div class="container">
                    <h2 class = "p-4 mt-5" style = "font-family: 'EB Garamond'; text-align:center;">Silver Sponsors</h2>
                    <section class="logo-carousel slider" data-arrows="true">
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/01 - HS Fashionwear Logo.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/02 - Camalig Media Group.JPG"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/02 - Udenna.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/03 - Hiraya Journal (white).png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/04 - Tasty Snacks.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/AKIPOP_LOGO_V2_SQUARELOGO.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/FGC Logo Black Text.jpg"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/Liang Logo_1.jpg"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/MALAYA WHITE LOGO (1).png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/MIT Logo Horizontal (WHITE).png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/Mitasu Yakiniku Landscape WHITE_1.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/nabe new logo.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/NYFD Logo-3.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[4] Silver Logos/ZAPPP_White Transparent with text.png"></div>
                    </section>
                </div>
            </div>
            <!-- Bronze Sponsors -->
            <div class="row">
                 <div class="container">
                    <h2 class = "p-4 mt-5" style = "font-family: 'EB Garamond'; text-align:center;">Bronze Sponsors</h2>
                    <section class="logo-carousel slider" data-arrows="true">
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[5] Bronze Logos/01 - Yummy2Tummy .png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[5] Bronze Logos/03 - Transcendent MNL.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[5] Bronze Logos/04 - Jacinto _ Lirio .jpg" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[5] Bronze Logos/Kleo Active Logo (new).png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[5] Bronze Logos/Papa K_s Logo (v. 5) YELLOW.png"></div>
                    </section>
                </div>
            </div>
            <!-- Media Sponsors -->
            <div class="row">
                <div class="container">
                    <h2 class = "p-4 mt-5" style = "font-family: 'EB Garamond'; text-align:center;">Media Sponsors</h2>
                    <section class="logo-carousel slider" data-arrows="true">
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/01 - Spotted .png" style="height: auto; width: 100%; margin-right: -3000px;" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/02 - You Magazine.jpeg"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/03 - Diyaryo Milenyo.png" ></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/COLORED VERSION.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/GGFM Logo_Dark.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/IKOTLOGO_colored.png" style="height: auto; width: 100%; margin-right: -1750px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/INQUIRER-DOT-NET-blue-bg.jpg" style="height: auto; width: 100%; margin-right: -1750px;"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/Logo LSM White.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[6] Primary Media/Pop 2021 violet x pink.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[7] Major Media/04 - APP White.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[7] Major Media/ARCH LOGO White.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[7] Major Media/SparkUp white.png"></div>
                        <div class="slide"><img class = "slide-img"  src="./assets/sponsors/Logos/[7] Major Media/wtp logo name.png"></div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- Xtra Small Mobile Version -->
   

    <div style = "background-color: #d82d27; height: 10vh;">
    <style>
        footer {
            background-color: #d82d27;

        };
        </style>
        <footer>
            <img src="./assets/logos.png" style="position: absolute; padding: 8px 8px 8px 8px; overflow: visible;">
            <h1 class="footer-text d-none d-md-block" style="color: white; text-align: right; padding: 24px 16px 8px 16px">CURIOUSER and CURIOUSER</h1>
            <h1 class="footer-text d-md-none" style="color: white; text-align: right; padding: 43px 16px 8px 16px; font-size:12px;">CURIOUSER and CURIOUSER</h1>
        </footer>
    </div>
    <!-- Footer -->
    
    
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script type = "text/javascript">
       $(document).ready(function(){
        $('.logo-carousel').slick({
            slidesToShow: 4,
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