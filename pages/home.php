
<?php
	$path = "";	

	//USER CONTROLLER PER L'HEAD
	function head($path){ ?>		

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
                    TIME TO EAT
                <?php } else if($hour >= 14 && $hour < 19){ ?>
                    GOOD AFTERNOON
                <?php } else if($hour >=19 || $hour < 6){ ?>
                    GOOD NIGHT
                <?php } ?>
		</div>
		
	<?php }

	//chiamata alla masterPage
	require($path."master.php");
?>
