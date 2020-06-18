<?php

require_once __DIR__ . '/../Database/db.php';;
require_once __DIR__ . '/Src/App.php';
require_once __DIR__ . '/Routing.php';

$app = new App();
$routing = new Routing($app);
$routing->setup();

return $app;