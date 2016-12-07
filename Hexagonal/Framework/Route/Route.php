<?php

namespace Framework\Route;


use Framework\Route\DTO\RouteDTO;

class Route implements RouteInterface
{
    private $_routes;

    public function __construct()
    {
        $this->_routes = [];
    }

    public function add($path, $controller, $method)
    {
        $dto = new RouteDTO();

        $dto->setPath($path);
        $dto->setController($controller);
        $dto->setMethod($method);

        $this->_routes[] = $dto;
    }

    public function start()
    {
        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $path = parse_url($url)['path'];

        foreach ($this->_routes as $route)
        {
            if ($route->getPath() == $path)
            {
                $controller = $route->getController();
                $method = $route->getMethod();

                $instance = new $controller;

                if (isset(parse_url($url)['query']))
                {
                    return $instance->$method(parse_url($url)['query']);
                }

                return $instance->$method();
            }
        }
    }
}