 Logique de conception de symfony : 


1 - On fait l'application coté front (SANS SYMFO)
        HTML/CSS/JS

2 - On install Symfo + création bdd

3 - On créer l'authentification (ou pas)
        make:user etc...
        
4 - On fait le MCD 

5 - On fait les Entity
        make:entity make:migration doctrine:migrations:migrate

6 - On fait les relations (php bin/console make:entity EntitynameDejaExistant puis 'Relation' puis NomDeClass)
        /!\ AUX MAJUSCULES EN DEBUT DE CLASS /!\
        
7 - Création du controller D'accueil UNIQUEMENT
        ( route '/' )

8 - Application du "theme" statique 
        (base.html.twig)
        /!\ UNIQUEMENT SUR LA PREMIERE PAGE /!\ 

9 - CRUD (partie Admin)
        make:crud
        (on peut aussi faire un base.admin.html.twig) donc un design totalement différent
        
10 - Affichage des infos issue du crud dans la partie FrontOffice
        on va créer nos autres ROUTES frontOffice ICI
