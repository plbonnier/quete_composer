<?php
require __DIR__.'/../vendor/autoload.php';
use App\Hello;

$message = new Hello();

echo $message->talk();
?>
