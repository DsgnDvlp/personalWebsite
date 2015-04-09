<!DOCTYPE html>
<html>
   <?php include_once "lang.php" ?>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=0.8, maximum-scale=0.8, user-scalable=no"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <title>Paul Romero</title>
        <link rel="icon" type="image/png" href="img/Favicon.png" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="DsgnDvlp" />
        
        <!-- CSS RESET -->
        <link type="text/css" rel="stylesheet" href="css/reset.css"  media="screen,projection"/>
        
        <script src="//use.typekit.net/cqp8ytj.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>
        
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/master.js"></script>
        <script type="text/javascript">
            
        </script>
            
        <!-- SPECIFIC PAGE HEADER PLACEHOLDER -->
        <?php echo head($path); ?>
    </head>
    

    <body>
       <div class="row menuRow">
            <div class="logoContainer">
                <div class="logo">
                    <a href="index"><?php include __DIR__."/img/Logo.svg"; ?></a>
                </div>
            </div>
            <div class="menuContainer">
                <div class="menu" onclick="toggleMenu()">
                    <div class="menuContent">
                      <span class="menuItem"></span>
                    </div>
                </div>
           </div>
           <div class="languageBar">
                <p class="languageEntry"><?= $_SESSION["lang"] ?></p>
                <?= $_SESSION["lang"] != "ita" ? "<p class='languageEntry' onclick='switchLanguage(\"ita\")'>ITA</p>" : "" ?>
                <?= $_SESSION["lang"] != "eng" ? "<p class='languageEntry' onclick='switchLanguage(\"eng\")'>ENG</p>" : "" ?>
                <?= $_SESSION["lang"] != "esp" ? "<p class='languageEntry' onclick='switchLanguage(\"esp\")'>ESP</p>" : "" ?>
            </div>
       </div>
        <!-- SPECIFIC PAGE CONTENT PLACEHOLDER -->
        <?php echo content($path); ?>
        
        <!--   MENU   -->
        <div class="overlayMenu">
            <div class="valign-wrapper">
                <ul class="valign">
                    <li class="menuEntry">
                        <a href="about">
                            <span class="description">Wanna know something about me?</span>
                            About
                        </a>
                    </li>
                    <li class="menuEntry">
                        <a href="portfolio">
                            <span class="description">Wanna know something about me?</span>
                            Portfolio
                        </a>
                    </li>
                    <li class="menuEntry">
                        <a href="freeStuff">
                            <span class="description">Wanna know something about me?</span>
                            Free Stuff
                        </a>
                    </li>
                    <li class="menuEntry">
                        <a href="contact">
                            <span class="description">Wanna know something about me?</span>
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <div class="socialBar row">
                <div class="socialEntry col s2 offset-s1"><a href="#">facebook</a></div>
                <div class="socialEntry col s2"><a href="#">twitter</a></div>
                <div class="socialEntry col s2"><a href="#">behance</a></div>
                <div class="socialEntry col s2"><a href="#">medium</a></div>
                <div class="socialEntry col s2"><a href="#">linkedin</a></div>
                <div class="socialEntryMobile col s2 offset-s1"><a href="#">
                    <img src="img/facebook.svg" alt=""/>
                </a></div>
                <div class="socialEntryMobile col s2"><a href="#">
                    <img src="img/twitter.svg" alt=""/>
                </a></div>
                <div class="socialEntryMobile col s2"><a href="#">
                    <img src="img/behance.svg" alt=""/>
                </a></div>
                <div class="socialEntryMobile col s2"><a href="#">
                    <img src="img/medium.svg" alt="">
                </a></div>
                <div class="socialEntryMobile col s2"><a href="#">
                    <img src="img/linkedin.svg" alt="">
                </a></div>
            </div>
        </div>
        
        <div class="borderNorth"></div>
		<div class="borderSouth"></div>
		<div class="borderEast"></div>
		<div class="borderWest"></div>
        <script type="text/javascript">
            function toggleMenu(){
                if($(".menu").hasClass("opened")){
                    $(".menu").removeClass("opened");
                    $("body").removeClass("openedMenu")
                }else{
                    $(".menu").addClass("opened");
                    $("body").addClass("openedMenu");
                }
            }
        </script>
    </body>
</html>