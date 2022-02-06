# Activer le mode maintenance

Vous avez besoin d’un mode de maintenance rapide ? Utilisez ce snippet. Il suffit de commenter lorsque vous ne voulez pas qu’il soit activé.

L’ajout d’une page de mode de maintenance à votre site est un excellent moyen de cacher les pages introuvables à vos visiteurs lorsque votre site web est hors service pour des raisons de maintenance. Cela vous permet de modifier les paramètres, le thème ou les plugins de votre site normalement dans le backend du site, sans laisser vos visiteurs voir les détails que vous utilisez pour votre processus de maintenance.

À ajouter dans le fichier functions.php

```

<?php
function maintenance_mode() {
if ( !current_user_can( 'edit_themes' ) || !is_user_logged_in() ) {
die('Maintenance.');
}
}
add_action('get_header', 'maintenace_mode’);
?>


```