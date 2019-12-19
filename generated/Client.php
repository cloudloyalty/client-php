<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api;

class Client extends \Jane\OpenApiRuntime\Client\Psr18Client
{
    /**
     * Расчет скидок и бонусов для чека продажи или заказа.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \CloudLoyalty\Api\Model\V2CalculatePurchasePostResponse200|\Psr\Http\Message\ResponseInterface|null
     */
    public function postV2CalculatePurchase(\CloudLoyalty\Api\Model\V2CalculatePurchasePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \CloudLoyalty\Api\Endpoint\PostV2CalculatePurchase($requestBody), $fetch);
    }

    /**
     * Предварительное создание продажи на сервере.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \CloudLoyalty\Api\Model\SetPurchasePostResponse200|\Psr\Http\Message\ResponseInterface|null
     */
    public function postSetPurchase(\CloudLoyalty\Api\Model\SetPurchasePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \CloudLoyalty\Api\Endpoint\PostSetPurchase($requestBody), $fetch);
    }

    /**
     * Подтверждение предварительно созданной продажи.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \CloudLoyalty\Api\Model\ConfirmTicketPostResponse200|\Psr\Http\Message\ResponseInterface|null
     */
    public function postConfirmTicket(\CloudLoyalty\Api\Model\ConfirmTicketPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \CloudLoyalty\Api\Endpoint\PostConfirmTicket($requestBody), $fetch);
    }

    /**
     * Отмена предварительно созданной продажи.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \CloudLoyalty\Api\Model\DiscardTicketPostResponse200|\Psr\Http\Message\ResponseInterface|null
     */
    public function postDiscardTicket(\CloudLoyalty\Api\Model\DiscardTicketPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \CloudLoyalty\Api\Endpoint\PostDiscardTicket($requestBody), $fetch);
    }

    /**
     * Метод позволяет узнать количество ожидаемых и доступных бонусов на балансе пользователя и другую информацию.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \CloudLoyalty\Api\Model\GetBalancePostResponse200|\Psr\Http\Message\ResponseInterface|null
     */
    public function postGetBalance(\CloudLoyalty\Api\Model\ClientQuery $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \CloudLoyalty\Api\Endpoint\PostGetBalance($requestBody), $fetch);
    }

    /**
     * Создает заказ.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \CloudLoyalty\Api\Model\SetOrderPostResponse200|\Psr\Http\Message\ResponseInterface|null
     */
    public function postSetOrder(\CloudLoyalty\Api\Model\SetOrderPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \CloudLoyalty\Api\Endpoint\PostSetOrder($requestBody), $fetch);
    }

    /**
     * Подтверждает ранее созданный заказ.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \CloudLoyalty\Api\Model\ConfirmOrderPostResponse200|\Psr\Http\Message\ResponseInterface|null
     */
    public function postConfirmOrder(\CloudLoyalty\Api\Model\ConfirmOrderPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \CloudLoyalty\Api\Endpoint\PostConfirmOrder($requestBody), $fetch);
    }

    /**
     * Отменяет ранее созданный заказ.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \CloudLoyalty\Api\Model\CancelOrderPostResponse200|\Psr\Http\Message\ResponseInterface|null
     */
    public function postCancelOrder(\CloudLoyalty\Api\Model\CancelOrderPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \CloudLoyalty\Api\Endpoint\PostCancelOrder($requestBody), $fetch);
    }

    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api-test.cloudloyalty.ru');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(\CloudLoyalty\Api\Normalizer\NormalizerFactory::create(), [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
