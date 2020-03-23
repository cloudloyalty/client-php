<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class ApplyReturnResponseConfirmation
{
    /**
     * Номер телефона клиента
     *
     * @var string
     */
    protected $phoneNumber;

    /**
     * Номер транзакции для возврата товара в системе партнера
     *
     * @var string
     */
    protected $refundId;

    /**
     * Общая сумма возвращённого товара
     *
     * @var float
     */
    protected $refundAmount;

    /**
     * Количество возвращенных бонусов
     *
     * @var float
     */
    protected $recoveredBonuses;

    /**
     * Количество аннулированных бонусов
     *
     * @var float
     */
    protected $cancelledBonuses;

    /**
     * Номер телефона клиента
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Номер телефона клиента
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Номер транзакции для возврата товара в системе партнера
     *
     * @return string
     */
    public function getRefundId()
    {
        return $this->refundId;
    }

    /**
     * Номер транзакции для возврата товара в системе партнера
     *
     * @param string $refundId
     *
     * @return self
     */
    public function setRefundId($refundId)
    {
        $this->refundId = $refundId;
        return $this;
    }

    /**
     * Общая сумма возвращённого товара
     *
     * @return float
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * Общая сумма возвращённого товара
     *
     * @param float $refundAmount
     *
     * @return self
     */
    public function setRefundAmount($refundAmount)
    {
        $this->refundAmount = $refundAmount;
        return $this;
    }

    /**
     * Количество возвращенных бонусов
     *
     * @return float
     */
    public function getRecoveredBonuses()
    {
        return $this->recoveredBonuses;
    }

    /**
     * Количество возвращенных бонусов
     *
     * @param float $recoveredBonuses
     *
     * @return self
     */
    public function setRecoveredBonuses($recoveredBonuses)
    {
        $this->recoveredBonuses = $recoveredBonuses;
        return $this;
    }

    /**
     * Количество аннулированных бонусов
     *
     * @return float
     */
    public function getCancelledBonuses()
    {
        return $this->cancelledBonuses;
    }

    /**
     * Количество аннулированных бонусов
     *
     * @param float $cancelledBonuses
     *
     * @return self
     */
    public function setCancelledBonuses($cancelledBonuses)
    {
        $this->cancelledBonuses = $cancelledBonuses;
        return $this;
    }
}