<?php

namespace CloudLoyalty\Api\Http;

use CloudLoyalty\Api\Exception\TransportException;

interface ClientInterface
{
    /**
     * Sends a request and returns a response.
     *
     * @param RequestInterface $request
     * @return ResponseInterface
     * @throws TransportException If an error happens while processing the request.
     */
    public function sendRequest(RequestInterface $request);
}