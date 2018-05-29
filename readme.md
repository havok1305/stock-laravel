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
9. Composer

This project was created using the command:

   `composer create-project --prefer-dist laravel/laravel stock-laravel`

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
 
  