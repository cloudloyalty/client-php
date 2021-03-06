<?php

namespace CloudLoyalty\Api\Model;

class ProcessingError
{
    /**
     * Код ошибки
     *
     * @var mixed
     */
    protected $errorCode;

    /**
     * Описание ошибки
     *
     * @var string
     */
    protected $description;

    /**
     * Детали ошибки
     *
     * @var string
     */
    protected $hint;

    /**
     * Код ошибки
     *
     * @return mixed
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Код ошибки
     *
     * @param mixed $errorCode
     *
     * @return self
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * Описание ошибки
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Описание ошибки
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Детали ошибки
     *
     * @return string
     */
    public function getHint()
    {
        return $this->hint;
    }

    /**
     * Детали ошибки
     *
     * @param string $hint
     *
     * @return self
     */
    public function setHint($hint)
    {
        $this->hint = $hint;
        return $this;
    }
}