<?php

namespace Bchalier\ApiDoc\Extracting\Strategies;

use Bchalier\ApiDoc\Tools\DocumentationConfig;
use Illuminate\Routing\Route;
use ReflectionClass;
use ReflectionMethod;

abstract class Strategy
{
    /**
     * @var DocumentationConfig The apidoc config
     */
    protected $config;

    /**
     * @var string The current stage of route processing
     */
    protected $stage;

    public function __construct(string $stage, DocumentationConfig $config)
    {
        $this->stage = $stage;
        $this->config = $config;
    }

    /**
     * @param Route $route
     * @param ReflectionClass $controller
     * @param ReflectionMethod $method
     * @param array $routeRules Array of rules for the ruleset which this route belongs to.
     * @param array $context Results from the previous stages
     *
     * @throws \Exception
     *
     * @return array|null
     */
    abstract public function __invoke(Route $route, ReflectionClass $controller, ReflectionMethod $method, array $routeRules, array $context = []);
}
