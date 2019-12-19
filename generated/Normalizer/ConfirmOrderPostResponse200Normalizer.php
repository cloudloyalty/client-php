<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CloudLoyalty\Api\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ConfirmOrderPostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CloudLoyalty\\Api\\Model\\ConfirmOrderPostResponse200';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CloudLoyalty\\Api\\Model\\ConfirmOrderPostResponse200';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \CloudLoyalty\Api\Model\ConfirmOrderPostResponse200();
        if (property_exists($data, 'operationResult')) {
            $object->setOperationResult($this->denormalizer->denormalize($data->{'operationResult'}, 'CloudLoyalty\\Api\\Model\\OperationResult', 'json', $context));
        }
        if (property_exists($data, 'clientBonuses')) {
            $object->setClientBonuses($this->denormalizer->denormalize($data->{'clientBonuses'}, 'CloudLoyalty\\Api\\Model\\ClientBonuses', 'json', $context));
        }
        if (property_exists($data, 'error')) {
            $object->setError($this->denormalizer->denormalize($data->{'error'}, 'CloudLoyalty\\Api\\Model\\Error', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getOperationResult()) {
            $data->{'operationResult'} = $this->normalizer->normalize($object->getOperationResult(), 'json', $context);
        }
        if (null !== $object->getClientBonuses()) {
            $data->{'clientBonuses'} = $this->normalizer->normalize($object->getClientBonuses(), 'json', $context);
        }
        if (null !== $object->getError()) {
            $data->{'error'} = $this->normalizer->normalize($object->getError(), 'json', $context);
        }

        return $data;
    }
}
