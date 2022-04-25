# Créer un réseau multisite

Pour créer un réseau multisite (plusieurs sites en une installation). Aller dans le fichier wp-config.php du site principal. 

Ajouter ensuite juste au-dessus du commentaire « C’est tout, ne touchez pas à ce qui suit ! Bon Blogging !* » :
```
	define('WP_ALLOW_MULTISITE', true);
  ```
  
Ensuite, vous pouvez enregistrer votre fichier et le mettre à jour sur votre serveur.

Retournez maintenant sur le Dashboard de votre site WordPress. Une nouvelle option est apparue dans la rubrique outil de votre Dashboard.

![This is an image](https://raw.githubusercontent.com/ValentinGratz/Snippets_bout_de_code/main/WordPress/img_wp/1outil1_crea_reseau.png)

Cliquez sur “Création du réseau”. Une nouvelle page s’affiche et vous demande de désactiver toutes vos extensions sur votre site. Faites-le. Ensuite, retournez dans la rubrique “outils” puis cliquez sur “Création du réseau”.

![This is an image](https://github.com/ValentinGratz/Snippets_bout_de_code/blob/main/WordPress/img_wp/2crea_reseau_2.png)

Définissez le nom de votre réseau ainsi que l’adresse email d’administration de celui-ci. Cliquez ensuite sur le bouton “installer”. Une nouvelle page s’affiche :

![This is an image](https://github.com/ValentinGratz/Snippets_bout_de_code/blob/main/WordPress/img_wp/3crea_reseau_3.png)

Comme indiqué, vous devez copier-coller le premier code dans votre fichier wp-config.php.
Attention, avant de poursuivre cette partie, nous vous conseillons de faire une sauvegarde des fichiers “wp-config.php” et “.htaccess”.
Retournez sur votre client FTP pour récupérer de nouveau le fichier. Ajoutez-y le code, enregistrez votre fichier et mettez-le à jour sur votre serveur.
Vous devez ensuite copier-coller le second code sur votre fichier .htaccess en remplaçant le contenu existant. Le fichier .htaccess est un fichier qui permet de sécuriser votre site web et bloquer l’accès à certains url ou dossiers de votre site web. Il se trouve à la racine de votre site web :

![This is an image](https://github.com/ValentinGratz/Snippets_bout_de_code/blob/main/WordPress/img_wp/4fichier_htaccess.png)

De la même façon que le fichier “wp-config.php”, téléchargez le fichier pour l’éditer et ajoutez les lignes de codes. Uploadez la nouvelle version sur votre serveur et cliquez sur “se reconnecter” sur votre interface WordPress.
Vous pouvez constater de nouveaux éléments sur votre Dashboard. Détaillons ensemble à quoi ils correspondent.
