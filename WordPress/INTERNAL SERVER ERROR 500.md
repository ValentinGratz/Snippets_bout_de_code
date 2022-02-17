# INTERNAL SERVER ERROR 500

La cause la plus probable d’une erreur Erreur 500 (Internal Server Error) est un fichier corrompu, à savoir le .htaccess du répertoire racine de votre installation WordPress.

Dans 90% des cas, le problème est résolu en supprimant ce fichier .htaccess et en créant un nouveau. Pour supprimer ce fichier, connectez-vous à votre répertoire racine WordPress via FTP et renommez-le de .htaccess en .htaccess-corrompu. Immédiatement connectez à votre tableau de bord WordPress et rendez-vous vers les options de Permaliens. Sélectionnez votre option permalien préférée et enregistrez les modifications. Votre site devrait re-fonctionner correctement.

Il existe d’autres causes pour l’Erreur 500 (Internal Server Error), mais elles peuvent être variées et difficiles à cerner. D’autres méthodes de résolution des problèmes comme renommer le thème, réinitialisation du répertoire plugin et le remplacement des répertoires /wp-includes/ et /wp-admin/ avec des versions originales du dernier fichier zip WordPress.

