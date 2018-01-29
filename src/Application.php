<?php

namespace Faulancer;

use Faulancer\Exception\InvalidModuleException;
use Faulancer\Http\Request;

/**
 * Class Kernel
 * @author Florian Knapp <office@florianknapp.de>
 */
class Application
{

    /** @var array */
    protected $modules = [];

    /** @var Router */
    protected $router;

    /**
     * Application constructor.
     *
     * @param Router|null $router
     */
    public function __construct(?Router $router = null)
    {
        $this->router = $router;
    }

    /**
     * Add a module
     *
     * @param string $module
     *
     * @return bool
     * @throws InvalidModuleException
     */
    public function addModule(string $module)
    {
        if (in_array($module, $this->modules)) {
            throw new InvalidModuleException('A module with the name "' . $module . '" already exists.');
        }

        $this->modules[] = $module;

        return true;
    }

    /**
     * @return array
     */
    public function getModules()
    {
        return $this->modules;
    }

    /**
     *
     */
    public function init()
    {
        $request = new Request();

        $router = $this->router ?? new Router();

        $router->setRequest();

    }

}