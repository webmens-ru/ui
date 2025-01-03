<?php
namespace wm\ui;


/**
 *
 */
class Button
{
    /**
     * @var string
     */
    public $title;
    /**
     * @var ButtonParamsMainForm|ButtonParamsPortal
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