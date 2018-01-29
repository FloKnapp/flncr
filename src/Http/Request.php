<?php

namespace Faulancer\Http;

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
     */
    public function create()
    {

        var_dump($_SERVER);

        $this->protocol = $_SERVER['SERVER_PROTOCOL'];
        $this->headers  = headers_list();

        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->path   = $_SERVER['REQUEST_URI'];
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