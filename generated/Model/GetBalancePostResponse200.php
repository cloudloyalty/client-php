<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Model;

class GetBalancePostResponse200
{
    /**
     * Информация о клиенте.
     *
     * @var ClientInfo
     */
    protected $client;

    /**
     * Ссылка на скачивание электронной карты.
     *
     * @var string
     */
    protected $walletsLink;

    /**
     * @var GetBalancePostResponse200BonusesItem[]
     */
    protected $bonuses;

    /**
     * Ошибка.
     *
     * @var Error
     */
    protected $error;

    /**
     * Информация о клиенте.
     */
    public function getClient(): ClientInfo
    {
        return $this->client;
    }

    /**
     * Информация о клиенте.
     */
    public function setClient(ClientInfo $client): self
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Ссылка на скачивание электронной карты.
     */
    public function getWalletsLink(): string
    {
        return $this->walletsLink;
    }

    /**
     * Ссылка на скачивание электронной карты.
     */
    public function setWalletsLink(string $walletsLink): self
    {
        $this->walletsLink = $walletsLink;

        return $this;
    }

    /**
     * @return GetBalancePostResponse200BonusesItem[]
     */
    public function getBonuses(): array
    {
        return $this->bonuses;
    }

    /**
     * @param GetBalancePostResponse200BonusesItem[] $bonuses
     */
    public function setBonuses(array $bonuses): self
    {
        $this->bonuses = $bonuses;

        return $this;
    }

    /**
     * Ошибка.
     */
    public function getError(): Error
    {
        return $this->error;
    }

    /**
     * Ошибка.
     */
    public function setError(Error $error): self
    {
        $this->error = $error;

        return $this;
    }
}
