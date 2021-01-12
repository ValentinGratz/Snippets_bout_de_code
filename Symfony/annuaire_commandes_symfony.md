# Annuaire lignes de commandes Symfony

Création du projet
```
composer create-project symfony/website-skeleton my_project_name 
```

Ouvrir le projet en local 
```
php –S localhost:8080 –t public
```

Créer un controller 
```
php bin/console make:controller
```

Créer une entité
php bin/console make:entity

```
Ouvrir le fichier .env
Rechercher la partie DATABASE_URL
Utilisez la partie mysql:// et remplacer les informations :
 db_user
 db_password
 db_name
La base de donnée est maintenant configurée
APP_ENV permet de passer du mode dev au mode prod 
En mode dev les message d’erreur sont détaillés
En mode dev il y’as une barre de débug sur toutes les pages html
En mode dev il y’as un profiler qui permet de monitorer les perfs du site
```

Création de la base de données 
```
php bin/console doctrine:database:create 
```

Créer et appliquer une migration
```
php bin/console make:migration
```

NE MARCHE PAS SI AUCUN CHANGEMENT SUR LES ENTITY
Créer le fichier de migration (racine/migrations)

Vérifier que la migration est correcte
```
php bin/console doctrine:migrations:migrate
```
On valide la demande de migration (y)

La migration s’applique automatiquement

## Créer un utilisateur et le système d’authentification

```
php bin/console make:user

Yes
Enter x2
Email OU pseudo
Enter
```

Effectuer la migration
```
php bin/console make:auth
1
Nom de la class auth (DOIS CONTENIR AUTHENTICATOR DANS LE NOM)
Enter
Yes

« php bin/console make:registration-form »
Y / Y / adresse email / name for email / Y
```