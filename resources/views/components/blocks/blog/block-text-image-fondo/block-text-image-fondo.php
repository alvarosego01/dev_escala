<?php
// Block Name: Blog Text Image Block Fondo

use App\Classes\Twig_Config;

require_once THEME_ROOT_PATH . '/vendor/autoload.php';

$twig = Twig_Config::getInstance()->getTwig();

$slug = $context['slug'];
$path = $context['path'];

echo $twig->render($path . "/{$slug}.twig", $context);