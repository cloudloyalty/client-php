<?php

namespace CloudLoyalty\Api\Logger;

/**
 * Subset of the PSR-3 Logger Interface methods
 * @see https://www.php-fig.org/psr/psr-3/
 */
interface LoggerInterface
{
    /**
     * Detailed debug information.
     *
     * @param string $message
     * @param array $context
     * @return void
     */
    public function debug($message, array $context = []);
}
