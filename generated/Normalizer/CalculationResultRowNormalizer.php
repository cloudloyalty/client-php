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

class CalculationResultRowNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CloudLoyalty\\Api\\Model\\CalculationResultRow';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CloudLoyalty\\Api\\Model\\CalculationResultRow';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \CloudLoyalty\Api\Model\CalculationResultRow();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'totalDiscount')) {
            $object->setTotalDiscount($data->{'totalDiscount'});
        }
        if (property_exists($data, 'discounts')) {
            $object->setDiscounts($this->denormalizer->denormalize($data->{'discounts'}, 'CloudLoyalty\\Api\\Model\\CalculationResultDiscounts', 'json', $context));
        }
        if (property_exists($data, 'bonuses')) {
            $object->setBonuses($this->denormalizer->denormalize($data->{'bonuses'}, 'CloudLoyalty\\Api\\Model\\CalculationResultRowBonuses', 'json', $context));
        }
        if (property_exists($data, 'offers')) {
            $values = [];
            foreach ($data->{'offers'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CloudLoyalty\\Api\\Model\\CalculationResultRowOffersItem', 'json', $context);
            }
            $object->setOffers($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getTotalDiscount()) {
            $data->{'totalDiscount'} = $object->getTotalDiscount();
        }
        if (null !== $object->getDiscounts()) {
            $data->{'discounts'} = $this->normalizer->normalize($object->getDiscounts(), 'json', $context);
        }
        if (null !== $object->getBonuses()) {
            $data->{'bonuses'} = $this->normalizer->normalize($object->getBonuses(), 'json', $context);
        }
        if (null !== $object->getOffers()) {
            $values = [];
            foreach ($object->getOffers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'offers'} = $values;
        }

        return $data;
    }
}
