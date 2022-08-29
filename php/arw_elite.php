<html lang="en">

<head>
    <title>ARW Elite</title>

    <?php require_once('head_2.php')?>

    <link rel="stylesheet" href="../css/style.css">

    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('ul.arw-cards').on('click', function() {
            $(this).toggleClass('transition');
        });
    });
    </script>
</head>

<body>

<style>
    .custom-bg {
        background-color: rgb(255, 255, 255, 0.85);
    }
    .custom-bg-green{
        background-color: rgb(34, 118, 0.50)
    }
    .custom-bg-orange {
        background-color: rgb(244, 162, 56, 0.85);
    }

    body {
  background: url('../assets/arw_cover_bg/cover_bg_noclouds.png') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}
    </style>

    <?php require_once('nav_bar_2.php') ?>

    <div class="center-cropped" style="background: white; height: 75px; z-index: -1"></div>

  <div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">The ARW Elite</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">ARW Elite aims to highlight the goals, culture, and values of the 49 organizations under the Council of Student Organizations through a series of online challenges. The Ultimate ARW Elite, best embodies the character of their organization and is a great example which the Lasallian community would look up to.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      Catch your Org’s Elite on the ARW Elite Coronation Night this "insert date". You may show support for your bets in our Facebook livestream by clicking the Facebook Icon. See you there!
      <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Facebook</button>
      </div>
    </div>
  </div>

  <div class="container custom-bg my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border-dark shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">The ARW Elite</h1>
        <p class="lead">ARW Elite aims to highlight the goals, culture, and values of the 49 organizations under the Council of Student Organizations through a series of online challenges. The Ultimate ARW Elite, best embodies the character of their organization and is a great example which the Lasallian community would look up to.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="..\assets\org_images\access-logo.webp" alt="ACCESS LOGO" width="720">
      </div>
    </div>
  </div>







            <!-- Desktop ver -->

            <!-- Mobile ver -->

            <!-- Both -->

    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

</html>
