<?php

namespace Faulancer\Tests\Unit;

use Faulancer\Application;
use Faulancer\Exception\InvalidModuleException;
use Faulancer\Fixtures\Module\Test1Module;
use Faulancer\Fixtures\Module\Test2Module;
use PHPUnit\Framework\TestCase;

/**
 * Class ApplicationTest
 * @author Florian Knapp <office@florianknapp.de>
 */
class ApplicationTest extends TestCase
{

    /**
     * @test
     *
     * @throws InvalidModuleException
     */
    public function canAddNonExistentModule()
    {
        $app = new Application();
        $app->addModule(Test1Module::class);
        $app->addModule(Test2Module::class);

        self::assertContains(Test1Module::class, $app->getModules());
        self::assertContains(Test2Module::class, $app->getModules());
    }

    /**
     * @test
     *
     * @throws InvalidModuleException
     */
    public function cannotAddAnotherModuleWithSameName()
    {
        self::expectException(InvalidModuleException::class);

        $app = new Application();
        $app->addModule(Test1Module::class);
        $app->addModule(Test1Module::class);
    }

}