1️⃣ Crée un fichier fix.php à la racine de ton site
Via FTP ou le gestionnaire de fichiers, crée un fichier fix.php avec ce contenu :

```
<?php
// Active le mode debug WordPress
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

// Inclut WordPress
require_once('wp-load.php');

// Désactive tous les plugins
$all_plugins = array_keys(get_option('active_plugins'));
update_option('active_plugins', array());

echo "Tous les plugins ont été désactivés temporairement.<br>";
echo "Vérifie maintenant le site public.";
?>
```

2️⃣ Accède au script depuis ton navigateur

Va sur :

https://nomdusite.ltd/fix.php

Tu devrais voir un message :

Tous les plugins ont été désactivés temporairement.

Vérifie maintenant le site public.

Ton site devrait reparaître immédiatement.

Si oui, le problème vient d’un plugin.

3️⃣ Identifier le plugin problématique

•	Retourne dans l’admin WordPress → Plugins

•	Réactive-les un par un et recharge le site à chaque fois.

•	Le plugin qui fait planter le site est celui que tu actives juste avant que la page blanche réapparaisse.

4️⃣ Supprimer le script

Important : Une fois le site revenu, supprime fix.php pour des raisons de sécurité.


💡 Astuce : Avec ce script, tu peux rapidement diagnostiquer et restaurer le site sans toucher à la base de données manuellement.

