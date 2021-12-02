<?php

declare(strict_types=1);

namespace App;

use App\Exceptions\RouteNotFoundException;
use App\Action;


class Router
{
    private array $routes;
    private Action $action;

    /**
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /**
     * @param string $route
     * @param \App\Action $action
     * @return $this
     */
    public function register(string $route, Action $action): self
    {
        $this->routes[$route] = $action;
        $this->action = $action;
        return $this;
    }

    /**
     * @param string $requestUri
     * @return mixed|string
     */
    public function resolve(string $requestUri)
    {
        if (key_exists($requestUri, $this->routes)) {
            $class = $this->routes[$requestUri]->getClass();
            $method = $this->routes[$requestUri]->getMethod();

            $output = new $class();
            return ($output->$method());
        } else {
            $output = new PageNotFound();
            return $output->PageNotFound();
        }
    }
}