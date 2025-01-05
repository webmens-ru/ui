<?php
namespace wm\ui;


/**
 *
 */
class SelectParamsRemoteFalse extends Component
{
    /**
     * @var SelectItem[]
     */
    public $data;

    /**
     * @param SelectItem[] $data
     */
    public function __construct($data){
        $this->data = $data;
    }
}