<?php

namespace Tests\Serializer;

use CloudLoyalty\Api\Client;
use CloudLoyalty\Api\Generated\Model\ClientInfoQuery;
use CloudLoyalty\Api\Generated\Model\ClientInfoQueryChildrenItem;
use CloudLoyalty\Api\Generated\Model\ClientInfoReply;
use CloudLoyalty\Api\Generated\Model\ClientInfoReplyChildrenItem;
use CloudLoyalty\Api\Generated\Model\NewClientRequest;
use CloudLoyalty\Api\Generated\Model\NewClientResponse;
use CloudLoyalty\Api\Serializer\NullValue;
use CloudLoyalty\Api\Serializer\Serializer;
use PHPUnit\Framework\TestCase;

class SerializerTest extends TestCase
{
    /**
     * @dataProvider toJsonDataProvider
     */
    public function testToJson($object, $expectedJson)
    {
        $serializer = new Serializer();

        $this->assertEquals(
            $expectedJson,
            $serializer->toJson($object)
        );
    }

    public function toJsonDataProvider()
    {
        return [
            [
                (new NewClientRequest())
                    ->setClient(
                        (new ClientInfoQuery())
                            ->setPhoneNumber('+79995566777')
                    ),
                '{"client":{"phoneNumber":"+79995566777"}}'
            ],

            // DateTime
            [
                (new NewClientRequest())
                    ->setClient(
                        (new ClientInfoQuery())
                            ->setBirthdate(new \DateTime('1986-01-01T00:00:00+03:00'))
                    ),
                '{"client":{"birthdate":"1986-01-01T00:00:00+03:00"}}'
            ],

            // An array
            [
                (new NewClientRequest())
                    ->setClient(
                        (new ClientInfoQuery())
                            ->setChildren([
                                (new ClientInfoQueryChildrenItem())
                                    ->setName('Аня')
                                    ->setBirthdate(new \DateTime('1986-01-01T00:00:00+03:00')),
                                (new ClientInfoQueryChildrenItem())
                                    ->setName('Дима')
                                    ->setBirthdate(new \DateTime('1986-01-01T00:00:00+03:00'))
                                    ->setGender(0),
                            ])
                    ),
                '{"client":{"children":[{"name":"Аня","birthdate":"1986-01-01T00:00:00+03:00"},'
                . '{"name":"Дима","birthdate":"1986-01-01T00:00:00+03:00","gender":0}]}}'
            ],

            // An empty array
            [
                (new NewClientRequest())
                    ->setClient(
                        (new ClientInfoQuery())
                            ->setChildren([])
                    ),
                '{"client":{"children":[]}}'
            ],

            // NullValue
            [
                (new NewClientRequest())
                    ->setClient(
                        (new ClientInfoQuery())
                            ->setFullName(new NullValue())
                    ),
                '{"client":{"fullName":null}}'
            ],

            // extraFields
            [
                (new NewClientRequest())
                    ->setClient(
                        (new ClientInfoQuery())
                            ->setExtraFields([
                                'alpha' => 'a',
                                'beta' => 'b'
                            ])
                    ),
                '{"client":{"extraFields":{"alpha":"a","beta":"b"}}}'
            ],
        ];
    }

    /**
     * @dataProvider fromJsonDataProvider
     */
    public function testFromJson($json, $className, $expectedObject)
    {
        $serializer = new Serializer(Client::$arrayElementsHint);

        $this->assertEquals(
            $expectedObject,
            $serializer->fromJson($json, $className)
        );
    }

    public function fromJsonDataProvider()
    {
        return [
            [
                '{"client":{"phoneNumber":"+79995566777"}}',
                'CloudLoyalty\Api\Generated\Model\NewClientResponse',
                (new NewClientResponse())
                    ->setClient(
                        (new ClientInfoReply())
                            ->setPhoneNumber('+79995566777')
                    )
            ],

            // DateTime
            [
                '{"client":{"birthdate":"1986-01-01T00:00:00+03:00"}}',
                'CloudLoyalty\Api\Generated\Model\NewClientResponse',
                (new NewClientResponse())
                    ->setClient(
                        (new ClientInfoReply())
                            ->setBirthdate(new \DateTime('1986-01-01T00:00:00+03:00'))
                    ),
            ],

            // An array
            [
                '{"client":{"children":[{"name":"Аня","birthdate":"1986-01-01T00:00:00+03:00"},'
                . '{"name":"Дима","birthdate":"1986-01-01T00:00:00+03:00","gender":0}]}}',
                'CloudLoyalty\Api\Generated\Model\NewClientResponse',
                (new NewClientResponse())
                    ->setClient(
                        (new ClientInfoReply())
                            ->setChildren([
                                (new ClientInfoReplyChildrenItem())
                                    ->setName('Аня')
                                    ->setBirthdate(new \DateTime('1986-01-01T00:00:00+03:00')),
                                (new ClientInfoReplyChildrenItem())
                                    ->setName('Дима')
                                    ->setBirthdate(new \DateTime('1986-01-01T00:00:00+03:00'))
                                    ->setGender(0),
                            ])
                    ),

            ],

            // An empty array
            [
                '{"client":{"children":[]}}',
                'CloudLoyalty\Api\Generated\Model\NewClientResponse',
                (new NewClientResponse())
                    ->setClient(
                        (new ClientInfoReply())
                            ->setChildren([])
                    )
            ],

            // extraFields
            [
                '{"client":{"extraFields":{"alpha":"a","beta":"b"}}}',
                'CloudLoyalty\Api\Generated\Model\NewClientResponse',
                (new NewClientResponse())
                    ->setClient(
                        (new ClientInfoReply())
                            ->setExtraFields([
                                'alpha' => 'a',
                                'beta' => 'b'
                            ])
                    )
            ],
        ];
    }
}