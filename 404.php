
<?php
	$path = "";

	//USER CONTROLLER PER L'HEAD
	function head($path){ ?>
		<link rel="stylesheet" type="text/css" href="css/404.css"/>
		<script type="text/javascript">
			function back(){
				//TODO history back!
			}
		</script>
	<?php }

	//user controll per il content..
	function content($path){ ?>
		<!-- 		CONTENUTO DELLA PAGINA	 -->
		<div class="container valign-wrapper">
            <div class="pageContainer valign center-align">
                <p class="mainTitle"><?=tr_("404MainTitle")?></p>
                <p class="subtitle"><?=tr_("404SubtitleRow1")?><br/>
					<?=tr_("404SubtitleRow2")?>
                </p>
				<div class="buttonRow">
					<button class="homeButton" onclick="back();">
						<?=tr_("404ButtonText")?>
					</button>
                </div>
            </div>
        </div>
	<?php }

	//chiamata alla masterPage
	require($path."master.php");
?>
