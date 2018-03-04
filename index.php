<?php

include './vendor/autoload.php';

$templates = new League\Plates\Engine('templates');
$templates->addData(['company' => 'PowerHausBrewery'], 'layout');

echo $templates->render('internal/home');
