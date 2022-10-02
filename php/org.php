
<!-- Indiv org template -->
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    require_once('head_2.php');
    require_once("data_api/org-api.php"); 
    
    ?>
    <?php
        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $org_abbrev = parse_url($url, PHP_URL_QUERY);


        /**
         * 
         * DEBUGGING PURPOSES ONLY. PLEASE DO NOT USE SAME USERNAME AND PASSWORD FOR PRODUCTION! 
         * 
         * This debugging API will assume that there is a database at default MYSQL port with -u root -p dev1234567890
         * 
         */
        // echo "<script> console.log('".strtoupper($pageID)."');</script>";

        $api = new fetchARWAPI("ACCESS", "localhost", "root", "dev1234567890","arw", 3306);
        $information = $api->get_info();

        var_dump($information); 
    ?>
    
    <title><?php echo $information['org_name']?></title>
    
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/org_indiv.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.3.0/color-thief.umd.js"></script>
    <script src="../js/colorToFiler.js"></script>
    <script src="../js/org_indiv.js"></script>
</head>

<body >
    <?php require_once('nav_bar_2.php') ?>

    <!-- 1st Section: Org Logo, Name, Description, and Buttons -->
    <section class="text-center" id="section-1" style="background-image: url(<?php echo $org_info['bg']?>);">
        <!-- hidden image for getting dom-color purposes -->
        <img src="<?php echo $org_info['bg']?>" style="display: none;" id="bg-img" onload="setDomColors()">
        <!-- logo & description -->
        <div class="row gx-5 gy-4 m-0 align-items-center">
            <!-- full width on mobile, 4/12 on desktop -->
            <!-- logo & abbreviated name -->
            <div class="col-lg-4">
                <img src= "../assets/org_images/<?php echo $org_info['logo']?>" class="logo"/>

                <!-- abbreviated org name (banner asset + org-name) -->
                <div class="mt-4 position-relative org-name-container">
                    <!-- TODO: replace w/ actual banner asset & edit text curve path for it when available -->
                    <img src="../assets/ribbonbanner.svg" class="position-relative centered-axis-x dom-color-filter" width="100%">
                    <div class="position-absolute org-name">
                        <!-- Bevel Text code taken from https://codepen.io/brrrl/pen/zamZRG
                        Curved Text from https://css-tricks.com/snippets/svg/curved-text-along-path/ -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="50 20 400 140" width="150%" height="100%">   
                            <!-- TODO: edit text curve path to fit actual banner when available -->
                            <path id="curve" fill="transparent" d="M73.2,148.6c4-6.1,65.5-96.8,178.6-95.6c111.3,1.2,170.8,90.3,175.1,97" />    
                            <filter id="Bevel" filterUnits="objectBoundingBox" x="-10%" y="-10%" width="150%" height="150%">
                                <feGaussianBlur in="SourceAlpha" stdDeviation="0.2" result="blur"/>
                                <feSpecularLighting in="blur" surfaceScale="10" specularConstant="3.5" specularExponent="10" result="specOut" lighting-color="#ffffff">
                                <fePointLight x="-5000" y="-10000" z="0000"/>
                                </feSpecularLighting>
                                <feComposite in="specOut" in2="SourceAlpha" operator="in" result="specOut2"/>
                                <feComposite in="SourceGraphic" in2="specOut2" operator="arithmetic" k1="0" k2="1" k3="1" k4="0" result="litPaint" />
                            </filter>
                            <text x="0" y="0" class="bevel curved-text comp-color-text-fill" filter="url(#Bevel)">
                                <textPath xlink:href="#curve" startOffset="50%">
                                    <?php echo $org_info['org-name']?>
                                </textPath>
                            </text>
                        </svg>
                    </div>
                    
                </div>
            </div>
            <!-- description & buttons -->
            <div class="col-lg-8 description-parent">
                <div class="description-box dom-color-bg">
                    <h3>
                        <?php echo $org_info['org-long-name']?>
                    </h3>
                    <p>
                        Physical Booth Open from <?php echo $org_info['physical-booth-times']?>
                    </p>
                    <div class="text-scrollable-justified">
                        <p>
                            <?php echo $org_info['description']?>
                        </p>
                    </div>
                </div>
                <!-- buttons -->
                <div class="row pt-4 gy-4 justify-content-center">
                    <div class="col-md-5">
                        <a href=<?php echo $org_info['fb-link']?>>
                            <button type="button" class="btn btn-primary btn-lg">
                                Facebook
                            </button>
                        </a>
                    </div>
                    <div class="col-md-5">
                        <a href=<?php echo $org_info['reg-link']?>>
                            <button type="button" class="btn btn-primary btn-lg">
                                Register
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- 2nd Section: Optional Org Video -->
    <!-- May have to edit the condition for checking if org has video or not depending on backend API. -->
    <?php if (isset($org_info['video'])) { // start if ?>
        <section class="text-center" id="section-2">
            <div>
                <h1 class="dom-color-text mb-4">
                    Organizational Video
                </h1>
                <div>
                    <iframe width="80%" height="90%" src=<?php echo $org_info['video']?>></iframe>
                </div>
            </div>
        </section>
    <?php } // end if ?>

    <!-- 3rd Section: Main Pub, Mission, Vision -->
    <section>
        Mission: <?php echo $org_info['mission']?><br><br>
        Vission: <?php echo $org_info['vision']?>
        <?php echo "background-image: url('{$org_info['bg']}');" ?>
    </section>

    <!-- 4th Section: Flagship Events (slideshow) -->
    <section>
        <!-- bootstrap carousel -->
        <!-- loop thru each image -->
    </section>

    <!-- 5th Section: Prices Pub, Buttons, Tagline -->
    <section>

    </section>

    <!-- ARW Footer -->
    <!-- To be inserted when it's available -->

    <!-- Must include for nav-bar-collapse on mobile -->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

    
</body>
</html>