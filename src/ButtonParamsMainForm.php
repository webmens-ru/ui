<?php
namespace wm\ui;


class ButtonParamsMainForm
{
    /**
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $path;
    /**
     * @var string
     */
    public string $entity;
    /**
     * @var string
     */
    public string $mode;
    /**
     * @var string
     */
    public string $action;
    /**
     * @var int
     */
    public int $bx24_width;
    /**
     * @var bool
     */
    public bool $updateOnCloseSlider;
    /**
     * @var bool
     */
    public bool $canToggleMode;

    /**
     * @param 'openApplication' $type
     * @param string $path
     * @param string $entity
     * @param 'edit' $mode
     * @param string $action
     * @param int $bx24_width
     * @param bool $updateOnCloseSlider
     * @param bool $canToggleMode
     */
    public function __construct($type, $path, $entity, $mode, $action, $bx24_width, $updateOnCloseSlider, $canToggleMode){
        $this->type = $type;
        $this->path = $path;
        $this->entity = $entity;
        $this->mode = $mode;
        $this->action = $action;
        $this->bx24_width = $bx24_width;
        $this->updateOnCloseSlider = $updateOnCloseSlider;
        $this->canToggleMode = $canToggleMode;
    }
}