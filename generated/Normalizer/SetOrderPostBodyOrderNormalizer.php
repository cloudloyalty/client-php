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

class SetOrderPostBodyOrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CloudLoyalty\\Api\\Model\\SetOrderPostBodyOrder';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CloudLoyalty\\Api\\Model\\SetOrderPostBodyOrder';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \CloudLoyalty\Api\Model\SetOrderPostBodyOrder();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'executedAt')) {
            $object->setExecutedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'executedAt'}));
        }
        if (property_exists($data, 'shopCode')) {
            $object->setShopCode($data->{'shopCode'});
        }
        if (property_exists($data, 'shopName')) {
            $object->setShopName($data->{'shopName'});
        }
        if (property_exists($data, 'totalAmount')) {
            $object->setTotalAmount($data->{'totalAmount'});
        }
        if (property_exists($data, 'loyalty')) {
            $object->setLoyalty($this->denormalizer->denormalize($data->{'loyalty'}, 'CloudLoyalty\\Api\\Model\\SetOrderPostBodyOrderLoyalty', 'json', $context));
        }
        if (property_exists($data, 'promocode')) {
            $object->setPromocode($data->{'promocode'});
        }
        if (property_exists($data, 'items')) {
            $values = [];
            foreach ($data->{'items'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CloudLoyalty\\Api\\Model\\SetOrderPostBodyOrderItemsItem', 'json', $context);
            }
            $object->setItems($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getExecutedAt()) {
            $data->{'executedAt'} = $object->getExecutedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getShopCode()) {
            $data->{'shopCode'} = $object->getShopCode();
        }
        if (null !== $object->getShopName()) {
            $data->{'shopName'} = $object->getShopName();
        }
        if (null !== $object->getTotalAmount()) {
            $data->{'totalAmount'} = $object->getTotalAmount();
        }
        if (null !== $object->getLoyalty()) {
            $data->{'loyalty'} = $this->normalizer->normalize($object->getLoyalty(), 'json', $context);
        }
        if (null !== $object->getPromocode()) {
            $data->{'promocode'} = $object->getPromocode();
        }
        if (null !== $object->getItems()) {
            $values = [];
            foreach ($object->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'items'} = $values;
        }

        return $data;
    }
}
