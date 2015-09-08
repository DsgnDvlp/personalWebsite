
<?php
	$path = "";
	include("database.php");
	$connection = connect();


	//USER CONTROLLER PER L'HEAD
	function head($path){ ?>

        <link rel="stylesheet" type="text/css" href="css/progetti.css"/>
		<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="js/progetti.js"></script>
	<?php }

	//user controll per il content..
	function content($path){ ?>
		<!-- 		CONTENUTO DELLA PAGINA	 -->
		<?php
			global $connection;
			$result = $connection -> query("select * from Progetti p join Categorie c on p.category = c.id");
		?>
		<div id="fullpage">
			<div class="grid">
				<?php while($row = mysqli_fetch_array($result)) : ?>
					<div class="gridItem <?= $row['class'];?>">
						<div class="itemCover">
							<img src="projects/<?= $row['Title'] ?>/front.png" />
							<!-- <p class="itemTitle"><span class="itemTitleText"><?=$row['Title']?></span></p> -->
						</div>
						<p class="itemCategory"><?=$row["Name"]?></p>
						<a class="itemButton" href="projectDetails?i=<?=$row['id']?>">scopri</a>
					</div>
				<?php endwhile ?>
			</div>
		</div>
		<!-- <div class="pageTitle"><?=tr_("progettiPageTitle")?></div> -->
		<div class="breadCrumbs">
			<span data-filter="ux">UI/UX DESIGN</span>
			<span data-filter="branding">BRANDING</span>
			<span data-filter="digital">DIGITAL AD</span>
		</div>
	<?php }

	//chiamata alla masterPage
	require($path."master.php");
?>
