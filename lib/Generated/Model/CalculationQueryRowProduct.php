<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class CalculationQueryRowProduct
{
    /**
     * ID номенклатуры во внешней системе
     *
     * @var string
     */
    protected $externalId;

    /**
     * Код номенклатуры или артикул
     *
     * @var string
     */
    protected $sku;

    /**
     * Наименование товара или услуги
     *
     * @var string
     */
    protected $title;

    /**
     * Категория товара или услуги.
     *
     * Если используется несколько уровней вложенности категорий, в этой строке следует передать
     * список наименований всех уровней, разделенных точкой с запятой.
     *
     *
     * @var string
     */
    protected $category;

    /**
     * ID категории во внешней системе
     *
     * @var string
     */
    protected $categoryExternalId;

    /**
     * Закупочная цена единицы товара.
     *
     * Используется для ограничения максимальной скидки или расчета валовой прибыли.
     *
     *
     * @var float
     */
    protected $buyingPrice;

    /**
     * Обычная цена единицы товара или услуги
     *
     * @var float
     */
    protected $blackPrice;

    /**
     * Новая цена единицы товара или услуги
     *
     * @var float
     */
    protected $redPrice;

    /**
     * Минимальная цена единицы товара или услуги
     *
     * @var float
     */
    protected $minPrice = 0;

    /**
     * ID номенклатуры во внешней системе
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * ID номенклатуры во внешней системе
     *
     * @param string $externalId
     *
     * @return self
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Код номенклатуры или артикул
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Код номенклатуры или артикул
     *
     * @param string $sku
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        return $this;
    }

    /**
     * Наименование товара или услуги
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Наименование товара или услуги
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Категория товара или услуги.
     *
     * Если используется несколько уровней вложенности категорий, в этой строке следует передать
     * список наименований всех уровней, разделенных точкой с запятой.
     *
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Категория товара или услуги.
     *
     * Если используется несколько уровней вложенности категорий, в этой строке следует передать
     * список наименований всех уровней, разделенных точкой с запятой.
     *
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * ID категории во внешней системе
     *
     * @return string
     */
    public function getCategoryExternalId()
    {
        return $this->categoryExternalId;
    }

    /**
     * ID категории во внешней системе
     *
     * @param string $categoryExternalId
     *
     * @return self
     */
    public function setCategoryExternalId($categoryExternalId)
    {
        $this->categoryExternalId = $categoryExternalId;
        return $this;
    }

    /**
     * Закупочная цена единицы товара.
     *
     * Используется для ограничения максимальной скидки или расчета валовой прибыли.
     *
     *
     * @return float
     */
    public function getBuyingPrice()
    {
        return $this->buyingPrice;
    }

    /**
     * Закупочная цена единицы товара.
     *
     * Используется для ограничения максимальной скидки или расчета валовой прибыли.
     *
     *
     * @param float $buyingPrice
     *
     * @return self
     */
    public function setBuyingPrice($buyingPrice)
    {
        $this->buyingPrice = $buyingPrice;
        return $this;
    }

    /**
     * Обычная цена единицы товара или услуги
     *
     * @return float
     */
    public function getBlackPrice()
    {
        return $this->blackPrice;
    }

    /**
     * Обычная цена единицы товара или услуги
     *
     * @param float $blackPrice
     *
     * @return self
     */
    public function setBlackPrice($blackPrice)
    {
        $this->blackPrice = $blackPrice;
        return $this;
    }

    /**
     * Новая цена единицы товара или услуги
     *
     * @return float
     */
    public function getRedPrice()
    {
        return $this->redPrice;
    }

    /**
     * Новая цена единицы товара или услуги
     *
     * @param float $redPrice
     *
     * @return self
     */
    public function setRedPrice($redPrice)
    {
        $this->redPrice = $redPrice;
        return $this;
    }

    /**
     * Минимальная цена единицы товара или услуги
     *
     * @return float
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * Минимальная цена единицы товара или услуги
     *
     * @param float $minPrice
     *
     * @return self
     */
    public function setMinPrice($minPrice)
    {
        $this->minPrice = $minPrice;
        return $this;
    }
}