Si vous utiliser DIVI pour le blog, articles et Elementor et que vous rencontrer le soucis de ne pas voir s’afficher le titre de l’article.

En fait, le titre du message est masqué à cause d’un code CSS généré par Elementor.

Pour le remplacer, aller dans DIVI > Options du thème > CSS personnalisé et ajouter ce bout de code :

```
.et_pb_post_title .entry-title {
	display: block !important;
}
```
