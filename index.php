<!--  Hello Traveler. I am going to guide you throught this code so you can easily manipulate it yourself.  -->
<!--  The random slogan generator is pulling random sentences from an array. To create or replace the sentences in the slogan then go to slogans.js and add or remove strings. -->
<!--  Background is made by krez113 on vimeo. I used BigVideo.js in order to get the background to work in the background. -->


<!-- Long story short - a bunch of PHP functions grabs a random name from the database and links you to that hero own HTML page. This is where you can add some fun Javascript goodies :) -->

<?php require_once('includes/db.php');?>
<?php require_once('includes/functions.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAAaHroAHEDpABwhugAaJb0AHyG6AB1B/gAjRukAIFDjAB8lxgD5+vwAJErsAPz4/wD8/fwAGSvYACZN7AAcKdsA/f7/AP/+/wAdM9UAcXfYADFN7AAgN9gAHjrhABwjuAAkPeEAHSW+ABskxAAlQeQAIUbqACNG6gAlP/AAJSK+ACNH7QAmQPMA//7uACk98wD8+v0AJUvwAP79/QD//f0AIijQACwutQAqR/YAub3rAExOqAAfMdkAUGndAB413AAWP+gAITbfABYjwgAcIrYAGSqzACE+5QDJyN8AlJXqAB0lvwAjSeIAIz/xACNG6wAoJ7MAHCnLACRM6wD8/vgAMTjuAP/6/gD+//sAHynUAP//+wD//f4AK0H3ACAp1ACcpeQALUr3ACE02gAyT/0ALi7aADIm3QAjOuMAGCLAAPL4+QAcJroAKjPpACso/gAiRuwAI0jpAPf8/AAiRPgAICzDAP73/wAlSu8A/v/8ACAy1QAZMucAGzbhADNJ9QAvVfUAIjveABsguwAcPPMAI0PbABsiwQAhROcAIkbtAPj99wAhRvYAJEvqAP37+gD//fcA//z9ACs++QAeLdAA5On7AOHv+wA1QuoAIy7TACA73wDt8/4AGiG2ADVN+QAjN+UAIj3lAB0jvAAbIMUAGiHIACFG5QAkRuUA2+f2AB0kyAA9VvkAHCjLAP35/gAlTO4A/fz+ACZI9AAoR/EA//77AN7x+QAeK9QA//z+ACc1swAfMNoAK0v9ACAu5gAaH7oAcGO0ABsjvQDv+/wAIUPmABopvQD28/8AJzb1ACIlugCUpd8AJkDvAPv4/AD5+f8A/Pn/ACJC/gAhJs8ATGDZAP/7/AD///YA/vz/AP/+/AD//P8AJEj+AP///wAjKdgAHjDbAB8w2wA1RPsAorDlAEpJywAjOOEAJDjhABwiuwAxP8AAHkHqACFA5wAcI74AKj7hAB4mxwAkR+oAHifKACpD5wAlTuQAJkrqACRL7QAeK80AU1LdAPz+/QD/+/0AICzQAN/v/gAhLNAAIS/QAOnx+wAxSfkA6PT7ACEw5QAkMusAGyG5ACQ63wAcIbkAID3oAKqq7wAZQfQA9Pj1AB0kuQAlPOUAGyTCACNA6AAjQ+gAHiLFACU+6wAiSegA+vv+AChB9AD6/v4AIybIACdA+gD9+/4AHC3UAP7+/gD//v4AGCzjACE12gAiNdoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAApUFtIiQJwi4FoBNIK77QnYEGHFQgu2rY2B0dtznVs913fVVJpmkHarw+h1qGuWTaX3432+AMFA6EJWCIo5mUISdudRHhjroKCkuk4RHAZjoLGyprVztnBsZEp6enp5oeI9J5MLLX1J6Lp6cR3qu1l3LLGE7SNUZsp6doiWN4YUDF5DGurwGLp6dZz3QWXhVTzhJKyM2Fp6JxyeOPL41cP0xvxF2hp4NSqqkt4tlzwbENKN+LQqwPb4qorSZbR71Dw5Wbv03cuD2CKVBFEFiAn4ySTzSYMhk4ONYItnzTAxo8kDN2YtF6zMoCF7RR0bB7ln/HkyalLGUAnDYEH5FwVgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=" rel="icon" type="image/x-icon" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DOTA 2 HERO PICKER</title>
    <!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="bower_components/BigVideo.js/css/bigvideo.css">

<script src="js/bootstrap.min.js"></script>
<script src="js/slogans.js"></script>






    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/the-big-picture.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>
        <!-- Placed this at the top in order for the CSS issues to resolve. -->
        <p id="info">Dota 2 background is made by <a href="http://vimeo.com/krez113">krez113 on vimeo</p></a>




    <a href="https://github.com/elebumm/heropicker"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>
    <!-- Page Content -->
   <div class="wrapper">
    <div class="container">
        <div class="row" id="shit">
            <h1 id="title">Hero Picker</h1>
         <script>
var item = slogans[Math.floor(Math.random()*slogans.length)];
document.write("<p id='slogan'>"+item+"</p>");
</script>
        </div>
		<div id="container4buttons">
            <div class="btn-group btn-group-lg" id="buttongroupy">
                <?php $name = "";echo "<a href='heroes/" . get_all_hero($name) . ".html'" . "<button type='button' class='btn btn-default' id='allButton'>All</button>"; ?>
              <?php $name = "";echo "<a href='heroes/" . get_strength_hero($name) . ".html'" . "<button type='button' class='btn btn-default' id='strengthButton'>Strength</button>"; ?>
              <?php $name = "";echo "<a href='heroes/" . get_agility_hero($name) . ".html'" . "<button type='button' class='btn btn-default' id='agilityButton'>Agility</button>"; ?>
              <?php $name = "";echo "<a href='heroes/" . get_intelligence_hero($name) . ".html'" . "<button type='button' class='btn btn-default' id='intelligenceButton'>Intelligence</button>"; ?>
            </div>
	    </div>









		<p id="copyright">Dota 2 is a registered trademark of Valve Corporation.</p>
        


	<?php mysqli_close($con); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="bower_components/imagesloaded/imagesloaded.js"></script>


<script src="//vjs.zencdn.net/4.3/video.js"></script>
<script src="bower_components/BigVideo.js/lib/bigvideo.js"></script>
<script>
    $(function video() {
        var BV = new $.BigVideo();
        BV.init();
        BV.show('img/dota2.mp4',{ambient:true});
    });
    </script>

</body>
</html>