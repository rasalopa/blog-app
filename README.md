# ✔️Blog


> Blog con categorías, tags, panel de admnistración y rol de usuarios.
> Hecho con Laravel Jetstream y AdminLTE 👋


Como usar

````
git clone https://github.com/rasalopa/blog-app.git
````

Nos movemos al directorio del proyecto
````
composer install
npm install
npm run dev
````

Configuramos
````
mv .env.example .env

php artisan key:generate
````

Corremos las migraciones con los seeders
````
php artisan migrate:fresh --seed
````
