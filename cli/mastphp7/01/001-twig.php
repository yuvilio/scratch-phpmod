<?php

require_once 'vendor/autoload.php';

//sample usage of twig
$loader = new Twig_Loader_Filesystem('src/views'); // where are the twig templates

$twig = new Twig_Environment($loader, []);
echo $twig->render(
    "test.twig", // the template
    ["customer" => "Alexander of Daventry"] // arguments to the template (controller layer)
);
