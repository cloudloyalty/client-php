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

class SetOrderPostBodyOrderLoyaltyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CloudLoyalty\\Api\\Model\\SetOrderPostBodyOrderLoyalty';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CloudLoyalty\\Api\\Model\\SetOrderPostBodyOrderLoyalty';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \CloudLoyalty\Api\Model\SetOrderPostBodyOrderLoyalty();
        if (property_exists($data, 'action')) {
            $object->setAction($data->{'action'});
        }
        if (property_exists($data, 'applyingAmount')) {
            $object->setApplyingAmount($data->{'applyingAmount'});
        }
        if (property_exists($data, 'collectingAmount')) {
            $object->setCollectingAmount($data->{'collectingAmount'});
        }
        if (property_exists($data, 'applyBonuses')) {
            $object->setApplyBonuses($data->{'applyBonuses'});
        }
        if (property_exists($data, 'collectBonuses')) {
            $object->setCollectBonuses($data->{'collectBonuses'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAction()) {
            $data->{'action'} = $object->getAction();
        }
        if (null !== $object->getApplyingAmount()) {
            $data->{'applyingAmount'} = $object->getApplyingAmount();
        }
        if (null !== $object->getCollectingAmount()) {
            $data->{'collectingAmount'} = $object->getCollectingAmount();
        }
        if (null !== $object->getApplyBonuses()) {
            $data->{'applyBonuses'} = $object->getApplyBonuses();
        }
        if (null !== $object->getCollectBonuses()) {
            $data->{'collectBonuses'} = $object->getCollectBonuses();
        }

        return $data;
    }
}
