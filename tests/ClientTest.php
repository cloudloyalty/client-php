<?php

namespace Tests;

use CloudLoyalty\Api\Client;
use CloudLoyalty\Api\Exception\ProcessingException;
use CloudLoyalty\Api\Exception\TransportException;
use CloudLoyalty\Api\Generated\Model\ClientInfoQuery;
use CloudLoyalty\Api\Generated\Model\ClientInfoReply;
use CloudLoyalty\Api\Generated\Model\NewClientRequest;
use CloudLoyalty\Api\Generated\Model\NewClientResponse;
use CloudLoyalty\Api\Http\Request;
use CloudLoyalty\Api\Http\Response;
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
                    ->setUri('https://api.cloudloyalty.ru/new-client')
                    ->setHeaders([
                        'Content-Type' => 'application/json',
                        'Accept' => 'application/json',
                        'X-Processing-Key' => 'test-key'
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
}