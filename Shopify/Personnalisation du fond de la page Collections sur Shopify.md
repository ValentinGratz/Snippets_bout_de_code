# Solution 1 : Modifier le fond via l'éditeur de thème
1. Accède à ton tableau de bord Shopify.
2. Va dans "Online Store" > "Themes" et choisis le thème que tu utilises pour Schooly Kawaii.
3. Clique sur "Customize" pour accéder à l'éditeur de thème.
4. Sélectionne la page Collections dans l’aperçu, si ce n’est pas déjà le cas.
5. Dans l'éditeur, cherche la section "Colors" ou "Theme Settings". Ici, tu devrais pouvoir ajuster les couleurs globales de ton site, y compris le fond. Si la couleur bleue persiste au niveau du fond de la page collections, tu pourras changer cela directement.

# Solution 2 : Modifier le CSS
Si tu n’arrives pas à modifier le fond directement via l'éditeur, tu peux ajuster le CSS. Voici ce que tu peux faire :

Accède à ton tableau de bord Shopify.

Va dans "Online Store" > "Themes" et sélectionne ton thème actuel.

Clique sur "Actions" > "Edit code".

Cherche le fichier "theme.css" ou un fichier CSS similaire (cela dépend du thème que tu utilises).

Ajoute ou modifie la règle suivante dans le CSS :

```
.collection-page {
    background-color: #ton-code-couleur; /* Remplace #ton-code-couleur par la couleur que tu souhaites */
}

```
Cela devrait modifier le fond de la section principale de la page des collections. N’oublie pas de remplacer #ton-code-couleur par le code hexadécimal de la couleur que tu veux utiliser.

# Solution 3 : Si tu utilises un thème avec un réglage pour les pages spécifiques
Certains thèmes Shopify permettent de définir des couleurs de fond spécifiques pour certaines pages via l'interface de personnalisation :

Dans l'éditeur de thème, vérifie s’il existe une option pour personnaliser le fond des pages Collections uniquement.

Va dans "Theme Settings" > "Background" et vérifie si tu peux ajuster le fond pour cette page en particulier.
