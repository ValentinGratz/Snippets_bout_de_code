# 🚀 Guide rapide Git → GitHub

Petit mémo personnel pour envoyer un projet local vers GitHub.

## 1. Aller dans le dossier du projet

```bash
cd mon-projet
```

## 2. Initialiser Git

```bash
git init
```

## 3. Ajouter tous les fichiers

```bash
git add .
```

## 4. Créer un premier commit

```bash
git commit -m "Initial commit"
```

## 5. Connecter le dépôt GitHub

Créer un dépôt vide sur GitHub puis remplacer l'URL :

```bash
git remote add origin https://github.com/USERNAME/NOM-DU-REPO.git
```

Vérifier :

```bash
git remote -v
```

## 6. Utiliser la branche principale `main`

```bash
git branch -M main
```

## 7. Envoyer le projet sur GitHub

```bash
git push -u origin main
```

---

# Workflow complet

```bash
git init
git add .
git commit -m "Initial commit"
git remote add origin https://github.com/USERNAME/NOM-DU-REPO.git
git branch -M main
git push -u origin main
```

---

# Ajouter des modifications plus tard

Après avoir modifié des fichiers :

```bash
git add .
git commit -m "Description des modifications"
git push
```

---

# Commandes utiles

### Voir l'état du projet

```bash
git status
```

### Voir la branche actuelle

```bash
git branch
```

### Voir le dépôt distant

```bash
git remote -v
```

### Voir l'historique des commits

```bash
git log --oneline
```

---

# Erreurs fréquentes

## `git n'est pas reconnu`

Git n'est pas installé ou n'est pas dans le PATH.

Télécharger Git :

https://git-scm.com/downloads

---

## `Please tell me who you are`

Configurer Git :

```bash
git config --global user.name "Votre Nom"
git config --global user.email "votre@email.com"
```

---

## `src refspec main does not match any`

Aucun commit n'existe encore ou la branche `main` n'a pas été créée.

```bash
git add .
git commit -m "Initial commit"
git branch -M main
```

---

## `origin does not appear to be a git repository`

Le dépôt distant n'est pas configuré correctement.

```bash
git remote add origin https://github.com/USERNAME/NOM-DU-REPO.git
```

---

# Astuce

Avant toute chose, exécuter :

```bash
git status
```

Cette commande permet souvent de comprendre immédiatement où se situe le problème.
