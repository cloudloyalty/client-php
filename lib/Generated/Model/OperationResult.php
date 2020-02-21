<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class OperationResult
{
    /**
     * Сумма к оплате, оставшаяся после погашения части общей суммы примененными бонусами
     *
     * @var float
     */
    protected $remainingAmount;

    /**
     * Количество примененных бонусов.
     *
     * Для заказа в этом поле содержится количество не списанных, а зарезервированных бонусов.
     *
     *
     * @var int
     */
    protected $appliedBonuses;

    /**
     * Количество начисляемых бонусов за покупку.
     *
     * Для заказа это поле содержит количество бонусов, которое будет начислено после подтверждения.
     *
     *
     * @var int
     */
    protected $collectedBonuses;

    /**
     * Сумма к оплате, оставшаяся после погашения части общей суммы примененными бонусами
     *
     * @return float
     */
    public function getRemainingAmount()
    {
        return $this->remainingAmount;
    }

    /**
     * Сумма к оплате, оставшаяся после погашения части общей суммы примененными бонусами
     *
     * @param float $remainingAmount
     *
     * @return self
     */
    public function setRemainingAmount($remainingAmount)
    {
        $this->remainingAmount = $remainingAmount;
        return $this;
    }

    /**
     * Количество примененных бонусов.
     *
     * Для заказа в этом поле содержится количество не списанных, а зарезервированных бонусов.
     *
     *
     * @return int
     */
    public function getAppliedBonuses()
    {
        return $this->appliedBonuses;
    }

    /**
     * Количество примененных бонусов.
     *
     * Для заказа в этом поле содержится количество не списанных, а зарезервированных бонусов.
     *
     *
     * @param int $appliedBonuses
     *
     * @return self
     */
    public function setAppliedBonuses($appliedBonuses)
    {
        $this->appliedBonuses = $appliedBonuses;
        return $this;
    }

    /**
     * Количество начисляемых бонусов за покупку.
     *
     * Для заказа это поле содержит количество бонусов, которое будет начислено после подтверждения.
     *
     *
     * @return int
     */
    public function getCollectedBonuses()
    {
        return $this->collectedBonuses;
    }

    /**
     * Количество начисляемых бонусов за покупку.
     *
     * Для заказа это поле содержит количество бонусов, которое будет начислено после подтверждения.
     *
     *
     * @param int $collectedBonuses
     *
     * @return self
     */
    public function setCollectedBonuses($collectedBonuses)
    {
        $this->collectedBonuses = $collectedBonuses;
        return $this;
    }
}