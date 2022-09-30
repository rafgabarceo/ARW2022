
<!-- Indiv org template -->
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once('head_2.php');
    require_once('data_api/org-api.php'); 
    
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

        /**
         * DEBUGGING PURPOSES ONLY.
         * Delete this line in final revision and for production.
         */
        $org_abbrev = "CHEMSOC";

        $api = new fetchARWAPI($org_abbrev, "localhost", "root", "dev1234567890","arw", 3306);
        $information = $api->get_info();

        // get org flagship events (array containing the paths to each flagship events?)
        //$information['flagship_events'] = $api->get_org_slides($org_abbrev);
        /**
         * Comment this line and uncomment the one above when get_org_slides() is available.
         */
        $information['flagship_events'] = array("../assets/org_indiv_page/yes_assets/yes-flag1.png", "../assets/org_indiv_page/yes_assets/yes-flag2.png", "../assets/org_indiv_page/yes_assets/yes-flag3.png", "../assets/org_indiv_page/yes_assets/yes-flag4.png", "../assets/org_indiv_page/yes_assets/yes-flag5.png"); 

        
        // echo "<br><br><br><br><br><br>";
        // var_dump($information);

        /**
         * | Field                 | Type         | Null | Key | Default | Extra |
         * +-----------------------+--------------+------+-----+---------+-------+
         * | org_id                | int(11)      | NO   |     | NULL    |       |
         * | org_name              | varchar(255) | NO   |     | NULL    |       |
         * | org_desc              | longtext     | NO   |     | NULL    |       |
         * | org_abbr              | varchar(16)  | NO   |     | NULL    |       |
         * | org_path_to_logo      | varchar(255) | NO   |     | NULL    |       |
         * | org_path_to_pub       | varchar(255) | NO   |     | NULL    |       |
         * | org_path_to_video     | varchar(255) | YES  |     | NULL    |       |
         * | org_mission           | longtext     | YES  |     | NULL    |       |
         * | org_vision            | longtext     | YES  |     | NULL    |       |
         * | org_path_to_forms     | longtext     | NO   |     | NULL    |       |
         * | org_path_to_price_pub | longtext     | NO   |     | NULL    |       |
         * | org_path_to_fb_page   | longtext     | YES  |     | NULL    |       |
         * | group_id              | int(11)      | NO   | MUL | 0       |       |
         * | org_booth_times        | varchar(255) | NO   |     | NULL    |                |
         * | org_path_to_background | varchar(255) | NO   |     | NULL    |                |
         * | org_tagline            | varchar(255) | YES  |     | NULL    |                |
         */

        // check if org has video or not (crucial for section 2)
        $has_video = isset($information['org_path_to_video']) && !empty($information['org_path_to_video']);
    ?>
    
    <title><?php echo $information['org_abbr']?></title>
    
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/org_indiv.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.3.0/color-thief.umd.js"></script>
    <script src="../js/colorToFiler.js"></script>
    <script src="../js/orgIndiv.js"></script>
</head>

