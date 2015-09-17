
<?php
	$path = "";

	//USER CONTROLLER PER L'HEAD
	function head($path){ ?>

        <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
        <link rel="stylesheet" type="text/css" href="css/about.css"/>

        <!-- This following line is needed only in case of using other easing effect rather than "linear", "swing" or "easeInQuart". You can also add the full jQuery UI instead of this file if you prefer -->
        <script src="js/jquery.easings.min.js"></script>

        <!-- This following line needed in the case of using the plugin option `scrollOverflow:true` -->
        <script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
        <script type="text/javascript" src="js/jquery.fullPage.min.js"></script>

        <script type="text/javascript" src="js/about.js"></script>


	<?php }

	//user controll per il content..
	function content($path){ ?>
		<!-- 		CONTENUTO DELLA PAGINA	 -->

		<div id="fullpage">
            <div class="section first active">
            	<div class="container">
            		<div class="title"><?=tr_("aboutMainTitle")?></div>
            		<div class="subtitle">
						<p><?=tr_("aboutSubtitleRow1")?></p>
						<p><?=tr_("aboutSubtitleRow2")?></p>
						<p><?=tr_("aboutSubtitleRow3")?></p>
						<p><?=tr_("aboutSubtitleRow4")?></p>
            		</div>
            	</div>
				<div class="mobileBackgroundContainer">
					<img src = "img/about.png"/>
				</div>
            	<div class="pageTitle"><?=tr_("aboutTitlePage")?></div>
            	<div class="footer">
            		<div class="goDown"><a href="#whatido"><span class="text"><?=tr_("aboutFirstNext")?></span></a><br/>
            			<div class="lineDown"></div>
            		</div>
            	</div>
            </div>
            <div class="section second">
				<div class="topPanel"><a href="#about"><span class="text"><?=tr_("aboutSecondBack")?></span></a></div>
            	<div class="centerLine"></div>
            	<div class="centerBlocksContainer">
					<div class="centerBlock"><span class="text"><?=tr_("aboutSecondTitle")?></span></div>
					<div class="secondCenteredBlock">
						<?=tr_("aboutSecondSubtitle")?><br/>
						<i><?=tr_("aboutSecondSubtitleAuthor")?></i>
					</div>
				</div>
            	<div class="contentBlockContainer left">
            		<div class="contentBlockContent">
            			<div class="contentBlock">
            				<img src="./img/uxUi.svg"/>
            				<p class="title"><?=tr_("aboutSecondAbility1Title")?></p>
            				<p class="content"><?=tr_("aboutSecondAbility1Text")?></p>
            			</div>
            			<div class="contentBlock">
							<img class="secondRow" src="./img/graphic.svg" />
            				<p class="title"><?=tr_("aboutSecondAbility2Title")?></p>
            				<p class="content"><?=tr_("aboutSecondAbility2Text")?></p>
            			</div>
            		</div>
            	</div>
            	<div class="contentBlockContainer right">
            		<div class="contentBlockContent">
            			<div class="contentBlock">
            				<img class="visual" src="./img/visual.svg" />
            				<p class="title"><?=tr_("aboutSecondAbility3Title")?></p>
            				<p class="content"><?=tr_("aboutSecondAbility3Text")?></p>
            			</div>
            			<div class="contentBlock">
            				<p class="title"><?=tr_("aboutSecondAbility4Title")?></p>
            				<p class="content"><?=tr_("aboutSecondAbility4Text")?></p>
            			</div>
            		</div>
            	</div>
            	<div class="footer">
					<div class="goDown"><a href="#software"><span class="text"><?=tr_("aboutSecondNext")?></span></a><br/>
            		</div>
					<div class="mobileBottomLine"></div>
            	</div>
            </div>
			<div class="section third">
				<div class="topPanel"><a href="#whatido"><span class="text"><?=tr_("aboutThirdBack")?></span></a></div>
            	<div class="centerLine"></div>
            	<div class="centerBlocksContainer">
					<div class="centerBlock"><span class="text"><?=tr_("aboutThirdTitle")?></span></div>
					<div class="secondCenteredBlock">
						<?=tr_("aboutThirdSubtitle")?><br/>
						<i><?=tr_("aboutThirdSubtitleAuthor")?></i>
					</div>
				</div>

            	<div class="contentBlockContainer left">
            		<div class="contentBlockContent">
            			<div class="contentBlock">
            				<span class="number">90%</span>
            				<p class="title">ADOBE CC</p>
            				<p class="content"><?=tr_("aboutThirdSkill1Text")?></p>
            			</div>
            			<div class="contentBlock">
							<span class="number">100%</span>
            				<p class="title">SKETCH &amp; AD</p>
            				<p class="content"><?=tr_("aboutThirdSkill2Text")?></p>
            			</div>
            		</div>
            	</div>
            	<div class="contentBlockContainer right">
            		<div class="contentBlockContent">
            			<div class="contentBlock">
            				<span class="number">95%</span>
            				<p class="title">PROTOTYPING</p>
            				<p class="content"><?=tr_("aboutThirdSkill3Text")?></p>
            			</div>
            			<div class="contentBlock">
            				<span class="number">85%</span>
            				<p class="title">HTML &amp; CSS</p>
            				<p class="content"><?=tr_("aboutThirdSkill4Text")?></p>
            			</div>
            		</div>
            	</div>
            	<div class="footer">
					<div class="goDown"><a href="#mycv"><span class="text"><?=tr_("aboutThirdNext")?></span></a><br/>
            		</div>
					<div class="mobileBottomLine"></div>
            	</div>
            </div>
            <div class="section fourth">
				<div class="topPanel"><a href="#software"><span class="text"><?=tr_("aboutFourthBack")?></span></a></div>
            	<div class="centerLine"></div>
				<div class="centerBlocksContainer">
					<div class="centerBlock"><span class="text"><?=tr_("aboutFourthTitle")?></span></div>
					<div class="secondCenteredBlock">
						<?=tr_("aboutFourthSubtitle")?></br>
						<i><?=tr_("aboutFourthSubtitleAuthor")?></i>
					</div>
				</div>

            	<div class="contentBlockContainer left">
            		<div class="contentBlockContent">
            			<div class="contentBlock">
            				<p class="title"><?=tr_("aboutFourthBlock1Title")?></p>
            				<div class="content">
								<p class="contentTitle"><?=tr_("aboutFourthBlock1Subtitle1")?></p>
									<?=tr_("aboutFourthBlock1Text1")?>
								<p class="contentTitle"><?=tr_("aboutFourthBlock1Subtitle2")?></p>
									<?=tr_("aboutFourthBlock1Text2")?>
							</div>
            			</div>
            			<div class="contentBlock">
            				<p class="title"><?=tr_("aboutFourthBlock2Title")?></p>
            				<div class="content">
								<p class="contentTitle"><?=tr_("aboutFourthBlock2Subtitle1")?></p>
								<?=tr_("aboutFourthBlock2Text1")?>
							</div>
            			</div>
            		</div>
            	</div>
            	<div class="contentBlockContainer right">
            		<div class="contentBlockContent">
            			<div class="contentBlock">
            				<p class="title"><?=tr_("aboutFourthBlock3Title")?></p>
            				<div class="content">
								<p class="contentTitle"><?=tr_("aboutFourthBlock3Subtitle1")?></p>
								<?=tr_("aboutFourthBlock3Text1")?>
								<p class="contentTitle"><?=tr_("aboutFourthBlock3Subtitle2")?></p>
								<?=tr_("aboutFourthBlock3Text2")?>
								<p class="contentTitle"><?=tr_("aboutFourthBlock3Subtitle3")?></p>
								<?=tr_("aboutFourthBlock3Text3")?>
								<p class="contentTitle"><?=tr_("aboutFourthBlock3Subtitle4")?></p>
								<?=tr_("aboutFourthBlock3Text4")?>
								<p class="contentTitle"><?=tr_("aboutFourthBlock3Subtitle5")?></p>
								<?=tr_("aboutFourthBlock3Text5")?>
							</div>
            			</div>
            		</div>
            	</div>
				<div class="footer">
            		<div class="goDown"><a href="file/CurriculumVitae_2015_Paul_Romero.pdf" target="_blank"><span class="downloadButton"><?=tr_("aboutFourthDownloadButton")?></span></a><br/>
            		</div>
            	</div>
        	</div>
		</div>
        <div class="breadCrumbs">
			<span class="whatido"><a href="#whatido"><?=tr_("aboutFourthBreadCrumbs1")?></a></span>
			<span class="software"><a href="#software"><?=tr_("aboutFourthBreadCrumbs2")?></a></span>
			<span class="mycv"><a href="#mycv"><?=tr_("aboutFourthBreadCrumbs3")?></a></span>
        </div>

	<?php }

	//chiamata alla masterPage
	require($path."master.php");
?>
