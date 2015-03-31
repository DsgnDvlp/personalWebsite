
<?php
	$path = "";	

	//USER CONTROLLER PER L'HEAD
	function head($path){ ?>		
        <link rel="stylesheet" type="text/css" href="css/home.css"/>
	<?php }
	
	//user controll per il content..
	function content($path){ ?>
		<!-- 		CONTENUTO DELLA PAGINA	 -->
		
		<div class="container valign-wrapper">
            <div class="homeContent valign center-align">
                <p class="mainTitle">
                    <?php 
                        /* CALCOLO DELL'ORA PER IL CAMBIO DEL MESSAGGIO*/
                        $hour = intVal(Date("G"));
                        if($hour >= 6 && $hour < 12){ ?>
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
                    <?=tr_("subtitle")?>
                </p>
                <div class="row buttonRow">
                    <div class="col s5 offset-s1">
                        <button class="homeButton">
                            I am death
                        </button>
                    </div>
                    <div class="col s5">
                        <button class="homeButton">
                            Good $tuff
                        </button>
                    </div>
                </div>
            </div>
            <div class="lowRow row">
                   <div class="col s5 first">IT’S <?= Date("H:i") ?>! TIME FOR COFFE</div>
                   <div class="col s2 center"><img src="img/Icona.svg"></div>
                   <div class="col s5 second">COME BACK FOR NEW GIFTS</div>
                </div>
		</div>
		
	<?php }

	//chiamata alla masterPage
	require($path."master.php");
?>
