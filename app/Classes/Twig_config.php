<?php

namespace App\Classes;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\Extension\DebugExtension;
use Twig\TwigFunction;

class Twig_Config
{
    private static $instance = null;
    private $twig;

    private function __construct()
    {
        $loader = new FilesystemLoader(THEME_ROOT_PATH . '/resources/views');

        $this->twig = new Environment($loader, [
            'cache' => get_template_directory() . '/storage/framework/views',
            'debug' => WP_DEBUG,
        ]);

        if (WP_DEBUG) {
            $this->twig->addExtension(new DebugExtension());
        }

                $this->twig->addFunction(new TwigFunction('get_img', [new Blocks_functions(), 'get_img']));

    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getTwig()
    {
        return $this->twig;
    }

    public function render($template, $context)
    {
        return $this->twig->render($template, $context);
    }
}
