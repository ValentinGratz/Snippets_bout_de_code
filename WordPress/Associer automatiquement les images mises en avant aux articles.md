# Associer automatiquement les images mises en avant aux articles

Si votre thème WordPress ne lie pas automatiquement les images aux articles complets, vous pouvez essayer cette méthode. Ajoutez simplement ce code au fichier *functions.php* de votre thème.

```

<?php
function wpb_autolink_featured_images( $html, $post_id, $post_image_id ) {
If (! is_singular()) { 
$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
return $html; 
} else {
return $html;
}
}
add_filter( 'post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3 );
?>


```