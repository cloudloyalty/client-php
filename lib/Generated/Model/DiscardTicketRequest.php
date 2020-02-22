<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Generated\Model;

class DiscardTicketRequest
{
    /**
     * Идентификатор транзакции
     *
     * @var string
     */
    protected $txid;

    /**
     * Тикет, выданный после предварительного создания продажи
     *
     * @var string
     */
    protected $ticket;

    /**
     * Идентификатор транзакции
     *
     * @return string
     */
    public function getTxid()
    {
        return $this->txid;
    }

    /**
     * Идентификатор транзакции
     *
     * @param string $txid
     *
     * @return self
     */
    public function setTxid($txid)
    {
        $this->txid = $txid;
        return $this;
    }

    /**
     * Тикет, выданный после предварительного создания продажи
     *
     * @return string
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Тикет, выданный после предварительного создания продажи
     *
     * @param string $ticket
     *
     * @return self
     */
    public function setTicket($ticket)
    {
        $this->ticket = $ticket;
        return $this;
    }
}