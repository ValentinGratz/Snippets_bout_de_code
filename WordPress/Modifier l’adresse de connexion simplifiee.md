# Modifier l’adresse de connexion simplifiée

Vous trouvez l’adresse de connexion par défaut trop encombrante ? Vous pouvez la modifier en éditant votre fichier .htaccess. Avant de procéder à des modifications, effectuez une sauvegarde.

Pour faire en sorte que votre URL de connexion soit simplement http://example.com/login, il suffit d’ajouter cette ligne dans votre fichier .htaccess avant la réécriture par défaut de WordPress :

```
RewriteRule ^login$ http://yoursite.com/wp-login.php [NC,L]
```