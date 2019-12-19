<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Model;

class CalculationResultDiscounts
{
    /**
     * Автоскидка.
     *
     * @var float
     */
    protected $auto;

    /**
     * Ручная скидка.
     *
     * @var float
     */
    protected $manual;

    /**
     * Скидка по бонусам
     *
     * @var float
     */
    protected $bonuses;

    /**
     * Скидка по промокоду.
     *
     * @var float
     */
    protected $promocode;

    /**
     * Скидка по акции.
     *
     * @var float
     */
    protected $offer;

    /**
     * Округление.
     *
     * @var float
     */
    protected $rounding;

    /**
     * Автоскидка.
     */
    public function getAuto(): float
    {
        return $this->auto;
    }

    /**
     * Автоскидка.
     */
    public function setAuto(float $auto): self
    {
        $this->auto = $auto;

        return $this;
    }

    /**
     * Ручная скидка.
     */
    public function getManual(): float
    {
        return $this->manual;
    }

    /**
     * Ручная скидка.
     */
    public function setManual(float $manual): self
    {
        $this->manual = $manual;

        return $this;
    }

    /**
     * Скидка по бонусам
     */
    public function getBonuses(): float
    {
        return $this->bonuses;
    }

    /**
     * Скидка по бонусам
     */
    public function setBonuses(float $bonuses): self
    {
        $this->bonuses = $bonuses;

        return $this;
    }

    /**
     * Скидка по промокоду.
     */
    public function getPromocode(): float
    {
        return $this->promocode;
    }

    /**
     * Скидка по промокоду.
     */
    public function setPromocode(float $promocode): self
    {
        $this->promocode = $promocode;

        return $this;
    }

    /**
     * Скидка по акции.
     */
    public function getOffer(): float
    {
        return $this->offer;
    }

    /**
     * Скидка по акции.
     */
    public function setOffer(float $offer): self
    {
        $this->offer = $offer;

        return $this;
    }

    /**
     * Округление.
     */
    public function getRounding(): float
    {
        return $this->rounding;
    }

    /**
     * Округление.
     */
    public function setRounding(float $rounding): self
    {
        $this->rounding = $rounding;

        return $this;
    }
}
