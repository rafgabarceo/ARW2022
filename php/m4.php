<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('head_2.php')?>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    </head>

<a>
    <style>
        .container {
            max-width: 1440px;
            margin: 0px;
            position: relative;
        }
        .background {
            background-image: url("bg.png");
            height: 1440px;
            margin: 0;
            position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }
        .photorighttop img{
            margin: 130px 0px 0px 0px;
            width: 705px;
            height: 400px;
            float: left;
            border: 30px solid black;
            transform: rotate(3deg);
            border-image: url(frame.png);
            border-image-slice: 250;
            border-image-repeat: stretch;
        }
        .photolefttop img{
            margin: 130px 0px 0px 0px;
            width: 705px;
            height: 300px;
            border: 3px solid gray;
            position: center;
            float: left;
            transform: rotate(-3deg);
        }
        .photorightbottom img{
            margin: 600px 0px 0px 0px;
            width: 705px;
            height: 300px;
            border: 3px solid gray;
            float: right;
            transform: rotate(3deg);
        }
        .photoleftbottom img{
            margin: 500px 0px 0px 0px;
            width: 705px;
            height: 300px;
            border: 3px solid gray;
            position: center;
            float: left;
            transform: rotate(-3deg);
        }
        .center img{
            margin: -1100px 0px 0px 400px;
            border: 0px;
            width: 700px;
            height: 1000px;
            
        }
        .box {
            border: 0px;
            position: absolute;
            
        }
        .button {
            margin: 1050px 0px 0px 700px;
            padding: 15px 43px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
        }
        

    </style>
    
        
    <body>
        
        <?php require_once('nav_bar_2.php') ?>
        <center>
            <div class = "background"> 
            <div class = "container">
                <div class = "photorighttop"> <img src="samplepix.jpg"/>
                <div class = "photolefttop"> <img src="samplepix.jpg"/>
                <div class = "photorightbottom"> <img src="samplepix.jpg"/>
                <div class = "photoleftbottom"> <img src="samplepix.jpg"/>
                <div class = "center"> <img src="scroll.png"/>
                <div class = "box"> 
                <div class = " button"> <button onClick="window.location.href='https://www.youtube.com/';">Click Me!</button> 
                </div>
            </div>
            </div>
        </center>



           
           

                
    
    </center>
    </body>
</html>
