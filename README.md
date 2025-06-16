#  User-Team Management API

A RESTful API built with Laravel 10+ and MySQL, designed to manage users, teams, and the many-to-many relationships between them (including roles like "member" and "admin").

---

##  Setup Instructions

### Prerequisites

- PHP 8.1+
- Composer
- MySQL
- Laravel CLI (optional but helpful)

### Installation Steps

```bash
# Clone the repository
git clone https://github.com/BristolGeza/user-team-api.git
cd user-team-api

# Install dependencies
composer install

# Set up environment
cp .env.example .env
php artisan key:generate

# Configure the .env file for your MySQL database
# Then run the database migrations
php artisan migrate

# Run the local development server
php artisan serve
```

The API will be accessible at: `http://localhost:8000`

---

##  Assumptions Made

- Every user can belong to multiple teams, and each team can have multiple users (many-to-many).
- Team roles are stored in the pivot table (`team_user.role`) and default to `"member"` if not specified.
- Authentication is not required for this exercise; all endpoints are public by default.
- Pagination limit is set to 10 items per page.
- Swagger is used for API documentation via the `l5-swagger` package.
- No file uploads or advanced media handling are needed in this version.

---

##  Endpoints Overview

### Users

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET    | `/api/users` | List all users |
| POST   | `/api/users` | Create new user |
| GET    | `/api/users/{id}` | Get user and teams |
| PUT    | `/api/users/{id}` | Update user |
| DELETE | `/api/users/{id}` | Delete user |

### Teams

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET    | `/api/teams` | List all teams |
| POST   | `/api/teams` | Create a team |
| GET    | `/api/teams/{id}` | Get team and members |
| PUT    | `/api/teams/{id}` | Update team |
| DELETE | `/api/teams/{id}` | Delete team |

### Team Memberships

| Method | Endpoint | Description |
|--------|----------|-------------|
| POST   | `/api/teams/{team_id}/members` | Add user to team |
| PUT    | `/api/teams/{team_id}/members/{user_id}` | Update user’s role |
| DELETE | `/api/teams/{team_id}/members/{user_id}` | Remove user from team |

---

##  Testing (Optional)

Feature tests can be run using Laravel's built-in testing tools:

```bash
php artisan test
```

Example test located in `tests/Feature/UserApiTest.php`.

---

##  API Documentation (Swagger)

Install and generate OpenAPI docs:

```bash
composer require "darkaonline/l5-swagger"
php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"
php artisan l5-swagger:generate
```

View docs at: `http://localhost:8000/api/documentation`

---

##  What I’d Do Differently With More Time

- Implement **authentication** (e.g., Laravel Sanctum or Passport) and **role-based access control**.
- Add **soft deletes** and user/team **activity logging**.
- Extend team roles to be configurable (not hardcoded strings).
- Add **search and filtering** for both users and teams.
- Build a **frontend UI** (e.g., Vue/React) to interact with the API.
- Set up **CI/CD**, automated tests, and **Dockerized deployment**.
- Write comprehensive **unit and feature tests** for all edge cases.

---

##  License

MIT License

---

##  Author

**Geza Csosz**  
GitHub: [BristolGeza](https://github.com/BristolGeza)
