<?php 

require __DIR__ . '/vendor/autoload.php';

use Jpgabs\FirstPackage\HelloWorld;

$greeting = new HelloWorld();
echo $greeting->sayHello();
// Should print: "Hello from my first package!"