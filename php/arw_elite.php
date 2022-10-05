<html style="background-color: #d82d27" lang="en">

<head>
    <title>ARW Elite</title>

    <?php require_once('head_2.php')?>

    <link rel="stylesheet" href="../css/style.css">

    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('ul.arw-cards').on('click', function() {
            $(this).toggleClass('transition');
        });
    });
    </script>
</head>

<body>

<style>
    .custom-bg {
        background-color: rgb(255, 255, 255, 0.85);
    }
    .placeholder-bg1 {
        background-color: rgb(34, 118, 0.50);
    }
    .custom-bg-green{
        background-color: rgb(34, 118, 0.50, 0.50)
    }
    .custom-bg-orange {
        background-color: rgb(244, 162, 56, 0.85);
    }
    .custom-bg-black {
        background-color: rgb(12, 7, 2, 0.75);
    }
    .custom-bg-1 {
        background-color: rgb(38,39,75, 0.62);
    }

    

    .centerabs{
        position: absolute;
        top: 50%;
        left: 50%;
        /* bring your own prefixes */
        transform: translate(-50%, -50%);
    }

    .text-class{
        text-align: justify;
    }

    .thumbnail {
        opacity: 0;
        transition-duration: 0.5s;
    }

    .thumbnail:hover {
        opacity: 1;
    }

    .no-padding {
    padding-left: 0;
    padding-right: 0;
    }

    body { 
    background: url('../assets/arw_elite/ARW_ELITE_BG_SAMPLE.png') no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }

    .throne { 
    background: url('../assets/arw_elite/ARW_ELITE_BG_THRONE.png') no-repeat center center relative; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }

    .nameplate{
        background-color: rgb(38,39,75);
    }

    </style>

    <?php require_once('nav_bar_2.php') ?>
    <div class="left-cropped" style="background: white; height: 70px; z-index: -1"></div>

    <!-- Desktop ver -->

    <!-- First Sec -->

    <section class="text-light p-5 px-1 pt-md-5 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" style="height:100vh">
    <div class="container custom-bg-black p-sm-0 my-2 rounded-4 centerabs text-center">
        <div class="p-3">
                <h1 class="pt-4">What is ARW Elite?</h1>
                <p class="text-class lead px-5" style="font-family:Garamond">
                ARW Elite is a university-wide contest among organizations under CSO with the goal of introducing each organization's vision and mission, goals, and personality to the student body. The organization representatives, which we call the Elites, must strive to show their creativity and passion in order to represent their organizations in a way that will attract Lasallians to be a part of theirs. ARW Elite aims to be a platform for each organization where they can voice out their advocacies and values through the exemplification of their chosen Elites.
                </p>
            <button class="btn btn-lg text-light" style="background: #3b5998"><a href="https://m.facebook.com/DLSUARW/?paipv=0&eav=AfaDp5XdSxz1alnaZHzApJdEuOa7aqZB5if7Oszc4dZlaHERNskE0EKhnfjAQVobcCg" style="color:inherit">Facebook</a></button>
        </div>
    </div>
    </section>

    <!-- Second Sec -->

    <section class="text-light p-5 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" style="">
    <div><h1 class="pt-3 pb-1">The ARW Elite Finalists</h1>
    <div class="container px-5" style="width: auto">

            <!-- First Row -->
            <div class="row justify-content-center">

                <!-- For navigation, <a class="nav-link" href="#elite*Number*D">; D means desktop, M for mobile, still have not added IDs for the rest of the elites-->
                <!-- IDs are on the section class div -->
                <!-- For images with hover (insert default image at image1, and second image after hover in image2)-->
                <div class="col px-2">
                <div class="row pt-1"><a class="nav-link" href="#elite1D">
                    <div class="container-fluid bg-info no-padding rounded-5" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/ADCREATE - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;" >
                        <img class="img-fluid thumbnail rounded-5" style="height: 300px; width: 200px;" src="../assets/arw_elite/ADCREATE - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container rounded-4 custom-bg-black" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Proxima-Nova">Denise Beltran</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Proxima-Nova; font-weight:bold">ADCREATE</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                <div class="row pt-1"><a class="nav-link" href="#elite2D">
                    <div class="container-fluid bg-info no-padding rounded-5" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/AU - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;" >
                        <img class="img-fluid thumbnail rounded-5" style="height: 300px; width: 200px;" src="../assets/arw_elite/AU - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3 "><div class="container rounded-4 custom-bg-black" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Proxima-Nova">Therese Jarcia</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Proxima-Nova; font-weight:bold">AU</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                <div class="row pt-1"><a class="nav-link" href="#elite3D">
                    <div class="container-fluid bg-info no-padding rounded-5" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/BMS - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;" >
                        <img class="img-fluid thumbnail rounded-5" style="height: 300px; width: 200px;" src="../assets/arw_elite/BMS - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container rounded-4 custom-bg-black" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Proxima-Nova">Joaquin Fernandez</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Proxima-Nova; font-weight:bold">BMS</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                <div class="row pt-1"><a class="nav-link" href="#elite4D">
                    <div class="container-fluid bg-info no-padding rounded-5" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/ECONORG - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;" >
                        <img class="img-fluid thumbnail rounded-5" style="height: 300px; width: 200px;" src="../assets/arw_elite/ECONORG - Candid.jpg" alt="...">   
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container rounded-4 custom-bg-black" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Proxima-Nova">Lareina Bulda</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Proxima-Nova; font-weight:bold">ECONORG</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                <div class="row pt-1"><a class="nav-link" href="#elite5D">
                 <div class="container-fluid bg-info no-padding rounded-5" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/ENGLICOM - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;" >
                        <img class="img-fluid thumbnail rounded-5" style="height: 300px; width: 200px;" src="../assets/arw_elite/ENGLICOM - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container rounded-4 custom-bg-black" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Andrea Lei Tan</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Proxima-Nova; font-weight:bold">ENGLICOM</h5>
                        </div>
                    </div>
                </div>

                <!-- Second Row -->
                <div class="col px-2">
                <div class="row pt-1"><a class="nav-link" href="#elite6D">
                    <div class="container-fluid bg-info no-padding rounded-5" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/IMES - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;" >
                        <img class="img-fluid thumbnail rounded-5" style="height: 300px; width: 200px;" src="../assets/arw_elite/IMES - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3 "><div class="container rounded-4 custom-bg-black" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Proxima-Nova">Jonathan Villarico</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Proxima-Nova; font-weight:bold">IMES</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                <div class="row pt-1"><a class="nav-link" href="#elite7D">
                 <div class="container-fluid bg-info no-padding rounded-5" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/LLS - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;" >
                        <img class="img-fluid thumbnail rounded-5" style="height: 300px; width: 200px;" src="../assets/arw_elite/LLS - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container rounded-4 custom-bg-black" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Proxima-Nova">Krisha Pangilinan</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Proxima-Nova; font-weight:bold">LLS</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                <div class="row pt-1"><a class="nav-link" href="#elite8D">
                    <div class="container-fluid bg-info no-padding rounded-5" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/POLISCY - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;" >
                        <img class="img-fluid thumbnail rounded-5" style="height: 300px; width: 200px;" src="../assets/arw_elite/POLISCY - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container rounded-4 custom-bg-black" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Proxima-Nova">Jacinth Rodriguez</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Proxima-Nova; font-weight:bold">POLISCY</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                <div class="row pt-1"><a class="nav-link" href="#elite9D">
                    <div class="container-fluid bg-info no-padding rounded-5" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/PRISM - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;" >
                        <img class="img-fluid thumbnail rounded-5" style="height: 300px; width: 200px;" src="../assets/arw_elite/PRISM - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container rounded-4 custom-bg-black" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Proxima-Nova">Deo Cabrera</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Proxima-Nova; font-weight:bold">PRISM</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                <div class="row pt-1"><a class="nav-link" href="#elite10D">
                    <div class="container-fluid bg-info no-padding rounded-5" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/SV - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;" >
                        <img class="img-fluid thumbnail rounded-5" style="height: 300px; width: 200px;" src="../assets/arw_elite/SV - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container rounded-4 custom-bg-black" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Proxima-Nova">Charm Estrella</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Proxima-Nova; font-weight:bold">SV</h5>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </section>

    <!-- ADCREATE -->
    <section class="text-light p-5 pb-4 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" id="elite1D" style="height: 100vh">
        <div> <h1 class="p-5 text-light">GET TO KNOW THE ELITE FINALISTS</h1></div>
        <div class="rounded-5 pb-5 custom-bg-1" style="height:75%">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row pt-5">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/ADCREATE - FORMAL.jpg" alt="...">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/ADCREATE - Candid.jpg" alt="...">
                        </div>
                    </div>
                    <div class="col text-start">
                        <h1 class="pt-5 pb-1" style="">AdCreate Society</h1>
                        <h4 class="" style="font-family:Proxima-Nova;position: relative; top: -15px">ADCREATE</h4>
                        <h2 class="" style="font-family:Proxima-Nova;position: relative; top: -30px">Denise Beltran</h2>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="86%"  src="https://drive.google.com/file/d/1ZgcsB2heAqGHFMyPun2N2S5pP-R3aIMj/preview" allowfullscreen></iframe>
                        </div>   
                    </div>
                </div>                
            </div>
        </div>
    </section>

    <!-- AU -->
    <section class="text-light p-5 pb-4 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" id="elite2D" style="height: 100vh">
        <div class="rounded-5 pb-5 custom-bg-1" style="height:75%">
            <div class="container" style="position:relative;">
                <div class="row">
                    <div class="col text-end">
                        <div class="container pt-5">
                            <h1 class="pt-5 pb-1" style="">Archers for UNICEF</h1>
                            <h4 class="" style="font-family:Proxima-Nova;position: relative; top: -15px">AU</h4>
                            <h2 class="" style="font-family:Proxima-Nova;position: relative; top: -30px">Therese Jarcia</h2>
                            <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="86%" src="https://drive.google.com/file/d/129hLmxmNo0ofQydB5nVPk778X8BwuLPY/preview" allowfullscreen></iframe>
                        </div>
                        </div>
                            
                    </div>
                    <div class="col">
                        <div class="row pt-4 justify-content-md-center">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/AU - FORMAL.jpg" alt="...">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/AU - Candid.jpg" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BMS -->
    <section class="text-light p-5 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" id="elite3D" style=" height:100vh">
        <div class="rounded-5 pb-5 custom-bg-1" style="height:75%">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row pt-5">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/BMS - FORMAL.jpg" alt="...">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/BMS - Candid.jpg" alt="...">
                        </div>
                    </div>
                    <div class="col text-start">
                        <h1 class="pt-5 pb-1" style="font-family:">Business Management Society</h1>
                        <h4 class="" style="font-family:Proxima-Nova;position: relative; top: -15px">BMS</h4>
                        <h2 class="" style="font-family:Proxima-Nova;position: relative; top: -30px">Joaquin Fernandez</h2>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="86%" src="https://drive.google.com/file/d/1m3JMx71P2gbEl4YXk1AceiDn6PDZvzZE/preview" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>

    <!-- ECONORG -->
    <section class="text-light p-5 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" id="elite4D" style="height: 100vh">
    <div class="rounded-5 pb-5 custom-bg-1" style="height:75%">
            <div class="container" style="position:relative;">
                <div class="row">
                    <div class="col text-end">
                        <div class="container">
                            <h1 class="pt-5 pb-1" style="font-family:">Economics Organization</h1>
                            <h4 class="" style="font-family:Proxima-Nova;position: relative; top: -15px">ECONORG</h>
                            <h2 class="" style="font-family:Proxima-Nova;position: relative; top: -30px">Lareina Bulda</h2>
                            <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="86%" src="https://drive.google.com/file/d/1-Fk9-XO8HsZBm37fABEG7DCv8SLIpzvp/preview" allowfullscreen></iframe>
                        </div>
                        </div>
                            
                    </div>
                    <div class="col">
                        <div class="row pt-4 justify-content-md-center">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/ECONORG - FORMAL.jpg" alt="...">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/ECONORG - Candid.jpg" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ENGLICOM -->
    <section class="text-light p-5 pb-4 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" id="elite5D" style="height:100vh">
    <div class="rounded-5 pb-5 custom-bg-1" style="height:75%">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row pt-5">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/ENGLICOM - FORMAL.jpg" alt="...">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/ENGLICOM - Candid.jpg" alt="...">
                        </div>
                    </div>
                    <div class="col text-start">
                        <h1 class="pt-5 pb-1" style="font-family:">ENGLICOM</h1>
                        <h4 class="" style="font-family:Proxima-Nova;position: relative; top: -15px">ELC</h4>
                        <h2 class="" style="font-family:Proxima-Nova;position: relative; top: -30px">Andrea Lei Tan</h2>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="86%" src="https://drive.google.com/file/d/1JvesXB1QjPMrc2iM1pjYAqVfVXfM4Vs1/preview" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>

    <!-- IMES -->
    <section class="text-light p-5 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" id="elite6D" style="height: 100vh">
       <div class="rounded-5 pb-5 custom-bg-1" style="height:80%">
            <div class="container" style="position:relative;">
                <div class="row">
                    <div class="col text-end">
                        <div class="container">
                            <h1 class="pt-5 pb-1" style="font-family:">Industrial Management Engineering Society</h1>
                            <h4 class="" style="font-family:Proxima-Nova;position: relative; top: -15px">IMES</h4>
                            <h2 class="" style="font-family:Proxima-Nova;position: relative; top: -30px">Jonathan Villarico</h2>
                            <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="86%" src="https://drive.google.com/file/d/19x0PQBZGWoL_uZxZWNzgiCwkezwPJpIg/preview" allowfullscreen></iframe>
                        </div>
                        </div>
                            
                    </div>
                    <div class="col">
                        <div class="row pt-4 justify-content-md-center">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/IMES - FORMAL.jpg" alt="...">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/IMES - Candid.jpg" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LLS -->
    <section class="text-light p-5 pb-4 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" id="elite7D" style="height:100vh">
        <div class="rounded-5 pb-5 custom-bg-1" style="height:75%"> 
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row pt-5">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/LLS - FORMAL.jpg" alt="...">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/LLS - Candid.jpg" alt="...">
                        </div>
                    </div>
                    <div class="col text-start">
                        <h1 class="pt-5 pb-1" style="font-family:">Ley La Salle</h1>
                        <h4 class="" style="font-family:Proxima-Nova;position: relative; top: -15px">LLS</h4>
                        <h2 class="" style="font-family:Proxima-Nova;position: relative; top: -30px">Krisha Pangilinan</h2>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="86%" src="https://drive.google.com/file/d/1jD2j--YC77uq4MmgIyGnS-n5QhTyku_J/preview" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>

    <!-- POLISCY -->
    <section class="text-light p-5 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" id="elite8D" style="height: 100vh">
        <div class="rounded-5 pb-5 custom-bg-1" style="height:75%">
            <div class="container" style="position:relative;">
                <div class="row">
                    <div class="col text-end">
                        <div class="container">
                            <h1 class="pt-5 pb-1" style="font-family:">Political Science Society</h1>
                            <h4 class="" style="font-family:Proxima-Nova;position: relative; top: -15px">POLISCY</h4>
                            <h2 class="" style="font-family:Proxima-Nova;position: relative; top: -30px">Jacinth Rodriguez</h2>
                            <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="86%" src="https://drive.google.com/file/d/1oaZWIDv_dDo1m6KCmoFM454tu25Z-mAF/preview" allowfullscreen></iframe>
                        </div>
                        </div>
                            
                    </div>
                    <div class="col">
                        <div class="row pt-4 justify-content-md-center">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/POLISCY - FORMAL.jpg" alt="...">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/POLISCY - Candid.jpg" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRISM -->
    <section class="text-light p-5 pb-4 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" id="elite9D" style="height:100vh">
        <div class="rounded-5 pb-5 custom-bg-1" style="height:75%">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row pt-5">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/PRISM - FORMAL.jpg" alt="...">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/PRISM - Candid.jpg" alt="...">
                        </div>
                    </div>
                    <div class="col text-start">
                        <h1 class="pt-5 pb-1" style="font-family:">Prism</h1>
                        <h4 class="" style="font-family:Proxima-Nova;position: relative; top: -15px">PRISM</h4>
                        <h2 class="" style="font-family:Proxima-Nova;position: relative; top: -30px">Deo Cabrera</h2>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="86%" src="https://drive.google.com/file/d/1ocUnHpss5LwJiA1NPT4MJ77H_a_3Wlp4/preview" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>

    <!-- SV -->
    <section class="text-light p-5 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" id="elite10D" style="height: 100vh">
        <div class="rounded-5 pb-5 custom-bg-1" style="height:75%">
            <div class="container" style="position:relative;">
                <div class="row">
                    <div class="col text-end">
                        <div class="container">
                            <h1 class="pt-5 pb-1" style="font-family:">Societas Vitae</h1>
                            <h4 class="" style="font-family:Proxima-Nova;position: relative; top: -15px">SV</h4>
                            <h2 class="" style="font-family:Proxima-Nova;position: relative; top: -30px">Charm Estrella</h2>
                            <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="86%" src="https://drive.google.com/file/d/1q1fuvQaXIBlf3ST_7yPF65K_BadnfhCY/preview" allowfullscreen></iframe>
                        </div>
                        </div>
                            
                    </div>
                    <div class="col">
                        <div class="row pt-4 justify-content-md-center">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/SV - FORMAL.jpg" alt="...">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/SV - Candid.jpg" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LAST SEC -->
    <section class="text-light p-5 px-1 pt-md-5 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" style="; height:95vh">
        <div class="justify-content-center">
            <h1 class="p-5 pb-4 text-light">Who will be the ultimate ARW Elite?</h1>
            <div class="container p-sm-0 my-2 throne" style="height: 70vh; width: 1000vh">
            <img class="pb-3 img-fluid rounded-5 " style="height: 40vw; width: 100vw;" src="../assets/arw_elite/ARW_ELITE_BG_THRONE.png" alt="...">  
            </div>
        </div>
    </section>



    <!-- Mobile ver -->

    <!-- First Sec -->

    <section class="text-light p-5 px-1 pt-md-5 text-center d-block d-sm-block d-md-block d-lg-none d-xl-none" style="height:150vh">
    <div class="container custom-bg-black p-sm-0 my-2 rounded-4 text-center">
        <div class="p-3">
                <h1 class="pt-4">The ARW Elite</h1>
                <p class="text-class lead px-3 px-md-4" style="font-family:Proxima-Nova">
                ARW Elite is a university-wide contest among organizations under CSO with the goal of introducing each organization's vision and mission, goals, and personality to the student body. The organization representatives, which we call the Elites, must strive to show their creativity and passion in order to represent their organizations in a way that will attract Lasallians to be a part of theirs. ARW Elite aims to be a platform for each organization where they can voice out their advocacies and values through the exemplification of their chosen Elites.
                </p>
            <button class="btn btn-lg text-light" style="background: #3b5998"><a href="https://m.facebook.com/DLSUARW/?paipv=0&eav=AfaDp5XdSxz1alnaZHzApJdEuOa7aqZB5if7Oszc4dZlaHERNskE0EKhnfjAQVobcCg" style="color:inherit">Facebook</a></button>
        </div>
    </div>
    </section>        

    <!-- Second Sec TABLET VERSION "SM & MD"-->

    <section class="text-light p-md-5 p-sm-5 p-xs-3 text-center d-none d-sm-block d-md-block d-lg-none d-xl-none" style="">
    <div><h1 class="pt-3 pb-1">The ARW Elite Finalists</h1>
    <div class="container px-3 p-sm-5" style="width: auto">

            <div class="row justify-content-center">
                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite1M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/ADCREATE - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 300px; width: 200px;" src="../assets/arw_elite/ADCREATE - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4 custom-bg-black" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Denise Beltran</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ADCREATE</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite2M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/AU - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 300px; width: 200px;" src="../assets/arw_elite/AU - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4 custom-bg-black" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Therese Jarcia</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">AU</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite3M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/BMS - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 300px; width: 200px;" src="../assets/arw_elite/BMS - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4 custom-bg-black" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Joaquin Fernandez</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">BMS</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite4M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/ECONORG - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 300px; width: 200px;" src="../assets/arw_elite/ECONORG - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4 custom-bg-black" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Lareina Bulda</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ECONORG</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite5M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/ENGLICOM - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 300px; width: 200px;" src="../assets/arw_elite/ENGLICOM - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4 custom-bg-black" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Andrea Lei Tan</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ENGLICOM</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite6M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/IMES - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 300px; width: 200px;" src="../assets/arw_elite/IMES - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4 custom-bg-black" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Jonathan Villarico</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">IMES</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite7M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/LLS - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 300px; width: 200px;" src="../assets/arw_elite/LLS - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4 custom-bg-black" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Krisha Pangilinan</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">LLS</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite8M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/POLISCY - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 300px; width: 200px;" src="../assets/arw_elite/POLISCY - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4 custom-bg-black" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Jacinth Rodriguez</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">POLISCY</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite9M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/PRISM - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 300px; width: 200px;" src="../assets/arw_elite/PRISM - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4 custom-bg-black" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Deo Cabrera</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">PRISM</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite10M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/SV - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 300px; width: 200px;" src="../assets/arw_elite/SV - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4 custom-bg-black" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Charm Estrella</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">SV</h5>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Second Sec MOBILE VERSION "XS" -->

    <section class="text-light p-md-5 p-sm-5 p-xs-3 text-center d-xs-block d-sm-none d-md-none d-lg-none d-xl-none" style="">
    <div><h1 class="pt-3 pb-1">The ARW Elite FINALISTS</h1>
    <div class="container px-3 p-sm-5" style="width: auto">

            <div class="row justify-content-center">
                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite1M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 54vw; width: 36vw; background-image: url('../assets/arw_elite/ADCREATE - Formal.jpg'); background-repeat: no-repeat;  background-size: 37vw 54vw;">
                        <img class="img-fluid thumbnail rounded-4" style="height:54vw; width: 36vw;" src="../assets/arw_elite/ADCREATE - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container rounded-4 custom-bg-black" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Denise Beltran</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ADCREATE</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite2M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 54vw; width: 36vw; background-image: url('../assets/arw_elite/AU - Formal.jpg'); background-repeat: no-repeat;  background-size: 37vw 54vw;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/AU - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container rounded-4 custom-bg-black" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Therese Jarcia</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">AU</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite3M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 54vw; width: 36vw; background-image: url('../assets/arw_elite/BMS - Formal.jpg'); background-repeat: no-repeat;  background-size:  37vw 54vw;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/BMS - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container rounded-4 custom-bg-black" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Joaquin Fernandez</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">BMS</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite4M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 54vw; width: 36vw; background-image: url('../assets/arw_elite/ECONORG - Formal.jpg'); background-repeat: no-repeat;  background-size: 37vw 54vw;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/ECONORG - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container rounded-4 custom-bg-black" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Lareina Bulda</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ECONORG</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite5M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 54vw; width: 36vw; background-image: url('../assets/arw_elite/ENGLICOM - Formal.jpg'); background-repeat: no-repeat;  background-size: 37vw 54vw;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/ENGLICOM - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container rounded-4 custom-bg-black" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Andrea Lei Tan</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ENGLICOM</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite6M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 54vw; width: 36vw; background-image: url('../assets/arw_elite/IMES - Formal.jpg'); background-repeat: no-repeat;  background-size: 37vw 54vw;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/IMES - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container rounded-4 custom-bg-black" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Jonathan Villarico</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">IMES</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite7M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 54vw; width: 36vw; background-image: url('../assets/arw_elite/LLS - Formal.jpg'); background-repeat: no-repeat;  background-size: 37vw 54vw;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/LLS - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container rounded-4 custom-bg-black" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Krisha Pangilinan</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">LLS</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite8M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 54vw; width: 36vw; background-image: url('../assets/arw_elite/POLISCY - Formal.jpg'); background-repeat: no-repeat;  background-size: 37vw 54vw;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/POLISCY - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container rounded-4 custom-bg-black" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Jacinth Rodriguez</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">POLISCY</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite9M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 54vw; width: 36vw; background-image: url('../assets/arw_elite/PRISM - Formal.jpg'); background-repeat: no-repeat;  background-size: 37vw 54vw;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/PRISM - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container rounded-4 custom-bg-black" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Deo Cabrera</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">PRISM</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite10M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 54vw; width: 36vw; background-image: url('../assets/arw_elite/SV - Formal.jpg'); background-repeat: no-repeat;  background-size: 37vw 54vw;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/SV - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container rounded-4 custom-bg-black" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Charm Estrella</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">SV</h5>
                        </div>
                    </div>
                </div>
            </div>
    </section>

     <!-- Third Sec TABLET VERSION "SM & MD" -->

     <!-- ADCREATE -->

     <section class="text-dark text-center d-none d-xs-none d-sm-block d-md-block d-lg-none d-xl-none" id="elite1M" style="background: pink; height:120vh">
        <div><h1 class="p-5">GET TO KNOW THE ELITE FINALISTS</h1>
            <div class="container">
            <div class="row justify-content-center">
                            <img class="pb-3 img-fluid rounded-4 " style="height: 300px; width: 200px;" src="../assets/arw_elite/ADCREATE - FORMAL.jpg" alt="...">
                            <img class="pb-3 img-fluid rounded-4 " style="height: 300px; width: 200px;" src="../assets/arw_elite/ADCREATE - Candid.jpg" alt="...">
                </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">AdCreate Society</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ADCREATE</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">Denise Beltran</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="40%" src="https://drive.google.com/file/d/1ZgcsB2heAqGHFMyPun2N2S5pP-R3aIMj/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>

    <!-- AU -->
    
     <section class="text-light text-center d-none d-sm-block d-md-block d-lg-none d-xl-none" id="elite2M" style="background: #5e51a2; height:100vh">
        <div>
            <div class="container px-3 pt-5">
            <div class="row pt-5 justify-content-center">
                 <img class="pb-3 img-fluid rounded-4 " style="height: 300px; width: 200px;" src="../assets/arw_elite/AU - FORMAL.jpg" alt="...">
                 <img class="pb-3 img-fluid rounded-4 " style="height: 300px; width: 200px;" src="../assets/arw_elite/AU - Candid.jpg" alt="...">
            </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">Archers for UNICEF</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">AU</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">Therese Jarcia</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="40%" src="https://drive.google.com/file/d/129hLmxmNo0ofQydB5nVPk778X8BwuLPY/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>

    <!-- BMS -->

    <section class="text-dark text-center d-none d-sm-block d-md-block d-lg-none d-xl-none" id="elite3M" style="background: pink; height:100vh">
        <div>
            <div class="container px-3 pt-5">
            <div class="row pt-5 justify-content-center">
                   <img class="pb-3 img-fluid rounded-4 " style="height: 300px; width: 200px;" src="../assets/arw_elite/BMS - FORMAL.jpg" alt="...">
                   <img class="pb-3 img-fluid rounded-4 " style="height: 300px; width: 200px;" src="../assets/arw_elite/BMS - Candid.jpg" alt="...">
            </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">Business Management Society</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">BMS</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">Joaquin Fernandez</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="40%" src="https://drive.google.com/file/d/1m3JMx71P2gbEl4YXk1AceiDn6PDZvzZE/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>

    <!-- ECONORG -->
    
     <section class="text-light text-center d-none d-sm-block d-md-block d-lg-none d-xl-none" id="elite4M" style="background: #5e51a2; height:100vh">
        <div>
            <div class="container px-3 pt-5">
            <div class="row pt-5 justify-content-center">
                   <img class="pb-3 img-fluid rounded-4 " style="height: 300px; width: 200px;" src="../assets/arw_elite/ECONORG - FORMAL.jpg" alt="...">
                   <img class="pb-3 img-fluid rounded-4 " style="height: 300px; width: 200px;" src="../assets/arw_elite/ECONORG - Candid.jpg" alt="...">
            </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">>ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ECONORG</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">Lareina Bulda</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="40%" src="https://drive.google.com/file/d/1-Fk9-XO8HsZBm37fABEG7DCv8SLIpzvp/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>

    <!-- ENGLICOM -->
    
    <section class="text-dark text-center d-none d-sm-block d-md-block d-lg-none d-xl-none " id="elite5M" style="background: pink; height:100vh">
        <div>
            <div class="container px-3">
            <div class="row pt-5 justify-content-center">
                   <img class="pb-3 img-fluid rounded-4 " style="height: 300px; width: 200px;" src="../assets/arw_elite/ENGLICOM - FORMAL.jpg" alt="...">
                   <img class="pb-3 img-fluid rounded-4 " style="height: 300px; width: 200px;" src="../assets/arw_elite/ENGLICOM - Candid.jpg" alt="...">
            </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">ENGLICOM</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ELC</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">Andrea Lei Tan</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="40%" src="https://drive.google.com/file/d/1JvesXB1QjPMrc2iM1pjYAqVfVXfM4Vs1/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>

    <!-- IMES -->
    
     <section class="text-light text-center d-none d-sm-block d-md-block d-lg-none d-xl-none" id="elite6M" style="background: #5e51a2; height:100vh">
        <div>
            <div class="container px-3 pt-5">
            <div class="row pt-5 justify-content-center">
                   <img class="pb-3 img-fluid rounded-4 " style="height: 300px; width: 200px;" src="../assets/arw_elite/IMES - FORMAL.jpg" alt="...">
                   <img class="pb-3 img-fluid rounded-4 " style="height: 300px; width: 200px;" src="../assets/arw_elite/IMES - Candid.jpg" alt="...">
            </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">Industrial Management Engineering Society</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">IMES</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">Jonathan Villarico</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="40%" src="https://drive.google.com/file/d/19x0PQBZGWoL_uZxZWNzgiCwkezwPJpIg/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>

    <!-- LLS -->

    <section class="text-dark text-center d-none d-sm-block d-md-block d-lg-none d-xl-none " id="elite7M" style="background: pink; height:100vh">
        <div>
            <div class="container px-3">
            <div class="row pt-5 justify-content-center">
                   <img class="pb-3 img-fluid rounded-4 " style="height: 300px; width: 200px;" src="../assets/arw_elite/LLS - FORMAL.jpg" alt="...">
                   <img class="pb-3 img-fluid rounded-4 " style="height: 300px; width: 200px;" src="../assets/arw_elite/LLS - Candid.jpg" alt="...">
            </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">Ley La Salle</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">LLS</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">Krisha Pangilinan</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="40%" src="https://drive.google.com/file/d/1jD2j--YC77uq4MmgIyGnS-n5QhTyku_J/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>

    <!-- POLISCY -->
    
     <section class="text-light text-center d-none d-sm-block d-md-block d-lg-none d-xl-none" id="elite8M" style="background: #5e51a2; height:100vh">
        <div>
            <div class="container px-3 pt-5">
            <div class="row pt-5 justify-content-center">
                   <img class="pb-3 img-fluid rounded-4 " style="height: 300px; width: 200px;" src="../assets/arw_elite/POLISCY - FORMAL.jpg" alt="...">
                   <img class="pb-3 img-fluid rounded-4 " style="height: 300px; width: 200px;" src="../assets/arw_elite/POLISCY - Candid.jpg" alt="...">
            </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">Political Science Society</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">POLISCY</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">Jacinth Rodriguez</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="40%" src="https://drive.google.com/file/d/1oaZWIDv_dDo1m6KCmoFM454tu25Z-mAF/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>

    <!-- PRISM -->

    <section class="text-dark text-center d-none d-sm-block d-md-block d-lg-none d-xl-none " id="elite9M" style="background: pink; height:100vh">
        <div>
            <div class="container px-3">
            <div class="row pt-5 justify-content-center">
                   <img class="pb-3 img-fluid rounded-4 " style="height: 300px; width: 200px;" src="../assets/arw_elite/PRISM - FORMAL.jpg" alt="...">
                   <img class="pb-3 img-fluid rounded-4 " style="height: 300px; width: 200px;" src="../assets/arw_elite/PRISM - Candid.jpg" alt="...">
            </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">Prism</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">PRISM</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">Deo Cabrera</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="40%" src="https://drive.google.com/file/d/1ocUnHpss5LwJiA1NPT4MJ77H_a_3Wlp4/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>

    <!-- SV -->
    
     <section class="text-light text-center d-none d-sm-block d-md-block d-lg-none d-xl-none" id="elite10M" style="background: #5e51a2; height:100vh">
        <div>
            <div class="container px-3 pt-5">
            <div class="row pt-5 justify-content-center">
                   <img class="pb-3 img-fluid rounded-4 " style="height: 300px; width: 200px;" src="../assets/arw_elite/SV - FORMAL.jpg" alt="...">
                   <img class="pb-3 img-fluid rounded-4 " style="height: 300px; width: 200px;" src="../assets/arw_elite/SV - Candid.jpg" alt="...">
            </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">Societas Vitae</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">SV</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">Charm Estrella</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="40%" src="https://drive.google.com/file/d/1q1fuvQaXIBlf3ST_7yPF65K_BadnfhCY/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>

    <!-- Third Sec MOBILE VERSION "XS" -->

     <!-- ADCREATE -->

     <section class="text-dark text-center d-xs-block d-sm-none d-md-none d-lg-none d-xl-none" id="elite1M" style="background: pink; height:100vh">
     
        <div><h1 class="p-5">GET TO KNOW THE ELITE FINALISTS</h1>
            <div class="container">
            <div class="row justify-content-center">
                            <img class="pb-3 img-fluid rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/ADCREATE - FORMAL.jpg" alt="...">
                            <img class="pb-3 img-fluid rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/ADCREATE - Candid.jpg" alt="...">
                </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">AdCreate Society</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ADCREATE</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">Denise Beltran</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="30%" src="https://drive.google.com/file/d/1ZgcsB2heAqGHFMyPun2N2S5pP-R3aIMj/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>

    <!-- AU -->
    
     <section class="text-light text-center d-xs-block d-sm-none d-md-none d-lg-none d-xl-none" id="elite2M" style="background: #5e51a2; height:100vh">
        <div>
            <div class="container px-3 pt-5">
            <div class="row pt-5 justify-content-center">
                 <img class="pb-3 img-fluid rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/AU - FORMAL.jpg" alt="...">
                 <img class="pb-3 img-fluid rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/AU - Candid.jpg" alt="...">
            </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">Archers for UNICEF</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">AU</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">Therese Jarcia</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="30%" src="https://drive.google.com/file/d/129hLmxmNo0ofQydB5nVPk778X8BwuLPY/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>

    <!-- BMS -->

    <section class="text-dark text-center d-xs-block d-sm-none d-md-none d-lg-none d-xl-none" id="elite3M" style="background: pink; height:100vh">
        <div>
            <div class="container px-3 pt-5">
            <div class="row pt-5 justify-content-center">
                   <img class="pb-3 img-fluid rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/BMS - FORMAL.jpg" alt="...">
                   <img class="pb-3 img-fluid rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/BMS - Candid.jpg" alt="...">
            </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">Business Management Society</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">BMS</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">Joaquin Fernandez</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="30%" src="https://drive.google.com/file/d/1m3JMx71P2gbEl4YXk1AceiDn6PDZvzZE/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>

    <!-- ECONORG -->
    
     <section class="text-light text-center d-xs-block d-sm-none d-md-none d-lg-none d-xl-none" id="elite4M" style="background: #5e51a2; height:100vh">
        <div>
            <div class="container px-3 pt-5">
            <div class="row pt-5 justify-content-center">
                   <img class="pb-3 img-fluid rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/ECONORG - FORMAL.jpg" alt="...">
                   <img class="pb-3 img-fluid rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/ECONORG - Candid.jpg" alt="...">
            </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">Economics Organization</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ECONORG</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">Lareina Bulda</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="30%" src="https://drive.google.com/file/d/1-Fk9-XO8HsZBm37fABEG7DCv8SLIpzvp/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>

    <!-- ENGLICOM -->
    
    <section class="text-dark text-center d-xs-block d-sm-none d-md-none d-lg-none d-xl-none" id="elite5M" style="background: pink; height:100vh">
        <div>
            <div class="container px-3">
            <div class="row pt-5 justify-content-center">
                   <img class="pb-3 img-fluid rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/ENGLICOM - FORMAL.jpg" alt="...">
                   <img class="pb-3 img-fluid rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/ENGLICOM - Candid.jpg" alt="...">
            </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">ENGLICOM</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ELC</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">Andrea Lei Tan</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="30%" src="https://drive.google.com/file/d/1JvesXB1QjPMrc2iM1pjYAqVfVXfM4Vs1/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>

    <!-- IMES -->
    
     <section class="text-light text-center d-xs-block d-sm-none d-md-none d-lg-none d-xl-none" id="elite6M" style="background: #5e51a2; height:100vh">
        <div>
            <div class="container px-3 pt-5">
            <div class="row pt-5 justify-content-center">
                   <img class="pb-3 img-fluid rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/IMES - FORMAL.jpg" alt="...">
                   <img class="pb-3 img-fluid rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/IMES - Candid.jpg" alt="...">
            </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">Industrial Management Engineering Society</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">IMES</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">Jonathan Villarico</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="30%" src="https://drive.google.com/file/d/19x0PQBZGWoL_uZxZWNzgiCwkezwPJpIg/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>

    <!-- LLS -->

    <section class="text-dark text-center d-xs-block d-sm-none d-md-none d-lg-none d-xl-none" id="elite7M" style="background: pink; height:100vh">
        <div>
            <div class="container px-3">
            <div class="row pt-5 justify-content-center">
                   <img class="pb-3 img-fluid rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/LLS - FORMAL.jpg" alt="...">
                   <img class="pb-3 img-fluid rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/LLS - Candid.jpg" alt="...">
            </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">Ley La Salle</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">LLS</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">Krisha Pangilinan</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="30%" src="https://drive.google.com/file/d/1jD2j--YC77uq4MmgIyGnS-n5QhTyku_J/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>

    <!-- POLISCY -->
    
     <section class="text-light text-center d-xs-block d-sm-none d-md-none d-lg-none d-xl-none" id="elite8M" style="background: #5e51a2; height:100vh">
        <div>
            <div class="container px-3 pt-5">
            <div class="row pt-5 justify-content-center">
                   <img class="pb-3 img-fluid rounded-4 " style="height: 54vw; width: 36vw;" src="../assets/arw_elite/POLISCY - FORMAL.jpg" alt="...">
                   <img class="pb-3 img-fluid rounded-4 " style="height: 54vw; width: 36vw;" src="../assets/arw_elite/POLISCY - Candid.jpg" alt="...">
            </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">Political Science Society</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">POLISCY</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">Jacinth Rodriguez</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="30%" src="https://drive.google.com/file/d/1oaZWIDv_dDo1m6KCmoFM454tu25Z-mAF/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>

    <!-- PRISM -->

    <section class="text-dark text-center d-xs-block d-sm-none d-md-none d-lg-none d-xl-none" id="elite9M" style="background: pink; height:100vh">
        <div>
            <div class="container px-3">
            <div class="row pt-5 justify-content-center">
                   <img class="pb-3 img-fluid rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/PRISM - FORMAL.jpg" alt="...">
                   <img class="pb-3 img-fluid rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/PRISM - Candid.jpg" alt="...">
            </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">Prism</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">PRISM</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">Deo Cabrera</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="30%" src="https://drive.google.com/file/d/1ocUnHpss5LwJiA1NPT4MJ77H_a_3Wlp4/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>

    <!-- SV -->
    
     <section class="text-light text-center d-xs-block d-sm-none d-md-none d-lg-none d-xl-none" id="elite10M" style="background: #5e51a2; height:100vh">
        <div>
            <div class="container px-3 pt-5">
            <div class="row pt-5 justify-content-center">
                   <img class="pb-3 img-fluid rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/SV - FORMAL.jpg" alt="...">
                   <img class="pb-3 img-fluid rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/SV - Candid.jpg" alt="...">
            </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">Societas Vitae</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">SV</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">Charm Estrella</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="30%" src="https://drive.google.com/file/d/1q1fuvQaXIBlf3ST_7yPF65K_BadnfhCY/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>


    <!-- LAST SEC -->
    <section class="text-light p-5 px-1 text-center d-block d-sm-block d-md-block d-lg-none d-xl-none" style="">
        <div class="justify-content-center">
            <h1 class="p-3 text-light">Who will be the ultimate ARW Elite?</h1>
            <div class="container p-sm-0 my-2 throne" style="height: 50vw; width: 75vw">
            <img class="pb-3 img-fluid rounded-5 " style="height: 40vw; width: 100vw;" src="../assets/arw_elite/ARW_ELITE_BG_THRONE.png" alt="..."> 
            </div>
        </div>
    </section>

            <!-- Both -->

    
    <?php
        require_once('footer.php');
    ?>

<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

</html>
