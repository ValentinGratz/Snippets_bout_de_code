# Réinitialiser les paramètres par défaut sur son site

Si vous êtes allés trop loin dans la modification de votre site vous pourrez facilement faire machine arrière avec ce snippet. Code à copier dans le functions.php

```

<?php
function set_theme_defaults() {
    $o = array(
        'avatar_default'         => 'blank',
        'avatar_rating'          => 'G',
        'category_base'          => '/thema',
        'comment_max_links'      => 0,
        'comments_per_page'      => 0,
        'date_format'            => 'd.m.Y',
        'default_ping_status'    => 'closed',
        'default_post_edit_rows' => 30,
        'links_updated_date_format' => 'j. F Y, H:i',
        'permalink_structure'    => '/%year%/%postname%/',
        'rss_language'           => 'de',
        'timezone_string'        => 'Etc/GMT-1',
        'use_smilies'            => 0,
    );
    foreach ( $o as $k => $v ){update_option($k, $v);}
    // Delete dummy post and comment.
    wp_delete_post(1, TRUE);
    wp_delete_comment(1);
    return;
}
register_activation_hook(__FILE__, 'set_theme_defaults');
?>


```