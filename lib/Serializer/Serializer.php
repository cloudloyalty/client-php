<?php

namespace CloudLoyalty\Api\Serializer;

class Serializer implements SerializerInterface
{
    /**
     * @var array
     */
    protected $arrayElementHints;


    public function __construct(array $arrayElementHints = [])
    {
        $this->arrayElementHints = $arrayElementHints;
    }

    /**
     * @param string $json
     * @param string $className
     * @return mixed
     */
    public function fromJson($json, $className)
    {
        if ($json === null) {
            return null;
        }
        assert(class_exists($className), "Class $className must exist");
        $a = @json_decode($json, true);
        if (!is_array($a)) {
            return null;
        }
        return $this->deserializeObject($a, $className);
    }

    /**
     * @param mixed $object
     * @return string|null
     */
    public function toJson($object)
    {
        if ($object === null || !is_object($object)) {
            return null;
        }
        $a = $this->serializeObject($object);
        return json_encode($a ?: new \stdClass(), JSON_UNESCAPED_UNICODE);
    }

    /**
     * @param mixed $value
     * @return mixed
     */
    protected function serialize($value)
    {
        switch (gettype($value)) {
            case "array":
                array_walk(
                    $value,
                    function (&$element) {
                        $element = $this->serialize($element);
                    }
                );
                return $value;

            case "object":
                // Some known classes
                // json_encode does encode dates well by itself
                // \DateTimeInterface is available since 5.5
                if ($value instanceof \DateTime || $value instanceof \DateTimeInterface) {
                    return $value->format(DATE_RFC3339);
                }
                // explicit null
                if ($value instanceof NullValue) {
                    return null;
                }
                return $this->serializeObject($value);

            case "boolean":
            case "integer":
            case "double":
            case "string":
                return $value;

            default:
                return null;
        }
    }

    /**
     * @param object $object
     * @return array
     */
    protected function serializeObject($object)
    {
        if (!is_object($object)) {
            return null;
        }

        $methods = $this->getClassPublicMethods(get_class($object));

        $fields = [];

        // Iterate over object public methods
        foreach ($methods as $method) {
            $methodName = $method->getName();

            // Is this not a getter?
            if (strlen($methodName) <= 3 || substr($methodName, 0, 3) !== 'get') {
                continue;
            }

            // Getting value
            $value = $object->$methodName();

            if ($value === null) {
                // built-in nulls are omitted
                continue;
            }

            // getFullName -> fullName
            $fieldName = lcfirst(substr($methodName, 3));
            $fields[$fieldName] = $this->serialize($value);
        }

        return $fields;
    }

    /**
     * @param mixed $value
     * @param string|null $arrayElementHint
     * @return mixed
     */
    protected function deserialize($value, $arrayElementHint)
    {
        switch (gettype($value)) {
            case "array":
                if ($arrayElementHint) {
                    array_walk($value, function (&$element) use ($arrayElementHint) {
                        $element = $this->deserializeObject($element, $arrayElementHint);
                    });
                } else {
                    array_walk($value, function (&$element) {
                        $element = $this->deserialize($element, null);
                    });
                }
                return $value;

            case "boolean":
            case "integer":
            case "double":
            case "string":
                return $value;

            default:
                return null;
        }
    }

    /**
     * @param array $a
     * @param string $className
     * @return object|null
     */
    protected function deserializeObject($a, $className)
    {
        if (!is_array($a) || !class_exists($className)) {
            return null;
        }

        $object = new $className();

        $methods = $this->getClassPublicMethods($className);

        foreach ($methods as $method) {
            $methodName = $method->getName();

            // Is this not a setter?
            if (strlen($methodName) <= 3 || substr($methodName, 0, 3) !== 'set') {
                continue;
            }

            $fieldName = lcfirst(substr($methodName, 3));

            // No such field in array?
            if (!isset($a[$fieldName])) {
                continue;
            }

            $value = $a[$fieldName];

            $params = $method->getParameters();
            if ($params && ($class = $this->getParameterClass($params[0]))) {
                // Some known classes
                if (
                    $class->getName() === 'DateTime'
                    || $class->isSubclassOf('DateTime')
                    // \DateTimeInterface available since 5.5
                    || $class->implementsInterface('DateTimeInterface')
                ) {
                    $value = new \DateTime($value);
                } else {
                    $classHint = $class->getName();
                    $value = $this->deserializeObject($value, $classHint);
                }
            } else {
                $arrayElementHint = null;
                if (isset($this->arrayElementHints[$className][$fieldName])) {
                    $arrayElementHint = $this->arrayElementHints[$className][$fieldName];
                }
                $value = $this->deserialize($value, $arrayElementHint);
            }

            // Call the setter
            $object->$methodName($value);
        }

        return $object;
    }

    protected function getClassPublicMethods($className)
    {
        $ref = new \ReflectionClass($className);
        return $ref->getMethods(\ReflectionMethod::IS_PUBLIC);
    }

    private function getParameterClass($param)
    {
        // PHP 7.0+
        if (method_exists($param, 'getType')) {
            return $param->getType() && !$param->getType()->isBuiltin()
                ? new \ReflectionClass($param->getType()->getName())
                : null;
        }
        return $param->getClass();
    }
}
