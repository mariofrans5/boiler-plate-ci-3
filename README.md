clean install Codeigniter 3.1.11
with
boostrap 3.3.6
jquery 1.12.4
simple sidebar css
composer (./vendor)
custom_module with psr-4 autoload composer(./application/custom_module)

How to use
1.setup apache server with XAMPP / WAMP/ MAMP/ LAMP and run it 
2.run composer install
3.run composer dumpautoload -o
4.Configure database (application/config/database.php) and create database on RDBMS your choice
5.Create Controller with view and model if necessary (application/controllers)
6.Add Route with Controller/Method without leading or trailing slashes (application/config/routes.php)
7.try access it through browser
