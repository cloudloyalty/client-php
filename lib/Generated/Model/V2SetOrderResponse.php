<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class V2SetOrderResponse
{
    /**
     * Состояние бонусного счета клиента после операции
     *
     * @var ClientBonuses
     */
    protected $clientBonuses;

    /**
     * Результат расчета
     *
     * @var CalculationResult
     */
    protected $calculationResult;

    /**
     * Состояние бонусного счета клиента после операции
     *
     * @return ClientBonuses
     */
    public function getClientBonuses()
    {
        return $this->clientBonuses;
    }

    /**
     * Состояние бонусного счета клиента после операции
     *
     * @param ClientBonuses $clientBonuses
     *
     * @return self
     */
    public function setClientBonuses(ClientBonuses $clientBonuses)
    {
        $this->clientBonuses = $clientBonuses;
        return $this;
    }

    /**
     * Результат расчета
     *
     * @return CalculationResult
     */
    public function getCalculationResult()
    {
        return $this->calculationResult;
    }

    /**
     * Результат расчета
     *
     * @param CalculationResult $calculationResult
     *
     * @return self
     */
    public function setCalculationResult(CalculationResult $calculationResult)
    {
        $this->calculationResult = $calculationResult;
        return $this;
    }
}