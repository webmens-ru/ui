<?php
namespace wm\ui;


/**
 *
 */
class SelectItem extends Component
{
    /**
     * @var string
     */
    public $title;
    /**
     * @var string|numeric
     */
    public $value;

    /**
     * @param string $title
     * @param string|numeric $value
     */
    public function __construct($title, $value){
        $this->title = $title;
        $this->value = $value;
    }
}