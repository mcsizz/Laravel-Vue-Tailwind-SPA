## About

Laravel API Development & Vue JS SPA:

- [YouTube Free Preview](https://www.youtube.com/watch?v=AFyzK8qohdE&list=PLpzy7FIRqpGBBKr4FVpEs1fA7uCibdCZ9&index=2&t=0s).
- [Full Udemy Course](https://www.udemy.com/course/laravel-api-development-vue-js-spa-from-scratch/).

## Project Setup

Create new project [Via Composer Create-Project](https://laravel.com/docs/6.0/installation#installing-laravel)
-  composer create-project --prefer-dist laravel/laravel jot
Create authentication the [quick way](https://laravel.com/docs/6.0/authentication#authentication-quickstart)
- composer require laravel/ui --dev
- php artisan ui vue --auth
Remove default Vue/Bootstrap by setting preset to none
- php artisan preset none
Add back the base Vue preset
- php artisan preset vue