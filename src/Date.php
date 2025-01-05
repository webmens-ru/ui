<?php
namespace wm\ui;


/**
 *
 */
class Date extends FormField
{
    /**
     * @var DataParams
     */
    public $fieldParams;

    /**
     * @param 'date' $type
     * @param string $name
     * @param string $label
     * @param DataParams $fieldParams
     */
    public function __construct($type, $name, $label, $fieldParams)
    {
        $this->type =  $type;
        $this->name =  $name;
        $this->label =  $label;
        $this->fieldParams =  $fieldParams;
    }
}