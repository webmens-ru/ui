<?php

namespace wm\ui;


/**
 *
 */
class ButtonParamsPortal extends Component
{
    /**
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $parentType;
    /**
     * @var string
     */
    public string $route;
    /**
     * @var string
     */
    public string $url;
    /**
     * @var bool
     */
    public bool $updateOnCloseSlider;

    /**
     * @param string $type
     * @param string $parentType
     * @param string $route
     * @param string $url
     * @param bool $updateOnCloseSlider
     */
    public function __construct($type, $parentType, $route, $url, $updateOnCloseSlider)
    {
        $this->type = $type;
        $this->parentType = $parentType;
        $this->route = $route;
        $this->url = $url;
        $this->updateOnCloseSlider = $updateOnCloseSlider;
    }
}