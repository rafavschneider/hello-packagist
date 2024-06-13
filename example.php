<?php

require __DIR__ . '/vendor/autoload.php';

use Rafaschneider\HelloPackagist\Hello;

$hello = new Hello();
echo $hello->packagist();