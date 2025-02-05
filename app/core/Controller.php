<?php
namespace App\core;

require_once __DIR__ . '/../../vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Controller{


    protected $twig;

    public function __construct() {

        $viewsPath = realpath(__DIR__ . '/../view');
        
        if (!$viewsPath || !is_dir($viewsPath)) {
            throw new \Exception("Twig error: Views directory not found at $viewsPath");
        }

        $loader = new FilesystemLoader($viewsPath);
        $this->twig = new Environment($loader, [
            'cache' => __DIR__ . '/../cache', 
            'autoescape' => 'html' ,
            'debug' => true,
        ]);
    }

    public function render($views, $data = []) {
        
        echo $this->twig->render("$views.twig", $data);
        
    }
    
}

?>


