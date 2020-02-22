<?php

namespace CloudLoyalty\Api\Http\Client;

use CloudLoyalty\Api\Exception\TransportException;
use CloudLoyalty\Api\Http\ClientInterface;
use CloudLoyalty\Api\Http\RequestInterface;
use CloudLoyalty\Api\Http\Response;
use GuzzleHttp\ClientInterface as GuzzleClientInterface;
use GuzzleHttp\Exception\GuzzleException;

class GuzzleBridgeClient implements ClientInterface
{
    /**
     * @var GuzzleClientInterface
     */
    private $guzzleClient;


    /**
     * @param GuzzleClientInterface $guzzleClient
     */
    public function __construct(GuzzleClientInterface $guzzleClient)
    {
        $this->guzzleClient = $guzzleClient;
    }

    /**
     * @param RequestInterface $request
     * @return Response
     * @throws TransportException
     */
    public function sendRequest(RequestInterface $request)
    {
        $options = [
            'headers' => $request->getHeaders(),
            'body' => $request->getBody()
        ];

        try {
            $response = $this->guzzleClient->request($request->getMethod(), $request->getUri(), $options);
        } catch (GuzzleException $e) {
            throw new TransportException($e->getMessage(), $e->getCode(), $e);
        }

        return (new Response())
            ->setStatusCode($response->getStatusCode())
            ->setReasonPhrase($response->getReasonPhrase())
            ->setHeaders($response->getHeaders())
            ->setBody($response->getBody()->getContents());
    }
}
