La fonction d’enregistrement automatique est super utile, mais il se peut que vous vous retrouviez avec un tas de révisions après coup. Utilisez cette fonction pour en limiter le nombre. Mettez-le dans le fichier functions.php

```
<?php 
# Maximum 5 revisions #
define('WP_POST_REVISIONS', 5);

# ou pour desactiver toutes revisions #
define('WP_POST_REVISIONS', false);
?>

```