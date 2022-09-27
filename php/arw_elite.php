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
            <button class="btn btn-lg text-light" style="background: #3b5998">Facebook</button>
        </div>
    </div>
    </section>

    <!-- Second Sec -->

    <section class="text-light p-5 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" style="background: #5e51a2">
    <div><h1 class="pt-3 pb-1">The ARW Elite Finalists</h1>
    <div class="container px-5" style="width: auto">

            <!-- First Row -->
            <div class="row justify-content-center">
                <div class="col px-2">
                    <div class="row pt-1"><div class="container bg-info rounded-4" style="height: 300px; width: 140px"></div></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><div class="container bg-info rounded-4" style="height: 300px; width: 140px"></div></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><div class="container bg-info rounded-4" style="height: 300px; width: 140px"></div></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><div class="container bg-info rounded-4" style="height: 300px; width: 140px"></div></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><div class="container bg-info rounded-4" style="height: 300px; width: 140px"></div></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <!-- Second Row -->
                <div class="col px-2">
                    <div class="row pt-1"><div class="container bg-info rounded-4" style="height: 300px; width: 140px"></div></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><div class="container bg-info rounded-4" style="height: 300px; width: 140px"></div></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><div class="container bg-info rounded-4" style="height: 300px; width: 140px"></div></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><div class="container bg-info rounded-4" style="height: 300px; width: 140px"></div></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><div class="container bg-info rounded-4" style="height: 300px; width: 140px"></div></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 200px">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </section>

    <!-- Third Sec -->
    <section class="text-dark p-5 pb-4 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" style="background: pink; height:100vh">
        <div><h1 class="p-5">GET TO KNOW THE ELITE FINALISTS</h1>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="row pt-5 justify-content-md-center">
                            <div class="container m-3 bg-light rounded-5" style="height: 400px; width: 200px"></div>
                            <div class="container m-3 bg-light rounded-5" style="height: 400px; width: 200px"></div>
                        </div>
                    </div>
                    <div class="col-md-4 text-start">
                        <h1 class="pt-5" style="font-family:Garamond">ORG FULL NAME</h1>
                        <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                        <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
                        <div class="container bg-light" style="height: 360px; width: 640px"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fourth Sec -->
    <section class="text-light p-5 text-center d-none d-sm-none d-md-none d-lg-block d-xl-block" style="background: #5e51a2; height: 100vh">
        <div>
            <div class="container" style="position:relative;">
                <div class="row">
                    <div class="col text-end">
                        <div class="container">
                            <h1 class="pt-5" style="font-family:Garamond">ORG FULL NAME</h1>
                            <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                            <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
                            <div class="container bg-light" style="height: 360px; width: 640px"></div>
                        </div>
                            
                    </div>
                    <div class="col-lg-5">
                        <div class="row pt-4 justify-content-md-center">
                            <div class="container m-3 bg-light rounded-5" style="height: 400px; width: 200px"></div>
                            <div class="container m-3 bg-light rounded-5" style="height: 400px; width: 200px"></div>
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



    <!-- Desktop ver -->

    <!-- First Sec -->

    <section class="text-light p-5 px-1 pt-md-5 text-center d-block d-sm-block d-md-block d-lg-none d-xl-none" style="background: pink; height:100vh">
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
            <button class="btn btn-lg text-light" style="background: #3b5998">Facebook</button>
        </div>
    </div>
    </section>        

    <!-- Second Sec -->

    <section class="text-light p-md-5 p-sm-5 p-xs-3 text-center d-block d-sm-block d-md-block d-lg-none d-xl-none" style="background: #5e51a2">
    <div><h1 class="pt-3 pb-1">The ARW Elite Finalists</h1>
    <div class="container px-3 p-sm-5" style="width: auto">

            <!-- First Row -->
            <div class="row justify-content-center">
                <div class="col px-2">
                    <div class="row pt-1"><div class="container bg-info rounded-4" style="height: 300px; width: 19vh"></div></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><div class="container bg-info rounded-4" style="height: 300px; width: 19vh"></div></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><div class="container bg-info rounded-4" style="height: 300px; width: 19vh"></div></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><div class="container bg-info rounded-4" style="height: 300px; width: 19vh"></div></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><div class="container bg-info rounded-4" style="height: 300px; width: 19vh"></div></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><div class="container bg-info rounded-4" style="height: 300px; width: 19vh"></div></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><div class="container bg-info rounded-4" style="height: 300px; width: 19vh"></div></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><div class="container bg-info rounded-4" style="height: 300px; width: 19vh"></div></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><div class="container bg-info rounded-4" style="height: 300px; width: 19vh"></div></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>

                <div class="col px-2">
                    <div class="row pt-1"><div class="container bg-info rounded-4" style="height: 300px; width: 19vh"></div></div>
                        <div class="row pt-1 pb-4 px-3"><div class="container bg-info rounded-4" style="height: 45px; width: 19vh">
                            <h6 class="pt-1" style="font-family:Garamond">Sample Name</h6>
                            <h5 class="pb-0" style="position: relative; top: -10px;font-family:Garamond; font-weight:bold">ORG NAME</h5>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </section>

     <!-- Third Sec -->

     <section class="text-dark text-center d-block d-sm-block d-md-block d-lg-none d-xl-none" style="background: pink; height:100vh">
        <div><h1 class="p-5">GET TO KNOW THE ELITE FINALISTS</h1>
            <div class="container px-3">
            <div class="row justify-content-center">
                <div class="col px-2"><div class="row pt-1"><div class="container bg-light rounded-4" style="height: 300px; width: 19vh"></div></div></div>
                <div class="col px-2"><div class="row pt-1"><div class="container bg-light rounded-4" style="height: 300px; width: 19vh"></div></div></div>
            </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
                <div class="container bg-light" style="height: 30vh; width: 75vw"></div>
            </div>
            </div>
        </div>
    </section>

     <!-- Fourth Sec -->
    
     <section class="text-light text-center d-block d-sm-block d-md-block d-lg-none d-xl-none" style="background: #5e51a2; height:100vh">
        <div><h1 class="p-5">GET TO KNOW THE ELITE FINALISTS</h1>
            <div class="container px-3">
            <div class="row justify-content-center">
                <div class="col px-2"><div class="row pt-1"><div class="container bg-light rounded-4" style="height: 300px; width: 19vh"></div></div></div>
                <div class="col px-2"><div class="row pt-1"><div class="container bg-light rounded-4" style="height: 300px; width: 19vh"></div></div></div>
            </div>

            <div class="col text-center">
                <h1 class="pt-3" style="font-family:Garamond">ORG FULL NAME</h1>
                <h3 class="" style="font-family:Garamond;position: relative; top: -15px">ORG NAME</h3>
                <h2 class="" style="font-family:Garamond;position: relative; top: -30px">ELITE NAME</h2>
                <div class="container bg-light" style="height: 30vh; width: 75vw"></div>
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
</body>

</html>
