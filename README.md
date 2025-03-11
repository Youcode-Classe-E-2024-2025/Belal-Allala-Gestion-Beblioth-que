# 📚 Projet de Gestion de Bibliothèque en Laravel

Ce projet est une application web de gestion de bibliothèque développée avec Laravel. Il permet de gérer les livres, les copies, les utilisateurs et les emprunts de manière efficace. L'application est conçue pour offrir une expérience utilisateur fluide et intuitive.

## 🚀 Fonctionnalités

1. **Authentification des Utilisateurs**
   * Inscription et connexion des utilisateurs.
   * Gestion des rôles (admin, utilisateur).

2. **Gestion des Livres (CRUD)**
   * Ajouter, modifier, supprimer et afficher les livres.
   * Chaque livre possède un titre, un auteur, un ISBN, une description et une date de publication.

3. **Gestion des Copies (CRUD)**
   * Ajouter, modifier, supprimer et afficher les copies des livres.
   * Chaque copie est associée à un livre et possède un code-barres unique.

4. **Filtrage des Copies par Livre**
   * Afficher les copies disponibles pour un livre spécifique.

5. **Gestion des Emprunts**
   * Enregistrer les emprunts et les retours de livres.
   * Afficher uniquement les copies disponibles lors de la création d'un emprunt.

6. **Gestion des Utilisateurs (CRUD)**
   * Créer, modifier, supprimer et afficher les utilisateurs.
   * Gestion des rôles (admin, utilisateur).

7. **Historique des Emprunts par Utilisateur**
   * Afficher l'historique des emprunts pour chaque utilisateur.

8. **Interface Utilisateur**
   * Barre de navigation dynamique en fonction du rôle de l'utilisateur.
   * Interface intuitive et responsive.

## 🛠 Technologies Utilisées

*   **Backend:** Laravel 10
*   **Frontend:** Tailwind CSS, Blade
*   **Base de données:** PostgreSQL
*   **Gestion des dépendances:** Composer
*   **Versioning:** Git

## 📂 Structure du Projet

```bash
bibliotheque/
├── app/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   ├── seeders/
├── public/
├── resources/
│   ├── views/
├── routes/
├── storage/
├── tests/
├── vendor/
├── .env
├── .gitignore
├── composer.json
├── README.md
```

## 🛠 Installation

### Prérequis

*   PHP 8.1 ou supérieur
*   Composer
*   PostgreSQL
*   Node.js (pour Tailwind CSS)

### Étapes d'installation

1.  **Cloner le dépôt**

    ```bash
    git clone https://github.com/Youcode-Classe-E-2024-2025/Belal-Allala-Gestion-Beblioth-que.git
    cd bibliotheque
    ```

2.  **Installer les dépendances**

    ```bash
    composer install
    npm install
    ```

3.  **Configurer la base de données**

    *   Créez une base de données PostgreSQL.
    *   Modifiez le fichier `.env` pour configurer les informations de connexion à la base de données :

        ```env
        DB_CONNECTION=pgsql
        DB_HOST=127.0.0.1
        DB_PORT=5432
        DB_DATABASE=nom_de_votre_base
        DB_USERNAME=votre_utilisateur
        DB_PASSWORD=votre_mot_de_passe
        ```

4.  **Exécuter les migrations et les seeders**

    ```bash
    php artisan migrate --seed
    ```

5.  **Compiler les assets (CSS/JS)**

    ```bash
    npm run build
    ```

6.  **Démarrer le serveur de développement**

    ```bash
    php artisan serve
    ```

7.  **Accéder à l'application**

    Ouvrez votre navigateur et accédez à :

    ```
    http://localhost:8000
    ```

## 📝 Documentation supplémentaire

*   [Laravel Documentation](https://laravel.com/docs)

## 🙏 Remerciements

Un grand merci à Ilyas Riahani, mon coach, pour son soutien, ses conseils précieux et son accompagnement tout au long de ma formation. Merci pour votre patience et votre expertise ! 🙏