<?php

namespace CloudLoyalty\Api;

use CloudLoyalty\Api\Generated\Model\AdjustBalanceRequest;
use CloudLoyalty\Api\Generated\Model\AdjustBalanceResponse;
use CloudLoyalty\Api\Generated\Model\ApplyReturnRequest;
use CloudLoyalty\Api\Generated\Model\ApplyReturnResponse;
use CloudLoyalty\Api\Generated\Model\GetHistoryRequest;
use CloudLoyalty\Api\Generated\Model\GetHistoryResponse;
use CloudLoyalty\Api\Generated\Model\IssuePromocodeRequest;
use CloudLoyalty\Api\Generated\Model\IssuePromocodeResponse;
use CloudLoyalty\Api\Generated\Model\NewClientRequest;
use CloudLoyalty\Api\Generated\Model\NewClientResponse;
use CloudLoyalty\Api\Generated\Model\CancelOrderResponse;
use CloudLoyalty\Api\Generated\Model\CancelOrderRequest;
use CloudLoyalty\Api\Generated\Model\ClientQuery;
use CloudLoyalty\Api\Generated\Model\ConfirmOrderResponse;
use CloudLoyalty\Api\Generated\Model\ConfirmOrderRequest;
use CloudLoyalty\Api\Generated\Model\ConfirmTicketRequest;
use CloudLoyalty\Api\Generated\Model\DiscardTicketRequest;
use CloudLoyalty\Api\Generated\Model\GetBalanceResponse;
use CloudLoyalty\Api\Generated\Model\SendConfirmationCodeRequest;
use CloudLoyalty\Api\Generated\Model\SendConfirmationCodeResponse;
use CloudLoyalty\Api\Generated\Model\SetOrderResponse;
use CloudLoyalty\Api\Generated\Model\SetOrderRequest;
use CloudLoyalty\Api\Generated\Model\SetPurchaseResponse;
use CloudLoyalty\Api\Generated\Model\SetPurchaseRequest;
use CloudLoyalty\Api\Generated\Model\UpdateClientRequest;
use CloudLoyalty\Api\Generated\Model\V2CalculatePurchaseRequest;
use CloudLoyalty\Api\Generated\Model\V2CalculatePurchaseResponse;
use CloudLoyalty\Api\Http\Request;
use CloudLoyalty\Api\Exception\ProcessingException;
use CloudLoyalty\Api\Exception\TransportException;
use CloudLoyalty\Api\Http\ClientInterface;
use CloudLoyalty\Api\Http\Client\NativeClient;
use CloudLoyalty\Api\Serializer\Serializer;
use CloudLoyalty\Api\Serializer\SerializerInterface;
use CloudLoyalty\Api\Model\ProcessingError;

class Client
{
    const DEFAULT_SERVER_ADDRESS = 'api.cloudloyalty.ru';
    const TEST_SERVER_ADDRESS = 'api-test.cloudloyalty.ru';

    public static $arrayElementsHint = [
        'CloudLoyalty\Api\Generated\Model\CalculationResult' => [
            'rows' => 'CloudLoyalty\Api\Generated\Model\CalculationResultRow'
        ],
        'CloudLoyalty\Api\Generated\Model\CalculationResultRow' => [
            'offers' => 'CloudLoyalty\Api\Generated\Model\CalculationResultRowOffersItem'
        ],
        'CloudLoyalty\Api\Generated\Model\ClientInfoReply' => [
            'children' => 'CloudLoyalty\Api\Generated\Model\ClientInfoReplyChildrenItem'
        ],
        'CloudLoyalty\Api\Generated\Model\GetBalanceResponse' => [
            'bonuses' => 'CloudLoyalty\Api\Generated\Model\ClientBonusExpirationItem'
        ],
        'CloudLoyalty\Api\Generated\Model\NewClientResponse' => [
            'bonuses' => 'CloudLoyalty\Api\Generated\Model\ClientBonusExpirationItem'
        ],
    ];

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
            $serializer = new Serializer(self::$arrayElementsHint);
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
     * @param ClientQuery $request
     * @return GetBalanceResponse
     * @throws ProcessingException
     * @throws TransportException
     */
    public function getBalance(ClientQuery $request)
    {
        return $this->call('get-balance', $request, 'CloudLoyalty\Api\Generated\Model\GetBalanceResponse');
    }

    /**
     * @param UpdateClientRequest $request
     * @return NewClientResponse
     * @throws ProcessingException
     * @throws TransportException
     */
    public function updateClient(UpdateClientRequest $request)
    {
        return $this->call('update-client', $request, 'CloudLoyalty\Api\Generated\Model\NewClientResponse');
    }

