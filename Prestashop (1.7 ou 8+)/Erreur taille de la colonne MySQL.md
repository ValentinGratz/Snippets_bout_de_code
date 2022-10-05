# Problème de taille lors de la création de la base de données Prestashop

Si vous rencontrer (en localhost ou sur l'hébergement) le problème de taille dans la création de la base de données : 

```
1 : Erreur SQL sur la taille de colonne index de requête trop grande. La taille maximale des colonnes est de 767 octets.
```

Il faut aller modifier le fichier **install/data/db_structure.sql** et remplacer chaque occurrence de

```
DEFAULT CHARSET=utf8mb4 COLLATION
```

par 

```
DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
```

Cela fonctionne sur la version 1.7.X et aussi sur la version 8 bêta pour le moment
