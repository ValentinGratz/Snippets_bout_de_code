# Mettre en évidence les commentaires de l’auteur d’un article

Ce snippet ne met en évidence que l’auteur de l’article et non pas tous les auteurs du site. Copier dans votre fichier *CSS* : 

```
.commentlist .bypostauthor {
/* -- Add a darker border - */
border: 1px #bbb solid;
/* -- CSS3 Linear Gradient -- */
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f5f5f5), to(#ddd));
background: -moz-linear-gradient(0% 100% 90deg,#ddd, #f5f5f5);
/* -- CSS3 Shadow -- */
-webkit-box-shadow:0px 0 50px #ddd;
-moz-box-shadow:0px 0 50px #ddd;
box-shadow:0px 0 50px #ddd;
}

```