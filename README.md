clean install Codeigniter 3.1.11
with
boostrap 3.3.6
jquery 1.12.4
simple sidebar css
composer (./vendor)
custom_module with psr-4 autoload composer(./application/custom_module)

How to use

- setup apache server with XAMPP / WAMP/ MAMP/ LAMP and run it
- run composer install
- run composer dumpautoload -o
- Configure database (application/config/database.php) and create database on RDBMS your choice
- Create Controller with view and model if necessary (application/controllers)
- Add Route with Controller/Method without leading or trailing slashes (application/config/routes.php)
- try access it through browser
