<?php
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wWx`idth=device-width, initial-scale=1.0">
    <title>ARWonderland</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Berkshire Swash">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/rabbit_hole.css">


    <style>body{font-family: "Berkshire Swash";};</style>

    <?php
        //  $org_list_json = file_get_contents('js/orgs-list.json');
        //  $decoded_org_list_json = json_decode($org_list_json, true);
        //  $template = file_get_contents('orgs/_template.php');

        //  foreach($decoded_org_list_json["organizations"] as $org) {
        //     $org_json = file_get_contents('js/org-info/'. $org .'.json');
        //     $decoded_org_json = json_decode($org_json, true);

        //     $org_page = str_replace("{{org-name}}", $decoded_org_json["org-name"], $template);
        //     $org_page = str_replace("{{org-long-name}}", $decoded_org_json["org-long-name"], $org_page);
        //     $org_page = str_replace("{{logo}}", $decoded_org_json["logo"], $org_page);
        //     $org_page = str_replace("{{description}}", $decoded_org_json["description"], $org_page);
        //     $org_page = str_replace("{{mission}}", $decoded_org_json["mission"], $org_page);
        //     $org_page = str_replace("{{vision}}", $decoded_org_json["vision"], $org_page);
        //     $org_page = str_replace("{{fb-link}}", $decoded_org_json["fb-link"], $org_page);
        //     $org_page = str_replace("{{physical-booth-times}}", $decoded_org_json["physical-booth-times"], $org_page);
        //     $org_page = str_replace("{{online-booth-times}}", $decoded_org_json["online-booth-times"], $org_page);
            
        //     file_put_contents('orgs/' . $org . '.php', $org_page);
        //  }
    ?>

</head>

<body>
    <div class="moving_bg" id="bg-div" style = "background-image: url('./assets/arw_rabbit_hole/RABBIT HOLE/BG RABBIT HOLE.png')">
        <img src="./assets/arw_rabbit_hole/RABBIT HOLE/CORE.png" id="_fixed_layers" class="_bg_moving">
        <img src="./assets/arw_rabbit_hole/RABBIT HOLE/1STLAYER_MIDDLE.png" id="_moving_layer1" class="_bg_moving">
        <img src="./assets/arw_rabbit_hole/RABBIT HOLE/2NDLAYER_MIDDLE.png" id="_moving_layer2" class="_bg_moving">
        <img src="./assets/arw_rabbit_hole/RABBIT HOLE/3RDLAYER_MIDDLE.png" id="_moving_layer3" class="_bg_moving">
        <img src="./assets/arw_rabbit_hole/RABBIT HOLE/3RDLAYER_MIDDLE.png" id="_moving_layer4" class="_bg_moving">
        <img src="./assets/arw_rabbit_hole/RABBIT HOLE/Rabbit Hole Core.png" id="_core" class="_bg_moving">
    </div>
    
    <div class="container centered rounded bg-dark opacity-75 text-center text-white">
        <!-- TITLE -->
        <h1 class = "countdown-font">ARW 2022</h1>
        <!-- TIMER -->
        <script language="JavaScript">
            TargetDate = "2022-09-23T05:00:00";
            CountActive = true;
            CountStepper = -1;
            LeadingZero = true;
            FinishMessage = "It is finally here!";
        </script>
        <!-- Timer javascript -->
        <script language="JavaScript" src="./js/countdown.js"></script>
    </div>



    
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>