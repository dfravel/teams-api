### Teams API test application

Simple API that allows a user to create teams and players. Please follow these instructions to run the application on your local environment.

At this time, this is an API-only application which means it will only work in something like Postman.

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

-   Database Migrations
-   Database Seed
-   API endpoint to register a new user with validation
    -   first_name
    -   last_name
    -   email
    -   password
    -   password_confirmation
-   API endpoint to login
    -   email
    -   password
-   API endpoint to get a team and its players (protected)
    -   in order for this to work, you'll need to login and get the token
-   API endpoint to return a list of users (protected)
    -   in order for this to work, you'll need to login and get the token
-   API endpoint to add a team (protected)
    -   in order for this to work you'll need to login and get the token
-   API endpoint to add a player to a team (protected)
    -   in order for this to work you'll need to login and get the token
    -   team_id (int)
    -   first_name
    -   last_name
-   API endpoint to update a player (protected)
    -   in order for this to work you'll need to login and get the token
    -   endpoint needs to be <URL>/api/players/<player_id>
    -   method needs to be POST
    -   in the body, make sure that you pass:
        -   first_name
        -   last_name
        -   \_method (and set \_method to PATCH)

### Functionality in process

-   Front end to test
