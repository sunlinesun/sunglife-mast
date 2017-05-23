<?php
define("APP_PATH", realpath(dirname(__FILE__) . '/../')); //指向public上级目录

$app = new Yaf\Application(APP_PATH . "/conf/application.ini");
$app->bootstrap()->run();