<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class IssuePromocodeResponse
{
    /**
     * Созданный промокод
     *
     * @var string
     */
    protected $promocode;

    /**
     * Созданный промокод
     *
     * @return string
     */
    public function getPromocode()
    {
        return $this->promocode;
    }

    /**
     * Созданный промокод
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
}