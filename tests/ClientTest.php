<?php

namespace Tests;

use CloudLoyalty\Api\Client;
use CloudLoyalty\Api\Exception\ProcessingException;
use CloudLoyalty\Api\Exception\TransportException;
use CloudLoyalty\Api\Generated\Model\AppliedOffer;
use CloudLoyalty\Api\Generated\Model\CalculateProductsRequest;
use CloudLoyalty\Api\Generated\Model\CalculateProductsRequestItem;
use CloudLoyalty\Api\Generated\Model\CalculateProductsResult;
use CloudLoyalty\Api\Generated\Model\CalculateProductsResultItem;
use CloudLoyalty\Api\Generated\Model\CalculateProductsResultItemBonuses;
use CloudLoyalty\Api\Generated\Model\CalculateProductsResultItemDiscounts;
use CloudLoyalty\Api\Generated\Model\ClientInfoQuery;
use CloudLoyalty\Api\Generated\Model\ClientInfoReply;
use CloudLoyalty\Api\Generated\Model\ClientQuery;
use CloudLoyalty\Api\Generated\Model\NewClientRequest;
use CloudLoyalty\Api\Generated\Model\NewClientResponse;
use CloudLoyalty\Api\Generated\Model\Product;
use CloudLoyalty\Api\Generated\Model\ShopQuery;
use CloudLoyalty\Api\Http\Request;
use CloudLoyalty\Api\Http\Response;
use CloudLoyalty\Api\Logger\PsrBridgeLogger;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testNewClient()
    {
        $httpClientMock = $this->createMock('CloudLoyalty\Api\Http\Client\NativeClient');

        $httpClientMock->expects($this->once())
            ->method('sendRequest')
            ->with($this->equalTo(
                (new Request())
                    ->setMethod('POST')
                    ->setUri('https://api.maxma.com/new-client')
                    ->setHeaders([
                        'Content-Type' => 'application/json',
                        'Accept' => 'application/json',
                        'X-Processing-Key' => 'test-key',
                        'Accept-Language' => 'ru'
                    ])
                    ->setBody('{"client":{"name":"Name"}}')
            ))
            ->willReturn(
                (new Response())
                    ->setStatusCode(200)
                    ->setReasonPhrase('OK')
                    ->setHeaders(['Content-Type' => 'application/json'])
                    ->setBody('{"client":{"phoneNumber":"+79995566777"}}')
            );

        $apiClient = new Client([], $httpClientMock);
        $apiClient->setProcessingKey('test-key');

        $response = $apiClient->newClient(
            (new NewClientRequest())
                ->setClient(
                    (new ClientInfoQuery())
                        ->setName('Name')
                )
        );

        $this->assertEquals(
            (new NewClientResponse())
                ->setClient(
                    (new ClientInfoReply())
                        ->setPhoneNumber('+79995566777')
                ),
            $response
        );
    }

    public function testNewClientWhenProcessingError()
    {
        $httpClientMock = $this->createMock('CloudLoyalty\Api\Http\Client\NativeClient');

        $httpClientMock->expects($this->once())
            ->method('sendRequest')
            ->willReturn(
                (new Response())
                    ->setStatusCode(200)
                    ->setReasonPhrase('OK')
                    ->setHeaders(['Content-Type' => 'application/json'])
                    ->setBody('{"errorCode":20,"description":"Incorrect phone","hint":"Fix the phone"}')
            );

        $apiClient = new Client([], $httpClientMock);
        $apiClient->setProcessingKey('test-key');

        $this->expectExceptionObject(new ProcessingException(
            'Incorrect phone',
            ProcessingException::ERR_INCORRECT_PHONE,
            'Fix the phone'
        ));

        $apiClient->newClient(
            (new NewClientRequest())
                ->setClient(
                    (new ClientInfoQuery())
                        ->setName('Name')
                )
        );
    }

    public function testNewClientWhenTransportException()
    {
        $httpClientMock = $this->createMock('CloudLoyalty\Api\Http\Client\NativeClient');

        $httpClientMock->expects($this->once())
            ->method('sendRequest')
            ->willThrowException(new TransportException('Internal Server Error', 500));

        $apiClient = new Client([], $httpClientMock);
        $apiClient->setProcessingKey('test-key');

        $this->expectExceptionObject(new TransportException(
            'Internal Server Error',
            500
        ));

        $apiClient->newClient(
            (new NewClientRequest())
                ->setClient(
                    (new ClientInfoQuery())
                        ->setName('Name')
                )
        );
    }

    public function testNewClientWhenCustomServerAddressSpecified()
    {
        $httpClientMock = $this->createMock('CloudLoyalty\Api\Http\Client\NativeClient');

        $httpClientMock->expects($this->once())
            ->method('sendRequest')
            ->with($this->callback(function (Request $request) {
                $this->assertEquals('https://api.someotherhost.com/new-client', $request->getUri());

                return true;
            }))
            ->willReturn(new Response());

        $apiClient = new Client([], $httpClientMock);
        $apiClient->setServerAddress('api.someotherhost.com');
        $apiClient->setProcessingKey('test-key');

        $apiClient->newClient(new NewClientRequest());
    }

    public function testNewClientWhenCustomServerAddressWithSchemeSpecified()
    {
        $httpClientMock = $this->createMock('CloudLoyalty\Api\Http\Client\NativeClient');

        $httpClientMock->expects($this->once())
            ->method('sendRequest')
            ->with($this->callback(function (Request $request) {
                $this->assertEquals('ftp://api.someotherhost.com/new-client', $request->getUri());

                return true;
            }))
            ->willReturn(new Response());

        $apiClient = new Client([], $httpClientMock);
        $apiClient->setServerAddress('ftp://api.someotherhost.com');
        $apiClient->setProcessingKey('test-key');

        $apiClient->newClient(new NewClientRequest());
    }

    public function testNewClientWhenPsrLoggerProvided()
    {
        $httpClientMock = $this->createMock('CloudLoyalty\Api\Http\Client\NativeClient');
        $httpClientMock->expects($this->once())
            ->method('sendRequest')
            ->willReturn(
                (new Response())
                    ->setStatusCode(200)
                    ->setReasonPhrase('OK')
                    ->setHeaders(['Content-Type' => 'application/json'])
                    ->setBody('{"success":true}')
            );

        $loggerMock = $this->createMock('Psr\Log\LoggerInterface');
        $loggerMock->expects($this->once())
            ->method('debug')
            ->with(
                $this->equalTo('Request'),
                $this->callback(function (array $context) {
                    $this->assertEquals(
                        '{"method":"POST","uri":"https:\/\/api.maxma.com\/new-client",' .
                        '"headers":{"X-Processing-Key":"test-key","Content-Type":"application\/json",' .
                        '"Accept":"application\/json","Accept-Language":"ru"},' .
                        '"body":"{\"client\":{\"name\":\"Name\"}}"}',
                        json_encode($context['request'])
                    );
                    $this->assertEquals(
                        '{"statusCode":200,"reasonPhrase":"OK","headers":{"Content-Type":"application\/json"},' .
                        '"body":"{\"success\":true}"}',
                        json_encode($context['response'])
                    );

                    return true;
                })
            );

        $apiClient = new Client([], $httpClientMock);
        $apiClient->setProcessingKey('test-key');
        $apiClient->setLogger(new PsrBridgeLogger($loggerMock));

        $apiClient->newClient(
            (new NewClientRequest())
                ->setClient(
                    (new ClientInfoQuery())
                        ->setName('Name')
                )
        );
    }

    public function testCalculateProducts()
    {
        $httpClientMock = $this->createMock('CloudLoyalty\Api\Http\Client\NativeClient');

        $httpClientMock->expects($this->once())
            ->method('sendRequest')
            ->with($this->equalTo(
                (new Request())
                    ->setMethod('POST')
                    ->setUri('https://api.maxma.com/calculate-products')
                    ->setHeaders([
                        'Content-Type' => 'application/json',
                        'Accept' => 'application/json',
                        'X-Processing-Key' => 'test-key',
                        'Accept-Language' => 'ru'
                    ])
                    ->setBody('{"client":{"phoneNumber":"+79990000000"},"shop":{"code":"shop1","name":"Shop 1"},' .
                        '"products":[{"product":{"externalId":"external-id","blackPrice":400,"minPrice":0,"vatPercent":0},' .
                        '"externalDiscount":0,"noCollectBonuses":false,"noOffer":false}],"discountRoundStep":0}')
            ))
            ->willReturn(
                (new Response())
                    ->setStatusCode(200)
                    ->setReasonPhrase('OK')
                    ->setHeaders(['Content-Type' => 'application/json'])
                    ->setBody('{"products":[{"bonuses":{"collected":200},"discounts":{"offer":300},' .
                        '"offers":[{"name":"Offer1","amount":300,"expireAt":"2023-12-20T16:00:00+03:00"}]}]}')
            );

        $apiClient = new Client([], $httpClientMock);
        $apiClient->setProcessingKey('test-key');

        $response = $apiClient->calculateProducts(
            (new CalculateProductsRequest())
                ->setClient(
                    (new ClientQuery())
                        ->setPhoneNumber('+79990000000')
                )
                ->setShop(
                    (new ShopQuery())
                        ->setCode('shop1')
                        ->setName('Shop 1')
                )
                ->setProducts([
                    (new CalculateProductsRequestItem())
                        ->setProduct(
                            (new Product())
                                ->setExternalId('external-id')
                                ->setBlackPrice(400)
                        )
                ])
        );

        $this->assertEquals(
            (new CalculateProductsResult())
                ->setProducts([
                    (new CalculateProductsResultItem())
                        ->setBonuses(
                            (new CalculateProductsResultItemBonuses())
                                ->setCollected(200)
                        )
                        ->setDiscounts(
                            (new CalculateProductsResultItemDiscounts())
                                ->setOffer(300)
                        )
                        ->setOffers([
                            (new AppliedOffer())
                                ->setName('Offer1')
                                ->setAmount(300)
                                ->setExpireAt(new \DateTime('2023-12-20T16:00:00+03:00'))
                        ])
                ]),
            $response
        );
    }
}
