<?php
require __DIR__.'/../vendor/autoload.php';
use Wild\App\Hello;

$message = new Hello();

echo $message->talk();
?>
