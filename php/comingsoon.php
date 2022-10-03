<?php
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:image" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <title>ARWonderland</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Berkshire Swash">
    <link rel="manifest" href="/manifest.json">
    <link rel="stylesheet" href="../css/comingsoon.css">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?php require_once('head_2.php')?>

    <style>
        body{
        font-family: "Berkshire Swash";
        background-image:  url("ARWElements/Backdrop (4).png");
        background-repeat: no-repeat;
        background-size: cover;
        };
    </style>

</head>
<body>
    <?php require_once('nav_bar_2.php') ?>

    <div style = "overflow:hidden; position:relative;">
    <div class="moving_bg" id="bg-div" style = "background-image: url('../assets/arw_rabbit_hole/RABBIT HOLE/BG RABBIT HOLE.png')">
        <img src="../assets/arw_rabbit_hole/RABBIT HOLE/CORE.png" id="_fixed_layers" class="_bg_moving">
        <img src="../assets/arw_rabbit_hole/RABBIT HOLE/1STLAYER_MIDDLE.png" id="_moving_layer1" class="_bg_moving">
        <img src="../assets/arw_rabbit_hole/RABBIT HOLE/2NDLAYER_MIDDLE.png" id="_moving_layer2" class="_bg_moving">
        <img src="../assets/arw_rabbit_hole/RABBIT HOLE/3RDLAYER_MIDDLE.png" id="_moving_layer3" class="_bg_moving">
        <img src="../assets/arw_rabbit_hole/RABBIT HOLE/3RDLAYER_MIDDLE.png" id="_moving_layer4" class="_bg_moving">
        <img src="../assets/arw_rabbit_hole/RABBIT HOLE/Rabbit Hole Core.png" id="_core" class="_bg_moving">
    </div>

    <div class="container centered rounded bg-dark opacity-75 text-center text-white">
        <!-- TITLE -->
        <h1 class = "countdown-font d-none d-lg-block" style = "font-size: 113px" >COMING SOON</h1>

        <h1 class = "countdown-font d-lg-none p-2" style = "font-size: 64px">COMING SOON </h1>

    </div>
   

    <!-- LOGOS -->
    <div class="container d-none d-lg-block p-0 m-0 position-absolute" style = "z-index: 10; top: 80%; left: 75%; width: 390px;">
            <div class="row align-items-start g-2">
                <img class = "col m-0 p-0 arwlogo" src="../assets/logos/CSO_Logo.png" alt="">
                <img class = "col m-0 p-0 arwlogo" src="../assets/logos/ARW.png" alt="">
                <img class = "col m-0 p-0 arwlogo" src="../assets/logos/ARWonder.png" alt="">
            </div>.
    </div>

    <div class="container d-lg-none p-2 p-0 m-0 position-absolute" style = "z-index: 10; top: 80%; left: 50%; width: 200px;">
            <div class="row align-items-start g-2">
                <img class = "col-sm m-0 p-0 arwlogo-sm" src="../assets/logos/CSO_Logo.png" alt="">
                <img class = "col-sm m-0 p-0 arwlogo-sm" src="../assets/logos/ARW.png" alt="">
                <img class = "col-sm m-0 p-0 arwlogo-sm" src="../assets/logos/ARWonder.png" alt="">
            </div>
    </div>
    


    </div>
    <?php
        require_once('footer.php');
    ?>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>