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
     * 
     *
     * @var SendConfirmationCodeResponseResult
     */
    protected $result;

    /**
     * 
     *
     * @return SendConfirmationCodeResponseResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * 
     *
     * @param SendConfirmationCodeResponseResult $result
     *
     * @return self
     */
    public function setResult(SendConfirmationCodeResponseResult $result)
    {
        $this->result = $result;
        return $this;
    }
}