# Firebase App Check Tester

Verify your firebase app check token at [appcheck.vercel.app](https://appcheck.vercel.app)

## Local Developement

If you are concerned about storing your Firebase Service Account JSON, simply clone the repository and set it up on your own.

### Installation

```bash
git clone https://github.com/PyaeSoneAungRgn/appcheck.git
cd appcheck
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

## License

The Firebase App Check Tester is open-sourced software licensed under the [MIT license](https://opensource.org/license/mit/).
