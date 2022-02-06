# Supprimer les liens automatiques dans les commentaires

Voici un snippet pour éviter que les spammeurs laissent des liens dans vos commentaires

Copier dans functions.php
```

<?php
remove_filter('comment_text', 'make_clickable', 9);
?>

```