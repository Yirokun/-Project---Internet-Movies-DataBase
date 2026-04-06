🎬 Internet Movies DataBase

Projet scolaire réalisé à SUPINFO — Clone fonctionnel d'IMDb développé avec le framework Laravel.

🎯 Aperçu
Internet Movies DataBase est une application web inspirée d'IMDb permettant de consulter, rechercher et gérer une base de données de films. Le projet a été réalisé dans le cadre d'un cours à SUPINFO.

🛠 Stack technique
TechnologieUsagePHP / LaravelBackend & logique métierBladeMoteur de templates LaravelTypeScript / JavaScriptInteractions côté clientCSSStyles personnalisésMySQLBase de données relationnelleComposerGestionnaire de dépendances PHPNPMGestionnaire de dépendances JS

✅ Prérequis
Avant de commencer, assurez-vous d'avoir installé les outils suivants :

PHP >= 8.1
Composer >= 2.x → getcomposer.org
Node.js >= 18.x & NPM → nodejs.org
MySQL >= 8.0
Git → git-scm.com


🪟 Installation via WSL (Windows)

Le projet a été développé et testé sous WSL (Windows Subsystem for Linux). Cette section explique comment configurer WSL avant de suivre les étapes d'installation classiques.

Activer WSL et installer Ubuntu
Dans un terminal PowerShell en tant qu'administrateur :
powershellwsl --install
Cela installe automatiquement WSL 2 avec Ubuntu. Redémarrez votre machine si demandé, puis ouvrez Ubuntu depuis le menu Démarrer et créez votre utilisateur Linux.

💡 Pour vérifier votre version de WSL : wsl --version

Installer les dépendances dans WSL (Ubuntu)
Une fois dans le terminal Ubuntu :
bash# Mettre à jour les paquets
sudo apt update && sudo apt upgrade -y

# Installer PHP et les extensions nécessaires à Laravel
sudo apt install -y php php-cli php-mbstring php-xml php-bcmath php-curl php-zip php-mysql unzip curl

# Installer Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

# Installer Node.js (via nvm, recommandé)
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.7/install.sh | bash
source ~/.bashrc
nvm install --lts

# Installer MySQL
sudo apt install -y mysql-server
sudo service mysql start

# Créer la base de données
sudo mysql -e "CREATE DATABASE imdb_project; CREATE USER 'imdb_user'@'localhost' IDENTIFIED BY 'votre_mot_de_passe'; GRANT ALL PRIVILEGES ON imdb_project.* TO 'imdb_user'@'localhost'; FLUSH PRIVILEGES;"
Accéder aux fichiers du projet depuis WSL
Si vous clonez le repo depuis WSL, travaillez directement dans le système de fichiers Linux pour de meilleures performances :
bash# Recommandé : cloner dans le home Linux
cd ~
git clone https://github.com/Yirokun/-Project---Internet-Movies-DataBase.git

⚠️ Évitez de travailler dans /mnt/c/... (système de fichiers Windows) : les performances I/O sont nettement dégradées sous WSL.

Une fois WSL configuré, suivez les étapes d'installation ci-dessous normalement depuis votre terminal Ubuntu.

🚀 Installation
1. Cloner le dépôt
bashgit clone https://github.com/Yirokun/-Project---Internet-Movies-DataBase.git
cd -Project---Internet-Movies-DataBase/InternetMoviesDatabase
2. Installer les dépendances PHP
bashcomposer install
3. Installer les dépendances JavaScript
bashnpm install

⚙️ Configuration
4. Copier le fichier d'environnement
bashcp .env.example .env
5. Configurer la base de données
Ouvrez le fichier .env et renseignez vos informations de connexion :
TMDB_KEY=votre_APIKEY_tmdb
TMDB_TOKEN=votre_token_tmdb
envDB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=imdb_project
DB_USERNAME=root
DB_PASSWORD=votre_mot_de_passe
6. Générer la clé d'application Laravel
bashphp artisan key:generate
7. Exécuter les migrations et les seeders
bash# Créer les tables en base de données
php artisan migrate

# Peupler la base avec des données de test (si disponibles)
php artisan db:seed

▶️ Lancer le projet
En développement
Ouvrez deux terminaux :
Terminal 1 — Serveur PHP :
bashphp artisan serve
Terminal 2 — Build des assets front-end :
bashnpm run dev
L'application est ensuite accessible à l'adresse : http://localhost:8000
En production
bashnpm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate:fresh --seed

✨ Fonctionnalités

🔍 Recherche de films — Trouver un film par titre, genre ou année
🎬 Fiche film — Affichage des détails : synopsis, casting, note
👤 Gestion des utilisateurs — Inscription, connexion, profil
🗂️ Catalogue — Navigation par genre


👤 Auteur
Yirokun

GitHub : @Yirokun
