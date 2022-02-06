# Personnaliser le logo de connexion sans plugin

C’est idéal pour ceux qui développent des sites web pour leurs clients qui veulent avoir leur propre marque sur leur site. Copier dans votre functions.php


```

<?php
function my_custom_login_logo() {
echo '<style type="text/css">
h1 a { background-image:url('.get_bloginfo('template_directory').'/images/custom-login-logo.gif) !important; }
</style>';
}
add_action('login_head', 'my_custom_login_logo');
?>

```