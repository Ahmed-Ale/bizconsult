# BizConsult

A robust business management platform built with Laravel 10, designed to help companies manage features, members, messages, services, settings, subscribers, and testimonials efficiently.

## Features

- Company, member, and service management
- User authentication and profile management (Laravel Sanctum)
- Multilingual support (via laravel-localization)
- RESTful API structure
- Admin and user dashboards
- Messaging and testimonials modules
- Settings and configuration management

## Requirements

- PHP >= 8.1
- Composer >= 2.0
- Node.js >= 18.x
- npm >= 8.x
- MySQL >= 5.7 or compatible database
- Laravel 10.x requirements (see Laravel documentation)

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/your-username/bizconsult.git
    cd bizconsult
    ```

2. Install PHP dependencies:

    ```bash
    composer install
    ```

3. Install JavaScript dependencies:

    ```bash
    npm install
    ```

4. Configure environment:

   On Linux/macOS:
   ```bash
   cp .env.example .env
   ```

   On Windows Command Prompt:
   ```bash
   copy .env.example .env
   ```

   Generate the app key:
   ```bash
   php artisan key:generate
   ```

5. Configure your database in `.env`:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=bizconsult
    DB_USERNAME=root
    DB_PASSWORD=root
    ```

6. Run migrations:

    ```bash
    php artisan migrate
    ```

7. (Optional) Seed the database:

    ```bash
    php artisan db:seed
    ```

8. Create a symbolic link for storage:

    ```bash
    php artisan storage:link
    ```

9. Start the development servers:

    - For the frontend (Vite):

        ```bash
        npm run dev
        ```

    - For the backend (Laravel):

        ```bash
        php artisan serve
        ```

## Project Structure

- `app/` - Core application code (Controllers, Models, Policies, Providers, etc.)
- `database/` - Migrations, factories, and seeders
- `routes/` - Route definitions (`api.php`, `web.php`, etc.)
- `resources/` - Blade views, CSS, JS
- `public/` - Public assets and entry point
- `tests/` - PHPUnit test suite

## Testing

Run the test suite:

```bash
php artisan test
```

## Approach & Notes

This project leverages Laravel's modern features, including Laravel Breeze for authentication and localization for multi-language support. The structure is modular, making it easy to extend with new business modules.

## Trade-offs & Assumptions

- The project uses Laravel's built-in authentication and job queue features.
- Multilingual support is provided via the `mcamara/laravel-localization` package.
- The frontend uses Vite and Tailwind CSS for rapid development.
