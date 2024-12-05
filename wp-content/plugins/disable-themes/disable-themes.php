<?php
/*
Plugin Name: Disable Themes Frontend
Description: Désactive les thèmes et restreint l'accès au frontend. Permet uniquement l'accès au backoffice et à l'API REST.
Version: 1.0
Author: LEWI JEAN-MARC ESSOH
*/


// Redirige toutes les pages vers le backoffice (y compris la page d'accueil)
/*
add_action('template_redirect', function() {
    // Vérifie si l'on est sur le backoffice ou si la requête est une requête API REST
    if (!is_admin() && strpos($_SERVER['REQUEST_URI'], '/wp-json') === false) {
        wp_redirect(admin_url()); // Redirige vers le backoffice
        exit;
    }
});
*/
// change l'URL de l'API REST
/*
l'API REST sera accessible via une URL comme http://votresite.com/api/v1/wp/v2/posts, 
au lieu de wp-json/wp/v2/posts.
 */
// Change le préfixe de l'API REST
function custom_rest_api_prefix() {
    return 'custom-api'; // Vous pouvez remplacer 'custom-api' par votre propre préfixe
}
add_filter('rest_url_prefix', 'custom_rest_api_prefix');
