<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class HistoryEntryPurchase
{
    /**
     * Идентификатор продажи
     *
     * @var string
     */
    protected $purchaseId;

    /**
     * Дата продажи
     *
     * @var string
     */
    protected $executedAt;

    /**
     * Сумма покупки
     *
     * @var float
     */
    protected $totalAmount;

    /**
     * Идентификатор продажи
     *
     * @return string
     */
    public function getPurchaseId()
    {
        return $this->purchaseId;
    }

    /**
     * Идентификатор продажи
     *
     * @param string $purchaseId
     *
     * @return self
     */
    public function setPurchaseId($purchaseId)
    {
        $this->purchaseId = $purchaseId;
        return $this;
    }

    /**
     * Дата продажи
     *
     * @return string
     */
    public function getExecutedAt()
    {
        return $this->executedAt;
    }

    /**
     * Дата продажи
     *
     * @param string $executedAt
     *
     * @return self
     */
    public function setExecutedAt($executedAt)
    {
        $this->executedAt = $executedAt;
        return $this;
    }

    /**
     * Сумма покупки
     *
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Сумма покупки
     *
     * @param float $totalAmount
     *
     * @return self
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }
}