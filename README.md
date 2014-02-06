## SunshinePHP Behat Workshop

Well hallo there! Let's get this project setup!

1. [Download Composer](https://getcomposer.org/) into this directory

1. Use Composer to download our dependencies. Run this from the command line:

```
php composer.phar install --dev
```

1. Start up a web server. You can point an Apache VirtualHost at the `web/`
   directory of the project OR (easier), use the built-in PHP web server
   (PHP 5.4 and higher):

```
cd web/
php -S localhost:9000
```

1. The project uses an SQLite database. Make sure you have the `php-sqlite`
extension installed. Now, make sure the `data` is writeable:

```
mkdir -p data
sudo chmod -R 777 data
```

This will just sit there - open up another terminal to keep working on other things.

1. Find the site. Go to `http://localhost:9000`, or whatever you configured.
Load some dummy data by clicking the "Reset DB" link.