### Teams API test application

Simple application that allows a user to create teams and players

-   Clone the app
-   Run composer install
-   Run npm install
-   Create your local database
-   Create the .env file `cp .env.example .env`
-   Update the .env file with your local database credentials
-   Generate the application key `php artisan key:generate`
-   Run the database migration: `php artisan migrate`
-   Run the database seed: `php artisan migrate:refresh --seed`


### Functionality that exists
- Database Migrations
- Database Seed
- API endpoint to get a team and its players

### Functionality in process
- API endpoint to add a team
- API endpoint to add a player
- API endpoint to update a player
- Front end to test