# User-Team Management API

A RESTful API built with **Laravel 10+** and **MySQL**, designed to manage users, teams, and their many-to-many relationships, including role assignments within teams.

##  Features

- User and Team CRUD endpoints
- Many-to-Many relationship between Users and Teams
- Role management (e.g., `admin`, `member`)
- Request validation
- Pagination
- OpenAPI (Swagger) documentation
- Optional unit tests

##  Tech Stack

- PHP 8.1+
- Laravel 10+
- MySQL
- Composer
- Eloquent ORM
- L5 Swagger (OpenAPI docs)

##  Installation

```bash
git clone https://github.com/BristolGeza/user-team-api.git
cd user-team-api
composer install
cp .env.example .env
php artisan key:generate
