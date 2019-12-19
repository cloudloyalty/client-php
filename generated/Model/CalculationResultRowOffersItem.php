<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Model;

class CalculationResultRowOffersItem
{
    /**
     * Внутренний идентификатор акции.
     *
     * @var int
     */
    protected $id;

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
     * Внутренний идентификатор акции.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Внутренний идентификатор акции.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

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
