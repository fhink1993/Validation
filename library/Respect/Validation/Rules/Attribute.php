<?php

namespace Respect\Validation\Rules;

use ReflectionProperty;

class Attribute extends AbstractRelated
{

    protected function hasReference($input)
    {
        return property_exists($input, $this->reference);
    }

    protected function getReferenceValue($input)
    {
        $propertyMirror = new ReflectionProperty($input, $this->reference);
        $propertyMirror->setAccessible(true);
        return $propertyMirror->getValue($input);
    }

}