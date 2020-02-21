<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class CalculationQuery
{
    /**
     * Данные о клиенте, для которого делается запрос.
     *
     * Делать запрос можно по номеру телефона клиента, по номеру карты или по внешнему идентификатору.
     *
     * Если клиент не задан для чека, продажа считается анонимной, в этом случае бонусная программа не работает.
     *
     *
     * @var ClientQuery
     */
    protected $client;

    /**
     * Данные о торговой точке
     *
     * @var ShopQuery
     */
    protected $shop;

    /**
     * Данные о кассире
     *
     * @var CashierQuery
     */
    protected $cashier;

    /**
     * Дата формирования чека или заказа.
     *
     * По умолчанию используется текущие дата и время.
     *
     *
     * @var \DateTime
     */
    protected $executedAt;

    /**
     * ID ранее созданного заказа, для которого делается расчет.
     * Если вы указываете значение в этом поле, бонусы, зарезервированные ранее за заказом, будут тажке учитываться в расчете.
     * Метод не возвращет ошибку, если заказ с переданным идентификатором не найден или уже обработан.
     *
     *
     * @var string
     */
    protected $orderId;

    /**
     * Список строк чека или заказа
     *
     * @var CalculationQueryRow[]
     */
    protected $rows;

    /**
     * Количество бонусов, которое требуется списать.
     *
     * Если задано `auto`, будет списано максимально возможное количество.
     *
     *
     * @var mixed
     */
    protected $applyBonuses = 0;

    /**
     * Количество бонусов к начисление за текущий чек или заказ.
     *
     * Если задано `auto`, расчет этого значения будет произведен по правилам, заданным на сервере.
     *
     *
     * @var mixed
     */
    protected $collectBonuses = 'auto';

    /**
     * Промокод
     *
     * @var string
     */
    protected $promocode;

    /**
     * Кратность округления суммы всех скидок
     *
     * @var float
     */
    protected $discountRoundStep = 0;

    /**
     * Данные о клиенте, для которого делается запрос.
     *
     * Делать запрос можно по номеру телефона клиента, по номеру карты или по внешнему идентификатору.
     *
     * Если клиент не задан для чека, продажа считается анонимной, в этом случае бонусная программа не работает.
     *
     *
     * @return ClientQuery
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Данные о клиенте, для которого делается запрос.
     *
     * Делать запрос можно по номеру телефона клиента, по номеру карты или по внешнему идентификатору.
     *
     * Если клиент не задан для чека, продажа считается анонимной, в этом случае бонусная программа не работает.
     *
     *
     * @param ClientQuery $client
     *
     * @return self
     */
    public function setClient(ClientQuery $client)
    {
        $this->client = $client;
        return $this;
    }

    /**
     * Данные о торговой точке
     *
     * @return ShopQuery
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * Данные о торговой точке
     *
     * @param ShopQuery $shop
     *
     * @return self
     */
    public function setShop(ShopQuery $shop)
    {
        $this->shop = $shop;
        return $this;
    }

    /**
     * Данные о кассире
     *
     * @return CashierQuery
     */
    public function getCashier()
    {
        return $this->cashier;
    }

    /**
     * Данные о кассире
     *
     * @param CashierQuery $cashier
     *
     * @return self
     */
    public function setCashier(CashierQuery $cashier)
    {
        $this->cashier = $cashier;
        return $this;
    }

    /**
     * Дата формирования чека или заказа.
     *
     * По умолчанию используется текущие дата и время.
     *
     *
     * @return \DateTime
     */
    public function getExecutedAt()
    {
        return $this->executedAt;
    }

    /**
     * Дата формирования чека или заказа.
     *
     * По умолчанию используется текущие дата и время.
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

    /**
     * ID ранее созданного заказа, для которого делается расчет.
     * Если вы указываете значение в этом поле, бонусы, зарезервированные ранее за заказом, будут тажке учитываться в расчете.
     * Метод не возвращет ошибку, если заказ с переданным идентификатором не найден или уже обработан.
     *
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * ID ранее созданного заказа, для которого делается расчет.
     * Если вы указываете значение в этом поле, бонусы, зарезервированные ранее за заказом, будут тажке учитываться в расчете.
     * Метод не возвращет ошибку, если заказ с переданным идентификатором не найден или уже обработан.
     *
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
     * Список строк чека или заказа
     *
     * @return CalculationQueryRow[]
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Список строк чека или заказа
     *
     * @param CalculationQueryRow[] $rows
     *
     * @return self
     */
    public function setRows(array $rows)
    {
        $this->rows = $rows;
        return $this;
    }

    /**
     * Количество бонусов, которое требуется списать.
     *
     * Если задано `auto`, будет списано максимально возможное количество.
     *
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
     * Если задано `auto`, будет списано максимально возможное количество.
     *
     *
     * @param mixed $applyBonuses
     *
     * @return self
     */
    public function setApplyBonuses($applyBonuses)
    {
        $this->applyBonuses = $applyBonuses;
        return $this;
    }

    /**
     * Количество бонусов к начисление за текущий чек или заказ.
     *
     * Если задано `auto`, расчет этого значения будет произведен по правилам, заданным на сервере.
     *
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
     * Если задано `auto`, расчет этого значения будет произведен по правилам, заданным на сервере.
     *
     *
     * @param mixed $collectBonuses
     *
     * @return self
     */
    public function setCollectBonuses($collectBonuses)
    {
        $this->collectBonuses = $collectBonuses;
        return $this;
    }

    /**
     * Промокод
     *
     * @return string
     */
    public function getPromocode()
    {
        return $this->promocode;
    }

    /**
     * Промокод
     *
     * @param string $promocode
     *
     * @return self
     */
    public function setPromocode($promocode)
    {
        $this->promocode = $promocode;
        return $this;
    }

    /**
     * Кратность округления суммы всех скидок
     *
     * @return float
     */
    public function getDiscountRoundStep()
    {
        return $this->discountRoundStep;
    }

    /**
     * Кратность округления суммы всех скидок
     *
     * @param float $discountRoundStep
     *
     * @return self
     */
    public function setDiscountRoundStep($discountRoundStep)
    {
        $this->discountRoundStep = $discountRoundStep;
        return $this;
    }
}