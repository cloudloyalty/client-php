<?php

namespace CloudLoyalty\Api\Serializer;

interface SerializerInterface
{
    /**
     * @param mixed $object
     * @return string
     */
    public function toJson($object);

    /**
     * @param string $json
     * @param string $className
     * @return mixed
     */
    public function fromJson($json, $className);
}
