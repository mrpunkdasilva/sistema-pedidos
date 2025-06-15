# Sistema de Pedidos

[![Laravel](https://img.shields.io/badge/Laravel-9.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.0.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg?style=for-the-badge)](https://opensource.org/licenses/MIT)
[![Docker](https://img.shields.io/badge/Docker-Ready-2496ED?style=for-the-badge&logo=docker&logoColor=white)](https://www.docker.com/)

A robust order management system built with Laravel, designed to streamline the process of handling customer orders efficiently.

## 📋 Requirements

- PHP 8.0.2 or higher
- Composer
- MySQL 5.7+ or PostgreSQL 10+
- Node.js & NPM (for frontend assets)
- Docker & Docker Compose (for containerized setup)

## 🚀 Quick Start

### Using Docker (Recommended)

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/sistema-pedidos.git
   cd sistema-pedidos
   ```

2. Start the Docker environment:
   ```bash
   docker-compose up -d
   ```

3. Install dependencies and set up the application:
   ```bash
   docker compose exec app composer install
   docker compose exec app cp .env.example .env
   docker compose exec app php artisan key:generate
   docker compose exec app php artisan migrate
   docker compose exec app php artisan db:seed
   ```

4. Access the application at http://localhost:8000

### Manual Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/sistema-pedidos.git
   cd sistema-pedidos
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Set up environment file:
   ```bash
   cp .env.example .env
   ```

4. Generate application key:
   ```bash
   php artisan key:generate
   ```

5. Configure your database in the `.env` file and run migrations:
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. Start the development server:
   ```bash
   php artisan serve
   ```

7. Access the application at http://localhost:8000

## 🏗️ Project Structure

```
sistema-pedidos/
├── app/                  # Application core code
│   ├── Http/             # Controllers, Middleware, Requests
│   ├── Models/           # Eloquent models
│   └── ...
├── config/               # Configuration files
├── database/             # Migrations, seeds, factories
├── docker/               # Docker configuration files
├── public/               # Publicly accessible files
├── resources/            # Views, assets, language files
├── routes/               # Application routes
├── storage/              # Application storage
└── tests/                # Automated tests
```

## 🧪 Testing

Run the automated tests with:

```bash
php artisan test
```

Or with Docker:

```bash
docker compose exec app php artisan test
```

## 🔧 Available Commands

- `php artisan migrate` - Run database migrations
- `php artisan db:seed` - Seed the database with sample data
- `php artisan serve` - Start the development server
- `php artisan make:model ModelName -mcr` - Create a model with migration, controller, and resource

## 🔒 Security

If you discover any security vulnerabilities, please email security@yourdomain.com instead of using the issue tracker.

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgements

- [Laravel](https://laravel.com) - The web framework used
- [Docker](https://www.docker.com/) - Containerization platform
