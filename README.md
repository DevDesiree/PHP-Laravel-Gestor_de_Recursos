
# Code-Crafthers-Resource-Manager 

### Grupal project  of the FemCoders Bootcamp 😍

# 🗂️Index
### 1. Discription
### 2.Guide of intallation
### 3.Technologies used
### 4.Authors



# 📝Description
This pedagogical project implements a resource manager in PHP and laravel with MySQL integration. Users can add, edit, filter and delete resources from their list of resources.

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone https://github.com/DevDesiree/PHP-Laravel-Gestor_de_Recursos

Switch to the repo folder

    cd PHP-Laravel-Gestor_de_Recursos

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env



Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**Tool;DR command list**

    git clone  https://github.com/DevDesiree/PHP-Laravel-Gestor_de_Recursos
    cd PHP-Laravel-Gestor_de_Recursos
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan jwt:generate 
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

## Database seeding

**Populate the database with seed data with relationships which includes users, articles, comments, tags, favorites and follows. This can help you to quickly start testing the api or couple a frontend and start using it with ready content.**


Run the database seeder and you're done

    php artisan db:seed

***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh   

## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.


# 💻Technologies used:
## 🛠️ Skills

[![My Skills](https://skillicons.dev/icons?i=html,js,tailwind,git,github,figma,php,laravel,mysql)](https://skillicons.dev)

##  👩‍💻Authors

- [@Desiree](https://github.com/DevDesiree)
- [@Atefa](https://github.com/Atefa1234)
- [@Marta Nuñez](https://github.com/martanuan)
- [@Marta Parra](https://github.com/Macata47)
- [@Yamila](https://github.com/yamiranea)

----------
----------
 


