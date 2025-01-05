<?php

namespace wm\ui;

interface UiModelInterface
{
    /**
     * @param string|null $v
     *
     * @return ButtonInterface
     */
    public static function getButtonAdd($v);
}
