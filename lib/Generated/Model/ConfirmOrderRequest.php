<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class ConfirmOrderRequest
{
    /**
     * Идентификатор заказа для подтверждения
     *
     * @var string
     */
    protected $orderId;

    /**
     * Дата операции подтверждения.
     *
     * Если не задана, считается равной текущим дате и времени.
     *
     *
     * @var \DateTime
     */
    protected $executedAt;

    /**
     * Идентификатор заказа для подтверждения
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Идентификатор заказа для подтверждения
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
     * Дата операции подтверждения.
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
     * Дата операции подтверждения.
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