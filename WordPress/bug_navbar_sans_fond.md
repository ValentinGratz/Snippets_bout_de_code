# Fond qui disparait à chaque fois que je vide le cache sur site WordPress

## Problème : 
Quand je vide le cache, et que je visite mon site, à chaque fois l'image de fond ne va pas jusqu'en au et fait disparaitre la navbar comme ceci : 
![image](https://github.com/ValentinGratz/Snippets_bout_de_code/assets/39189263/5918c6e0-4aa3-47a1-930e-b29689c74c54)

### Ce produit sur : 
WordPress 6.5.3
thème : Dabble

## Solution :
Appliquer dans le CSS personnalisé ce code : 

```
#navbar {
  position: fixed; !important
  top: 0; !important
  left: 0; !important
  width: 100%; !important
  z-index: 100; !important
}

.content {
  margin-top: 60px; !important /* La hauteur de la navbar */
}

```
