<?php

namespace wm\ui;


/**
 *
 */
class PopupBody extends Component
{
    /**
     * @var string
     */
    public $text;

    public $form;

    /**
     * @param string $text
     * @param $form
     */
    public function __construct($text, $form)
    {
        $this->text = $text;
        $this->form = $form;
    }
}