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

    <!-- COVER PHOTO -->
    <!-- <div class="center-cropped" style="background: white; height: 100vh; z-index: -1">
        Desktop ver 

        Mobile ver 

        Both
    </div> -->


    <!-- <section>
        <div class="d-none d-lg-block flex">
            <div class="card-body">
                <img src="../assets/org_page/Title.png">
            </div>   
        </div>
        <div class="d-lg-none">
            <img src="../assets/org_page/Title.png" class="" style="position: relative; max-width: 540px; height: 150px;">
        </div>
    </section> -->
        
    <section class="d-none d-lg-flex" style="background-image:url(../assets/org_page/woodbgtop.png); background-size: 100% 100%;">
        <div class="card-body">
            <img src="../assets/org_page/Title.png">
        </div>   
    </section>


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
                    <p class="cso-sub-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
        <!-- Mobile Version -->
        <div class="d-lg-none" style="padding: 80% 25% 80% 25%; background: url(../assets/org_page/Scroll.png); background-size: 100% 100%; background-repeat:no-repeat;">
            <div class="d-flex flex-column">
                <div class="align-self-center" style="border-radius: 50%; width: 10rem; height: 10rem; content: url(../assets/org_images/cso-logo.webp);">
                </div>
                <div class="cso-title-div">
                    <p style="font-size: 36px; text-align: center;">Council of Student Organizations</p>
                    <p style="font-size: 16px; text-align: center;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </section>

    </div>

    <!-- COVER PHOTO -->
    <div class="d-none d-lg-block left-cropped hide-scrollbar" style="background: url(../assets/org_page/wood\ bg.png); z-index: -1;">
        <?php
        $org_info_json = file_get_contents('../js/org-info.json');
        $decoded_json = json_decode($org_info_json, true);
        $clusters = $decoded_json["clusters"];
        $counter = 0;

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
                                <div class="arw-card-front">
                                    <img src="" />
                                    <div class="content">
                                        <h1>' . $cluster["cluster-name"] . '</h1>
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
                                            <img src="../assets/org_images/' . $cluster["organizations"][$i]["logo"] . '" />
                                            <div class="content">
                                                <h1>' . $cluster["organizations"][$i]["organization"] . '</h1>
                                            </div>
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
                                <div class="arw-card-front">
                                    <img src="" />
                                    <div class="content">
                                        <h1>' . $cluster["cluster-name"] . '</h1>
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


    <div class="d-lg-none left-cropped hide-scrollbar" style="background: url(../assets/org_page/wood\ bg.png); z-index: -1;">
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
                echo'<div style="padding: 5% 0% 0% 0%; margin: 0% 5% 0% 5%; overflow-x: hidden; background-image: url(../assets/org_page/WOODENBOARD3.png); background-repeat: no-repeat; background-size: 100% 100%;">';
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
                                <div class="arw-card-front">
                                    <img src="" />
                                    <div class="content">
                                        <h1>' . $cluster["cluster-name"] . '</h1>
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
                                            <img src="../assets/org_images/' . $cluster["organizations"][$i]["logo"] . '" />
                                            <div class="content">
                                                <h1>' . $cluster["organizations"][$i]["organization"] . '</h1>
                                            </div>
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
                                <div class="arw-card-front">
                                    <img src="" />
                                    <div class="content">
                                        <h1>' . $cluster["cluster-name"] . '</h1>
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






    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

</html>