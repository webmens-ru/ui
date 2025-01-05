<?php
namespace wm\ui;


/**
 *
 */
class SelectParamsRemoteTrue extends Component
{
    /**
     * @var string
     */
    public $dataUrl;
    /**
     * @var bool
     */
    public $remoteMode;
    /**
     * @var bool
     */
    public $closeOnSelect;

    /**
     * @param string $dataUrl
     * @param true $remoteMode
     * @param bool $closeOnSelect
     */
    public function __construct($dataUrl, $remoteMode, $closeOnSelect){
        $this->dataUrl = $dataUrl;
        $this->remoteMode = $remoteMode;
        $this->closeOnSelect = $closeOnSelect;
    }
}