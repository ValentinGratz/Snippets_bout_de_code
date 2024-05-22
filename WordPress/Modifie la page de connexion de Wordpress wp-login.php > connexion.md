# Modifie la page de connexion de Wordpress wp-login.php > connexion

// Modifie la page de connexion de Wordpress wp-login.php > connexion

// A mettre dans function.php

````
function custom_login_script() {
    if($GLOBALS['pagenow'] === 'wp-login.php') {
        ?>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function(event) {
                if(window.location.pathname === '/wp-login.php'){
                    window.history.replaceState(null, null, '/connexion');
                }
            });
        </script>
        <?php
    }
}
add_action('login_enqueue_scripts', 'custom_login_script');
```
