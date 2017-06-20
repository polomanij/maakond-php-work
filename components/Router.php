<?php

class Router {
    private $routes;
    
    public function __construct()
    {
        $routesPath =   ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }
    
    private function getURI()
    {
        $uri = $_SERVER['REQUEST_URI'];
        
        if (!empty($uri)) {
            return trim($uri, '/');
        }
    }
    
    public function run()
    {
        //Get request string
        $uri = $this->getURI();
        
        //Check that request is available
        foreach ($this->routes as $uriPattern => $path) {
            
            //Comprassion of $uriPattern and #uri
            if (preg_match("~$uriPattern~", $uri)) {
                $internalRoute = preg_replace("~$uriPattern~" , $path, $uri);
                $segments = explode('/', $internalRoute);
                
                $controllerName = ucfirst(array_shift($segments).'Controller');
                $actionName = 'action'.ucfirst(array_shift($segments));
                
                //Define controller and action
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';   
                
                if (file_exists($controllerFile)) {
                    include_once $controllerFile;
                }
                
                $controllerObject = new $controllerName();
                $result = call_user_func_array(array($controllerObject, $actionName), $segments);

                if ($result != NULL) {
                    break;
                }
            }
        }
    }
}
