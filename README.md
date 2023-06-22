# Quotes

Features of this site:
1. Show quotes from the database
2. Show quotes using API, and fetch data when CORS is disabled
3. Show quotes using API, and JavaScript only (API provider have enabled CORS)

Using the seeder in the installation instructions below will create demonstration data automatically.

## How to install
1. Run ``composer install``
2. Enter database data in the .env file
3. Run ``php artisan migrate:fresh --seed``