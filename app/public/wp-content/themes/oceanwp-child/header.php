 <!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur le site de planty !</title>
    <?php wp_head(); ?> 
    
</head>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

    <header>
        <nav id="nav-bar">
            <div id="logo">
                <img src="/wp-content/themes/oceanwp-child/img/logo_planty.svg" alt="Planty boisson énergisante !">
            </div>

<!-- On affiche notre menu correspondant à la localisation cochée avec wp_nav_menu. Si l'internaute est connecté
à WP, on ajoute un lien vers l'administration. -->

            <div id="menu" role="navigation">

                <?php 
                wp_nav_menu(array('theme_location' => 'topbar_menu'));             
                ?>

            </div>
        </nav>     
    </header> 
