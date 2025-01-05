<?php
namespace wm\ui;


/**
 *
 */
class Checkbox extends FormField
{
    /**
     * @param 'checkbox' $type
     * @param string $name
     * @param string $label
     */
    public function __construct($type, $name, $label)
    {
        parent::__construct($type, $name, $label);
    }
}