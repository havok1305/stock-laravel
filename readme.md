# Testing Laravel

### Requirements
1. PHP >= 7.1.3
2. OpenSSL PHP Extension
3. PDO PHP Extension
4. Mbstring PHP Extension
5. Tokenizer PHP Extension
6. XML PHP Extension
7. Ctype PHP Extension
8. JSON PHP Extension
9. [Composer](https://getcomposer.org/download/)

This project was created using the command:

   `composer create-project --prefer-dist laravel/laravel stock-laravel`
   
But if you have laravel installed globally, you could also create the project like this:

   `laravel new stock-laravel`

After installation, some write permissions need to be granted to a few folders.

   ``` 
   sudo chgrp -R www-data storage/ bootstrap/cache/
   
   sudo chmod -R 755 storage/ bootstrap/cache/
   ```

After the first installation, the App key will be generated automatically, however,
when cloning the repository it is necessary to generate another App key because the file 
.env will not be commited in the project. So, execute the following commands inside project root:

  ```
  cp .env.example .env
  php artisan key:generate
  ```
 
## Useful Commands

#### Configuration caching

Laravel allows configuration caching. It's useful to give the application a speed boost.

Command: `php artisan config:cache`

#### Maintenance mode

Disable the application while you are performing some maintenance.

Command: `php artisan down --message="Upgrading database"`

To disable maintenance mode: `php artisan up`

To allow specific IP even on maintenance mode: `php artisan down --allow=127.0.0.1 --allow=192.168.0.0/16`

### Run application without apache

Command: `php artisan serve`

### Set namespace

Command: `php artisan app:name stock`

## Directory Structure

   * **App** -> Application core. Almost all of your classes will be in here.
   * **Bootstrap** -> Contains the `app.php` that bootstraps all the framework.
   * **Config** -> Contains all the configuration files.
   * **Database** -> Contains db migrations, model factories and seeds.
   * **_Public_** -> Contains the entry point to the application. Also houses the assets (CSS, Javascript and images).
   * **Resources** -> Contains the views and the raw un-compiled assets (SASS, LESS).
   * **Routes** -> Contains all the route definitions. Laravel comes with some default files included:
     * `web.php` -> Provides session state, CSRF protection and cookie encryption.
     * `api.php` -> Stateless requests. Need to use tokens.
     * `console.php` -> Defines console based entry points (routes) into the application.
     * `channels.php` -> Register all the event broadcasting channels that the application supports.
   * **Storage** -> Contains the files generated by the framework. Segregated into `app`, `framework` and `logs`. The `storage/app/public` should be used to store user-generated files that should be publicly accessible (like avatars).
   * **Tests** -> Contains automated tests. Each class should be sufixed with the word `Test`. You can run the tests by executing `phpunit`.
   * **Vendor** -> Contains Composer dependencies. 
   
    