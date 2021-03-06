<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class ClientQuery
{
    /**
     * Номер телефона
     *
     * @var string
     */
    protected $phoneNumber;

    /**
     * Штрих-код карты
     *
     * @var string
     */
    protected $card;

    /**
     * Произвольный идентификатор
     *
     * @var string
     */
    protected $externalId;

    /**
     * Номер телефона
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Номер телефона
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Штрих-код карты
     *
     * @return string
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Штрих-код карты
     *
     * @param string $card
     *
     * @return self
     */
    public function setCard($card)
    {
        $this->card = $card;
        return $this;
    }

    /**
     * Произвольный идентификатор
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Произвольный идентификатор
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
}