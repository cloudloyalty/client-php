<?php

namespace CloudLoyalty\Api;

use CloudLoyalty\Api\Generated\Model\Error;
use CloudLoyalty\Api\Http\Request;
use CloudLoyalty\Api\Exception\ProcessingException;
use CloudLoyalty\Api\Exception\TransportException;
use CloudLoyalty\Api\Generated\Model\NewClientRequest;
use CloudLoyalty\Api\Generated\Model\NewClientResponse;
use CloudLoyalty\Api\Http\ClientInterface;
use CloudLoyalty\Api\Http\Client\NativeClient;
use CloudLoyalty\Api\Serializer\Serializer;
use CloudLoyalty\Api\Serializer\SerializerInterface;

class Client
{
    const DEFAULT_SERVER_ADDRESS = 'api.cloudloyalty.ru';
    const TEST_SERVER_ADDRESS = 'api-test.cloudloyalty.ru';

    /**
     * @var ClientInterface
     */
    protected $httpClient;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * @var string
     */
    protected $serverAddress = self::DEFAULT_SERVER_ADDRESS;

    /**
     * @var string
     */
    protected $processingKey;


    public function __construct(
        array $config = [],
        ClientInterface $httpClient = null,
        SerializerInterface $serializer = null
    ) {
        if (isset($config['serverAddress'])) {
            $this->setServerAddress($config['serverAddress']);
        }
        if (isset($config['processingKey'])) {
            $this->setProcessingKey($config['processingKey']);
        }
        if ($httpClient === null) {
            $httpClient = new NativeClient();
        }
        $this->httpClient = $httpClient;
        if ($serializer === null) {
            $serializer = new Serializer();
        }
        $this->serializer = $serializer;
    }

    /**
     * @return ClientInterface
     */
    public function getHttpClient()
    {
        return $this->httpClient;
    }

    /**
     * @param ClientInterface $httpClient
     * @return Client
     */
    public function setHttpClient(ClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
        return $this;
    }

    /**
     * @return string
     */
    public function getProcessingKey()
    {
        return $this->processingKey;
    }

    /**
     * @param string $processingKey
     * @return Client
     */
    public function setProcessingKey($processingKey)
    {
        $this->processingKey = $processingKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getServerAddress()
    {
        return $this->serverAddress;
    }

    /**
     * @param string $serverAddress
     * @return Client
     */
    public function setServerAddress($serverAddress)
    {
        $this->serverAddress = trim($serverAddress, '/');
        return $this;
    }

    /**
     * @param NewClientRequest $request
     * @return NewClientResponse
     * @throws ProcessingException
     * @throws TransportException
     */
    public function newClient(NewClientRequest $request)
    {
        return $this->call('new-client', $request, 'CloudLoyalty\Api\Generated\Model\NewClientResponse');
    }

    /**
     * @param string $method
     * @param mixed $request
     * @param string $responseType
     * @return mixed
     * @throws TransportException
     */
    protected function call($method, $request, $responseType)
    {
        $response = $this->sendRawRequest($method, $this->serializer->toJson($request));
        /** @var Error $error */
        $error = $this->serializer->fromJson($response, 'CloudLoyalty\Api\Generated\Model\Error');
        if ($error->getCode()) {
            throw new ProcessingException($error->getDescription(), $error->getCode(), $error->getHint());
        }
        return $this->serializer->fromJson($response, $responseType);
    }

    /**
     * @param string $path
     * @param string $rawBody
     * @return string
     * @throws TransportException
     */
    public function sendRawRequest($path, $rawBody)
    {
        $response = $this->httpClient->sendRequest(
            $this->buildRequest($path, $rawBody)
        );
        return $response->getBody();
    }

    /**
     * @param string $path
     * @param string $rawBody
     * @return Request
     */
    protected function buildRequest($path, $rawBody)
    {
        if (!$this->serverAddress) {
            throw new \BadMethodCallException('serverAddress not specified');
        }
        if (!$this->processingKey) {
            throw new \BadMethodCallException('processingKey not specified');
        }
        return (new Request())
            ->setMethod('POST')
            ->setUri('https://' . $this->serverAddress . '/' . $path)
            ->setHeaders([
                'X-Processing-Key' => $this->processingKey,
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ])
            ->setBody($rawBody);
    }
}