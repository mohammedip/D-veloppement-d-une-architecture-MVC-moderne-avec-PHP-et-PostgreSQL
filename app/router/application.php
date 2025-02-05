<?php
use App\core\Router;
use App\controllers\front\ArticleController;
use App\controllers\front\LoginController;
require_once '../app/config/Database.php';
require '../vendor/autoload.php';


$router = new Router();

$router->get('/home', ArticleController::class, 'home');
$router->get('/article', ArticleController::class, 'home');
$router->get('/', ArticleController::class, 'home');
$router->get('/login', LoginController::class, 'login');
$router->get('/register', LoginController::class, 'register');
$router->get('/article/{id}', ArticleController::class, 'article');


$router->dispatch();

?>