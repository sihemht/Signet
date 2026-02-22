# NijiEvent API 🚀

Application événementielle développée avec **Symfony 7.4 (API Platform)** et **React**.

## 🛠 Pré-requis
- Docker & Docker Compose
- (Optionnel) PHP 8.2+ localement

## 🚀 Installation rapide

1. **Lancer les containers**
   ```bash
   docker compose up -d --build
   
2. **Installer les dépendances système & PHP**

   # Installation des outils nécessaires dans le container
    docker compose exec php apt-get update
docker compose exec php apt-get install -y zlib1g-dev libzip-dev unzip git

# Installation des packages Symfony
docker compose exec php composer install -d backend

3. **Préparer la Base de Données**

docker compose exec php backend/bin/console d:m:m --no-interaction
docker compose exec php backend/bin/console d:f:l --no-interaction