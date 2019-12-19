<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Model;

class ConfirmTicketPostResponse200
{
    /**
     * Ошибка.
     *
     * @var Error
     */
    protected $error;

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
