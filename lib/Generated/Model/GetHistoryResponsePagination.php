<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class GetHistoryResponsePagination
{
    /**
     * Сколько всего записей
     *
     * @var float
     */
    protected $total;

    /**
     * Сколько всего записей
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Сколько всего записей
     *
     * @param float $total
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }
}