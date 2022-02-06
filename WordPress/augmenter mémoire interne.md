Si on a beaucoup de plugins et beaucoup de trafic, il est peut-être nécessaire d’augmenter la limite de mémoire (ou 256M correspond a 256Mo), ajouter ce snippet au fichier wp-config.php :


```
<?php
define('WP_MEMORY_LIMIT', '256M');
?>

```