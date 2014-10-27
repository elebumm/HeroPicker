<?php require_once('includes/db.php');?>
<?php require_once('includes/functions.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/styles.css">	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DOTA 2 HERO PICKER</title>
    <!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="bower_components/BigVideo.js/css/bigvideo.css">

<script src="js/bootstrap.min.js"></script>







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



    <a href="https://github.com/elebumm/heropicker"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>
    <!-- Page Content -->
   <div class="wrapper">
    <div class="container">
        <div class="row" id="shit">
            <h1 id="title">Hero Picker</h1>
            <p id="slogan">Let me guess, you are about to find a match and you have no idea who to play. You dominated 2k MMR with Viper but are no longer able to snowball into late game. You have come to the right place my friend.</p>
        </div>
		<div id="container4buttons">
            <div class="btn-group btn-group-lg" id="buttongroupy">
                <button type="button" class="btn btn-primary btn-lg btn-block" id="buttony">All</button>
              <button type="button" class="btn btn-default" id="buttony1">Strength</button>
              <button type="button" class="btn btn-default" id="buttony2">Agility</button>
              <button type="button" class="btn btn-default" id="buttony3">Intelligence</button>
            </div>
	    </div>

		<p id="copyright">Dota 2 is a registered trademark of Valve Corporation.</p>
        <p id="information">Dota 2 background is made by <a href="http://vimeo.com/krez113">krez113 on vimeo</a></p>


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