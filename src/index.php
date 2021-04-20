<?php

require __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader, [
  'debug' => true,
  'cache' => false
]);

// Parse Json Data
$data = file_get_contents("data.json");
$packages = json_decode($data, true);

echo $twig->render('index.html.twig', [
 'packages' => $packages
]);