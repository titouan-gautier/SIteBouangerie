<?php

    class Router {
    
        function route() {
            $scriptName = $_SERVER["SCRIPT_NAME"];
            $requestURI = $_SERVER["REQUEST_URI"];
            
            $prefix = substr($scriptName, 0, strlen($scriptName) - 9);
            
            $suffix = substr($requestURI,strlen($prefix));
            $params = explode("/", $suffix);
            if (count($params) == 0) {
                echo "no controller found";
                die();
            }
            $controller = $params[0];
            array_shift($params);
            if (count($params)==0) {
                $controllerMethod="index";
            }
            else {
                $controllerMethod=$params[0];
                array_shift($params);
            }
          //  try {
                $controllerinstance = new $controller();
                $controllerinstance->$controllerMethod($params);
            /*}
            catch (Error $e){
                echo "route not found $controller $controllerMethod ";
                var_dump($params);
            };*/
        }
    }

?>