## Réparer « Error establishing a database connexion » (erreur de connexion à la base de données)

Aller dans le dossier « www » ou directement ouvrir le fichier wp-config.php et vérifier les informations de connexions : 

```
  define('DB_NAME', 'nombdd');

/** MySQL database username */
define('DB_USER', 'user');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'nom_addresse_bdd');

```

Informations à vérifier avec celles transmises par l’hébergeur.


Si besoin, modifier le mot de passe, via le gestionnaire de bdd, puis le modifier dans le fichier. 
