<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Model;

class ShopQuery
{
    /**
     * Код.
     *
     * @var string
     */
    protected $code;

    /**
     * Название.
     *
     * @var string
     */
    protected $name;

    /**
     * Код.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Код.
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Название.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Название.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
