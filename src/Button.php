<?php
namespace wm\ui;


/**
 *
 */
class Button extends Component implements ButtonInterface
{
    /**
     * @var string
     */
    public $title;
    /**
     * @var ButtonParamsMainForm|ButtonParamsPortal|ButtonParamsPopup
     */
    public $params;

    /**
     * @var null|ButtonItem[]
     */
    public $items;

    /**
     * @param string $title
     * @param ButtonParamsMainForm|ButtonParamsPortal $params
     * @param null|ButtonItem[] $items
     */
    public function __construct($title, $params, $items = null)
    {
       $this->title =  $title;
       $this->params =  $params;
       $this->items =  $items;
    }
}