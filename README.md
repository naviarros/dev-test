# Customer Dashboard API

A simple Laravel application to manage and display customers with **paginated API** and an optional **Blade + Tailwind dashboard**.  

## Requirements

- PHP >= 8.1  
- Composer  
- MySQL or MariaDB  
- Node.js & npm (optional, for Tailwind CSS frontend)  

---

## Installation

### 1. Install Composer

Composer is a dependency manager for PHP.  

**Linux / macOS:**

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer
composer --version
```

**Windows:**

Download and run https://getcomposer.org/download/ - Composer-Setup.exe

## Clone the repository

git clone https://github.com/naviarros/dev-test.git
cd dev-test

## Install PHP Dependencies

composer install

## Configure environment

cp .env.example .env or create .env file and copy the contents of .env.example
php artisan key:generate

# Edit .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dev
DB_USERNAME=root
DB_PASSWORD=     ## add if your mysql db has password

## Set up database

Create database based on the "DB_DATABASE"
run php artisan migrate

## Run the action to migrate the data from csv

php artisan app:customers

## Navigate the application

localhost:8000/dashboard
