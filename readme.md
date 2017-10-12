
## Installation
```sh
touch database.sqlite
```

Inside .env file change to:
```sh
DB_CONNECTION=sqlite
DB_DATABASE=/your-path/database/database.sqlite
```

Also remove others db variables.

Run migrations and seeders
```sh
php artisan migrate --seed
php artisan serve
```