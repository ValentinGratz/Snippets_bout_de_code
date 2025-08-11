# 📌 Snippet – Correction affichage puces Shopify

**But :**  
Afficher les puces *à côté* du texte et non pas au-dessus, même si le thème Shopify applique un style différent.

---

## 💻 Code CSS
```css
/* --- Correction affichage puces Shopify --- */

/* 1. Positionne la puce à l'extérieur du texte */
ul, ol {
  list-style-position: outside !important;
}

/* 2. S'assure que chaque élément de liste se comporte comme une vraie puce */
li {
  display: list-item !important;
}

/* 3. (Optionnel) Uniformise l'espace avant le texte */
ul, ol {
  padding-left: 1.5em; /* Ajuster selon le design */
}
```

📖 Explications

list-style-position: outside;
Met la puce en dehors du bloc texte.
Permet au texte de commencer sur la même ligne que la puce.

display: list-item;
Restaure le comportement par défaut des <li>.
Certains thèmes remplacent ça par display: block;, ce qui casse la mise en page.

padding-left: 1.5em; (optionnel)
Ajoute un espace fixe entre la marge de gauche et le texte, pour un rendu plus propre.
Ajuster la valeur selon le design.

📍 Où mettre ce code ?
Dans Shopify :

Ouvrir Personnaliser le thème

Aller dans Paramètres du thème ou CSS personnalisé (selon ton thème)

Coller le code tout en bas.

Ou directement dans assets/theme.css ou base.css si tu modifies les fichiers.
