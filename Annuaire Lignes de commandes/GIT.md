# En local
## Configuration du profil
Installation de git sur l’ordinateur : www.git-scm.com (pour windows)
-	$git config --global user.name « Prénom Nom »
-	$git config --global user.email «mon email »
## Le terminal
Win + R, saisir « cmd »

Ou faire un clic droit dans le dossier et cliquer sur « Git Bash Here ». 
## Les branches
-	$git branch // liste toutes les branches du projet, dont la « master » par défaut. 
-	$git branch « nom » // pour créer une branche
-	$git checkout « nom » // pour se déplacer d’une branche à une autre
## Le statut
-	$git status // pour obtenir le status du git
## Snapshot
Commit instantanée du projet à un temps donné. 
-	$git add (nom du fichier) ou « . »
-	$git commit -a-m « Mon message de commit »
## ChangeLog
-	$git diff // liste les modifications effectuées, affiche le code ajouté
-	$git log // liste les id/auteur des modifications
## Fusion de branches
En premier, il faut s’assurer d’être sur la branche MASTER
-	$git diff master(branche1)..branche 2
-	<code>q // pour sortir de l’historique des modifications si ça ne marche pas, essayer Ctrl C ou quitter la console, sinon  fermer git et rouvrir</code>
-	$git merge nombranche pour voir les updates. 
## Les conflits
Si un conflit apparaît, régler manuellement et choisir entre les codes affichés. 
## Faire le ménage
Supprimer une branche quand elle n’est plus utile.
-	$git branche -d nomdelabranche // d’abord s’assurer qu’elle à été merge. 
-	$git branche -D nomdelabranche // supprime même si elle n’à pas été merge.

-	$clear // pour nettoyer la console. 



# En remote (github, gitlab…)

## Créer d’abord le reposity/projet sur github ou un autre site. Pour envoyer le dossier local vers le site (github), faire cette commande :
	$git remote add origin url.git
		        (ajouter) (origin = branche master) et le lien du repo git.

	$git push « ou j’envoie » « sur quelle branche »
		            Origin		master (par exemple)

$git pull « où je récupère » « sur quelle branche » // transfère le local sur github

Pour cloner un reposity github, copier le lien HTTPS.
Pour récupérer le contenu dans un dossier, toujours faire un $git init. Ensuite $git remote add origin.
