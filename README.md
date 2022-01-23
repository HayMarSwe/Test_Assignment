**Window Users:

- Download wamp or xampp local server
- Upate windows environment variable path to point to your php install folder (inside wamp installation dir)

**Mac Os, Ubuntu and windows users continue here:

- Create a database locally named (yourdbname)utf8_general_ci
- Download composer https://getcomposer.org/download/
- Pull Laravel/php project from git provider.
- Rename .env.example file to .env inside your project root and fill the database information.
- Open the console and cd your project root directory
- Run composer install or php composer.phar install
- Run php artisan key:generate
- Run php artisan migrate
- Run php artisan db:seed to run seeders, if any.
- Run php artisan serve


****You can now access your project at localhost:8000 :)

