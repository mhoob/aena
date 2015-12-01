<?php
namespace mhoob\aena;
use mhoob\aena\database\DatabaseLoader;

error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

ini_set('display_errors', 'stdout');
ini_set('display_startup_errors', true);
ini_set('html_errors', true);
ini_set('exit_on_timeout', true);
ini_set('memory_limit', '512M');


require_once(dirname(__FILE__).'/src/core/Autoloader.php');

date_default_timezone_set('Europe/Vienna');
DatabaseLoader::setDsn('mysql:dbname=aena;host=127.0.0.1');
DatabaseLoader::setUser('aena');
DatabaseLoader::setPassword('aena');



