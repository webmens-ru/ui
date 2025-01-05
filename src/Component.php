<?php
namespace wm\ui;


/**
 *
 */
class Component implements UiComponentInterface
{
    /**
     * @param string|null $v
     * @return mixed
     */
    public function render($v){
        $result = [];

        $reflectionObject = new \ReflectionObject($this);
        $properties = $reflectionObject->getProperties(\ReflectionProperty::IS_PUBLIC);

        foreach ($properties as $property) {
            $propertyName = $property->getName();
            $value = $this->$propertyName;

            if ($value instanceof UiComponentInterface) {
                $result[$propertyName] = $value->render($v);
            } else {
                $result[$propertyName] = $value;
            }
        }

        return $result;
    }
}