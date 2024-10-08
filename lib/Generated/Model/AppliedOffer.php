<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class AppliedOffer
{
    /**
     * Внутренний идентификатор акции
     *
     * @var int
     */
    protected $id;

    /**
     * Код
     *
     * @var string
     */
    protected $code;

    /**
     * Название
     *
     * @var string
     */
    protected $name;

    /**
     * Начисленные по акции бонусы
     *
     * @var int
     */
    protected $bonuses;

    /**
     * Дата начала действия бонусов
     *
     * @var \DateTime
     */
    protected $availableAt;

    /**
     * Дата сгорания бонусов
     *
     * @var \DateTime
     */
    protected $expireAt;

    /**
     * Скидка по акции
     *
     * @var float
     */
    protected $amount;

    /**
     * Внутренний идентификатор акции
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Внутренний идентификатор акции
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Код
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Код
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Название
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Название
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Начисленные по акции бонусы
     *
     * @return int
     */
    public function getBonuses()
    {
        return $this->bonuses;
    }

    /**
     * Начисленные по акции бонусы
     *
     * @param int $bonuses
     *
     * @return self
     */
    public function setBonuses($bonuses)
    {
        $this->bonuses = $bonuses;
        return $this;
    }

    /**
     * Дата начала действия бонусов
     *
     * @return \DateTime
     */
    public function getAvailableAt()
    {
        return $this->availableAt;
    }

    /**
     * Дата начала действия бонусов
     *
     * @param \DateTime $availableAt
     *
     * @return self
     */
    public function setAvailableAt(\DateTime $availableAt)
    {
        $this->availableAt = $availableAt;
        return $this;
    }

    /**
     * Дата сгорания бонусов
     *
     * @return \DateTime
     */
    public function getExpireAt()
    {
        return $this->expireAt;
    }

    /**
     * Дата сгорания бонусов
     *
     * @param \DateTime $expireAt
     *
     * @return self
     */
    public function setExpireAt(\DateTime $expireAt)
    {
        $this->expireAt = $expireAt;
        return $this;
    }

    /**
     * Скидка по акции
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Скидка по акции
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
}