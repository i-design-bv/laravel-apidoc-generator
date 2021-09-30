<?php

namespace Bchalier\ApiDoc\Extracting\Strategies\RequestHeaders;

use Bchalier\ApiDoc\Extracting\Strategies\Strategy;
use Illuminate\Routing\Route;
use ReflectionClass;
use ReflectionMethod;

class GetFromRouteRules extends Strategy
{
    public function __invoke(Route $route, ReflectionClass $controller, ReflectionMethod $method, array $routeRules, array $context = [])
    {
        return $routeRules['headers'] ?? [];
    }
}
