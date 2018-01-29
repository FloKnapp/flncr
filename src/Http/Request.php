<?php

namespace Faulancer\Http;

use Faulancer\Exception\InvalidRequestException;

/**
 * Class Request
 *
 * @package Faulancer\Http
 * @author  Florian Knapp <office@florianknapp.de>
 */
class Request implements RequestInterface
{

    /** @var array */
    protected $headers = [];

    /** @var string */
    protected $protocol = '';

    /** @var string */
    protected $scheme = '';

    /** @var string */
    protected $method = '';

    /** @var string */
    protected $url = '';

    /** @var string */
    protected $path = '';

    /** @var array */
    protected $query = [];

    /**
     * Create request object automatically
     *
     * @throws InvalidRequestException
     */
    public function create()
    {
        if (php_sapi_name() === 'cli') {
            throw new InvalidRequestException('Request::create() cannot be called within the console.');
        }

        $this->protocol = $_SERVER['SERVER_PROTOCOL'];
        $this->method   = $_SERVER['REQUEST_METHOD'];
        $this->path     = $_SERVER['REQUEST_URI'];
    }

    /**
     * @param Header $header
     */
    public function addHeader(Header $header)
    {
        $this->headers[] = $header;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }

    /**
     * @return string
     */
    public function getScheme(): string
    {
        return $this->scheme;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return array
     */
    public function getQuery(): array
    {
        return $this->query;
    }

}