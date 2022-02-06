# Ajouter des types de fichiers supplémentaires à télécharger

Par défaut, WordPress vous permet de télécharger un nombre limité de types de fichiers les plus couramment utilisés. Cependant, vous pouvez l’étendre pour autoriser d’autres types de fichiers. Ajoutez ce code au fichier functions.php de votre thème :

```

<?php
function my_myme_types($mime_types){
$mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
$mime_types['psd'] = 'image/vnd.adobe.photoshop'; //Adding photoshop files
return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);
?>


```

Ce code vous permet de télécharger des fichiers SVG et PSD sur WordPress. Vous pouvez chercher sur Google pour trouver d’autres types de fichiers que vous souhaitez autoriser, puis les utiliser dans le code.