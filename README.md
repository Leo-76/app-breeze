# Laravel + Breeze

Starter kit Laravel 10 avec authentification Breeze (Tailwind CSS + Alpine.js).

## Installation

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install && npm run build
php artisan serve
```

## Fonctionnalités incluses

- Inscription / Connexion
- Réinitialisation de mot de passe
- Vérification d'email
- Page profil (modifier infos + mot de passe + supprimer compte)
- Dashboard protégé
- Tailwind CSS + Alpine.js

## License

MIT
