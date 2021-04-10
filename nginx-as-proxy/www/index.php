<?php
/*
declare(strict_types=1);
echo "\n<br>HTTP_X_FORWARDED_PROTO:";
var_dump($_SERVER['HTTP_X_FORWARDED_PROTO']);
echo"\n<br> HTTP_X_FORWARDED_PORT:";
var_dump($_SERVER['HTTP_X_FORWARDED_PORT']);
echo"\n<br> REMOTE_ADDR:";
var_dump( $_SERVER['REMOTE_ADDR']);
echo"\n<br> HTTPS:";
  var_dump($_SERVER['HTTPS']);
echo"\n<br> HTTP_X_FORWARDED_HOST:";
var_dump($_SERVER['HTTP_X_FORWARDED_HOST']);
echo"\n<br> HTTP_X_FORWARDED_SERVER:";
    var_dump($_SERVER['HTTP_X_FORWARDED_SERVER']);

echo"\n<br><br>";
echo"\n<br><br> SERVER:";
var_dump($_SERVER);

exit;
*/
require __DIR__ . '/../vendor/autoload.php';

App\Bootstrap::boot()
	->createContainer()
	->getByType(Nette\Application\Application::class)
	->run();
