<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class ActivateGiftCardResponse
{
    /**
     * 
     *
     * @var GiftCard
     */
    protected $giftCard;

    /**
     * 
     *
     * @return GiftCard
     */
    public function getGiftCard()
    {
        return $this->giftCard;
    }

    /**
     * 
     *
     * @param GiftCard $giftCard
     *
     * @return self
     */
    public function setGiftCard(GiftCard $giftCard)
    {
        $this->giftCard = $giftCard;
        return $this;
    }
}