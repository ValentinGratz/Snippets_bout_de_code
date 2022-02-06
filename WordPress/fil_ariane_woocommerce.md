# Comment ajouter un fil d’Ariane personnalisé à l’URL d’accueil dans WooCommerce

Informations à vérifier avec celles transmises par l’hébergeur. Vous cherchez un moyen de changer l’URL d’origine dans les “breadcrumbs” de WooCommerce en une URL spécifique en utilisant le get_permalink(); ? 
Ajoutez ce code dans le fichier *functions.php*


```

<?php
add_filter( 'woocommerce_breadcrumb_home_url', 'woo_custom_breadrumb_home_url' );
function woo_custom_breadrumb_home_url() {
    return get_permalink(6);
}
?>


```