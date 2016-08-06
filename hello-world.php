<html><body>
<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console

echo 'Hello world from Cloud9!';

?>
</body>
</html>rm README.md php.ini hello-world.php
sudo composer self-update
composer create-project laravel/laravel ./laravel --prefer-dist
shopt -s dotglob
mv laravel/* ./
rm -rf laravel