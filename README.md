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
## 📖 Logique de lecture (Workflow)

L'application utilise une machine à états (State Machine) pour gérer la progression de vos lectures. Voici le cycle de vie d'un livre dans **Signet** :

```mermaid
graph LR
    %% Définition des états
    place0(["📚 À lire"])
    place1(("📖 En cours"))
    place2(("✅ Terminé"))
    place3(("❌ Abandonné"))

    %% Transitions
    place0 -->|"start_reading"| place1
    place1 -->|"finish_reading"| place2
    place0 -->|"abandon_book"| place3
    place1 -->|"abandon_book"| place3
    place1 -->|"reset_to_read"| place0

    %% Styles
    style place1 fill:#634832,color:#fff
    style place2 fill:#d4a373,color:#fff
   ```
## 🛠️ Stack Technique

- **Backend** : PHP 8.2+ & Symfony 6.4/7.0
- **Database** : PostgreSQL (Doctrine ORM)
- **Frontend** : Twig, JavaScript (Fetch API), Bootstrap 5
- **API Externe** : Open Library API

---

## 🛠 Pré-requis

- **Docker** & **Docker Compose**
- (Optionnel) PHP 8.2+ localement

---

## 🚀 Installation rapide

### 1. Cloner le projet
```bash
git clone <url-du-repo>
```

### 2. Installer les dépendances PHP
```bash
docker compose exec php composer install -d backend
```

### 3. Initialiser la base de données
```bash
# Créer la base de donées
docker compose exec php php bin/console doctrine:database:create

# Créer le schéma
docker compose exec php php bin/console doctrine:schema:create
```

---

## 🛠️ Commandes Utiles (Docker)

### ✅ Valider le schéma
Vérifier que les entités sont cohérentes avec la base de données :
```bash
docker compose exec php php bin/console doctrine:schema:validate
```

### 🗺️ Inspecter les routes
Lister toutes les routes disponibles dans l'application :
```bash
docker compose exec php php bin/console debug:router
```

### 🧹 Vider le cache
Si vous modifiez la configuration ou les templates et que les changements ne s'affichent pas :
```bash
docker compose exec php php bin/console cache:clear
```