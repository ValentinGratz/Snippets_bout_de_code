Informations à vérifier avec celles transmises par l’hébergeur. Permet d’afficher une date dynamique (ex : 2019-2025). Utilisez ce snippet pour rendre la date dynamique afin que vous n’ayez plus jamais à vous en soucier. Copier dans functions.php

```

<?php 
function comicpress_copyright() {
global $wpdb;
$copyright_dates = $wpdb->get_results("
SELECT
YEAR(min(post_date_gmt)) AS firstdate,
YEAR(max(post_date_gmt)) AS lastdate
FROM
$wpdb->posts
WHERE
post_status = 'publish'
");
$output = '';
if($copyright_dates) {
$copyright = "&copy; " . $copyright_dates[0]->firstdate;
if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
$copyright .= '-' . $copyright_dates[0]->lastdate;
}
$output = $copyright;
}
return $output;
} 
?>

```