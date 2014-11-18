<?php require_once('../includes/functions.php'); ?>
<!DOCTYPE html>

<html class="full" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>
    <link rel="stylesheet" href="animate.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>ABADDON</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/hero.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/the-big-picture.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" id="allbutton">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php $name = "";echo "<a href='../heroes/" . get_all_hero($name) . ".php'>" . "<button id='allbuttonButton'type='button' class='btn btn-default'>All</a></button>";?>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="navbarItems" id="navbardiv" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <?php $name = "";echo "<a href='../heroes/" . get_strength_hero($name) . ".php'>" . "<button id='strengthbutton'type='button' class='btn btn-default'>Strength</a></button>";?>
                    </li>
                    <li>
                        <?php $name = "";echo "<a href='../heroes/" . get_agility_hero($name) . ".php'>" . "<button id='agilitybutton' type='button' class='btn btn-default'>Agility</a></button>";?>
                    </li>
                    <li>
                        <?php $name = "";echo "<a href='../heroes/" . get_intelligence_hero($name) . ".php'>" . "<button id='intelligencebutton' type='button' class='btn btn-default'>Intelligence</a></button>";?>
                    </li>
                    <li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div id="container">
    <div id="content">
<h1 id="heroName" class="animated fadeInDown">Abaddon</h1>
<h2 id="slogan">the Lord of Avernus</h2>
<br>
<div id="heroportrait">
    <video width="450" height="300" autoplay loop>
        <source src="heroports/abaddon.webm.webm" type="video/webm" />
    </video>
</div>
<img id="stat" src="heroStats/abaddon.png" >
<br>
<br>
<div id="wrap">
    <div id="left_col">
        <p id="prosTitle">PROS</p>
        <ul id="proconlists">
            <li>Really good support</li>
            <li>Has basically 2 lives if smart</li>
            <li>He is the first hero on the list</li>
            </ul>
    </div>
    <div id="right_col">
        <p id="consTitle">CONS</p>
        <ul id="proconlists">
            <li>You are screwed if silenced</li>
            <li>Most people try and play him as a carry</li>
            <li>Ultimate activates sometimes when you dont want to</li>
        </ul>
    </div>
</div>
    </div>
</div>
<br>
<br>
<br>   

<p>.</p>

    
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
