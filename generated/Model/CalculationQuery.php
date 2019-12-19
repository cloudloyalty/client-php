<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Model;

class CalculationQuery
{
    /**
     * Данные о клиенте, для которого делается запрос.
     *
     * @var ClientQuery
     */
    protected $client;

    /**
     * Данные о торговой точке.
     *
     * @var ShopQuery
     */
    protected $shop;

    /**
     * Данные о кассире.
     *
     * @var CashierQuery
     */
    protected $cashier;

    /**
     * Дата формирования чека или заказа.
     *
     * @var \DateTime
     */
    protected $executedAt;

    /**
     * Список строк чека или заказа.
     *
     * @var CalculationQueryRow[]
     */
    protected $rows;

    /**
     * Количество бонусов, которое требуется списать.
     *
     * @var mixed
     */
    protected $applyBonuses = 0;

    /**
     * Количество бонусов к начисление за текущий чек или заказ.
     *
     * @var mixed
     */
    protected $collectBonuses = 'auto';

    /**
     * Промокод.
     *
     * @var string
     */
    protected $promocode;

    /**
     * Кратность округления суммы всех скидок.
     *
     * @var float
     */
    protected $discountRoundStep = 0;

    /**
     * Данные о клиенте, для которого делается запрос.
     */
    public function getClient(): ClientQuery
    {
        return $this->client;
    }

    /**
     * Данные о клиенте, для которого делается запрос.
     */
    public function setClient(ClientQuery $client): self
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Данные о торговой точке.
     */
    public function getShop(): ShopQuery
    {
        return $this->shop;
    }

    /**
     * Данные о торговой точке.
     */
    public function setShop(ShopQuery $shop): self
    {
        $this->shop = $shop;

        return $this;
    }

    /**
     * Данные о кассире.
     */
    public function getCashier(): CashierQuery
    {
        return $this->cashier;
    }

    /**
     * Данные о кассире.
     */
    public function setCashier(CashierQuery $cashier): self
    {
        $this->cashier = $cashier;

        return $this;
    }

    /**
     * Дата формирования чека или заказа.
     */
    public function getExecutedAt(): \DateTime
    {
        return $this->executedAt;
    }

    /**
     * Дата формирования чека или заказа.
     */
    public function setExecutedAt(\DateTime $executedAt): self
    {
        $this->executedAt = $executedAt;

        return $this;
    }

    /**
     * Список строк чека или заказа.
     *
     * @return CalculationQueryRow[]
     */
    public function getRows(): array
    {
        return $this->rows;
    }

    /**
     * Список строк чека или заказа.
     *
     * @param CalculationQueryRow[] $rows
     */
    public function setRows(array $rows): self
    {
        $this->rows = $rows;

        return $this;
    }

    /**
     * Количество бонусов, которое требуется списать.
     *
     * @return mixed
     */
    public function getApplyBonuses()
    {
        return $this->applyBonuses;
    }

    /**
     * Количество бонусов, которое требуется списать.
     *
     * @param mixed $applyBonuses
     */
    public function setApplyBonuses($applyBonuses): self
    {
        $this->applyBonuses = $applyBonuses;

        return $this;
    }

    /**
     * Количество бонусов к начисление за текущий чек или заказ.
     *
     * @return mixed
     */
    public function getCollectBonuses()
    {
        return $this->collectBonuses;
    }

    /**
     * Количество бонусов к начисление за текущий чек или заказ.
     *
     * @param mixed $collectBonuses
     */
    public function setCollectBonuses($collectBonuses): self
    {
        $this->collectBonuses = $collectBonuses;

        return $this;
    }

    /**
     * Промокод.
     */
    public function getPromocode(): string
    {
        return $this->promocode;
    }

    /**
     * Промокод.
     */
    public function setPromocode(string $promocode): self
    {
        $this->promocode = $promocode;

        return $this;
    }

    /**
     * Кратность округления суммы всех скидок.
     */
    public function getDiscountRoundStep(): float
    {
        return $this->discountRoundStep;
    }

    /**
     * Кратность округления суммы всех скидок.
     */
    public function setDiscountRoundStep(float $discountRoundStep): self
    {
        $this->discountRoundStep = $discountRoundStep;

        return $this;
    }
}
