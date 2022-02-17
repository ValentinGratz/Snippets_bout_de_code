# Installer/créer un thème enfant

La création d'un thème enfant est un excellent moyen d'ajouter des personnalisations permanentes à votre thème.

Si vous apportez de nombreuses modifications à votre site Web via le fichier functions.php, vous savez que chaque fois que vous mettez à jour le thème, les modifications que vous apportez sont perdues. Une façon de les préserver consiste à utiliser un thème enfant.

Nous utiliserons le thème TwentyTwenty comme exemple.

Pour créer un thème enfant, accédez à votre installation WordPress racine via le gestionnaire de fichiers de cPanel ou via FTP et accédez à wp-content > thèmes.

À l'intérieur, créez un nouveau dossier, donnez-lui le même nom que son thème parent mais avec "-enfant"Suffixe (par exemple"vingt-vingt-enfant").

Dans ce dossier, créez un fichier appelé "style.css». À l'intérieur, collez ce qui suit:

/ * Nom du thème: Twenty Twenty Child Description: Twenty Twenty Child Thème Modèle: Twentytwenty Version: 1.0.0 * /

Cela indique à WordPress que nous créons un thème enfant basé sur Twenty Twenty. Vous pouvez ajouter d'autres paramètres ici, mais le Nom du thème et Modèle sont requises. Le nom du thème est le nom de votre thème enfant et le modèle est le nom du répertoire du thème parent.

Et c'est tout!

Vous devriez maintenant pouvoir voir et activer votre thème enfant lorsque vous vous connectez à votre tableau de bord WordPress. Pour ajouter des fonctions personnalisées, créez un functions.php dans le répertoire du thème enfant et ajoutez vos extraits de code personnalisés.
