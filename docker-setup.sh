#!/bin/bash

# Make the script executable
chmod +x docker-setup.sh

# Build and start Docker containers
docker-compose up -d

# Install composer dependencies
docker-compose exec app composer install

# Copy environment file
docker-compose exec app cp .env.example .env

# Generate application key
docker-compose exec app php artisan key:generate

# Run migrations
docker-compose exec app php artisan migrate

# Optional: Seed the database
# docker-compose exec app php artisan db:seed

echo "Docker setup completed! Your application is running at http://localhost:8000"