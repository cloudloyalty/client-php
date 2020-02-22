<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class CancelOrderRequest
{
    /**
     * Идентификатор заказа
     *
     * @var string
     */
    protected $orderId;

    /**
     * Дата операции.
     *
     * Если не задана, считается равной текущим дате и времени.
     *
     *
     * @var \DateTime
     */
    protected $executedAt;

    /**
     * Идентификатор заказа
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Идентификатор заказа
     *
     * @param string $orderId
     *
     * @return self
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * Дата операции.
     *
     * Если не задана, считается равной текущим дате и времени.
     *
     *
     * @return \DateTime
     */
    public function getExecutedAt()
    {
        return $this->executedAt;
    }

    /**
     * Дата операции.
     *
     * Если не задана, считается равной текущим дате и времени.
     *
     *
     * @param \DateTime $executedAt
     *
     * @return self
     */
    public function setExecutedAt(\DateTime $executedAt)
    {
        $this->executedAt = $executedAt;
        return $this;
    }
}