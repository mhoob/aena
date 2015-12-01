<?php

namespace mhoob\aena;

require_once(dirname(__FILE__).'/../../start.php');




$sql = 'SELECT 1 AS asdf';

$result = database\DatabaseLoader::getInstance()->query($sql);
echo '<pre>';
var_dump($result);
echo '</pre>';

echo 'RUNNING';