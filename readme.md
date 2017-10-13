
## Installation
```sh
touch database/database.sqlite
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
50 managers were created also 1 admin user, they have the same password: secret

In order to gain access to the system please check users table, because this is generated using Faker.

