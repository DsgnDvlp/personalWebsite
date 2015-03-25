
<?php
	$path = "";	

	//USER CONTROLLER PER L'HEAD
	function head($path){ ?>		
        <link rel="stylesheet" type="text/css" href="css/home.css"/>
	<?php }
	
	//user controll per il content..
	function content($path){ ?>
		<!-- 		CONTENUTO DELLA PAGINA	 -->
		
		<div class="container">
            <?php 
                /* CALCOLO DELL'ORA PER IL CAMBIO DEL MESSAGGIO*/
                $hour = intVal(Date("G"));
                if($hour >= 6 && $hour < 12){ ?>
                    GOOD MORNING
                <?php } else if($hour >= 12 && $hour<14 ){ ?>
                    TIME TO EAT SOMETHING!
                <?php } else if($hour >= 14 && $hour < 18){ ?>
                    GOOD AFTERNOON
                <?php } else if($hour >=18 || $hour < 22){ ?>
                    PARTY TIME
                <?php } else{ ?>
                    Zzzz
                <?php } ?>
		</div>
		
	<?php }

	//chiamata alla masterPage
	require($path."master.php");
?>
