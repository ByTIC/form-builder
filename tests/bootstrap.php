<?php

app()->share('inflector', new Nip\Inflector\Inflector());
app()->share('app', new \Nip\Application\Application());

define('PROJECT_BASE_PATH', __DIR__ . '/..');
define('TEST_BASE_PATH', __DIR__);
define('TEST_FIXTURE_PATH', __DIR__ . DIRECTORY_SEPARATOR . 'fixtures');

require dirname(__DIR__) . '/vendor/autoload.php';
