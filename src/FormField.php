<?php
namespace wm\ui;


/**
 *
 */
class FormField extends Component
{
    public $type;
    public $name;
    public $label;
    public function __construct($type, $name, $label)
    {
       $this->type =  $type;
       $this->name =  $name;
       $this->label =  $label;
    }
}