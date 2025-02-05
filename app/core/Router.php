<?php 

namespace App\core;

use App\core\Controller;

class Router extends Controller{
    private $routers=[];

    private function addRoute($route,$controller,$action,$method){
        $this->routers[$method][$route]=['controller'=>$controller,'action'=>$action];
    }

    public function get($route,$controller,$action){
        $this->addRoute($route,$controller,$action,'GET');
    }

    public function post($route,$controller,$action){
        $this->addRoute($route,$controller,$action,'POST');
    }

    public function dispatch() {
        $uri = strtok($_SERVER['REQUEST_URI'], '?'); 
        $method = $_SERVER['REQUEST_METHOD'];
    
        if (!isset($this->routers[$method])) {
            die("No routes registered for this method.");
        }
    

        if (isset($this->routers[$method][$uri])) {
            $route = $this->routers[$method][$uri];
            $controllerName = $route['controller'];
            $action = $route['action'];
    
            if (!class_exists($controllerName)) {
                die("Controller class not found: $controllerName");
            }
    
            $controller = new $controllerName();
            if (!method_exists($controller, $action)) {
                die("Method $action not found in controller $controllerName");
            }
    
            // echo "Dispatching to $controllerName::$action() <br>"; 
            $controller->$action();
            return; 
        }
    

        foreach ($this->routers[$method] as $route => $target) {
            $pattern = preg_replace('/\{[a-zA-Z0-9_]+\}/', '([a-zA-Z0-9_-]+)', $route);
            $pattern = "#^" . $pattern . "$#"; 
    
            if (preg_match($pattern, $uri, $matches)) {
                array_shift($matches); 
                
                $controllerName = $target['controller'];
                $action = $target['action'];
    
                if (!class_exists($controllerName)) {
                    die("Controller class not found: $controllerName");
                }
    
                $controller = new $controllerName();
                if (!method_exists($controller, $action)) {
                    die("Method $action not found in controller $controllerName");
                }
    
                // echo "Dispatching to $controllerName::$action() with parameters: " . implode(', ', $matches) . "<br>"; 
                $controller->$action(...$matches);
                return;
            }
        }
    
        die("No route found for: $method $uri");
    }
    
   
}

?>

