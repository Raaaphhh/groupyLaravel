# Groupy Laravel

Ce projet est une refonte complète de **Groupy**, cette fois-ci développé avec le framework PHP **Laravel**. L'objectif est de tirer parti des fonctionnalités modernes et robustes de Laravel pour améliorer les performances, la maintenabilité et l'évolutivité de l'application.

## Pourquoi Laravel ?

Laravel est un framework PHP puissant et élégant qui offre :
- Une architecture MVC claire.
- Des outils intégrés pour la gestion des bases de données, les migrations et les seeders.
- Une sécurité renforcée grâce à des mécanismes comme l'authentification et la protection CSRF.
- Une communauté active et une documentation riche.

## Fonctionnalités prévues

- Gestion des utilisateurs (inscription, connexion, rôles).
- Création et gestion de groupes.
- Système de messagerie interne.
- Notifications en temps réel.
- Interface utilisateur moderne et responsive.

## Installation

1. Clonez le dépôt :
    ```bash
    git clone https://github.com/votre-utilisateur/groupy-laravel.git
    cd groupy-laravel
    ```

2. Installez les dépendances :
    ```bash
    composer install
    npm install
    ```

3. Configurez l'environnement :
    - Copiez le fichier `.env.example` en `.env`.
    - Configurez les variables d'environnement (base de données, mail, etc.).

4. Générez la clé de l'application :
    ```bash
    php artisan key:generate
    ```

5. Lancez les migrations et seeders :
    ```bash
    php artisan migrate --seed
    ```

6. Démarrez le serveur de développement :
    ```bash
    php artisan serve
    ```

## Contribution

Les contributions sont les bienvenues ! N'hésitez pas à ouvrir une issue ou une pull request pour toute amélioration ou correction.

---

Merci de votre intérêt pour ce projet ! 🚀