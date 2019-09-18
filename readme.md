## About

Laravel API Development & Vue JS SPA:

- [YouTube Free Preview](https://www.youtube.com/watch?v=AFyzK8qohdE&list=PLpzy7FIRqpGBBKr4FVpEs1fA7uCibdCZ9&index=2&t=0s).
- [Full Udemy Course](https://www.udemy.com/course/laravel-api-development-vue-js-spa-from-scratch/).

## Project Setup

[Laravel API Development & Vue JS SPA - e01- Project Setup](https://www.youtube.com/watch?v=AFyzK8qohdE&list=PLpzy7FIRqpGBBKr4FVpEs1fA7uCibdCZ9&index=2&t=0s)
- Create new project [Via Composer Create-Project](https://laravel.com/docs/6.0/installation#installing-laravel)
    - composer create-project --prefer-dist laravel/laravel jot
- Create authentication the [quick way](https://laravel.com/docs/6.0/authentication#authentication-quickstart)
    - composer require laravel/ui --dev
    - php artisan ui vue --auth
- Remove default Vue/Bootstrap by setting preset to none
    - php artisan preset none
- Add back the base Vue preset
    - php artisan preset vue
- Add npm packages vue-router and tailwindcss in our dev dependencies
    - npm install vue-router tailwindcss --save-dev

## Vue Router

[Laravel API Development & Vue JS SPA - e02 - Vue Router](https://www.youtube.com/watch?v=wJN_7YJkzRw&list=PLpzy7FIRqpGBBKr4FVpEs1fA7uCibdCZ9&index=2)
- Setup vue-router package to handle all of the routing

## Tailwind CSS

[Laravel API Development & Vue JS SPA - e03 - Tailwind CSS](https://www.youtube.com/watch?v=wX1QKUISQjI&list=PLpzy7FIRqpGBBKr4FVpEs1fA7uCibdCZ9&index=3)
- Setup [Tailwind CSS](https://tailwindcss.com/docs/installation/). Though I don't understand why the command we did earlier doesn't cover this new one...
    - npm install tailwindcss
- Add directives to app.scss
- Setup base config
    - npx tailwind init
- Let Laravel Mix know about tailwind. This is a little complex, and I needed to restart 'npm run watch' for the changes to appear. Follow video...

## Login View

[Laravel API Development & Vue JS SPA - e04 - Login View 1](https://www.youtube.com/watch?v=vD3T6M7Hlm0&list=PLpzy7FIRqpGBBKr4FVpEs1fA7uCibdCZ9&index=4)
- Mentions having access to course files. Since I'm watching intro on YouTube I don't have access to this yet.
- This episode is essentially applying tailwind classes to the login page.
- Got a bit distracted by trying to create an SVG graphic! Bummers...

## Login View 2
[Laravel API Development & Vue JS SPA - e05 - Login View 2](https://www.youtube.com/watch?v=izkbbc6GJls&list=PLpzy7FIRqpGBBKr4FVpEs1fA7uCibdCZ9&index=5)
- This episode applies more tailwind classes to the login page. Almost done!

## Login View 3
[Laravel API Development & Vue JS SPA - e06 - Login View 3](https://www.youtube.com/watch?v=IUiwzrK2fpI&list=PLpzy7FIRqpGBBKr4FVpEs1fA7uCibdCZ9&index=6)
- This episode applies final tailwind classes to the login page. Done!