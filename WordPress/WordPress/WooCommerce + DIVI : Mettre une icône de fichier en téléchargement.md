Pour afficher un icône de fichier à télécharger comme ceci sur la boutique WooCommerce : 

![IMG](https://github.com/ValentinGratz/Snippets_bout_de_code/blob/main/WordPress/img_wp/capture-decran-2023-09-17-103416.png?raw=true)

Avoir au préalable le logo/icône ou favicon de téléchargement, dans la médiathèque de Wordpress. 

Récupérer le lien de cette image : `/wp-content/uploads/2023/09/download-stack.svg`

Trouver une classe CSS dans la boucle de la grille de produits pour les produits téléchargeable (downloadable).

Il te faut trouver, soit une icône dans les polices de symboles embarquées par Divi, soit utiliser une image avec un règle comme celle-ci par exemple :

```
.downloadable:after {
content: url(/wp-content/uploads/2023/09/download-stack.svg);
position: absolute;
top: 0px;
right: 0px;
padding: 10px 14px;
border-radius: 200px;
background-color: #2ea3f2;
}
```

Ou la version améliorer avec ce code optimisé, qui permet aussi la gestion de la taille de l'icône : 

```
.downloadable {
    position: relative; /* Assurez-vous que l'élément parent a une position relative */
}

.downloadable:after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    padding: 10px 14px;
    border-radius: 200px;
    background-color: #2ea3f2;
    width: 20px !important;
    height: 20px !important;
    background-image: url(/wp-content/uploads/2023/09/download-icon.png);
    background-size: cover;
}
```

Ne fonctionne pas encore pour la fiche produit individuelle, uniquement compatible avec DIVI. 
