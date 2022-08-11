<html lang="en">
<head>
    <?php require_once('head.php')?>
    <?php
        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $pageID = parse_url($url, PHP_URL_QUERY);

        // Will have to replace this with a function returning a .json. Communication must be from back-end API.
        // $org_json = file_get_contents('js/org-info/'. $pageID .'.json');
        $org_info = json_decode($org_json, true);
    ?>
    <title><?php echo $org_info['org-name']?></title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <?php require_once('nav_bar.php') ?>
        
    <div style="margin-top: 10%;">
        <img src= "/assets/org_images/<?php echo $org_info['logo']?>" style="max-width: 200px"/>
        <h3>
            <?php echo $org_info['org-name']?><br>
            <?php echo $org_info['org-long-name']?><br>
        </h3>
        <h4>
            <a href=<?php echo $org_info['fb-link']?>>
                Facebook Link
            </a><br>
            <br>Physical Booth Times: <?php echo $org_info['physical-booth-times']?><br>
            Online Booth Times: <?php echo $org_info['online-booth-times']?><br>
        </h4>
        <p>
            Description: <?php echo $org_info['description']?><br><br>
            Mission: <?php echo $org_info['mission']?><br><br>
            Vission: <?php echo $org_info['vision']?>
        </p>
    </div>
    
</body>
</html>