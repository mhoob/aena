<?php
namespace mhoob\aena;
use mhoob\aena\cms\PageGenerator;

require_once(dirname(__FILE__).'/start.php');

$generator = new PageGenerator();
$generator->update();

