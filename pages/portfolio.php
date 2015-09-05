
<?php
	$path = "";

	//USER CONTROLLER PER L'HEAD
	function head($path){ ?>

        <link rel="stylesheet" type="text/css" href="css/portfolio.css"/>

        <!-- <script type="text/javascript" src="js/portfolio.js"></script> -->
	<?php }

	//user controll per il content..
	function content($path){ ?>
		<!-- 		CONTENUTO DELLA PAGINA	 -->
		<div id="fullpage">
            <div class="section">
            	<div class="container">
            		<div class="title"><?=tr_("portfolioTitle")?></div>
            		<div class="subtitle">
						<p><?=tr_("portfolioSubtitle")?></p>
            		</div>
					<a class="mainButton" href='progetti'><?=tr_("portfolioButtonText")?></a>
            	</div>
            	<div class="pageTitle">portfolio</div>
            </div>
		</div>
		<div class="breadCrumbs">
			<span class="whatido"><a href="progetti#ux"><?=tr_("portfolioBreadCrumbs1")?></a></span>
			<span class="software"><a href="progetti#branding"><?=tr_("portfolioBreadCrumbs2")?></a></span>
			<span class="mycv"><a href="progetti#digital"><?=tr_("portfolioBreadCrumbs3")?></a></span>
		</div>
	<?php }

	//chiamata alla masterPage
	require($path."master.php");
?>
