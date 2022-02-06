# Masquer les erreurs de connexion

Les erreurs de connexion dans WordPress peuvent être utilisées par les hackers pour déterminer s’ils ont saisi un mauvais nom d’utilisateur ou un mauvais mot de passe. En masquant les erreurs de connexion dans WordPress, vous pouvez rendre votre zone de connexion un peu plus sûre.

Copier dans le fichier functions.php

```

<?php
function no_wordpress_errors(){
return 'Something is wrong!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );
?>


```