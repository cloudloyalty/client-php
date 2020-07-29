<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class GetHistoryRequestPagination
{
    /**
     * Указывает максимальное число возвращаемых записей
     *
     * @var float
     */
    protected $limit;

    /**
     * Указывает смещение, с которого начнется возвращение данных.
     *
     * Начало отсчета — 0.
     *
     *
     * @var float
     */
    protected $offset;

    /**
     * Указывает максимальное число возвращаемых записей
     *
     * @return float
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Указывает максимальное число возвращаемых записей
     *
     * @param float $limit
     *
     * @return self
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * Указывает смещение, с которого начнется возвращение данных.
     *
     * Начало отсчета — 0.
     *
     *
     * @return float
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Указывает смещение, с которого начнется возвращение данных.
     *
     * Начало отсчета — 0.
     *
     *
     * @param float $offset
     *
     * @return self
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }
}