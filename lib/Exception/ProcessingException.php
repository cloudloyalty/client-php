<?php

namespace CloudLoyalty\Api\Exception;

class ProcessingException extends \DomainException
{
    const ERR_GENERAL_ERROR               = 1;
    const ERR_MALFORMED_REQUEST           = 2;
    const ERR_CLIENT_NOT_FOUND            = 3;
    const ERR_CLIENT_SUSPENDED            = 4;
    const ERR_SHOP_NOT_FOUND              = 5;
    const ERR_INCORRECT_BONUS_AMOUNT      = 6;
    const ERR_TOO_MANY_PURCHASES          = 7;
    const ERR_INCORRECT_RETURN_ITEM       = 10;
    const ERR_INCORRECT_RETURN_AMOUNT     = 11;
    const ERR_INCORRECT_RETURN_PURCHASE   = 13;
    const ERR_ALREADY_PROCESSED           = 17;
    const ERR_EMPTY_ROWS_ARRAY            = 18;
    const ERR_INCORRECT_PHONE             = 20;
    const ERR_PURCHASE_NOT_FOUND          = 21;
    const ERR_DUPLICATING_PHONE           = 24;
    const ERR_DUPLICATING_CARD            = 25;
    const ERR_TOO_MANY_CODE_REQUESTS      = 28;
    const ERR_EMPTY_PHONE                 = 29;
    const ERR_DUPLICATING_EXTERNAL_ID     = 30;
    const ERR_ORDER_NOT_FOUND             = 31;
    const ERR_ORDER_ALREADY_PROCESSED     = 32;
    const ERR_PROMOCODE_NOT_FOUND         = 33;
    const ERR_PROMOCODE_NOT_APPLICABLE    = 34;
    const ERR_PROMOCODE_ALREADY_USED      = 35;
    const ERR_PROMOCODE_EXPIRED           = 36;
    const ERR_PROMOCODE_REQUIRES_CLIENT   = 37;
    const ERR_GIFT_CARD_NOT_FOUND         = 40;
    const ERR_GIFT_CARD_NOT_APPLICABLE    = 41;
    const ERR_GIFT_CARD_NOT_ACTIVATED     = 42;
    const ERR_GIFT_CARD_EXPIRED           = 43;
    const ERR_GIFT_CARD_BLOCKED           = 44;
    const ERR_GIFT_CARD_NO_FUNDS          = 45;
    const ERR_GIFT_CARD_ALREADY_SOLD      = 46;
    const ERR_GIFT_CARD_ALREADY_ACTIVATED = 47;

    /**
     * @var string|null
     */
    protected $hint;


    /**
     * @param string $description
     * @param int $code
     * @param string|null $hint
     */
    public function __construct($description, $code, $hint = null)
    {
        $this->hint = $hint;
        parent::__construct($description, $code);
    }

    /**
     * Alias for getMessage().
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->getMessage();
    }

    /**
     * @return string|null
     */
    public function getHint()
    {
        return $this->hint;
    }
}
