<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/faq.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php require_once('head_2.php')?>
</head>
<body>
    <?php require_once('nav_bar_2.php') ?>

    <div class="center-cropped" style = "background-image: url('../assets/arw_faqs/wood bg.png'); background-attachment: fixed; height: 100vh; z-index: 1"></div>

    <section class="centered container">
        <h2 style = "text-align: center;">Frequently Asked Questions</h2>
    
        <div class = "row">
            <div class = "col">
            <button class="accordion rounded-pill mt-3">#1</button>
            <div class="panel rounded-bottom">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>        
            </div>
            <div class = "col">
            <button class="accordion rounded-pill mt-3">#2</button>
            <div class="panel rounded-bottom">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>        
            </div>
        </div>
        <div class = "row">
            <div class = "col">
            <button class="accordion rounded-pill mt-3">#3</button>
            <div class="panel rounded-bottom">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>        
            </div>
            <div class = "col">
            <button class="accordion rounded-pill mt-3">#4</button>
            <div class="panel rounded-bottom">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>        
            </div>
        </div>
        

        

    </section>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
            } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
            } 
        });
        }
    </script>

</body>
</html>
