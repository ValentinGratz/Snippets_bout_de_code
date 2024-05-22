# Cacher logo wordpress dans le backend

```
//Cacher logo wordpress dans le backend
 function no_wp_logo_admin_bar_remove() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'no_wp_logo_admin_bar_remove', 0);
```
