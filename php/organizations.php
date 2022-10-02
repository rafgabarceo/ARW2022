<?php

?>
<html lang="en">

<head>
    <title>Organizations</title>

    <?php require_once('head_2.php')?>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/orgs_list.css">
    <link rel="stylesheet" href="../css/organization.css">

    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('ul.arw-cards').on('click', function() {
            $(this).toggleClass('transition');
        });
    });
    </script>
</head>

<body style="overflow-x:hidden;">
    <?php require_once('nav_bar_2.php') ?>

    <!-- Desktop Version -->
    <section class="d-none d-lg-flex" style="background-image:url(../assets/org_page/woodbgtop.png); background-size: 100% 100%;">
        <div class="card-body">
            <img src="../assets/org_page/Title.png">
        </div>   
    </section>

    <!-- Mobile Version -->
    <section class="d-lg-none">
        <div>
            <img src="../assets/org_page/Title.png" class="" style="position: absolute; left: -20px; max-width: 540px; height: 150px;">
        </div>
    </section>

    <section class="cso-section">
        <!-- Desktop Version -->
        <div class="d-none d-lg-block logo-wrapper">
            <div class="d-flex flex-column">
                <div class="cso-logo align-self-center">
                </div>
                <div class="cso-title-div">
                    <p class="cso-text">Council of Student Organizations</p>
                </div>
                <button class="btn btn-success rounded-pill align-self-center" style="width: 50%; height:3rem;">CSO</button>
            </div>
        </div>
        <!-- Mobile Version -->
        <div class="d-lg-none" style="padding: 10% 25% 10% 25%;">
            <div class="d-flex flex-column">
                <div class="align-self-center" style="border-radius: 50%; width: 10rem; height: 10rem; content: url(../assets/org_images/cso-logo.webp);">
                </div>
                <div class="cso-title-div">
                    <p style="font-size: 36px; text-align: center;">Council of Student Organizations</p>
                </div>
                <button class="btn btn-success rounded-pill align-self-center" style="width: 50%; height:3rem;">CSO</button>
            </div>
        </div>
    </section>

    </div>

    <!-- COVER PHOTO -->
    <!-- Desktop Version -->
    <div class="d-none d-lg-block left-cropped hide-scrollbar" style="background: url(../assets/org_page/wood\ bg.png); z-index: -1; padding: 0% 0% 5% 0%; background-repeat: repeat-y;">

        <?php
        $org_info_json = file_get_contents('../js/org-info.json');
        $decoded_json = json_decode($org_info_json, true);
        $clusters = $decoded_json["clusters"];
        $counter = 0;

        $clusterColors = [
            'aso' => 'rgb(93, 81, 161)',
            'aspire' => 'rgb(215, 42, 39)',
            'cap13' => 'rgb(248, 162, 56)',
            'engage' => 'rgb(36, 62, 147)',
            'probe' => 'rgb(33, 118, 60)'
        ];

        foreach ($clusters as $cluster) {
            if (count($clusters) != $counter+1) {
                echo'<div style="padding: 5% 0% 0% 0%; margin: 0% 5% 5% 5%; overflow-x: hidden; background-image: url(../assets/org_page/WOODENBOARD2.png); background-repeat: no-repeat; background-size: 100% 100%;">';
            }
            else {
                echo'<div style="padding: 5% 0% 0% 0%; margin: 0% 5% 0% 5%; overflow-x: hidden; background-image: url(../assets/org_page/WOODENBOARD2.png); background-repeat: no-repeat; background-size: 100% 100%;">';
            }
            echo ' 
                    <div class="card">
                        <h2 class="cluster-abrv">' . $cluster["cluster-name"] . '</h2>
                        <h3 class="cluster-long-name">' . $cluster["cluster-long-name"] . '</h3>
                    </div>
                    <div class="card-parent">
                    <div class="arw-card-deck" style="overflow:auto; overflow-y:hidden;">
                        <ul class="arw-cards">';
            echo '<li class="arw-card arw-card-1">
                            <div class="arw-card-inner">
                                <div class="arw-card-front" style="background-image: url(../assets/org_page/'.$cluster["cluster-name"].'.png); background-size: cover;>

                                </div>
                            </div>
                        </li>';

            for ($i = 0; $i < count($cluster["organizations"]); $i++) {
                echo '<a href="' . $cluster["organizations"][$i]["page"] . '">
                                <li class="arw-card arw-card-' . $i + 2 . '">
                                    <div class="arw-card-inner">
                                        <div class="arw-card-front">
                                            <h1 class="top-left-card" style="color: '. $clusterColors[strtolower($cluster["cluster-name"])] .'">'. substr($cluster["organizations"][$i]["organization"], 0, 1) .'</h1>
                                            <img src="../assets/org_images/' . $cluster["organizations"][$i]["logo"] . '";/>
                                            <h2 style="color: '. $clusterColors[strtolower($cluster["cluster-name"])] .'; height: auto">' . $cluster["organizations"][$i]["organization"] . '</h2>
                                            <h1 class="bottom-right-card" style="color: '. $clusterColors[strtolower($cluster["cluster-name"])] .'">'. substr($cluster["organizations"][$i]["organization"], 0, 1) .'</h1>
                                        </div>
                                        <div class="arw-card-back" style="background-image: url(../assets/org_page/'.$cluster["cluster-name"].'.png); background-size: cover;">
                                            <div class="content">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </a>';
            };

            echo '<li class="arw-card arw-card-' . count($cluster["organizations"]) + 2 . '">
                            <div class="arw-card-inner">
                                <div class="arw-card-front" style="background-image: url(../assets/org_page/'.$cluster["cluster-name"].'.png); background-size: cover;>
                                    <div class="content">
                                    </div>
                                </div>
                            </div>
                        </li>';
            echo '</div></div>';
            $counter++;
        }



        ?>
    </div>

    <!-- Mobile Version -->
    <div class="d-lg-none left-cropped hide-scrollbar" style="background: url(../assets/org_page/wood\ bg.png); z-index: -1; padding: 0% 0% 10% 0%; background-repeat: repeat-y;">
        <?php
        $org_info_json = file_get_contents('../js/org-info.json');
        $decoded_json = json_decode($org_info_json, true);
        $clusters = $decoded_json["clusters"];
        $counter = 0;

        foreach ($clusters as $cluster) {
            if (count($clusters) != $counter+1) {
                echo'<div style="padding: 5% 0% 0% 0%; margin: 0% 5% 5% 5%; overflow-x: hidden; background-image: url(../assets/org_page/WOODENBOARD3.png); background-repeat: no-repeat; background-size: 100% 100%;">';
            }
            else {
                echo'<div style="padding: 5% 0% 10% 0%; margin: 0% 5% 5% 5%; overflow-x: hidden; background-image: url(../assets/org_page/WOODENBOARD3.png); background-repeat: no-repeat; background-size: 100% 100%;">';
            }
            echo ' 
                    <div class="card">
                        <h2 class="cluster-abrv">' . $cluster["cluster-name"] . '</h2>
                        <h3 class="cluster-long-name">' . $cluster["cluster-long-name"] . '</h3>
                    </div>
                    <div class="card-parent">
                    <div class="arw-card-deck" style="overflow:auto; overflow-y:hidden;">
                        <ul class="arw-cards">';
            echo '<li class="arw-card arw-card-1">
                                <div class="arw-card-inner">
                                <div class="arw-card-front" style="background-image: url(../assets/org_page/'.$cluster["cluster-name"].'.png); background-size: cover;>
                                    <img src="" />
                                    <div class="content">
                                    </div>
                                </div>
                                <div class="arw-card-back" style="background-image: url(../assets/org_page/'.$cluster["cluster-name"].'.png); background-size: auto 100%;">
                                </div>
                            </div>
                        </li>';

            for ($i = 0; $i < count($cluster["organizations"]); $i++) {
                echo '<a href="' . $cluster["organizations"][$i]["page"] . '">
                                <li class="arw-card arw-card-' . $i + 2 . '">
                                    <div class="arw-card-inner">
                                        <div class="arw-card-front">
                                            <h1 class="top-left-card" style="color: '. $clusterColors[strtolower($cluster["cluster-name"])] .'">'. substr($cluster["organizations"][$i]["organization"], 0, 1) .'</h1>
                                            <img src="../assets/org_images/' . $cluster["organizations"][$i]["logo"] . '";/>
                                            <div class="content">
                                                <h1 style="color: '. $clusterColors[strtolower($cluster["cluster-name"])] .'">' . $cluster["organizations"][$i]["organization"] . '</h1>
                                            </div>
                                            <h1 class="bottom-right-card" style="color: '. $clusterColors[strtolower($cluster["cluster-name"])] .'">'. substr($cluster["organizations"][$i]["organization"], 0, 1) .'</h1>
                                        </div>
                                        <div class="arw-card-back" style="background-image: url(../assets/org_page/'.$cluster["cluster-name"].'.png); background-size: cover;">
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
                            <div class="arw-card-front" style="background-image: url(../assets/org_page/'.$cluster["cluster-name"].'.png); background-size: cover;>
                                    <img src="" />
                                    <div class="content">
                                    </div>
                                </div>
                                <div class="arw-card-back" style="background-image: url(../assets/org_page/'.$cluster["cluster-name"].'.png); background-size: cover;">
                                </div>
                            </div>
                        </li>';
            echo '</div></div></div>';
            $counter++;
        }
        ?>
    </div>
    <?php
        require_once('footer.php');
    ?>
    


    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

</html>