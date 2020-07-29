<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class SetOrderRequest
{
    /**
     * Данные о клиенте, для которого делается запрос.
     *
     * Делать запрос можно по номеру телефона клиента, по номеру карты или по внешнему идентификатору.
     *
     *
     * @var ClientQuery
     */
    protected $client;

    /**
     * 
     *
     * @var SetOrderRequestOrder
     */
    protected $order;

    /**
     * Данные о клиенте, для которого делается запрос.
     *
     * Делать запрос можно по номеру телефона клиента, по номеру карты или по внешнему идентификатору.
     *
     *
     * @return ClientQuery
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Данные о клиенте, для которого делается запрос.
     *
     * Делать запрос можно по номеру телефона клиента, по номеру карты или по внешнему идентификатору.
     *
     *
     * @param ClientQuery $client
     *
     * @return self
     */
    public function setClient(ClientQuery $client)
    {
        $this->client = $client;
        return $this;
    }

    /**
     * 
     *
     * @return SetOrderRequestOrder
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * 
     *
     * @param SetOrderRequestOrder $order
     *
     * @return self
     */
    public function setOrder(SetOrderRequestOrder $order)
    {
        $this->order = $order;
        return $this;
    }
}