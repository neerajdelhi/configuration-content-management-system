# My Laravel Project

## Introduction
This is a Laravel 11 Configurable Content Management project.

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/neerajdelhi/configuration-content-management-system.git
   ```
2. Navigate into the project directory:
   ```bash
   cd c-cms
   ```
3. Install the dependencies:
   ```bash
   composer install
   npm install
   ```
4. Copy the `.env.example` file to `.env` and configure your environment variables:
   ```bash
   cp .env.example .env
   ```
5. Generate the application key:
   ```bash
   php artisan key:generate
   ```
6. Run the migrations:
   ```bash
   php artisan migrate
   ```
7. Create admin using the following SQL commands:
    ```bash
    INSERT INTO users (name, email, password, email_verified_at) 
    VALUES ('Admin User', 'admin@gmail.com', '$2y$12$.eUTN0Pp9v9t/y6EhwWFiut1RCOFzyluEosNmuNYlAThtQRsk8Ggi', NOW());  // admin@123
    ```
-- Assign admin role to user
```bash
INSERT INTO role_user (user_id, role_id) 
VALUES ((SELECT id FROM users WHERE email = 'admin@gmail.com'), 
        (SELECT id FROM roles WHERE name = 'admin'));
```


7. Start the local development server:
   ```bash
   php artisan serve
   ```

## Usage
To start the development server, run:
