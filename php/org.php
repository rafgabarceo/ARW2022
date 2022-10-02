
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
         * Delete lines with 'DELETE' comment for production.
         */


        // Get information
        $myfile = fopen("key.config", "r") or die("Config error");
        $db_name = fgets($myfile);
        $db_pass = fgets($myfile);

        $api = new fetchARWAPI($org_abbrev, "localhost", $db_name, $db_pass, $db_name, 3306);

        // get org info
        $information = $api->get_info();

        // get org flagship events
        $org_flagship_events = $api->get_org_slides($org_abbrev);  // returns an associative array
        /**
         * Comment the next line and uncomment the one above when get_org_slides() is available.
         */
        // $org_flagship_events = array(  /**DELETE***/
        //     "orgs_id" => 1,
        //     "orgs_path_0" => "../assets/org_indiv_page/yes_assets/yes-flag1.png", 
        //     "orgs_path_1" => "../assets/org_indiv_page/yes_assets/yes-flag2.png", 
        //     "orgs_path_2" => "../assets/org_indiv_page/yes_assets/yes-flag3.png",
        //     "orgs_path_3" => "../assets/org_indiv_page/yes_assets/yes-flag4.png", 
        //     "orgs_path_extra" => "../assets/org_indiv_page/yes_assets/yes-flag5.png",
        //     "org_id" => -1
        // );
        // $information['org_path_to_background'] = "../assets/org_indiv_page/test_bg/wg-bg.png";  /**DELETE***/

        // retrieve non-empty values whose key starts with 'orgs_path_'
        $org_flagship_events = array_values(array_filter($org_flagship_events, function($key) {
            return strncmp($key, 'orgs_path_', 10) === 0;
        }, ARRAY_FILTER_USE_KEY));

        
        // echo "<br><br><br><br><br><br>"; /**DELETE***/
        // var_dump($information); /**DELETE***/

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


        // Set org bg to the default one when none is given
        $has_bg = isset($information['org_path_to_background']) && !empty($information['org_path_to_background']);
        if (!$has_bg) $information['org_path_to_background'] = "../assets/org_indiv_page/default_bg.png";

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
                <!-- <img src= "../assets/org_images/chemsoc-logo.webp" class="logo"/> --> <!--DELETE-->

                <!-- abbreviated org name (banner asset + org-name) -->
                <div class="mt-4 position-relative m-auto org-name-container">
                    <!-- TODO: replace w/ actual banner asset & edit text curve path for it when available -->
                    <img src="../assets/org_indiv_page/ribbonbanner.svg" width="100%" 
                        class="position-relative centered-axis-x <?php echo ($has_bg ? "dom-color-filter" : "default-filter") ?>" >
                    <div class="position-absolute org-name">
                        <!-- Bevel Text code taken from https://codepen.io/brrrl/pen/zamZRG -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 30" width="200%" height="100%">
                            <filter id="Bevel" filterUnits="objectBoundingBox" x="-10%" y="-10%" width="150%" height="150%">
                                <feGaussianBlur in="SourceAlpha" stdDeviation="0.2" result="blur"/>
                                <feSpecularLighting in="blur" surfaceScale="10" specularConstant="3.5" specularExponent="10" result="specOut" lighting-color="#ffffff">
                                <fePointLight x="-5000" y="-10000" z="0000"/>
                                </feSpecularLighting>
                                <feComposite in="specOut" in2="SourceAlpha" operator="in" result="specOut2"/>
                                <feComposite in="SourceGraphic" in2="specOut2" operator="arithmetic" k1="0" k2="1" k3="1" k4="0" result="litPaint" />
                            </filter>
                            <text x="50%" y="40%" class="bevel <?php echo ($has_bg ? "comp-color-text-fill" : "") ?>" filter="url(#Bevel)">
                                    <?php echo $information['org_abbr']?>
                            </text>
                        </svg>
                    </div>

                </div>
            </div>
            <!-- description & buttons -->
            <div class="col-lg-8">
                <div class="description-box <?php echo ($has_bg ? "dom-color-bg-opaque" : "") ?>">
                    <h1>
                        <?php echo $information['org_name']?>
                    </h1>
                    <div class="mt-3 text-scrollable-justified light-scroll">
                        <p class="lead">
                            <?php echo $information['org_desc']?>
                        </p>
                    </div>
                </div>
                <!-- buttons -->
                <div class="row pt-5 gy-4 justify-content-center">
                    <div class="col-md-5">
                        <a href=<?php echo $information['org_path_to_fb_page']?>>
                            <button type="button" class="btn btn-primary btn-lg <?php echo ($has_bg ? "dom-color-bg" : "") ?>">
                                Facebook
                            </button>
                        </a>
                    </div>
                    <div class="col-md-5">
                        <a href=<?php echo $information['org_path_to_forms']?>>
                            <button type="button" class="btn btn-primary btn-lg <?php echo ($has_bg ? "dom-color-bg" : "") ?>">
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
                    <h1 class="<?php echo ($has_bg ? "dom-color-text" : "") ?>">Mission</h1>
                    <div class="text-scrollable-justified dark-scroll">
                        <p class="lead">
                            <?php echo $information['org_mission']?>
                        </p>
                    </div>
                    <br><br>
                    <h1 class="d<?php echo ($has_bg ? "dom-color-text" : "") ?>t">Vision</h1>
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
                        for ($i = 1, $size = count($org_flagship_events); $i < $size; ++$i) {
                            echo "<button type='button' data-bs-target='#flagship-carousel' 
                                    data-bs-slide-to='{$i}' aria-label='Slide {$i}'></button>";
                        }
                    ?>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo $org_flagship_events[0]?>" class="d-block w-100" alt="Flagship event 1">
                    </div>
                    <?php // slides for second 2nd event onwards
                        for ($i = 1, $size = count($org_flagship_events); $i < $size; ++$i) {
                            echo "<div class='carousel-item'>
                                     <img src={$org_flagship_events[$i]} class='d-block w-100' alt='Flagship event {$i}'>
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
                        <button type="button" class="btn btn-primary btn-lg <?php echo ($has_bg ? "dom-color-bg" : "") ?>" style="width: 100%;">
                            Facebook
                        </button>
                    </a>
                    <a href=<?php echo $information['org_path_to_forms']?>>
                        <button type="button" class="btn btn-primary btn-lg <?php echo ($has_bg ? "dom-color-bg" : "") ?>" style="width: 100%;">
                            Register
                        </button>
                    </a>
                    <h1 class="mt-xl-4 <?php echo ($has_bg ? "dom-color-text" : "") ?>"><?php echo $information['org_tagline']?> </h1>
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