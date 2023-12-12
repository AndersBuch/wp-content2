<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Svalereden Tattoo</title>
    <?php wp_head();?>
</head>
<body>

<header>


	<div class="top-bar">
		<img class="logo" src="https://svalereden.buchdesigns.dk/wp-content/uploads/2023/11/svalereden-logo-fixed-2.png" alt="svalereden logo">

		<?php 
	
			wp_nav_menu(
					array(

						'theme_location' => 'top-menu',
						//'menu' => 'Top Bar'
						'menu_class' => 'top-bar'
					)
			);
		
		?>
	</div>


</header>

