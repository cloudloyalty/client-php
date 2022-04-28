<?php

namespace CloudLoyalty\Api\Logger;

class PsrBridgeLogger implements LoggerInterface
{
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $psrLogger;


    public function __construct(\Psr\Log\LoggerInterface $psrLogger)
    {
        $this->psrLogger = $psrLogger;
    }

    public function debug($message, array $context = [])
    {
        $this->psrLogger->debug($message, $context);
    }
}
