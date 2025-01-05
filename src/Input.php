<?php
namespace wm\ui;


/**
 *
 */
class Input extends FormField
{
    /**
     * @param 'input' $type
     * @param string $name
     * @param string $label
     */
    public function __construct($type, $name, $label)
    {
        parent::__construct($type, $name, $label);
    }
}