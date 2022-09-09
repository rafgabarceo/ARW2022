<!-- Indiv org template -->
<html lang="en">
<head>
    <?php require_once('head_2.php')?>
    <?php
        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $pageID = parse_url($url, PHP_URL_QUERY);

        // Will have to replace file_get_contents() with a function returning a .json. Communication must be from back-end API.
        $org_json = file_get_contents('../js/org-info/'. $pageID .'.json');
        $org_info = json_decode($org_json, true);
    ?>
    
    <title><?php echo $org_info['org-name']?></title>
    
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/org_indiv.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.3.0/color-thief.umd.js"></script>
</head>

<!-- onload="getOrgBgBrightness('../assets/arw_cover_bg/cover_bg_noclouds.png')" -->
<body >
    <?php require_once('nav_bar_2.php') ?>
        
    <!-- 1st Section: Org Logo, Name, Description, and Buttons -->
    <!-- Replace background image URL to backend call when available. 
    For example: "...url(<?php echo $org_info['bg']?>)" -->
    <section class="section-1 text-center " style="background-image: url('../assets/arw_cover_bg/cover_bg_noclouds.png');">
        <!-- logo & description -->
        <div class="row gx-5 gy-4 m-0 align-items-center">
            <!-- full width on mobile, 4/12 on desktop -->
            <!-- logo & abbreviated name -->
            <div class="col-lg-4">
                <img src= "../assets/org_images/<?php echo $org_info['logo']?>" class="logo"/>

                <!-- abbreviated org name (banner asset + org-name) -->
                <div class="mt-4">
                    <!-- will insert banner asset & edit css for it when available -->
                    <img src="" alt="">
                    <!-- will add svg for curved text -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 30" width="100%" height="100%">   
                            <filter id="Bevel" filterUnits="objectBoundingBox" x="-10%" y="-10%" width="150%" height="150%">
                                <feGaussianBlur in="SourceAlpha" stdDeviation="0.2" result="blur"/>
                                <feSpecularLighting in="blur" surfaceScale="10" specularConstant="3.5" specularExponent="10" result="specOut" lighting-color="#ffffff">
                                <fePointLight x="-5000" y="-10000" z="0000"/>
                                </feSpecularLighting>
                                <feComposite in="specOut" in2="SourceAlpha" operator="in" result="specOut2"/>
                                <feComposite in="SourceGraphic" in2="specOut2" operator="arithmetic" k1="0" k2="1" k3="1" k4="0" result="litPaint" />
                            </filter>
                        <text x="5" y="18" class="bevel" filter="url(#Bevel)">
                            <?php echo $org_info['org-name']?>
                        </text>
                        </svg>
                    </div>
                </div>


            </div>
            <!-- description & buttons -->
            <div class="col-lg-8">
                <div class="description-box">
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
        <section>
            <!-- Insert html here -->
            Hi there!
        </section>
    <?php } // end if ?>

    <!-- 3rd Section: Main Pub, Mission, Vision -->
    <section>
        Mission: <?php echo $org_info['mission']?><br><br>
        Vission: <?php echo $org_info['vision']?>
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

    <script src="../js/org_indiv.js"></script>
</body>
</html>