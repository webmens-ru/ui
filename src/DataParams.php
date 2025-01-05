<?php
namespace wm\ui;

/**
 *
 */
class DataParams extends Component
{
    /**
     * @var string
     */
    public $format;
    /**
     * @var bool
     */
    public $withTime;

    /**
     * @param string $format
     * @param bool $withTime
     */
    public function __construct($format, $withTime){
        $this->format = $format;
        $this->withTime = $withTime;
    }
}