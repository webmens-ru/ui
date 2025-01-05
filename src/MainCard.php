<?php
namespace wm\ui;


/**
 *
 */
class MainCard extends Component
{
    /**
     * @var string
     */
    public $entity;
    /**
     * @var string
     */
    public $mode;
    /**
     * @var string
     */
    public $action;
    /**
     * @var bool
     */
    public $canToggleMode;
    /**
     * @var integer
     */
    public $menuId;

    /**
     * @param string $entity
     * @param 'edit' $mode
     * @param string $action
     * @param bool $canToggleMode
     * @param integer $menuId
     */
    public function __construct($entity, $mode, $action, $canToggleMode, $menuId){
        $this->entity = $entity;
        $this->mode = $mode;
        $this->action = $action;
        $this->canToggleMode = $canToggleMode;
        $this->menuId = $menuId;
    }
}