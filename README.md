# library

# Installation

* run composer install command
* open .env and put your DATABASE_URL settings
* run the command 'php bin/console doctrine:database:create' to create the database
* run the command 'php bin/console doctrine:migrations:migrate' to create the tables

# Usage

* go to http://your-host/library/public
* the homepage is available for all users
* for add/edit, the credentials are testuser/testpass
* command to list books and authors :  php app/console library:list
