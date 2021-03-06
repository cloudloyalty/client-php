<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class IssuePromocodeRequest
{
    /**
     * Данные о клиенте, для которого делается запрос.
     *
     * Делать запрос можно по номеру телефона клиента, по номеру карты или по внешнему идентификатору.
     *
     *
     * @var ClientQuery
     */
    protected $client;

    /**
     * Код промокода для генерации.
     *
     * Для персональных промокодов и "Приведи друга" в этом параметре задается первая, неуникальная часть кода.
     *
     *
     * @var string
     */
    protected $code;

    /**
     * Данные о клиенте, для которого делается запрос.
     *
     * Делать запрос можно по номеру телефона клиента, по номеру карты или по внешнему идентификатору.
     *
     *
     * @return ClientQuery
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Данные о клиенте, для которого делается запрос.
     *
     * Делать запрос можно по номеру телефона клиента, по номеру карты или по внешнему идентификатору.
     *
     *
     * @param ClientQuery $client
     *
     * @return self
     */
    public function setClient(ClientQuery $client)
    {
        $this->client = $client;
        return $this;
    }

    /**
     * Код промокода для генерации.
     *
     * Для персональных промокодов и "Приведи друга" в этом параметре задается первая, неуникальная часть кода.
     *
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Код промокода для генерации.
     *
     * Для персональных промокодов и "Приведи друга" в этом параметре задается первая, неуникальная часть кода.
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
}