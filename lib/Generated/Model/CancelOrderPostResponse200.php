<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class CancelOrderPostResponse200
{
    /**
     * 
     *
     * @var OperationResult
     */
    protected $operationResult;

    /**
     * Состояние бонусного счета клиента после операции
     *
     * @var ClientBonuses
     */
    protected $clientBonuses;

    /**
     * Ошибка
     *
     * @var Error
     */
    protected $error;

    /**
     * 
     *
     * @return OperationResult
     */
    public function getOperationResult()
    {
        return $this->operationResult;
    }

    /**
     * 
     *
     * @param OperationResult $operationResult
     *
     * @return self
     */
    public function setOperationResult(OperationResult $operationResult)
    {
        $this->operationResult = $operationResult;
        return $this;
    }

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
     * Ошибка
     *
     * @return Error
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Ошибка
     *
     * @param Error $error
     *
     * @return self
     */
    public function setError(Error $error)
    {
        $this->error = $error;
        return $this;
    }
}