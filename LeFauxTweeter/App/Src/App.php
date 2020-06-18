<?php

require_once __DIR__ . '/Route/Route.php';

class App
{
    const GET = 'GET';
    const POST = 'POST';
    const PUT = 'PUT';
    const DELETE = 'DELETE';

    /**
     * @var array
     */
    private $route = array();

    /**
     * 
     * @var statusCode
     */
    private $statusCode;

    public function get ($pattern, $callable){
        $this->registreRoute(self::GET, $pattern, $callable);

        return $this;
    }

    public function post ($pattern, $callable){
        $this->registreRoute(self::POST, $pattern, $callable);

        return $this;
    }

    public function put ($pattern, $callable){
        $this->registreRoute(self::PUT, $pattern, $callable);

        return $this;
    }
    
    public function delete ($pattern, $callable){
        $this->registreRoute(self::DELETE, $pattern, $callable);

        return $this;
    }

    public function run() {
        $method = $_SERVER['REQUEST_METHOD'] ?? self::GET;
        $uri = substr($_SERVER['REQUEST_URI'], 14) ?? '/'; 
        
        foreach ($this->routes as $route){
            if($route->match($method, $uri)) {
                return $this->process($route);
    
            }
        }

        throw new HttpException(404, "Page not found");

    }

    private function process(Route $route) {
        try {
            http_response_code($this->statusCode);
            echo call_user_func_array($route->getCallable(), $route->getArguments());
        } catch (HttpException $e) {
            throw $e;
        } catch (\Exception $e) {
            throw new HttpException(500, null, $e);
        }
    }

    /**
     * @param string $method
     * @param string $pattern
     * @param callable $callable
     */
    private function registreRoute($method, $pattern, $callable)
    {
        $this->routes[] = new Route($method, $pattern, $callable);
    }
}
