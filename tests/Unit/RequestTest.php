<?php

namespace Faulancer\Tests\Unit;

use Faulancer\Exception\InvalidRequestException;
use Faulancer\Http\Request;
use PHPUnit\Framework\TestCase;

/**
 * Class RequestTest
 * @package Faulancer\Tests\Unit
 * @author  Florian Knapp <office@florianknapp.de>
 */
class RequestTest extends TestCase
{

    /**
     * @test
     */
    public function canCreateObject()
    {
        self::expectException(InvalidRequestException::class);

        $request = new Request();
        $request->create();
    }

}