# Lignes de commandes Symfony

- Créer un nouveau projet : <code>composer create-project symfony/website-skeleton my_project_name</code> (my_project_name à remplacer avec le nom de son projet)
- Afficher le projet en local : <code>php –S localhost:8080 –t public</code>
- Créer un controller : <code>php bin/console make:controller </code>
- créer une entité : <code>php bin/console make:entity</code>
- créer une base de données <code>php bin/console doctrine:database:create </code>
- appliquer les changements (mise à jour des fichiers) : <code>php bin/console make:migration</code>
- appliquer la migration (avec validation) : <code>php bin/console doctrine:migrations:migrate</code>

## User et authentification

- créer un utilisateur : <code>php bin/console make:user </code>
-- Yes
-- Enter x2
-- Email OU pseudo
-- Enter
- créer une authentification : <code>php bin/console make:auth</code>
-- 1 -- Nom de la classe (avec AUTHENTICATOR à la fin)  --Enter --Yes
- créer un formulaire d'inscription : <code>php bin/console make:registration-form</code> (Y / Y / adresse email / name for email / Y)
- commande pour faire un CRUD : <code>php bin/console make:crud</code>

## Configuration de twig avec bootstrap

- dans le fichier config/packages/twig.yaml, mettre dans le fichier cette ligne : <code>form_themes: ['bootstrap_4_layout.html.twig’]</code>
