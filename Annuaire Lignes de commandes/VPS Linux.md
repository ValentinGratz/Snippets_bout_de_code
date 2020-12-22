Changer mot de passe sur un VPS
-	Passwd root	// ligne de commande


| Nom de la commande  | A quoi elle correspond |
| ------------- | ------------- |
| ls  | Affichage du contenu d’un répertoire  |
| touch  | Utilisé en général pour créer un fichier  |
| cat  | Affiche-le contenue d’un fichier (txt)  |
| cd  | Changement de répertoire courant  |
| cp  | Copie  |
| mv  | Déplacement, renommage |
| pwd  | Affichage répertoire courant  |
| man  | Aide en ligne pour les commandes  |
| rm  | Suppression fichier ou répertoire vide (+ -R pour répertoire ; -f sans demander d’autorisation)  |
| mkdir  | Création répertoire  |
| rm – R  | Suppression répertoire  |
| adduser  | Ajouter un utilisateur  |
| addgroup  | Ajouter un groupe d'utilisateur  |
| passwd <user>  | Modifier le mot de passe d'un utilisateur  |

Les dossiers les plus important

| Nom du dossier  | A quoi il correspond |
| ------------- | ------------- |
| /  | Répertoire racine  |
| /bin  | Binaires commandes systèmes  |
| /boot  | Information chargeur démarrage  |
| /dev  | Périphériques  |
| /etc  | Configuration machine  |
| /home  | Répertoires personnels utilisateurs  |
| /lib  | Bibliothèques et librairies partagées  |
| /media, /mnt  | Points de montage  |
| /opt  | Paquetages logiciels complémentaires  |
| /root  | Répertoire personnel root  |
| /slin  | Binaires systèmes réservées root |
| /tmp  | Fichiers temporaires  |
| /usr  | Hiérarchie secondaire  |
| /var  | Données variables  |

# Ajouter un utilisateur
Pour diverses raisons, et notamment pour des questions de sécurité, nous vous conseillons de créer des utilisateurs afin d'exécuter vos services avec un autre utilisateur root. 

N.B : Sachez que l’utilisateur root est le super-admin de votre machine. Il a tous les droits sur la machine !

Pour ajouter un utilisateur, vous devez utiliser la commande “adduser <user>”. Vous pouvez aussi l’ajouter en précisant quelques options :
- adduser <user> -g : Définir son groupe principal
- adduser <user> -G : Définir son groupe secondaire
- adduser <user> -M : Ne pas créer de répertoire personnel pour l’utilisateur
- adduser <user> --home : Choisir le répertoire personnel de l’utilisateur (par défaut, l’utilisateur va créer un répertoire dans le dossier /home portant le nom de l’utilisateur)

Pour le modifier, vous devez utiliser la commande “usermod <user> + l’option que vous souhaitez”.

## Vérifier les mises à jour des paquets
Pour vérifier et mettre à jour les paquets npm installé sur notre bot, nous allons faire cette commande : 
<code>Apt full upgrade</code>
