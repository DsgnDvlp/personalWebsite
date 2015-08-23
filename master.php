<!DOCTYPE html>
<html>
   <?php include_once "lang.php" ?>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
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

        <!--Let browser know website is optimized for mobile-->
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/master.js"></script>
        <script type="text/javascript">

        </script>

        <!-- SPECIFIC PAGE HEADER PLACEHOLDER -->
        <?php echo head($path); ?>

        <link type="text/css" rel="stylesheet" href="css/designerCheImparano.css"/>
    </head>


    <body>
       <div class="menuRow">
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
        <div class="generalContainer">
        	<?php echo content($path); ?>
        </div>
        <!--   MENU   -->
        <div class="overlayMenu">
            <div class="overlayMenuContainer">
                <ul class="menuContent">
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
            <div class="socialBar">
                <div class="socialEntry">
                	<a class="socialEntryLink" href="#">
                		<span class="socialDesktop">facebook</span>
                		<img class="socialMobile" src="img/facebook.svg" alt=""/>
                	</a>
                </div>
                <div class="socialEntry">
                	<a class="socialEntryLink" href="#">
                		<span class="socialDesktop">twitter</span>
                		<img class="socialMobile" src="img/twitter.svg" alt=""/>
                	</a>
                </div>
                <div class="socialEntry">
                	<a class="socialEntryLink" href="#">
                		<span class="socialDesktop">behance</span>
                		<img class="socialMobile" src="img/behance.svg" alt=""/>
                	</a>
                </div>
                <div class="socialEntry">
                	<a class="socialEntryLink" href="#">
                		<span class="socialDesktop">medium</span>
                		<img class="socialMobile" src="img/medium.svg" alt="">
                	</a>
                </div>
                <div class="socialEntry">
					<a class="socialEntryLink" href="#">
                		<span class="socialDesktop">linkedin</span>
                		<img class="socialMobile" src="img/linkedin.svg" alt="">
                	</a>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            <p>
                <?php
                    $frasi = array(tr_("footerContent1"), tr_("footerContent2"), tr_("footerContent3"), tr_("footerContent4"), tr_("footerContent1"));
                    echo $frasi[array_rand($frasi, 1)];
                ?>
            </p>
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
