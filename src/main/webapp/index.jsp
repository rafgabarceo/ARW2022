<a>
    <style>
        .container {
            max-width: 2000px;
            overflow: auto;
            margin: 0 auto;
        }
        .photoright img{
            width: 745px;
            height: 300px;
            border: 3px solid gray;
            margin: 20px;
            position: center;
            float: left;
            transform: rotate(3deg);
        }
        .photoleft img{
            width: 745px;
            height: 300px;
            border: 3px solid gray;
            margin: 20px;
            position: center;
            float: left;
            transform: rotate(-3deg);
        }
        .box {
            width: 1000px;
            height: 500px;
            background-color: #22763c;
            text-align: center;
            margin: 10px;
            padding: 15px;
            border: 3px solid black;
            position: center;
        }
    </style>
    <a require_once('head_2.php') </a> <%-- for top navigation --%>
    <a php require_once('nav_bar_2.php') </a> <%-- for top navigation --%>
    <center> <body>
        <div class = "container">

            <div class = "photoright">
                <img src="samplepix.jpg"/>
            </div>

            <div class = "photoleft">
                <img src="samplepix.jpg"/>
            </div>
        </div>

        <div class = "container">
            <div>
                <div class = "box"><h3>Title</h3><p>Add texts here</p> <%-- add texts --%>
                <button onClick="window.location.href='https://www.youtube.com/';">Click Me!</button>
                </div>
                <button onClick="window.location.href='https://www.youtube.com/';">Click Me!</button>
            </div>
        </div>

        <div class = "container">
            <div class = "photoright">
                    <img src="samplepix.jpg"/>
            </div>

                <div class = "photoleft">
                    <img src="samplepix.jpg"/>
                </div>
        </div>
    </center> </body>
</html>
