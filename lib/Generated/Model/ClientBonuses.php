<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class ClientBonuses
{
    /**
     * Доступно
     *
     * @var int
     */
    protected $available;

    /**
     * Заморожено
     *
     * @var int
     */
    protected $pending;

    /**
     * Зарезервировано
     *
     * @var int
     */
    protected $reserved;

    /**
     * Всего
     *
     * @var int
     */
    protected $total;

    /**
     * Доступно
     *
     * @return int
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Доступно
     *
     * @param int $available
     *
     * @return self
     */
    public function setAvailable($available)
    {
        $this->available = $available;
        return $this;
    }

    /**
     * Заморожено
     *
     * @return int
     */
    public function getPending()
    {
        return $this->pending;
    }

    /**
     * Заморожено
     *
     * @param int $pending
     *
     * @return self
     */
    public function setPending($pending)
    {
        $this->pending = $pending;
        return $this;
    }

    /**
     * Зарезервировано
     *
     * @return int
     */
    public function getReserved()
    {
        return $this->reserved;
    }

    /**
     * Зарезервировано
     *
     * @param int $reserved
     *
     * @return self
     */
    public function setReserved($reserved)
    {
        $this->reserved = $reserved;
        return $this;
    }

    /**
     * Всего
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Всего
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }
}