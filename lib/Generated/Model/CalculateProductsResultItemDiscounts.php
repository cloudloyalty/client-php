<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class CalculateProductsResultItemDiscounts
{
    /**
     * Учтенная внешняя скидка
     *
     * @var float
     */
    protected $external;

    /**
     * Скидка по акции
     *
     * @var float
     */
    protected $offer;

    /**
     * Округление
     *
     * @var float
     */
    protected $rounding;

    /**
     * Учтенная внешняя скидка
     *
     * @return float
     */
    public function getExternal()
    {
        return $this->external;
    }

    /**
     * Учтенная внешняя скидка
     *
     * @param float $external
     *
     * @return self
     */
    public function setExternal($external)
    {
        $this->external = $external;
        return $this;
    }

    /**
     * Скидка по акции
     *
     * @return float
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Скидка по акции
     *
     * @param float $offer
     *
     * @return self
     */
    public function setOffer($offer)
    {
        $this->offer = $offer;
        return $this;
    }

    /**
     * Округление
     *
     * @return float
     */
    public function getRounding()
    {
        return $this->rounding;
    }

    /**
     * Округление
     *
     * @param float $rounding
     *
     * @return self
     */
    public function setRounding($rounding)
    {
        $this->rounding = $rounding;
        return $this;
    }
}