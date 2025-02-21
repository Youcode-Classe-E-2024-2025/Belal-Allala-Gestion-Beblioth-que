
## 🛠 Installation

### Prérequis

*   PHP 8.1 ou supérieur
*   Composer
*   PostgreSQL
*   Node.js (pour Tailwind CSS)

### Étapes d'installation

1.  **Cloner le dépôt**

    ```bash
    git clone https://github.com/votre-utilisateur/bibliotheque.git
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

<!-- *   [Laravel Documentation](https://laravel.com/docs) -->

## 🙏 Remerciements

Un grand merci à Ilyas Riahani, mon coach, pour son soutien, ses conseils précieux et son accompagnement tout au long de ma formation. Merci pour votre patience et votre expertise ! 🙏