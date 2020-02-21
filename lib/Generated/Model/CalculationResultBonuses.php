<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class CalculationResultBonuses
{
    /**
     * Применено
     *
     * @var int
     */
    protected $applied;

    /**
     * Накоплено
     *
     * @var int
     */
    protected $collected;

    /**
     * Максимальное количество бонусов, которое можно применить к чеку.
     *
     * Это значение расчитано на основе доступных бонусов на счету клиента и правил применения бонусов к чеку.
     *
     *
     * @var int
     */
    protected $maxToApply;

    /**
     * Ошибка
     *
     * @var Error
     */
    protected $error;

    /**
     * Применено
     *
     * @return int
     */
    public function getApplied()
    {
        return $this->applied;
    }

    /**
     * Применено
     *
     * @param int $applied
     *
     * @return self
     */
    public function setApplied($applied)
    {
        $this->applied = $applied;
        return $this;
    }

    /**
     * Накоплено
     *
     * @return int
     */
    public function getCollected()
    {
        return $this->collected;
    }

    /**
     * Накоплено
     *
     * @param int $collected
     *
     * @return self
     */
    public function setCollected($collected)
    {
        $this->collected = $collected;
        return $this;
    }

    /**
     * Максимальное количество бонусов, которое можно применить к чеку.
     *
     * Это значение расчитано на основе доступных бонусов на счету клиента и правил применения бонусов к чеку.
     *
     *
     * @return int
     */
    public function getMaxToApply()
    {
        return $this->maxToApply;
    }

    /**
     * Максимальное количество бонусов, которое можно применить к чеку.
     *
     * Это значение расчитано на основе доступных бонусов на счету клиента и правил применения бонусов к чеку.
     *
     *
     * @param int $maxToApply
     *
     * @return self
     */
    public function setMaxToApply($maxToApply)
    {
        $this->maxToApply = $maxToApply;
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