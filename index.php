<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ARWonderland</title>
    <?php require_once('php/head.php')?>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/clouds.css">
</head>
<body>
    

    <?php require_once('php/nav_bar.php') ?>
        
    <!-- First DiV -->
    <div class="center-cropped" style = "background-image: url('./assets/arw_cover_bg/cover_bg_noclouds.png'); height: 100vh; z-index: 1">
            <!-- Desktop ver -->
            <div class="container d-none d-lg-block" style="position: relative; top: -18%;">
                <img src="./assets/arw_cover_bg/cover_text.png" style="width:100%; z-index: 3;" alt="">
                
            </div>
            <img src="./assets/arw_cover_bg/moving_clouds.png" class="clouds_moving d-none d-lg-block" id="_clouds" alt="">

            <!-- Mobile ver -->
            <div class="container d-lg-none" style="position: relative;">
                <img src="./assets/arw_cover_bg/cover_text.png" class="img-fluid" alt="">
            </div>

            <img src="./assets/arw_cover_bg/moving_clouds.png" class="clouds_mobile d-lg-none" id="_clouds" alt="">

            <!-- Both -->
            


        </div>
        
    </div>
    <div class="center-cropped" style = "background-image: url('./assets/arw_cover_bg/cover_bg.png'); height: 100vh;">
        <!-- <img src="./assets/arw_cover_bg/COVER_BG.png" class="img-fluid" alt=""> -->
        testing
    </div>



    
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>