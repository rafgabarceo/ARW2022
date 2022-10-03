<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/faq.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php require_once('head_2.php')?>
    <style>
        body
        {
            overflow: scroll;
        }
    </style>
</head>
<body>
    <?php require_once('nav_bar_2.php') ?>

    <div class="back-center" style = "background-image: url('../assets/arw_faqs/wood bg.png'); z-index: 1;">
        <div class="container" style="position: relative;">
            <img class = "FAQs" src="../assets/arw_faqs/FAQs.png" alt="">
        </div>

        <div class="container" style = "position: sticky; z-index: 4; width: 75%">
        
            <div class = "container accordion-container">
                <button class="accordion">
                    <span class = "QFont">Q: </span>
                    <span class = "QuestionFont">What organizations can I join?</span>
                </button>
                <div class="panel">
                    <span class = "QFont">A: </span>

                    <span class = "AFont">
                    You may check out the list of booths of the organizations through the booth schedules sheet (https://bit.ly/ARW2022-BoothSchedules) or you may also check the organizations tab in the website for the list of organizations under the Council of Student Organizations (CSO) that are available for you to join.
                    </span>

                    <!-- Spacer -->
                    <p></p>
                </div>
            </div>
            

            <div class = "container accordion-container">
                <button class="accordion">
                    <span class = "QFont">Q: </span>
                    <span class = "QuestionFont">How can I join an organization?</span>
                </button>
                <div class="panel">
                    <span class = "QFont">A: </span>

                    <span class = "AFont">
                    You may visit the organizations tab through for the organizations under the Council of Student Organizations (CSO) and their respective registration forms. For organizations outside CSO you may reach out to them by joining their physical or online booths.
                    </span>

                    <!-- Spacer -->
                    <p></p>
                </div>
            </div>

            <div class = "container accordion-container">
                <button class="accordion">
                    <span class = "QFont">Q: </span>
                    <span class = "QuestionFont">Where can I learn more about a specific organization?</span>
                </button>
                <div class="panel">
                    <span class = "QFont">A: </span>

                    <span class = "AFont">
                    You may visit the ARW 2022 website for details of an organization and their previous events. You may also join their physical or online booths as well to get a feel of the organization's atmosphere or to meet the people who you could be with.
                    </span>

                    <!-- Spacer -->
                    <p></p>
                </div>
            </div>

            <div class = "container accordion-container">
                <button class="accordion">
                    <span class = "QFont">Q: </span>
                    <span class = "QuestionFont">What is the difference between ARW Elite and Wonderweek?</span>
                </button>
                <div class="panel">
                    <span class = "QFont">A: </span>

                    <span class = "AFont">
                    ARW Elite is a pagaent which showcases representatives from each organization wherein they show what it means to be part of their organization. Wonderweek is the recruitment week wherein students can play games and interact with the officers of each organization to get to know more about them.
                    </span>

                    <!-- Spacer -->
                    <p></p>
                </div>
            </div>

            <div class = "container accordion-container">
                <button class="accordion">
                    <span class = "QFont">Q: </span>
                    <span class = "QuestionFont">Do I have to pay a membership fee to be part of any organization?</span>
                </button>
                <div class="panel">
                    <span class = "QFont">A: </span>

                    <span class = "AFont">
                    You may check each organization’s respective page and check whether or not they have a membership fee and how much it is. You may find the necessary payment details in each organization’s registration form.
                    </span>

                    <!-- Spacer -->
                    <p></p>
                </div>
            </div>

            <!-- Last Q spacer -->
            <p style = "height: 10%"></p>
        </div>
        <div style = "background-color: #d82d27; height: 11.5vh">
        <?php
            require_once('footer.php');
        ?>
        </div>
            
    </div>
   

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
