<?php

declare(strict_types=1);

namespace naftalimurgor\Bitgesell\Exceptions;

use naftalimurgor\Bitgesell\Responses\Response;

class BadRemoteCallException extends ClientException
{
    /**
     * Response object.
     *
     * @var \naftalimurgor\Bitgesell\Responses\Response
     */
    protected $response;

    /**
     * Constructs new bad remote call exception.
     *
     * @param \naftalimurgor\Bitgesell\Responses\Response $response
     *
     * @return void
     */
    public function __construct(Response $response)
    {
        $this->response = $response;

        $error = $response->error();
        parent::__construct($error['message'], $error['code']);
    }

    /**
     * Gets response object.
     *
     * @return \naftalimurgor\Bitgesell\Responses\Response
     */
    public function getResponse(): Response
    {
        return $this->response;
    }

    /**
     * Returns array of parameters.
     *
     * @return array
     */
    protected function getConstructorParameters(): array
    {
        return [
            $this->getResponse(),
        ];
    }
}
