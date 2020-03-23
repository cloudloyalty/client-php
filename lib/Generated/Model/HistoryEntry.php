<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class HistoryEntry
{
    /**
     * Дата произошедшего события
     *
     * @var \DateTime
     */
    protected $at;

    /**
     * Количество бонусов, на которое изменилось состояние счета.
     *
     * Для операций прихода значение положительное. Для расхода - отрицательное.
     *
     *
     * @var float
     */
    protected $amount;

    /**
     * Вид произведенной операции.
     *
     * Одно из следующих значений:
     * - OPERATION_APPLIED - списание на оплату покупки (расход)
     * - OPERATION_COLLECTED - начисление за покупку (приход)
     * - OPERATION_EXPIRED - сгорание бонусов по истечении срока (расход)
     * - OPERATION_REFUNDED - отмена списания бонусов при возврате товара (приход)
     * - OPERATION_CANCELLED - отмена начисленных бонусов при возврате товара (расход)
     * - OPERATION_RECEIVED - начисление акционных бонусов (приход)
     * - OPERATION_RECALLED - отзыв акционных бонусов (расход)
     * - OPERATION_APPLY_REVERTED - откат списанных бонусов при откате транзакции продажи (приход)
     * - OPERATION_COLLECT_REVERTED - откат начисленных бонусов при откате транзакции продажи (расход)
     *
     * Список операций в будущем может быть расширен.
     *
     *
     * @var string
     */
    protected $operation;

    /**
     * Описание операции.
     *
     * Одно из следующих значений:
     * - Оплата покупки
     * - Начисление за покупку
     * - Списание по истечении срока
     * - Отмена списания
     * - Отмена начисления
     * - Начисление по акции
     * - Отмена
     *
     * Список операций в будущем может быть расширен.
     *
     *
     * @var string
     */
    protected $operationName;

    /**
     * 
     *
     * @var HistoryEntryPurchase
     */
    protected $oPERATIONAPPLIED;

    /**
     * 
     *
     * @var HistoryEntryPurchase
     */
    protected $oPERATIONCOLLECTED;

    /**
     * 
     *
     * @var mixed
     */
    protected $oPERATIONEXPIRED;

    /**
     * 
     *
     * @var HistoryEntryReturn
     */
    protected $oPERATIONREFUNDED;

    /**
     * 
     *
     * @var HistoryEntryReturn
     */
    protected $oPERATIONCANCELLED;

    /**
     * 
     *
     * @var HistoryEntryOPERATIONRECEIVED
     */
    protected $oPERATIONRECEIVED;

    /**
     * 
     *
     * @var HistoryEntryOPERATIONRECALLED
     */
    protected $oPERATIONRECALLED;

    /**
     * 
     *
     * @var HistoryEntryPurchase
     */
    protected $oPERATIONAPPLYREVERTED;

    /**
     * 
     *
     * @var HistoryEntryPurchase
     */
    protected $oPERATIONCOLLECTREVERTED;

    /**
     * Дата произошедшего события
     *
     * @return \DateTime
     */
    public function getAt()
    {
        return $this->at;
    }

    /**
     * Дата произошедшего события
     *
     * @param \DateTime $at
     *
     * @return self
     */
    public function setAt(\DateTime $at)
    {
        $this->at = $at;
        return $this;
    }

    /**
     * Количество бонусов, на которое изменилось состояние счета.
     *
     * Для операций прихода значение положительное. Для расхода - отрицательное.
     *
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Количество бонусов, на которое изменилось состояние счета.
     *
     * Для операций прихода значение положительное. Для расхода - отрицательное.
     *
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Вид произведенной операции.
     *
     * Одно из следующих значений:
     * - OPERATION_APPLIED - списание на оплату покупки (расход)
     * - OPERATION_COLLECTED - начисление за покупку (приход)
     * - OPERATION_EXPIRED - сгорание бонусов по истечении срока (расход)
     * - OPERATION_REFUNDED - отмена списания бонусов при возврате товара (приход)
     * - OPERATION_CANCELLED - отмена начисленных бонусов при возврате товара (расход)
     * - OPERATION_RECEIVED - начисление акционных бонусов (приход)
     * - OPERATION_RECALLED - отзыв акционных бонусов (расход)
     * - OPERATION_APPLY_REVERTED - откат списанных бонусов при откате транзакции продажи (приход)
     * - OPERATION_COLLECT_REVERTED - откат начисленных бонусов при откате транзакции продажи (расход)
     *
     * Список операций в будущем может быть расширен.
     *
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Вид произведенной операции.
     *
     * Одно из следующих значений:
     * - OPERATION_APPLIED - списание на оплату покупки (расход)
     * - OPERATION_COLLECTED - начисление за покупку (приход)
     * - OPERATION_EXPIRED - сгорание бонусов по истечении срока (расход)
     * - OPERATION_REFUNDED - отмена списания бонусов при возврате товара (приход)
     * - OPERATION_CANCELLED - отмена начисленных бонусов при возврате товара (расход)
     * - OPERATION_RECEIVED - начисление акционных бонусов (приход)
     * - OPERATION_RECALLED - отзыв акционных бонусов (расход)
     * - OPERATION_APPLY_REVERTED - откат списанных бонусов при откате транзакции продажи (приход)
     * - OPERATION_COLLECT_REVERTED - откат начисленных бонусов при откате транзакции продажи (расход)
     *
     * Список операций в будущем может быть расширен.
     *
     *
     * @param string $operation
     *
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Описание операции.
     *
     * Одно из следующих значений:
     * - Оплата покупки
     * - Начисление за покупку
     * - Списание по истечении срока
     * - Отмена списания
     * - Отмена начисления
     * - Начисление по акции
     * - Отмена
     *
     * Список операций в будущем может быть расширен.
     *
     *
     * @return string
     */
    public function getOperationName()
    {
        return $this->operationName;
    }

    /**
     * Описание операции.
     *
     * Одно из следующих значений:
     * - Оплата покупки
     * - Начисление за покупку
     * - Списание по истечении срока
     * - Отмена списания
     * - Отмена начисления
     * - Начисление по акции
     * - Отмена
     *
     * Список операций в будущем может быть расширен.
     *
     *
     * @param string $operationName
     *
     * @return self
     */
    public function setOperationName($operationName)
    {
        $this->operationName = $operationName;
        return $this;
    }

    /**
     * 
     *
     * @return HistoryEntryPurchase
     */
    public function getOPERATIONAPPLIED()
    {
        return $this->oPERATIONAPPLIED;
    }

    /**
     * 
     *
     * @param HistoryEntryPurchase $oPERATIONAPPLIED
     *
     * @return self
     */
    public function setOPERATIONAPPLIED(HistoryEntryPurchase $oPERATIONAPPLIED)
    {
        $this->oPERATIONAPPLIED = $oPERATIONAPPLIED;
        return $this;
    }

    /**
     * 
     *
     * @return HistoryEntryPurchase
     */
    public function getOPERATIONCOLLECTED()
    {
        return $this->oPERATIONCOLLECTED;
    }

    /**
     * 
     *
     * @param HistoryEntryPurchase $oPERATIONCOLLECTED
     *
     * @return self
     */
    public function setOPERATIONCOLLECTED(HistoryEntryPurchase $oPERATIONCOLLECTED)
    {
        $this->oPERATIONCOLLECTED = $oPERATIONCOLLECTED;
        return $this;
    }

    /**
     * 
     *
     * @return mixed
     */
    public function getOPERATIONEXPIRED()
    {
        return $this->oPERATIONEXPIRED;
    }

    /**
     * 
     *
     * @param mixed $oPERATIONEXPIRED
     *
     * @return self
     */
    public function setOPERATIONEXPIRED($oPERATIONEXPIRED)
    {
        $this->oPERATIONEXPIRED = $oPERATIONEXPIRED;
        return $this;
    }

    /**
     * 
     *
     * @return HistoryEntryReturn
     */
    public function getOPERATIONREFUNDED()
    {
        return $this->oPERATIONREFUNDED;
    }

    /**
     * 
     *
     * @param HistoryEntryReturn $oPERATIONREFUNDED
     *
     * @return self
     */
    public function setOPERATIONREFUNDED(HistoryEntryReturn $oPERATIONREFUNDED)
    {
        $this->oPERATIONREFUNDED = $oPERATIONREFUNDED;
        return $this;
    }

    /**
     * 
     *
     * @return HistoryEntryReturn
     */
    public function getOPERATIONCANCELLED()
    {
        return $this->oPERATIONCANCELLED;
    }

    /**
     * 
     *
     * @param HistoryEntryReturn $oPERATIONCANCELLED
     *
     * @return self
     */
    public function setOPERATIONCANCELLED(HistoryEntryReturn $oPERATIONCANCELLED)
    {
        $this->oPERATIONCANCELLED = $oPERATIONCANCELLED;
        return $this;
    }

    /**
     * 
     *
     * @return HistoryEntryOPERATIONRECEIVED
     */
    public function getOPERATIONRECEIVED()
    {
        return $this->oPERATIONRECEIVED;
    }

    /**
     * 
     *
     * @param HistoryEntryOPERATIONRECEIVED $oPERATIONRECEIVED
     *
     * @return self
     */
    public function setOPERATIONRECEIVED(HistoryEntryOPERATIONRECEIVED $oPERATIONRECEIVED)
    {
        $this->oPERATIONRECEIVED = $oPERATIONRECEIVED;
        return $this;
    }

    /**
     * 
     *
     * @return HistoryEntryOPERATIONRECALLED
     */
    public function getOPERATIONRECALLED()
    {
        return $this->oPERATIONRECALLED;
    }

    /**
     * 
     *
     * @param HistoryEntryOPERATIONRECALLED $oPERATIONRECALLED
     *
     * @return self
     */
    public function setOPERATIONRECALLED(HistoryEntryOPERATIONRECALLED $oPERATIONRECALLED)
    {
        $this->oPERATIONRECALLED = $oPERATIONRECALLED;
        return $this;
    }

    /**
     * 
     *
     * @return HistoryEntryPurchase
     */
    public function getOPERATIONAPPLYREVERTED()
    {
        return $this->oPERATIONAPPLYREVERTED;
    }

    /**
     * 
     *
     * @param HistoryEntryPurchase $oPERATIONAPPLYREVERTED
     *
     * @return self
     */
    public function setOPERATIONAPPLYREVERTED(HistoryEntryPurchase $oPERATIONAPPLYREVERTED)
    {
        $this->oPERATIONAPPLYREVERTED = $oPERATIONAPPLYREVERTED;
        return $this;
    }

    /**
     * 
     *
     * @return HistoryEntryPurchase
     */
    public function getOPERATIONCOLLECTREVERTED()
    {
        return $this->oPERATIONCOLLECTREVERTED;
    }

    /**
     * 
     *
     * @param HistoryEntryPurchase $oPERATIONCOLLECTREVERTED
     *
     * @return self
     */
    public function setOPERATIONCOLLECTREVERTED(HistoryEntryPurchase $oPERATIONCOLLECTREVERTED)
    {
        $this->oPERATIONCOLLECTREVERTED = $oPERATIONCOLLECTREVERTED;
        return $this;
    }
}