<?php
namespace MochamadWahyu\Phpmvc\App;
class Router
{
    private static array $routes = [];

    public static function add(string $method, string $path, string $controller, string $function) : void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function,
        ];
    }
    public static function run() : void
    {
        $path = "/";
        if (isset($_SERVER['PATH_INFO']))
            $path = $_SERVER['PATH_INFO'];
        $method = $_SERVER['REQUEST_METHOD'];

        foreach(self::$routes as $route){
            $pattern = '#^' . $route['path'] . '$#';
            if(preg_match($pattern, $path, $variables)&& $method==$route['method']){
                $function = $route['function'];
                $controller = new $route['controller'];
                // $controller->$function();
                array_shift($variables);
                call_user_func_array([$controller, $function], $variables); 
                return;
            }
        }
         http_response_code(404);
        echo "CONTROLLER NOT FOUND";
    }
}