# 💼 Pixel Positions – Laravel Job Board

A modern, minimal job board application built with **Laravel 11**, inspired by the Laracasts "Laravel From Scratch" final project. This platform allows employers to post job listings and job seekers to browse and filter available opportunities.

![Pixel Positions Screenshot](/screenshots/Landing%20Page.png)

[Demo Video](https://www.youtube.com/watch?v=oscJvXW_pYY)

## ✨ Features

-   User registration and authentication
-   Job listings with:

    -   Title, company, logo, salary, location, type (full-time/part-time), and more
    -   Tags for filtering (e.g., Marketing, Engineering)

-   Create a job
-   Search & filter jobs
-   Responsive, clean design

## 🛠 Installation

1. **Open your command prompt** and navigate to the location where you want to store the project:

    ```bash
    cd <PATH TO PROJECT LOCATION>
    ```

2. **Clone the repository** directly into the current directory:

    ```bash
    git clone https://github.com/Viadsss/pixel-positions.git
    ```

3. **Navigate into the project folder**:

    ```bash
    cd pixel-positions
    ```

4. **Ensure you are on the latest `main` branch**:

    ```bash
    git checkout main
    git pull origin main
    ```

5. **Install dependencies**:

    ```bash
    composer install
    npm install
    ```

6. **Set up environment file**:

    ```bash
    cp .env.example .env
    ```

7. **Generate application key**:

    ```bash
    php artisan key:generate
    ```

8. **Run database migrations with seeders**:

    ```bash
    php artisan migrate --seed
    ```

9. **Link the storage folder** (for accessing uploaded or seeded images):

    ```bash
    php artisan storage:link
    ```

10. **Copy seed logos (if applicable)**:

    ```bash
    mkdir -p storage/app/public/logos
    cp -r resources/images/logoSeed/* storage/app/public/logos/
    ```

11. **Set the `APP_URL` in your `.env` file** to match your local environment. For example:

    ```env
    APP_URL=http://localhost:8000
    ```

12. **Start the local development server**:

    ```bash
    php artisan serve
    ```