<body>
    <?php require_once('nav_bar_2.php') ?>

    <!-- 1st Section: Org Logo, Name, Description, and Buttons -->
    <!-- TODO: update PHP for org-bg path -->
    <section id="section-1" class="text-center" 
            style="background-image: url(<?php echo $information['org_path_to_background']?>);">
        <!-- hidden image for getting dom-color purposes -->
        <img src="<?php echo $information['org_path_to_background']?>" style="display: none;" id="bg-img" onload="setDomColors()"/>
        <!-- logo & description -->
        <div class="row gx-5 gy-4 m-0 align-items-center">
            <!-- full width on mobile, 4/12 on desktop -->
            <!-- logo & abbreviated name -->
            <div class="col-lg-4">
                <img src= "<?php echo $information['org_path_to_logo']?>" class="logo"/>

                <!-- abbreviated org name (banner asset + org-name) -->
                <div class="mt-4 position-relative m-auto org-name-container">
                    <!-- TODO: replace w/ actual banner asset & edit text curve path for it when available -->
                    <img src="../assets/org_indiv_page/ribbonbanner.svg" class="position-relative centered-axis-x dom-color-filter" width="100%">
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
                                    <?php echo $information['org_abbr']?>
                                </textPath>
                            </text>
                        </svg>
                    </div>

                </div>
            </div>
            <!-- description & buttons -->
            <div class="col-lg-8">
                <div class="description-box dom-color-bg">
                    <h1>
                        <?php echo $information['org_name']?>
                    </h1>
                    <h5 class="mt-1 mb-3">
                        <?php
                        // TODO: add condition for when no physical booth times, print online booth times instead
                        ?>
                        Booth open from <?php echo $information['org_booth_times']?>
                    </h5>
                    <div class="text-scrollable-justified light-scroll">
                        <p class="lead">
                            <?php echo $information['org_desc']?>
                        </p>
                    </div>
                </div>
                <!-- buttons -->
                <div class="row pt-5 gy-4 justify-content-center">
                    <div class="col-md-5">
                        <a href=<?php echo $information['org_path_to_fb_page']?>>
                            <button type="button" class="btn btn-primary btn-lg">
                                Facebook
                            </button>
                        </a>
                    </div>
                    <div class="col-md-5">
                        <a href=<?php echo $information['org_path_to_forms']?>>
                            <button type="button" class="btn btn-primary btn-lg">
                                Register
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- After section 1: tea party bg for other sections -->
    <div id="tea-party-bg">
        <!-- 2nd Section: Optional Org Video -->
        <!-- May have to edit the condition for checking if org has video or not depending on backend API. -->
        <?php if ($has_video) { // start if ?>
            <section id="section-2" class="text-center">
                <div>
                    <h1 class="mb-4">
                        Organizational Video
                    </h1>
                    <div>
                        <iframe width="80%" height="90%" src=<?php echo $information['org_path_to_video']?>></iframe>
                    </div>
                </div>
            </section>
        <?php } // end if ?>
    
        <!-- 3rd Section: Main Pub, Mission, Vision -->
        <section id="section-3" class="container">
            <div class="row gx-5">
                <div class="col-lg-6 align-self-center">
                    <img src="<?php echo $information['org_path_to_pub']?>" width="100%"/>
                </div>
                <!-- 24px default padding - 0.6px for scroll bar -->
                <div class="col-lg-6" style="padding-right: 23.4px;">
                    <br>
                    <h1 class="dom-color-text">Mission</h1>
                    <div class="text-scrollable-justified dark-scroll">
                        <p class="lead">
                            <?php echo $information['org_mission']?>
                        </p>
                    </div>
                    <br><br>
                    <h1 class="dom-color-text">Vision</h1>
                    <div class="text-scrollable-justified dark-scroll">
                        <p class="lead">
                            <?php echo $information['org_vision']?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- 4th Section: Flagship Events (slideshow) -->
        <section id="section-4" class="mx-auto text-center p-0">
            <h1 class="mb-4" style="color: white;">Flagship Events</h1>
            <div id="flagship-carousel" class="carousel slide" data-bs-ride="carousel" >
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#flagship-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <?php // indicators for second 2nd slide onwards
                        for ($i = 1, $size = count($information['flagship_events']); $i < $size; ++$i) {
                            echo "<button type='button' data-bs-target='#flagship-carousel' 
                                    data-bs-slide-to='{$i}' aria-label='Slide {$i}'></button>";
                        }
                    ?>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo $information['flagship_events'][0]?>" class="d-block w-100" alt="Flagship event 1">
                    </div>
                    <?php // slides for second 2nd event onwards
                        for ($i = 1, $size = count($information['flagship_events']); $i < $size; ++$i) {
                            echo "<div class='carousel-item'>
                                     <img src={$information['flagship_events'][$i]} class='d-block w-100' alt='Flagship event {$i}'>
                                  </div>";
                        }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#flagship-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#flagship-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    
        <!-- 5th Section: Prices Pub, Buttons, Tagline -->
        <section id="section-5" class="container p-0 text-center">
            <div class="row gx-5 align-items-center">
                <div class="col-md-6 col-sm-5 col-12 pe-lg-5 pb-lg-2">
                    <img src="<?php echo $information['org_path_to_price_pub']?>" 
                        class="<?php echo ($has_video ? "has-video" : "no-video") ?>"/>
                </div>
                <div class="col-md-6 col-sm-7 col-12 d-grid gap-3 p-0">
                    <a href=<?php echo $information['org_path_to_fb_page']?>>
                        <button type="button" class="btn btn-primary btn-lg" style="width: 100%;">
                            Facebook
                        </button>
                    </a>
                    <a href=<?php echo $information['org_path_to_forms']?>>
                        <button type="button" class="btn btn-primary btn-lg" style="width: 100%;">
                            Register
                        </button>
                    </a>
                    <h1 class="dom-color-text mt-xl-4"><?php echo $information['org_tagline']?> </h1>
                </div>
            </div>
        </section>
    </div>


    <!-- ARW Footer -->
    <!-- To be inserted when it's available -->

    <!-- Must include for nav-bar-collapse on mobile -->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

    
</body>
</html>