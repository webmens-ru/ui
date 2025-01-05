<?php

namespace wm\ui;


/**
 *
 */
class ButtonParamsPopup extends Component
{
    /**
     * @var string
     */
    public $handler;
    /**
     * @var string
     */
    public $type;
    /**
     * @var bool
     */
    public $updateOnCloseSlider;
    /**
     * @var Popup
     */
    public $popup;

    /**
     * @param string $handler
     * @param 'popup' $type
     * @param bool $updateOnCloseSlider
     * @param Popup $popup
     */
    public function __construct($handler, $type, $updateOnCloseSlider, $popup)
    {
        $this->handler = $handler;
        $this->type = $type;
        $this->updateOnCloseSlider = $updateOnCloseSlider;
        $this->popup = $popup;
    }



}