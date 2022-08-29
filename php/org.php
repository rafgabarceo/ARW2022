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

</head>

<body>
    <?php require_once('nav_bar_2.php') ?>
        
    <!-- 1st Section: Org Logo, Name, Description, and Buttons -->
    <!-- Replace background image URL to backend call when available. 
    For example: "...url(<?php echo $org_info['bg']?>)" -->
    <section class="section-1 text-center" style="background-image: url('../assets/arw_cover_bg/cover_bg_noclouds.png');">
        <!-- logo & description -->
        <div class="row gx-5 gy-5 m-0 align-items-center">
            <!-- full width on mobile, 4/12 on desktop -->
            <div class="col-lg-4">
                <img src= "../assets/org_images/<?php echo $org_info['logo']?>" class="logo"/>
                <h2 class="mt-4">
                    <?php echo $org_info['org-name']?>
                </h2>
            </div>
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
    
    <p>
        Description: <br><br>
        Mission: <?php echo $org_info['mission']?><br><br>
        Vission: <?php echo $org_info['vision']?>
    </p>
    <!-- 2nd Section: Org Video (optional) -->
    <!-- May have to edit the condition for checking if org has video or not depending on backend API. -->
    <?php if (isset($org_info['video'])) { ?>
        <section>
            <!-- Insert html here -->
            Hi there!
        </section>
    <?php } // end if ?>

    <!-- 3rd Section: Main Pub, Mission, Vision -->
    <section>
        
    </section>

    <!-- 4th Section: Flagship Events (slideshow) -->
    <section>
        
    </section>

    <!-- 5th Section: Prices Pub, Buttons, Tagline -->
    <section>

    </section>

    <!-- Footer -->
    <!-- To be inserted when it's available -->

    <!-- Must include for nav-bar-collapse on mobile -->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>