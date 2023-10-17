<?php
require __DIR__.'/../vendor/autoload.php';
use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');
$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $bessie;

// store the output in a variable
$output = $bessie->say();
echo $output;