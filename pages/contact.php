
<?php
	$path = "";

	//USER CONTROLLER PER L'HEAD
	function head($path){ ?>

        <link rel="stylesheet" type="text/css" href="css/contact.css"/>

        <script type="text/javascript" src="js/contact.js"></script>
	<?php }

	//user controll per il content..
	function content($path){ ?>
		<!-- 		CONTENUTO DELLA PAGINA	 -->
		<div id="fullpage">
            <div class="section">
            	<div class="container">
            		<div class="title"><?=tr_("contactTitle")?></div>
            		<div class="subtitle">
						<p><?=tr_("contactSubtitle")?></p>
            		</div>
					<div class="formContainer">
						<div class="formRow">
							<p class="formField left">
								<span class="fieldName"><?=tr_("contactFormNameTitle")?>:</span>
								<input class="field" placeholder="<?=tr_('contactFormNamePlaceHolder')?>" id="name"/>
							</p>
							<p class="formField right">
								<span class="fieldName"><?=tr_("contactFormMailTitle")?>:</span>
								<input class="field" placeholder="<?=tr_('contactFormMailPlaceHolder')?>" id="mail"/>
							</p>
						</div>
						<div class="formRow">
							<p class="formField">
								<span class="fieldName"><?=tr_("contactFormMessageTitle")?>:</span>
								<textarea rows="1" class="field" placeholder="<?=tr_('contactFormMessagePlaceHolder')?>" id="message" onkeyup="autoGrow(this);"></textarea>
							</p>
						</div>
					</div>
					<button class="mainButton" onclick="formSend()"><?=tr_("contactButtonText")?></button>
            	</div>
            	<div class="pageTitle"><?=tr_("contactPageTitle")?></div>
            </div>
		</div>
	<?php }

	//chiamata alla masterPage
	require($path."master.php");
?>
