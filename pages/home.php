
<?php
	include_once "lang.php";
	$path = "";

	/* CALCOLO DELL'ORA PER IL CAMBIO DEL MESSAGGIO*/
	$hour = intVal(Date("G"));
	$minutes = intval(Date("i"));
	if($hour >= 6 && ($hour < 9 || $hour == 9 && $minutes <= 30)){
		$backgroundImage = "img/01.png";
		$title = tr_("morningTitle");
	} else if( $hour >= 9 && ($hour<12 || $hour == 12 && $minutes <= 30 )){
		$backgroundImage = "img/01.png";
		$title = tr_("workTitle");
	} else if($hour >= 12 && $hour < 14){
		$backgroundImage = "img/01.png";
		$title = tr_("noonTitle");
	} else if($hour >= 14 && $hour < 19){
		$backgroundImage = "img/01.png";
		$title = tr_("afternoonTitle");
	} else if($hour >=19 && ($hour < 21 || $hour == 21 && $minutes <= 30)){
		$backgroundImage = "img/01.png";
		$title = tr_("eveningTitle");
	} else if($hour >=21 && ($hour < 23 || $hour == 23 && $minutes <= 30)){
		$backgroundImage = "img/01.png";
		$title = tr_("partyTitle");
	} else{
		$backgroundImage = "img/01.png";
		$title = tr_("nightTitle");
	}


	//USER CONTROLLER PER L'HEAD
	function head($path){ ?>
        <link rel="stylesheet" type="text/css" href="css/home.css"/>
		<script type = "text/javascript" src="js/home.js"></script>
	<?php }

	//user controll per il content..
	function content($path){
		global $title; ?>
		<!-- 		CONTENUTO DELLA PAGINA	 -->

		<div class="container">
            <div class="homeContent">
                <p class="mainTitle">
                    <?=$title?>
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
					<a href="about" class="homeButton">
						<?=tr_("homeButtonAbout")?>
					</a>
					<a href = "portfolio" class="homeButton">
						<?=tr_("homeButtonPortfolio")?>
					</a>
                </div>
            </div>
		</div>

	<?php }

	//chiamata alla masterPage
	require($path."master.php");
?>
