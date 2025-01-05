<?php

namespace wm\ui;


/**
 *
 */
interface ButtonInterface
{
    /**
     * @param string $title
     * @param ButtonParamsMainForm|ButtonParamsPortal $params
     * @param null|ButtonItem[] $items
     */
    public function __construct($title, $params, $items = null);
}