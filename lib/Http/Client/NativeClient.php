<?php

namespace CloudLoyalty\Api\Http\Client;

use CloudLoyalty\Api\Http\ClientInterface;
use CloudLoyalty\Api\Http\RequestInterface;
use CloudLoyalty\Api\Http\Response;
use CloudLoyalty\Api\Http\ResponseInterface;
use CloudLoyalty\Api\Exception\TransportException;

class NativeClient implements ClientInterface
{
    const DEFAULT_TIMEOUT = 5; // seconds

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
                'header' => $this->joinHeaders($request->getHeaders()),
                'content' => $request->getBody(),
                'follow_location' => 0,
                'protocol_version' => 1.1,
                'timeout' => $this->timeout,
            ]
        ]);

        error_clear_last();
        $http_response_header = null;

        $body = @file_get_contents($request->getUri(), false, $context);

        // For codes 200-399 file_get_contents returns the body
        // For codes 400-599 body is always false, $http_response_header is set, error_get_last() will return details
        // Networking errors don't set $http_response_header, error_get_last() will return details

        // A networking error
        if (is_null($http_response_header)) {
            $error = error_get_last();
            throw new TransportException($error['message'], $error['type']);
        }

        $statusLine = array_shift($http_response_header);
        list($_, $statusCode, $reasonPhrase) = explode(' ', $statusLine);

        // 400-599 codes
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

    private function joinHeaders($headers)
    {
        $joinedHeaders = [];
        foreach ($headers as $key => $value) {
            // FIXME: should it be encoded somehow?
            $joinedHeaders[] = $key . ': ' . $value;
        }
        return $joinedHeaders;
    }
}