<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class SendConfirmationCodeResponse
{
    /**
     * Cгенерированный проверочный код.
     *
     * Содержит три цифры, могут быть лидирующие нули.
     *
     *
     * @var string
     */
    protected $code;

    /**
     * Идентификатор отправленного клиенту сообщения
     *
     * @var string
     */
    protected $msgid;

    /**
     * Канал отправки кода
     *
     * @var string
     */
    protected $channel;

    /**
     * Дата и время, до которых высланный код считается действующим.
     *
     * После наступления указанного времени кодом воспользоваться уже будет нельзя.
     *
     *
     * @var \DateTime
     */
    protected $expiresAt;

    /**
     * Cгенерированный проверочный код.
     *
     * Содержит три цифры, могут быть лидирующие нули.
     *
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Cгенерированный проверочный код.
     *
     * Содержит три цифры, могут быть лидирующие нули.
     *
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
     * Идентификатор отправленного клиенту сообщения
     *
     * @return string
     */
    public function getMsgid()
    {
        return $this->msgid;
    }

    /**
     * Идентификатор отправленного клиенту сообщения
     *
     * @param string $msgid
     *
     * @return self
     */
    public function setMsgid($msgid)
    {
        $this->msgid = $msgid;
        return $this;
    }

    /**
     * Канал отправки кода
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Канал отправки кода
     *
     * @param string $channel
     *
     * @return self
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * Дата и время, до которых высланный код считается действующим.
     *
     * После наступления указанного времени кодом воспользоваться уже будет нельзя.
     *
     *
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * Дата и время, до которых высланный код считается действующим.
     *
     * После наступления указанного времени кодом воспользоваться уже будет нельзя.
     *
     *
     * @param \DateTime $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(\DateTime $expiresAt)
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }
}