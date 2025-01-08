<?php

namespace wm\ui;

/**
 *
 */
interface UiModelInterface
{
    /**
     * @return array{
     *     title: string,
     *     params: array{
     *      type: 'openApplication',
     *      path: 'mainForm',
     *      entity: string,
     *      mode: 'edit'|'view',
     *      action: 'create',
     *      bx24_width: int,
     *      updateOnCloseSlider: bool,
     *      canToggleMode: bool
     *     }|array{
     *      type: 'openApplication',
     *      parentType: string|int,
     *      route: 'portal',
     *      url: string,
     *      updateOnCloseSlider: boolean
     *     }|array{
     *      handler: string,
     *      type: 'popup',
     *      updateOnCloseSlider: boolean,
     *      popup: array{
     *       width: int,
     *       height: int,
     *       title: string,
     *       body: mixed
     *      }
     *     }|array{
     *      type: 'openApplication',
     *      path: 'mainCard',
     *      updateOnCloseSlider: boolean,
     *      bx24_width: integer,
     *      params: array{
     *        closeSliderOnSubmit: boolean,
     *        entity: string,
     *        mode: 'edit'|'view',
     *        action: string,
     *        canToggleMode: boolean,
     *        menuId: int
     *      }
     *     },
     *     items?: mixed[]
     * }
     */
    public static function getButtonAdd();

    /**
     * @return array{
     *     key: string,
     *     actionColumnName: string,
     *     actions: array{
     *       id: string,
     *       title: string,
     *       type: 'openApplication',
     *       params: mixed
     *     }[]|array{
     *       id: string,
     *       title: string,
     *       type: 'trigger',
     *       handler: string,
     *       params: mixed
     *     }[]|null
     * }
     */
    public static function getGridOptions();

    /**
     * @return mixed[]
     */
    public function fields();

    /**
     * @return array{
     *   type: 'input',
     *   name: string,
     *   label: string
     * }[]|array{
     *   type: 'date',
     *   name: string,
     *   label: string,
     *   fieldParams: array{
     *     withTime: boolean,
     *     format: string
     *   }
     * }[]
     */
    public function formFields(); //TODO

    /**
     * @param int $id
     * @return array{
     *     label: string,
     *     handler: string,
     *     params: array{
     *      updateOnCloseSlider:boolean,
     *      popup:mixed,
     *      output?: mixed
     *     }
     * }|null
     */
    public static function getCardActions($id);

    /**
     * @param mixed[] $models
     * @return array{
     *   blocks: array{
     *     order: int,
     *     title?: string,
     *     items: array{
     *       order: int,
     *       title: string,
     *       value: mixed,
     *       type: 'metric-filter',
     *       params: array{
     *         color?: 'primary'|'success'|'warning'|'danger'|'info',
     *         url: mixed
     *       }
     *   }|array{
     *      order: int,
     *      title: string,
     *      value: mixed,
     *      type: 'metric-link',
     *      params: array{
     *        type: 'openApplication',
     *        title: string,
     *        path: 'mainDetail',
     *        mainDetailTitle: string,
     *        entity: string,
     *        menuId: int,
     *        bx24_width: int,
     *        updateOnCloseSlider: boolean,
     *      }
     *    }|array{
     *      order: int,
     *      type: 'separator'
     *    }[]
     *  }[]
     * }|null
     * @throws? \Exception
     */
    public static function getHeader($models);
}
