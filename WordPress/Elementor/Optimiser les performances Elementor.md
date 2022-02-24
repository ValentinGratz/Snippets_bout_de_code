# Optimiser les performances Elementor

Outils, options et paramétrages pour optimiser les performances d’Elementor sur son site

## Paramètres du plugin Elementor
Il existe quelques outils et paramètres fournis par Elementor pour améliorer vos performances.

![capture](https://cdn-adfpf.nitrocdn.com/poENmqhFpFjqdcNyrYGYGfZqtSAqIylc/assets/static/optimized/rev-ddf1420/wp-content/uploads/2021/08/re%CC%81glages-avance%CC%81s-Elementor.jpeg)

## Optimiser la sortie DOM
Cela permet d’éviter une taille excessive du DOM dans les outils de mesure.
Activez cette option sous Elementor – Paramètres – Expériences – Sortie DOM optimisée.
Cela supprime les wrappers div inutiles (elementor-inner, elementor-row et elementor-column-wrap) dans votre code. Vérifiez que votre site Web Elementor ne présente pas d’erreurs visibles après avoir activé cette fonction.

## Amélioration du chargement des ressources
L’amélioration du chargement des éléments est une fonctionnalité expérimentale qui nécessite Elementor Pro v3.0.9 et plus. Elle ne charge que certains éléments là où ils sont réellement chargés (fichiers JS dans les gestionnaires de widgets d’Elementor Core, et Swiper dans Elementor + Elementor Pro).
Elementor prévoit d’ajouter d’autres fonctionnalités expérimentales pour améliorer la vitesse, alors consultez le changelog un conseil avant de mettre à jour le plugin ! Ces fonctionnalités sont en Beta (Alpha pour certaines) donc attention à bien vérifier que rien ne casse sur votre site.
Activez cette fonctionnalité dans Elementor → Paramètres → Expériences → Amélioration du chargement des actifs.

