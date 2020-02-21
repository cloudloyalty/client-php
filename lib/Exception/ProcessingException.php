<?php

namespace CloudLoyalty\Api\Exception;

class ProcessingException extends \DomainException
{
    const ERR_GENERAL_ERROR             = 1;
    const ERR_MALFORMED_REQUEST         = 2;
    const ERR_CLIENT_NOT_FOUND          = 3;
    const ERR_CLIENT_SUSPENDED          = 4;
    const ERR_SHOP_NOT_FOUND            = 5;
    const ERR_INCORRECT_BONUS_AMOUNT    = 6;
    const ERR_INCORRECT_RETURN_ITEM     = 10;
    const ERR_INCORRECT_RETURN_AMOUNT   = 11;
    const ERR_ALREADY_PROCESSED         = 17;
    const ERR_INCORRECT_PHONE           = 20;
    const ERR_PURCHASE_NOT_FOUND        = 21;
    const ERR_DUPLICATING_PHONE         = 24;
    const ERR_DUPLICATING_CARD          = 25;
    const ERR_TOO_MANY_CODE_REQUESTS    = 28;
    const ERR_EMPTY_PHONE               = 29;
    const ERR_DUPLICATING_EXTERNAL_ID   = 30;
    const ERR_ORDER_NOT_FOUND           = 31;
    const ERR_ORDER_ALREADY_PROCESSED   = 32;
    const ERR_PROMOCODE_NOT_FOUND       = 33;
    const ERR_PROMOCODE_NOT_APPLICABLE  = 34;
    const ERR_PROMOCODE_ALREADY_USED    = 35;
    const ERR_PROMOCODE_EXPIRED         = 36;
    const ERR_PROMOCODE_REQUIRES_CLIENT = 37;

    public static $descriptionRus = [
        self::ERR_GENERAL_ERROR             => 'Чек не обработан процессингом или обработан с ошибкой',
        self::ERR_MALFORMED_REQUEST         => 'В запросе к процессингу обнаружена ошибка или неверный вид JSON',
        self::ERR_CLIENT_NOT_FOUND          => 'Клиент не найден',
        self::ERR_CLIENT_SUSPENDED          => 'Аккаунт клиента заблокирован',
        self::ERR_SHOP_NOT_FOUND            => 'Не найден магазин',
        self::ERR_INCORRECT_BONUS_AMOUNT    => 'Списание бонусов превышает допустимое значение',
        self::ERR_INCORRECT_RETURN_ITEM     => 'Возвращаемый товар не найден в чеке продажи',
        self::ERR_INCORRECT_RETURN_AMOUNT   => 'Сумма возврата больше суммы продажи',
        self::ERR_ALREADY_PROCESSED         => 'Чек с данным номером уже обработан',
        self::ERR_INCORRECT_PHONE           => 'Номер телефона клиента не валиден',
        self::ERR_PURCHASE_NOT_FOUND        => 'Продажа не найдена',
        self::ERR_DUPLICATING_PHONE         => 'Клиент с таким номером телефона уже существует',
        self::ERR_DUPLICATING_CARD          => 'Карта уже привязана к другому клиенту',
        self::ERR_TOO_MANY_CODE_REQUESTS    => 'Слишком частая отправка кода подтверждения',
        self::ERR_EMPTY_PHONE               => 'У клиента не задан номер телефона',
        self::ERR_DUPLICATING_EXTERNAL_ID   => 'Клиент с таким внешним идентификатором уже существует',
        self::ERR_ORDER_NOT_FOUND           => 'Заказ не найден',
        self::ERR_ORDER_ALREADY_PROCESSED   => 'Заказ уже обработан',
        self::ERR_PROMOCODE_NOT_FOUND       => 'Промокод не найден',
        self::ERR_PROMOCODE_NOT_APPLICABLE  => 'Условия промокода не выполнены',
        self::ERR_PROMOCODE_ALREADY_USED    => 'Промокод уже использован максимальное число раз',
        self::ERR_PROMOCODE_EXPIRED         => 'Время действия промокода еще не наступило или уже прошло',
        self::ERR_PROMOCODE_REQUIRES_CLIENT => 'Промокод работает только совместно с бонусным счетом',
    ];

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
     * @return string
     */
    public function getDescriptionRus()
    {
        return isset(self::$descriptionRus[$this->code])
            ? self::$descriptionRus[$this->code]
            : 'Ошибка #' . $this->code;
    }

    /**
     * @return string|null
     */
    public function getHint()
    {
        return $this->hint;
    }
}