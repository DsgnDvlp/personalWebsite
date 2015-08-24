
<?php
	$path = "";

	//USER CONTROLLER PER L'HEAD
	function head($path){ ?>
        <link rel="stylesheet" type="text/css" href="css/home.css"/>
		<script type = "text/javascript" src="js/home.js"></script>
	<?php }

	//user controll per il content..
	function content($path){ ?>
		<!-- 		CONTENUTO DELLA PAGINA	 -->

		<div class="container">
            <div class="homeContent">
                <p class="mainTitle">
                    <?php
                        /* CALCOLO DELL'ORA PER IL CAMBIO DEL MESSAGGIO*/
                        $hour = intVal(Date("G"));
                        if($hour >= 6 && $hour < 12){
							//inserire qui dentro il background per il body?>
                            <?=tr_("morningTitle")?>
                        <?php } else if($hour >= 12 && $hour<14 ){ ?>
                            <?=tr_("noonTitle")?>
                        <?php } else if($hour >= 14 && $hour < 18){ ?>
                            <?=tr_("afternoonTitle")?>
                        <?php } else if($hour >=18 || $hour < 22){ ?>
                            <?=tr_("eveningTitle")?>
                        <?php } else{ ?>
                            <?=tr_("nightTitle")?>
                        <?php }
                    ?>
                </p>
                <p class="subtitle">
                    <?=tr_("subtitleRow1")?>
				</p>
				<p class="subtitle">
					<?=tr_("subtitleRow2")?>
					<span class= "flipCont">
						<span class="foo"><?=tr_("subtitleRowFlip1")?></span>
						<span class="foo"><?=tr_("subtitleRowFlip2")?></span>
						<span class="foo"><?=tr_("subtitleRowFlip3")?></span>
						<span class="foo"><?=tr_("subtitleRowFlip4")?></span>
						<span class="foo"><?=tr_("subtitleRowFlip5")?></span>
						<span class="foo"><?=tr_("subtitleRowFlip6")?></span>
						<span class="foo"><?=tr_("subtitleRowFlip7")?></span>
					</span>
                </p>
                <div class="buttonRow">
					<button class="homeButton">
						<?=tr_("homeButtonDeath")?>
					</button>
					<button class="homeButton">
						<?=tr_("homeButtonStuff")?>
					</button>
                </div>
            </div>
<!--
            <div class="lowRow">
                <div class="first"><?=tr_("lowRowString1", array(Date("H:i")))?></div>
                <div class="center"><img src="img/Icona.svg"></div>
                <div class="second"><?=tr_("lowRowString2")?></div>
            </div>
-->
		</div>

	<?php }

	//chiamata alla masterPage
	require($path."master.php");
?>
