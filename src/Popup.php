<?php

namespace wm\ui;


/**
 *
 */
class Popup extends Component
{

    /**
     * @var int
     */
    public $width;
    /**
     * @var int
     */
    public $height;
    /**
     * @var string
     */
    public $title;
    /**
     * @var PopupBody
     */
    public $body;

    public $buttons;

    /**
     * @param int $width
     * @param int $height
     * @param string $title
     * @param PopupBody $body
     * @param PopupButtons $buttons
     */
    public function __construct($width, $height, $title, $body, $buttons)
    {
        $this->width = $width;
        $this->height = $height;
        $this->title = $title;
        $this->body = $body;
        $this->buttons = $buttons;
    }
}