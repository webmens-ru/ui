<?php

namespace wm\ui;


/**
 *
 */
class PopupButtons extends Component
{
    /**
     * @var string
     */
    public $success;
    /**
     * @var string
     */
    public $cancel;

    /**
     * @param string $success
     * @param string $cancel
     */
    public function __construct($success, $cancel)
    {
        $this->success = $success;
        $this->cancel = $cancel;
    }
}