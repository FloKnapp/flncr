<?php

namespace Faulancer\Http;

/**
 * Class Header
 * @package Faulancer\Http
 * @author  Florian Knapp <office@florianknapp.de>
 */
class Header
{

    /** @var string */
    protected $field;

    /** @var string */
    protected $value;

    /**
     * Header constructor.
     *
     * @param string $field
     * @param string $value
     */
    public function __construct(string $field, string $value)
    {
        $this->field = $field;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    public function getValue()
    {
        return $this->value;
    }

}