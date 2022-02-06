# Changer le logo Admin

Ne vous contentez pas de changer votre logo de connexion, changez aussi votre logo d’administration. Assurez-vous que vous avez ajouté votre admin_logo.png à votre dossier d’images. Copier dans functions.php

```

<?php
function custom_admin_logo() {
echo '<style type="text/css">
#header-logo { background-image: url('.get_bloginfo('template_directory').'/images/admin_logo.png) !important; }
</style>';
}
add_action('admin_head', 'custom_admin_logo');
?>


```