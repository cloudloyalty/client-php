<?php

namespace CloudLoyalty\Api\Http\Client;

use CloudLoyalty\Api\Http\ClientInterface;
use CloudLoyalty\Api\Http\RequestInterface;
use CloudLoyalty\Api\Http\Response;
use CloudLoyalty\Api\Http\ResponseInterface;
use CloudLoyalty\Api\Exception\TransportException;

class NativeClient implements ClientInterface
{
    const DEFAULT_TIMEOUT = 2; // seconds

    /**
     * @var float
     */
    protected $timeout = self::DEFAULT_TIMEOUT;


    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        if (isset($config['timeout'])) {
            $this->timeout = floatval($config['timeout']);
        }
    }

    /**
     * @param RequestInterface $request
     * @return ResponseInterface
     * @throws TransportException
     */
    public function sendRequest(RequestInterface $request)
    {
        $context = stream_context_create([
            'http' => [
                'method' => $request->getMethod(),
                'header' => $request->getHeaders(),
                'content' => $request->getBody(),
                'follow_location' => 0,
                'protocol_version' => 1.1,
                'timeout' => $this->timeout,
            ]
        ]);

        $body = file_get_contents($request->getUri(), false, $context);

        $statusLine = array_shift($http_response_header);
        list($_, $statusCode, $reasonPhrase) = explode(' ', $statusLine);

        if ($body === false) {
            throw new TransportException(
                'HTTP request finished with status ' . $statusCode . ' ' . $reasonPhrase,
                $statusCode
            );
        }

        $headers = [];
        foreach ($http_response_header as $headerLine) {
            list($header, $value) = explode(':', $headerLine, 2);
            $headers[$header] = ltrim($value, ' ');
        }

        return (new Response())
            ->setStatusCode($statusCode)
            ->setReasonPhrase($reasonPhrase)
            ->setHeaders($headers)
            ->setBody($body ?: '');
    }
}