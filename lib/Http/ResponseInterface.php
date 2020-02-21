<?php

namespace CloudLoyalty\Api\Http;

interface ResponseInterface
{
    /**
     * Gets the response status code.
     *
     * @return int Status code.
     */
    public function getStatusCode();

    /**
     * Gets the response reason phrase associated with the status code.
     *
     * @return string Reason phrase.
     */
    public function getReasonPhrase();

    /**
     * Retrieves all message header values.
     *
     * @return string[] Returns an associative array of the message's headers.
     */
    public function getHeaders();

    /**
     * Gets the body of the message.
     *
     * @return string Returns the body as a stream.
     */
    public function getBody();
}
