<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <title>Paul Romero</title>
        <link rel="icon" type="image/png" href="img/Favicon.png" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="DsgnDvlp" />
        
        <!-- CSS RESET -->
        <link type="text/css" rel="stylesheet" href="css/reset.css"  media="screen,projection"/>
        
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        
        <!-- SPECIFIC PAGE HEADER PLACEHOLDER -->
        <?php echo head($path); ?>
    </head>
    

    <body>
        <!-- SPECIFIC PAGE CONTENT PLACEHOLDER -->
        <?php echo content($path); ?>
        
        <div class="borderNorth"></div>
		<div class="borderSouth"></div>
		<div class="borderEast"></div>
		<div class="borderWest"></div>
    </body>
</html>