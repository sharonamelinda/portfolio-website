
# Laravel Portfolio Website Project with Tailwind CSS, Filament, and Preline

This is a portfolio web application built with [Laravel](https://laravel.com/), styled with [Tailwind CSS](https://tailwindcss.com/), and enhanced with admin features using [Filament](https://filamentphp.com/). The user interface includes components from [Preline](https://preline.co/).
## Features

- **Tailwind CSS**: A utility-first CSS framework for rapid UI development.
- **Filament**: An admin panel builder for managing CRUD operations.
- **Preline**: Prebuilt UI components for a clean and modern interface.
- **Responsive Design**: Mobile-friendly layouts using Tailwind CSS and Preline.
## Requirements

- PHP ^8.0
- Composer
- Node.js and npm
- Laravel 11.0
- MySQL


## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/yourusername/your-laravel-project.git
   cd your-laravel-project

2. Install PHP depedencies:
   ```bash
   composer install

3. Install JavaScript depedencies:
   ```bash
   npm install

4. Compile assets using Vite:
   ```bash
   npm run dev

5. Copy the `.env` file:
   ```bash
   cp .env.example .env

6. Configure your `.env` file with the appropriate database.

7. Generate an application key:
   ```bash
   php artisan key:generate

8. Run migrations:
   ```bash
   php artisan migrate

## Usage/Examples

- To run the development server:

   ```bash
   php artisan serve

- To build assets for production:
   ```bash
   npm run build

- Access the admin panel at `/admin` using Filament.


## Configurations

#### Tailwind Configurations
Tailwind is configured to work with Vite. To customize Tailwind, you can edit the `tailwind.config.js` file.

#### Filament Integrations
Filament is used to create a robust dashboard admin interface. CRUD operations for models are managed through Filament resources.

#### Preline Component
Preline is integrated into the project for UI elements like buttons, modals, and alerts. Preline styles are imported into the `app.css` file.



## Copyright and Usage Terms

Copyright © 2024 Sharon Amelinda. All rights reserved.

This project is protected by copyright. You are not permitted to use, copy, modify, or distribute this project without explicit written permission from the copyright holder.

If you wish to use this project for any purpose, whether personal or commercial, **please contact me** at [sharonamelindaa@gmail.com] to obtain permission.

Thank you for your understanding.

