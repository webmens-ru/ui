<?php
namespace wm\ui;


/**
 *
 */
class ButtonParamsMainCard extends Component
{
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $path;
    /**
     * @var bool
     */
    public $updateOnCloseSlider;
    /**
     * @var int
     */
    public $bx24_width;

    /**
     * @var MainCard
     */
    public $params;

    /**
     * @param 'openApplication' $type
     * @param 'mainCard' $path
     * @param bool $updateOnCloseSlider
     * @param integer $bx24_width
     * @param MainCard $params
     */
    public function __construct($type, $path, $updateOnCloseSlider, $bx24_width, $params){
        $this->type = $type;
        $this->path = $path;
        $this->bx24_width = $bx24_width;
        $this->updateOnCloseSlider = $updateOnCloseSlider;
        $this->params = $params;
    }
}