    /**
     * @param SendConfirmationCodeRequest $request
     * @return SendConfirmationCodeResponse
     * @throws ProcessingException
     * @throws TransportException
     */
    public function sendConfirmationCode(SendConfirmationCodeRequest $request)
    {
        return $this->call('send-confirmation-code', $request, 'CloudLoyalty\Api\Generated\Model\SendConfirmationCodeResponse');
    }

    /**
     * @param GetHistoryRequest $request
     * @return GetHistoryResponse
     * @throws ProcessingException
     * @throws TransportException
     */
    public function getHistory(GetHistoryRequest $request)
    {
        return $this->call('get-history', $request, 'CloudLoyalty\Api\Generated\Model\GetHistoryResponse');
    }

    /**
     * @param AdjustBalanceRequest $request
     * @return AdjustBalanceResponse
     * @throws ProcessingException
     * @throws TransportException
     */
    public function adjustBalance(AdjustBalanceRequest $request)
    {
        return $this->call('adjust-balance', $request, 'CloudLoyalty\Api\Generated\Model\AdjustBalanceResponse');
    }

    /**
     * @param IssuePromocodeRequest $request
     * @return IssuePromocodeResponse
     * @throws ProcessingException
     * @throws TransportException
     */
    public function issuePromocode(IssuePromocodeRequest $request)
    {
        return $this->call('issue-promocode', $request, 'CloudLoyalty\Api\Generated\Model\IssuePromocodeResponse');
    }

    /**
     * @param V2CalculatePurchaseRequest $request
     * @return V2CalculatePurchaseResponse
     * @throws ProcessingException
     * @throws TransportException
     */
    public function calculatePurchase(V2CalculatePurchaseRequest $request)
    {
        return $this->call('v2/calculate-purchase', $request, 'CloudLoyalty\Api\Generated\Model\V2CalculatePurchaseResponse');
    }

    /**
     * @param SetPurchaseRequest $request
     * @return SetPurchaseResponse
     * @throws ProcessingException
     * @throws TransportException
     */
    public function setPurchase(SetPurchaseRequest $request)
    {
        return $this->call('set-purchase', $request, 'CloudLoyalty\Api\Generated\Model\SetPurchaseResponse');
    }

    /**
     * @param ConfirmTicketRequest $request
     * @return \stdClass
     * @throws ProcessingException
     * @throws TransportException
     */
    public function confirmTicket(ConfirmTicketRequest $request)
    {
        return $this->call('confirm-ticket', $request, 'stdClass');
    }

    /**
     * @param DiscardTicketRequest $request
     * @return \stdClass
     * @throws ProcessingException
     * @throws TransportException
     */
    public function discardTicket(DiscardTicketRequest $request)
    {
        return $this->call('discard-ticket', $request, 'stdClass');
    }

    /**
     * @param ApplyReturnRequest $request
     * @return ApplyReturnResponse
     * @throws ProcessingException
     * @throws TransportException
     */
    public function applyReturn(ApplyReturnRequest $request)
    {
        return $this->call('apply-return', $request, 'CloudLoyalty\Api\Generated\Model\ApplyReturnResponse');
    }

    /**
     * @param SetOrderRequest $request
     * @return SetOrderResponse
     * @throws ProcessingException
     * @throws TransportException
     */
    public function setOrder(SetOrderRequest $request)
    {
        return $this->call('set-order', $request, 'CloudLoyalty\Api\Generated\Model\SetOrderResponse');
    }

    /**
     * @param ConfirmOrderRequest $request
     * @return ConfirmOrderResponse
     * @throws ProcessingException
     * @throws TransportException
     */
    public function confirmOrder(ConfirmOrderRequest $request)
    {
        return $this->call('confirm-order', $request, 'CloudLoyalty\Api\Generated\Model\ConfirmOrderResponse');
    }

    /**
     * @param CancelOrderRequest $request
     * @return CancelOrderResponse
     * @throws ProcessingException
     * @throws TransportException
     */
    public function cancelOrder(CancelOrderRequest $request)
    {
        return $this->call('cancel-order', $request, 'CloudLoyalty\Api\Generated\Model\CancelOrderResponse');
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
        /** @var ProcessingError $error */
        $error = $this->serializer->fromJson($response, 'CloudLoyalty\Api\Model\ProcessingError');
        if ($error && $error->getErrorCode()) {
            throw new ProcessingException($error->getDescription(), $error->getErrorCode(), $error->getHint());
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