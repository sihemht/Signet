# 📚 Signet - Bibliothèque Numérique Personnelle

Signet est une application web développée avec **Symfony**, conçue pour les passionnés de lecture. Elle permet de gérer sa collection de livres physique ou numérique de manière intuitive en s'appuyant sur les données riches de l'API Open Library.

## ✨ Fonctionnalités

- **🔍 Recherche Intelligente** : Recherche de livres par titre, auteur ou ISBN via l'API Open Library.
- **⚡ Importation Rapide** : Ajout d'un livre en un clic avec récupération automatique des métadonnées (résumés, couvertures, sujets).
- **🖼️ Modale de Prévisualisation** : Vérification des détails du livre (AJAX) avant confirmation de l'ajout.
- **📊 Gestion de Collection** :
   - CRUD complet (Ajouter, Modifier, Supprimer).
   - Système de filtres par catégories (Subjects) avec compteurs dynamiques.
   - Suivi du statut de lecture (À lire, En cours, Terminé) via un système de Workflow.
- **📱 Design Responsive** : Interface "Mobile-First" épurée avec Bootstrap 5.

## 🛠️ Stack Technique

- **Backend** : PHP 8.2+ & Symfony 6.4/7.0
- **Database** : MySQL / MariaDB (Doctrine ORM)
- **Frontend** : Twig, JavaScript (Fetch API), Bootstrap 5
- **API Externe** : Open Library API




## 🛠 Pré-requis
* **Docker** & **Docker Compose**
* (Optionnel) PHP 8.2+ localement

### 🚀 Installation rapide

1. **Cloner le projet**
   ```bash
   git clone 
   
### Installer les dépendances système & PHP

2. **Installation des outils nécessaires dans le container**
   ```bash
   docker compose exec php composer install -d backend


### Migration de la base de donées
3. **Préparez la structure de votre base de données en exécutant les migrations**
   ```bash
   docker compose exec php backend/bin/console d:m:m --no-interaction

### Chargement des données (Fixtures)
4. **Alimentez la base avec des données de test pour commencer à travailler immédiatement**
   ```bash
   docker compose exec php backend/bin/console d:f:l --no-interaction

