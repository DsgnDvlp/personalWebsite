<?php
	$path = "";

	//USER CONTROLLER PER L'HEAD
	function head($path){ ?>

        <link rel="stylesheet" type="text/css" href="css/freeStuff.css"/>

        <!-- <script type="text/javascript" src="js/freeStuff.js"></script> -->
	<?php }

	//user controll per il content..
	function content($path){ ?>
		<!-- 		CONTENUTO DELLA PAGINA	 -->
		<div id="fullpage">
            <div class="section">
            	<div class="container">
            		<div class="title"><?=tr_("freestuffTitle")?></div>
            		<div class="subtitle">
						<p><?=tr_("freestuffText1")?></p>
						<p><?=tr_("freestuffText2")?></p>
            		</div>
            	</div>
            	<div class="pageTitle"><?=tr_("freestuffPageTitle")?></div>
            </div>
		</div>
	<?php }

	//chiamata alla masterPage
	require($path."master.php");
?>
