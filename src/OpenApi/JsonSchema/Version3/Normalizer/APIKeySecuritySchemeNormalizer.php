<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\JsonSchema\Version3\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class APIKeySecuritySchemeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\APIKeySecurityScheme';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\OpenApi\JsonSchema\Version3\Model\APIKeySecurityScheme;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Jane\OpenApi\JsonSchema\Version3\Model\APIKeySecurityScheme();
        $data = clone $data;
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
            unset($data->{'type'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
            unset($data->{'name'});
        }
        if (property_exists($data, 'in')) {
            $object->setIn($data->{'in'});
            unset($data->{'in'});
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
            unset($data->{'description'});
        }
        foreach ($data as $key => $value) {
            if (preg_match('/^x-/', $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getIn()) {
            $data->{'in'} = $object->getIn();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/^x-/', $key)) {
                $data->{$key} = $value;
            }
        }

        return $data;
    }
}
