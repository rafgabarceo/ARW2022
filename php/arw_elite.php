<html lang="en">

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
        background-color: rgb(5, 2, 0, 0.90);
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

    </style>

    <?php require_once('nav_bar_2.php') ?>
    <div class="left-cropped" style="background: white; height: 70px; z-index: -1"></div>

    <!-- Desktop ver -->

    <!-- First Sec -->

    <section class="text-light p-5 px-1 pt-md-5 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" style="background: pink; height:100vh">
    <div class="container custom-bg-black p-sm-0 my-2 rounded-4 centerabs text-center">
        <div class="p-3">
                <h1 class="pt-4">The ARW Elite</h1>
                <p class="text-class lead px-5" style="font-family:Garamond">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada ipsum sit amet leo interdum, vitae maximus turpis pharetra. 
                Etiam lobortis nibh sed gravida condimentum. Maecenas luctus congue commodo. Aliquam volutpat nisi ac purus semper, vitae auctor elit hendrerit. 
                Donec ac mauris a nunc tempor mollis. Praesent finibus, ligula vitae tincidunt dignissim, risus ante dictum sapien, et condimentum nibh nulla vitae nunc. 
                Etiam quis placerat tortor. Donec venenatis, ipsum at vehicula molestie, risus dolor pellentesque mi, eu pharetra magna neque ac metus. 
                Duis mollis neque ex, ut bibendum justo tempus sit amet. Suspendisse ut vulputate quam. Cras accumsan ornare congue. Sed sagittis fringilla felis quis venenatis. 
                Morbi rhoncus at ligula ac ultricies. Vestibulum lobortis iaculis nisl. Vivamus nec augue venenatis, tristique dolor id, accumsan massa.
                </p>
            <button class="btn btn-lg text-light" style="background: #3b5998"><a href="https://m.facebook.com/DLSUARW/?paipv=0&eav=AfaDp5XdSxz1alnaZHzApJdEuOa7aqZB5if7Oszc4dZlaHERNskE0EKhnfjAQVobcCg" style="color:inherit">Facebook</a></button>
        </div>
    </div>
    </section>

    <!-- Second Sec -->

    <section class="text-light p-5 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" style="background: #5e51a2">
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
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                <div class="row pt-1"><a class="nav-link" href="#elite2D">
                    <div class="container-fluid bg-info no-padding rounded-5" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/AU - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;" >
                        <img class="img-fluid thumbnail rounded-5" style="height: 300px; width: 200px;" src="../assets/arw_elite/AU - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                <div class="row pt-1"><a class="nav-link" href="#elite3D">
                    <div class="container-fluid bg-info no-padding rounded-5" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/BMS - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;" >
                        <img class="img-fluid thumbnail rounded-5" style="height: 300px; width: 200px;" src="../assets/arw_elite/BMS - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                <div class="row pt-1"><a class="nav-link" href="#elite4D">
                    <div class="container-fluid bg-info no-padding rounded-5" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/ECONORG - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;" >
                        <img class="img-fluid thumbnail rounded-5" style="height: 300px; width: 200px;" src="../assets/arw_elite/ECONORG - Candid.jpg" alt="...">   
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                <div class="row pt-1"><a class="nav-link" href="#elite5D">
                 <div class="container-fluid bg-info no-padding rounded-5" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/ENGLICOM - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;" >
                        <img class="img-fluid thumbnail rounded-5" style="height: 300px; width: 200px;" src="../assets/arw_elite/ENGLICOM - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <!-- Second Row -->
                <div class="col px-2">
                <div class="row pt-1"><a class="nav-link" href="#elite6D">
                    <div class="container-fluid bg-info no-padding rounded-5" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/IMES - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;" >
                        <img class="img-fluid thumbnail rounded-5" style="height: 300px; width: 200px;" src="../assets/arw_elite/IMES - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                <div class="row pt-1"><a class="nav-link" href="#elite7D">
                 <div class="container-fluid bg-info no-padding rounded-5" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/LLS - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;" >
                        <img class="img-fluid thumbnail rounded-5" style="height: 300px; width: 200px;" src="../assets/arw_elite/LLS - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                <div class="row pt-1"><a class="nav-link" href="#elite8D">
                    <div class="container-fluid bg-info no-padding rounded-5" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/POLISCY - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;" >
                        <img class="img-fluid thumbnail rounded-5" style="height: 300px; width: 200px;" src="../assets/arw_elite/POLISCY - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                <div class="row pt-1"><a class="nav-link" href="#elite9D">
                    <div class="container-fluid bg-info no-padding rounded-5" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/PRISM - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;" >
                        <img class="img-fluid thumbnail rounded-5" style="height: 300px; width: 200px;" src="../assets/arw_elite/PRISM - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                <div class="row pt-1"><a class="nav-link" href="#elite10D">
                    <div class="container-fluid bg-info no-padding rounded-5" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/SV - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;" >
                        <img class="img-fluid thumbnail rounded-5" style="height: 300px; width: 200px;" src="../assets/arw_elite/SV - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </section>

    <!-- ADCREATE -->
    <section class="text-dark p-5 pb-4 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" id="elite1D" style="background: pink; height: 90vh">
        <div><h1 class="p-5">GET TO KNOW THE ELITE FINALISTS</h1>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row pt-5">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/ADCREATE - FORMAL.jpg" alt="...">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/ADCREATE - Candid.jpg" alt="...">
                        </div>
                    </div>
                    <div class="col text-start">
                        <h1 class="pt-5" style="font-family:Garamond">ORG FULL NAME</h1>
                        <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                        <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="75%" src="https://drive.google.com/file/d/1ZgcsB2heAqGHFMyPun2N2S5pP-R3aIMj/preview" allowfullscreen></iframe>
                        </div>   
                    </div>
                </div>                
            </div>
        </div>
    </section>

    <!-- AU -->
    <section class="text-light p-5 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" id="elite2D" style="background: #5e51a2; height: 70vh">
        <div>
            <div class="container" style="position:relative;">
                <div class="row">
                    <div class="col text-end">
                        <div class="container">
                            <h1 class="pt-5" style="font-family:Garamond">ORG FULL NAME</h1>
                            <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                            <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
                            <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="75%" src="https://drive.google.com/file/d/129hLmxmNo0ofQydB5nVPk778X8BwuLPY/preview" allowfullscreen></iframe>
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
    <section class="text-dark p-5 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" id="elite3D" style="background: pink; height:75vh">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row pt-5">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/BMS - FORMAL.jpg" alt="...">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/BMS - Candid.jpg" alt="...">
                        </div>
                    </div>
                    <div class="col text-start">
                        <h1 class="pt-5" style="font-family:Garamond">ORG FULL NAME</h1>
                        <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                        <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="75%" src="https://drive.google.com/file/d/1m3JMx71P2gbEl4YXk1AceiDn6PDZvzZE/preview" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>

    <!-- ECONORG -->
    <section class="text-light p-5 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" id="elite4D" style="background: #5e51a2; height: 70vh">
        <div>
            <div class="container" style="position:relative;">
                <div class="row">
                    <div class="col text-end">
                        <div class="container">
                            <h1 class="pt-5" style="font-family:Garamond">ORG FULL NAME</h1>
                            <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                            <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
                            <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="75%" src="https://drive.google.com/file/d/1-Fk9-XO8HsZBm37fABEG7DCv8SLIpzvp/preview" allowfullscreen></iframe>
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
    <section class="text-dark p-5 pb-4 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" id="elite5D" style="background: pink; height:75vh">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row pt-5">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/ENGLICOM - FORMAL.jpg" alt="...">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/ENGLICOM - Candid.jpg" alt="...">
                        </div>
                    </div>
                    <div class="col text-start">
                        <h1 class="pt-5" style="font-family:Garamond">ORG FULL NAME</h1>
                        <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                        <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="75%" src="https://drive.google.com/file/d/1JvesXB1QjPMrc2iM1pjYAqVfVXfM4Vs1/preview" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>

    <!-- IMES -->
    <section class="text-light p-5 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" id="elite6D" style="background: #5e51a2; height: 70vh">
        <div>
            <div class="container" style="position:relative;">
                <div class="row">
                    <div class="col text-end">
                        <div class="container">
                            <h1 class="pt-5" style="font-family:Garamond">ORG FULL NAME</h1>
                            <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                            <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
                            <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="75%" src="https://drive.google.com/file/d/19x0PQBZGWoL_uZxZWNzgiCwkezwPJpIg/preview" allowfullscreen></iframe>
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
    <section class="text-dark p-5 pb-4 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" id="elite7D" style="background: pink; height:75vh">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row pt-5">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/LLS - FORMAL.jpg" alt="...">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/LLS - Candid.jpg" alt="...">
                        </div>
                    </div>
                    <div class="col text-start">
                        <h1 class="pt-5" style="font-family:Garamond">ORG FULL NAME</h1>
                        <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                        <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="75%" src="https://drive.google.com/file/d/1jD2j--YC77uq4MmgIyGnS-n5QhTyku_J/preview" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>

    <!-- POLISCY -->
    <section class="text-light p-5 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" id="elite8D" style="background: #5e51a2; height: 70vh">
        <div>
            <div class="container" style="position:relative;">
                <div class="row">
                    <div class="col text-end">
                        <div class="container">
                            <h1 class="pt-5" style="font-family:Garamond">ORG FULL NAME</h1>
                            <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                            <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
                            <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="75%" src="https://drive.google.com/file/d/1oaZWIDv_dDo1m6KCmoFM454tu25Z-mAF/preview" allowfullscreen></iframe>
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
    <section class="text-dark p-5 pb-4 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" id="elite9D" style="background: pink; height:75vh">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row pt-5">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/PRISM - FORMAL.jpg" alt="...">
                            <img class="pb-3 img-fluid rounded-5 " style="height: 24vw; width: 16vw;" src="../assets/arw_elite/PRISM - Candid.jpg" alt="...">
                        </div>
                    </div>
                    <div class="col text-start">
                        <h1 class="pt-5" style="font-family:Garamond">ORG FULL NAME</h1>
                        <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                        <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="75%" src="https://drive.google.com/file/d/1ocUnHpss5LwJiA1NPT4MJ77H_a_3Wlp4/preview" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>

    <!-- SV -->
    <section class="text-light p-5 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" id="elite10D" style="background: #5e51a2; height: 70vh">
        <div>
            <div class="container" style="position:relative;">
                <div class="row">
                    <div class="col text-end">
                        <div class="container">
                            <h1 class="pt-5" style="font-family:Garamond">ORG FULL NAME</h1>
                            <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                            <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
                            <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="75%" src="https://drive.google.com/file/d/1q1fuvQaXIBlf3ST_7yPF65K_BadnfhCY/preview" allowfullscreen></iframe>
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
    <section class="text-light p-5 px-1 pt-md-5 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" style="background: pink; height:95vh">
        <div class="justify-content-center">
            <h1 class="p-5 pb-4 text-dark">Who will be the ultimate ARW Elite?</h1>
            <div class="container bg-light p-sm-0 my-2" style="height: 70vh; width: 1000vh">
            </div>
        </div>
    </section>



    <!-- Mobile ver -->

    <!-- First Sec -->

    <section class="text-light p-5 px-1 pt-md-5 text-center d-block d-sm-block d-md-block d-lg-none d-xl-none" style="background: pink; height:150vh">
    <div class="container custom-bg-black p-sm-0 my-2 rounded-4 text-center">
        <div class="p-3">
                <h1 class="pt-4">The ARW Elite</h1>
                <p class="text-class lead px-3 px-md-4" style="font-family:Garamond">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada ipsum sit amet leo interdum, vitae maximus turpis pharetra. 
                Etiam lobortis nibh sed gravida condimentum. Maecenas luctus congue commodo. Aliquam volutpat nisi ac purus semper, vitae auctor elit hendrerit. 
                Donec ac mauris a nunc tempor mollis. Praesent finibus, ligula vitae tincidunt dignissim, risus ante dictum sapien, et condimentum nibh nulla vitae nunc. 
                Etiam quis placerat tortor. Donec venenatis, ipsum at vehicula molestie, risus dolor pellentesque mi, eu pharetra magna neque ac metus. 
                Duis mollis neque ex, ut bibendum justo tempus sit amet. Suspendisse ut vulputate quam. Cras accumsan ornare congue. Sed sagittis fringilla felis quis venenatis. 
                Morbi rhoncus at ligula ac ultricies. Vestibulum lobortis iaculis nisl. Vivamus nec augue venenatis, tristique dolor id, accumsan massa.
                </p>
            <button class="btn btn-lg text-light" style="background: #3b5998"><a href="https://m.facebook.com/DLSUARW/?paipv=0&eav=AfaDp5XdSxz1alnaZHzApJdEuOa7aqZB5if7Oszc4dZlaHERNskE0EKhnfjAQVobcCg" style="color:inherit">Facebook</a></button>
        </div>
    </div>
    </section>        

    <!-- Second Sec TABLET VERSION "SM & MD"-->

    <section class="text-light p-md-5 p-sm-5 p-xs-3 text-center d-none d-sm-block d-md-block d-lg-none d-xl-none" style="background: #5e51a2">
    <div><h1 class="pt-3 pb-1">The ARW Elite Finalists</h1>
    <div class="container px-3 p-sm-5" style="width: auto">

            <div class="row justify-content-center">
                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite1M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/ADCREATE - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 300px; width: 200px;" src="../assets/arw_elite/ADCREATE - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite2M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/AU - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 300px; width: 200px;" src="../assets/arw_elite/AU - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite3M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/BMS - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 300px; width: 200px;" src="../assets/arw_elite/BMS - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite4M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/ECONORG - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 300px; width: 200px;" src="../assets/arw_elite/ECONORG - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite5M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/ENGLICOM - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 300px; width: 200px;" src="../assets/arw_elite/ENGLICOM - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite6M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/IMES - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 300px; width: 200px;" src="../assets/arw_elite/IMES - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite7M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/LLS - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 300px; width: 200px;" src="../assets/arw_elite/LLS - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite8M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/POLISCY - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 300px; width: 200px;" src="../assets/arw_elite/POLISCY - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite9M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/PRISM - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 300px; width: 200px;" src="../assets/arw_elite/PRISM - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite10M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 300px; width: 200px; background-image: url('../assets/arw_elite/SV - Formal.jpg'); background-repeat: no-repeat;  background-size: 200px 300px;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 300px; width: 200px;" src="../assets/arw_elite/SV - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Second Sec MOBILE VERSION "XS" -->

    <section class="text-light p-md-5 p-sm-5 p-xs-3 text-center d-xs-block d-sm-none d-md-none d-lg-none d-xl-none" style="background: #5e51a2">
    <div><h1 class="pt-3 pb-1">The ARW Elite FINALISTS</h1>
    <div class="container px-3 p-sm-5" style="width: auto">

            <div class="row justify-content-center">
                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite1M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 54vw; width: 36vw; background-image: url('../assets/arw_elite/ADCREATE - Formal.jpg'); background-repeat: no-repeat;  background-size: 37vw 54vw;">
                        <img class="img-fluid thumbnail rounded-4" style="height:54vw; width: 36vw;" src="../assets/arw_elite/ADCREATE - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite2M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 54vw; width: 36vw; background-image: url('../assets/arw_elite/AU - Formal.jpg'); background-repeat: no-repeat;  background-size: 37vw 54vw;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/AU - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite3M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 54vw; width: 36vw; background-image: url('../assets/arw_elite/BMS - Formal.jpg'); background-repeat: no-repeat;  background-size:  37vw 54vw;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/BMS - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite4M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 54vw; width: 36vw; background-image: url('../assets/arw_elite/ECONORG - Formal.jpg'); background-repeat: no-repeat;  background-size: 37vw 54vw;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/ECONORG - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite5M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 54vw; width: 36vw; background-image: url('../assets/arw_elite/ENGLICOM - Formal.jpg'); background-repeat: no-repeat;  background-size: 37vw 54vw;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/ENGLICOM - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite6M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 54vw; width: 36vw; background-image: url('../assets/arw_elite/IMES - Formal.jpg'); background-repeat: no-repeat;  background-size: 37vw 54vw;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/IMES - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite7M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 54vw; width: 36vw; background-image: url('../assets/arw_elite/LLS - Formal.jpg'); background-repeat: no-repeat;  background-size: 37vw 54vw;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/LLS - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite8M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 54vw; width: 36vw; background-image: url('../assets/arw_elite/POLISCY - Formal.jpg'); background-repeat: no-repeat;  background-size: 37vw 54vw;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/POLISCY - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite9M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 54vw; width: 36vw; background-image: url('../assets/arw_elite/PRISM - Formal.jpg'); background-repeat: no-repeat;  background-size: 37vw 54vw;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/PRISM - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><a class="nav-link" href="#elite10M">
                        <div class="container-fluid bg-info no-padding rounded-4" style="height: 54vw; width: 36vw; background-image: url('../assets/arw_elite/SV - Formal.jpg'); background-repeat: no-repeat;  background-size: 37vw 54vw;">
                        <img class="img-fluid thumbnail rounded-4" style="height: 54vw; width: 36vw;" src="../assets/arw_elite/SV - Candid.jpg" alt="...">
                    </div></a></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
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
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
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
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
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
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
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
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
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
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
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
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
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
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
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
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
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
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
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
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
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
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
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
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
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
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
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
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
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
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
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
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
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
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
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
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
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
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
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
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
                <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="30%" src="https://drive.google.com/file/d/1q1fuvQaXIBlf3ST_7yPF65K_BadnfhCY/preview" allowfullscreen></iframe>
                        </div>   
            </div>
            </div>
        </div>
    </section>


    <!-- LAST SEC -->
    <section class="text-light p-5 px-1 text-center d-block d-sm-block d-md-block d-lg-none d-xl-none" style="background: pink">
        <div class="justify-content-center">
            <h1 class="p-3 text-dark">Who will be the ultimate ARW Elite?</h1>
            <div class="container bg-light p-sm-0 my-2" style="height: 50vw; width: 75vw">
            </div>
        </div>
    </section>

            <!-- Both -->

    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <?php
        require_once('footer.php');
    ?>
</body>

</html>
