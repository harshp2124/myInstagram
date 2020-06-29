# myInstagram

> **myInstagram** is a clone of Instagram made using Laravel.

---

## ProjectSetup

```bash
laravel new myInstagram
cd myInstagram
php artisan serve
```

## Steps to create authentication

```bash
composer require laravel/ui
npm install && npm run dev
php artisan ui vue --auth
```

## Steps to create the database
```bash
touch database/database.sqlite
```

> Edit **.env** file

```bash
php artisan migrate
```

> Restart server

## License

**myInstagram** is an open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
