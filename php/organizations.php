<?php

?>
<html lang="en">

<head>
    <title>Organizations</title>

    <?php require_once('head.php')?>

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/orgs_list.css">

    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('ul.arw-cards').on('click', function() {
            $(this).toggleClass('transition');
        });
    });
    </script>
</head>

<body>
    <?php require_once('nav_bar.php') ?>

    <!-- COVER PHOTO -->
    <div class="center-cropped" style="background: white; height: 100vh; z-index: -1">
        <!-- Desktop ver -->

        <!-- Mobile ver -->

        <!-- Both -->

    </div>

    </div>

    <!-- COVER PHOTO -->
    <div class="left-cropped" style="background: pink; z-index: -1">
        <?php
        $org_info_json = file_get_contents('js/org-info.json');
        $decoded_json = json_decode($org_info_json, true);
        $clusters = $decoded_json["clusters"];

        foreach ($clusters as $cluster) {
            echo '
                <div style="padding: 5% 0% 0% 0%; margin: 0% 5% 0% 5%;">
                    <h2 class="cluster-abrv">' . $cluster["cluster-name"] . '</h2>
                    <h3 class="cluster-long-name">' . $cluster["cluster-long-name"] . '</h3>
                    <div class="arw-card-deck">
                        <ul class="arw-cards">';
            echo '<li class="arw-card arw-card-1">
                            <div class="arw-card-inner">
                                <div class="arw-card-front">
                                    <img src="" />
                                    <div class="content">
                                        <h1>' . $cluster["cluster-name"] . '</h1>
                                    </div>
                                </div>
                                <div class="arw-card-back">
                                </div>
                            </div>
                        </li>';

            for ($i = 0; $i < count($cluster["organizations"]); $i++) {
                echo '<a href="' . $cluster["organizations"][$i]["page"] . '">
                                <li class="arw-card arw-card-' . $i + 2 . '">
                                    <div class="arw-card-inner">
                                        <div class="arw-card-front">
                                            <img src="./assets/org_images/' . $cluster["organizations"][$i]["logo"] . '" />
                                            <div class="content">
                                                <h1>' . $cluster["organizations"][$i]["org-name"] . '</h1>
                                            </div>
                                        </div>
                                        <div class="arw-card-back">
                                            <div class="content">';
                if ($cluster["organizations"][$i]["physical-booth"]) {
                    echo '<h2>Physical Booth:<br>' . $cluster["organizations"][$i]["physical-booth-times"] . '</h2>';
                };
                echo '<h2>Online Booth:<br>' . $cluster["organizations"][$i]["online-booth-times"] . '</h3>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </a>';
            };

            echo '<li class="arw-card arw-card-' . count($cluster["organizations"]) + 2 . '">
                            <div class="arw-card-inner">
                                <div class="arw-card-front">
                                    <img src="" />
                                    <div class="content">
                                        <h1>' . $cluster["cluster-name"] . '</h1>
                                    </div>
                                </div>
                                <div class="arw-card-back">
                                </div>
                            </div>
                        </li>';
            echo '</div></div>';
        }



        ?>
    </div>



    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

</html>