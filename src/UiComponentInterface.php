<?php

namespace wm\ui;

interface UiComponentInterface
{
    /**
     * @param string|null $v
     *
     * @return mixed
     */
    public function render($v);
}
