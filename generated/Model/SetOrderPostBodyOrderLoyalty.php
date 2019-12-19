<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Model;

class SetOrderPostBodyOrderLoyalty
{
    /**
     * Выбранная операция с бонусами по данному заказу.
     *
     * @var string
     */
    protected $action;

    /**
     * Сумма товаров, к которым можно применить бонусы.
     *
     * @var float
     */
    protected $applyingAmount;

    /**
     * Сумма товаров, с которых клиент получит бонусы.
     *
     * @var float
     */
    protected $collectingAmount;

    /**
     * Количество используемых бонусов для покупки.
     *
     * @var float
     */
    protected $applyBonuses;

    /**
     * Количество бонусов, которые будут начислены клиенту за покупку.
     *
     * @var float
     */
    protected $collectBonuses;

    /**
     * Выбранная операция с бонусами по данному заказу.
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * Выбранная операция с бонусами по данному заказу.
     */
    public function setAction(string $action): self
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Сумма товаров, к которым можно применить бонусы.
     */
    public function getApplyingAmount(): float
    {
        return $this->applyingAmount;
    }

    /**
     * Сумма товаров, к которым можно применить бонусы.
     */
    public function setApplyingAmount(float $applyingAmount): self
    {
        $this->applyingAmount = $applyingAmount;

        return $this;
    }

    /**
     * Сумма товаров, с которых клиент получит бонусы.
     */
    public function getCollectingAmount(): float
    {
        return $this->collectingAmount;
    }

    /**
     * Сумма товаров, с которых клиент получит бонусы.
     */
    public function setCollectingAmount(float $collectingAmount): self
    {
        $this->collectingAmount = $collectingAmount;

        return $this;
    }

    /**
     * Количество используемых бонусов для покупки.
     */
    public function getApplyBonuses(): float
    {
        return $this->applyBonuses;
    }

    /**
     * Количество используемых бонусов для покупки.
     */
    public function setApplyBonuses(float $applyBonuses): self
    {
        $this->applyBonuses = $applyBonuses;

        return $this;
    }

    /**
     * Количество бонусов, которые будут начислены клиенту за покупку.
     */
    public function getCollectBonuses(): float
    {
        return $this->collectBonuses;
    }

    /**
     * Количество бонусов, которые будут начислены клиенту за покупку.
     */
    public function setCollectBonuses(float $collectBonuses): self
    {
        $this->collectBonuses = $collectBonuses;

        return $this;
    }
}
