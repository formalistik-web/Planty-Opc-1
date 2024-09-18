<?php

 
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

/* Hook filter : si l'internaute est connecté à wordpress, on affiche admin dans le menu.   */

if (is_user_logged_in()) 
{
add_filter('wp_nav_menu_items', 'ajout_element_menu', 10, 2);
}


/* O, situe le CSS du thème actif et le CSS du thème enfant. */
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

/* On ajoute un nouvel élément à notre menu existant. Le lien renvoi à l'administration WP du site. */
function ajout_element_menu($items, $args) {
    $element = $items;
    if ($args->theme_location == 'topbar_menu')
    {
    $admin = get_admin_url();
    $element= $items."<li><a href='{$admin}'>Admin</a></li>";
    }
    return $element;
}

?>