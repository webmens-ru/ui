<?php
namespace wm\ui;


/**
 *
 */
class Select extends FormField
{
    /**
     * @var null|string[]
     */
    public $parentQueryFields;
    /**
     * @var SelectParamsRemoteTrue|SelectParamsRemoteFalse
     */
    public $fieldParams;

    /**
     * @param 'select' $type
     * @param string $name
     * @param string $label
     * @param null|string[] $parentQueryFields
     * @param SelectParamsRemoteTrue|SelectParamsRemoteFalse $fieldParams
     */
    public function __construct($type, $name, $label, $parentQueryFields, $fieldParams)
    {
        $this->type =  $type;
        $this->name =  $name;
        $this->label =  $label;
        $this->parentQueryFields =  $parentQueryFields;
        $this->fieldParams =  $fieldParams;
    }
}