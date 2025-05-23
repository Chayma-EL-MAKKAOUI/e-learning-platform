# GI E-Learning Platform

Une application web e-learning destinée aux étudiants de la filière Génie Informatique (GI), développée en Laravel. Elle permet la gestion des cours (PDF) et la réalisation de QCM interactifs, avec des interfaces adaptées pour les étudiants, enseignants et administrateurs.

## 📚 Fonctionnalités principales

- 📂 Lecture de cours par module
- ❓ Passage de QCM avec correction automatique
- 👨‍🏫 Interface enseignant : ajout/suppression de cours
- 🔐 Interface admin : gestion des comptes enseignants
- 👨‍🎓 Interface étudiant : accès sans authentification

## 🧰 Technologies utilisées

- **Laravel** – Framework PHP
- **MySQL** – Base de données relationnelle
- **Bootstrap** – Framework CSS responsive
- **jQuery** – Bibliothèque JavaScript
- **HTML/CSS/JS** – Structure et interaction du front-end
- **XAMPP** – Serveur local Apache + MySQL
- **VS Code** – Éditeur de code
- **StartUML** – Modélisation UML

## ⚙️ Installation locale

### Étapes :

```bash
# 1. Cloner le dépôt GitHub
git clone https://github.com/Chayma-EL-MAKKAOUI/gi-e-learning-platform.git
cd gi-e-learning-platform

# 2. Installer les dépendances PHP avec Composer
composer install

# 3. Installer les dépendances front-end
npm install
npm run dev

# 4. Configurer l'environnement
cp .env.example .env
php artisan key:generate

# 5. Configurer la base de données dans le fichier .env
# puis exécuter les migrations
php artisan migrate

# 6. Lancer le serveur de développement
php artisan serve
