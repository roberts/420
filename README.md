# 420
Presale site for Multichain 420 Memecoin

## Installation

After setting up local dev environment with PHP 7.4, you will launch this Laravel 8 app by copying the ``.env.example`` file to ``.env``

From there, create the ``tardie`` database in MySQL and from the command line run the following commands:

```bash
composer install
php artisan migrate
php artisan key:generate
npm install
npm run dev
```

You can then view the homepage if you're using Laravel Homestead at https://tardie.test and can access Laravel Nova at http://tardie.test/admin

## Packages

- [tipoff/support](https://github.com/tipoff/support)
- [tipoff/authorization](https://github.com/tipoff/authorization)
- [tipoff/addresses](https://github.com/tipoff/addresses)
- [tipoff/laravel-google-api](https://github.com/tipoff/laravel-google-api)
- [tipoff/laravel-serpapi](https://github.com/tipoff/laravel-serpapi)
- [tipoff/seo](https://github.com/tipoff/seo)
- [drewroberts/media](https://github.com/drewroberts/media)
- [drewroberts/blog](https://github.com/drewroberts/blog)

## Frameworks

- Laravel
- Laravel Nova
- Laravel Socialite
