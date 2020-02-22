<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class SetOrderRequestOrderLoyalty
{
    /**
     * Выбранная операция с бонусами по данному заказу.
     *
     * Возможны следующие значения:
     * - collect - бонусы будут только начислены для клиента
     * - apply - бонусы будут только списаны с клиента
     * - apply-collect - бонусы будут сначала списаны, а затем начислены на оставшуюся сумму для клиента
     *
     *
     * @var string
     */
    protected $action;

    /**
     * Сумма товаров, к которым можно применить бонусы.
     *
     * Магазин может рассчитывать эту сумму как totalAmount, за вычетом стоимости товаров, к которым запрещено применять бонусы.
     *
     * На основе этой суммы система рассчитает максимальное количество бонусов, которые клиент может применить к покупке, но фактически примененное количество передается в другом параметре - applyBonuses.
     *
     * Не может превышать totalAmount.
     *
     * Если не указана, считается равной totalAmount.
     *
     *
     * @var float
     */
    protected $applyingAmount;

    /**
     * Сумма товаров, с которых клиент получит бонусы.
     *
     * Магазин может рассчитывать эту сумму как totalAmount, за вычетом стоимости товаров, за которые запрещено начислять бонусы.
     *
     * На основе этой суммы система рассчитает, сколько бонусов клиент получит за покупку.
     *
     * Может быть как меньше, так и больше totalAmount.
     *
     * Если не указана, считается равной totalAmount.
     *
     *
     * @var float
     */
    protected $collectingAmount;

    /**
     * Количество используемых бонусов для покупки.
     *
     * Не может превышать количество доступных бонусов клиента.
     *
     * Не может превышать максимальное количество бонусов к применению, рассчитанное на основе applyingAmount.
     *
     *
     * @var float
     */
    protected $applyBonuses;

    /**
     * Количество бонусов, которые будут начислены клиенту за покупку.
     *
     * Используется, когда магазин хочет использовать свою логику расчета бонусов, начисляемых за покупку. Если не задано, рассчитывается автоматически.
     *
     * Если задано, значение collectingAmount игнорируется.
     *
     *
     * @var float
     */
    protected $collectBonuses;

    /**
     * Выбранная операция с бонусами по данному заказу.
     *
     * Возможны следующие значения:
     * - collect - бонусы будут только начислены для клиента
     * - apply - бонусы будут только списаны с клиента
     * - apply-collect - бонусы будут сначала списаны, а затем начислены на оставшуюся сумму для клиента
     *
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Выбранная операция с бонусами по данному заказу.
     *
     * Возможны следующие значения:
     * - collect - бонусы будут только начислены для клиента
     * - apply - бонусы будут только списаны с клиента
     * - apply-collect - бонусы будут сначала списаны, а затем начислены на оставшуюся сумму для клиента
     *
     *
     * @param string $action
     *
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Сумма товаров, к которым можно применить бонусы.
     *
     * Магазин может рассчитывать эту сумму как totalAmount, за вычетом стоимости товаров, к которым запрещено применять бонусы.
     *
     * На основе этой суммы система рассчитает максимальное количество бонусов, которые клиент может применить к покупке, но фактически примененное количество передается в другом параметре - applyBonuses.
     *
     * Не может превышать totalAmount.
     *
     * Если не указана, считается равной totalAmount.
     *
     *
     * @return float
     */
    public function getApplyingAmount()
    {
        return $this->applyingAmount;
    }

    /**
     * Сумма товаров, к которым можно применить бонусы.
     *
     * Магазин может рассчитывать эту сумму как totalAmount, за вычетом стоимости товаров, к которым запрещено применять бонусы.
     *
     * На основе этой суммы система рассчитает максимальное количество бонусов, которые клиент может применить к покупке, но фактически примененное количество передается в другом параметре - applyBonuses.
     *
     * Не может превышать totalAmount.
     *
     * Если не указана, считается равной totalAmount.
     *
     *
     * @param float $applyingAmount
     *
     * @return self
     */
    public function setApplyingAmount($applyingAmount)
    {
        $this->applyingAmount = $applyingAmount;
        return $this;
    }

    /**
     * Сумма товаров, с которых клиент получит бонусы.
     *
     * Магазин может рассчитывать эту сумму как totalAmount, за вычетом стоимости товаров, за которые запрещено начислять бонусы.
     *
     * На основе этой суммы система рассчитает, сколько бонусов клиент получит за покупку.
     *
     * Может быть как меньше, так и больше totalAmount.
     *
     * Если не указана, считается равной totalAmount.
     *
     *
     * @return float
     */
    public function getCollectingAmount()
    {
        return $this->collectingAmount;
    }

    /**
     * Сумма товаров, с которых клиент получит бонусы.
     *
     * Магазин может рассчитывать эту сумму как totalAmount, за вычетом стоимости товаров, за которые запрещено начислять бонусы.
     *
     * На основе этой суммы система рассчитает, сколько бонусов клиент получит за покупку.
     *
     * Может быть как меньше, так и больше totalAmount.
     *
     * Если не указана, считается равной totalAmount.
     *
     *
     * @param float $collectingAmount
     *
     * @return self
     */
    public function setCollectingAmount($collectingAmount)
    {
        $this->collectingAmount = $collectingAmount;
        return $this;
    }

    /**
     * Количество используемых бонусов для покупки.
     *
     * Не может превышать количество доступных бонусов клиента.
     *
     * Не может превышать максимальное количество бонусов к применению, рассчитанное на основе applyingAmount.
     *
     *
     * @return float
     */
    public function getApplyBonuses()
    {
        return $this->applyBonuses;
    }

    /**
     * Количество используемых бонусов для покупки.
     *
     * Не может превышать количество доступных бонусов клиента.
     *
     * Не может превышать максимальное количество бонусов к применению, рассчитанное на основе applyingAmount.
     *
     *
     * @param float $applyBonuses
     *
     * @return self
     */
    public function setApplyBonuses($applyBonuses)
    {
        $this->applyBonuses = $applyBonuses;
        return $this;
    }

    /**
     * Количество бонусов, которые будут начислены клиенту за покупку.
     *
     * Используется, когда магазин хочет использовать свою логику расчета бонусов, начисляемых за покупку. Если не задано, рассчитывается автоматически.
     *
     * Если задано, значение collectingAmount игнорируется.
     *
     *
     * @return float
     */
    public function getCollectBonuses()
    {
        return $this->collectBonuses;
    }

    /**
     * Количество бонусов, которые будут начислены клиенту за покупку.
     *
     * Используется, когда магазин хочет использовать свою логику расчета бонусов, начисляемых за покупку. Если не задано, рассчитывается автоматически.
     *
     * Если задано, значение collectingAmount игнорируется.
     *
     *
     * @param float $collectBonuses
     *
     * @return self
     */
    public function setCollectBonuses($collectBonuses)
    {
        $this->collectBonuses = $collectBonuses;
        return $this;
    }
}