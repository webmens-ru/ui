<?php

namespace wm\ui;

/**
 *
 */
interface UiModelInterface
{
    /**
     * @param mixed[]|null $params,
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
     *     }|array{
     *      type: 'openApplication',
     *      iframeUrl: string,
     *      path: 'mainCard',
     *      updateOnCloseSlider: boolean,
     *      bx24_width?: integer,
     *      params: array{
     *        closeSliderOnSubmit: boolean,
     *        entity: string,
     *        menuId: int,
     *        form: array{
     *            mode: 'edit'|'view',
     *            action: string,
     *            canToggleMode: boolean,
     *            defaultValue?: mixed
     *        }
     *      }
     *     },
     *     items?: mixed[]
     * }
     */
    public static function getButtonAdd($params = []);

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
     * @return list<array{
     *   type: 'input',
     *   name: string,
     *   label: string
     * }|array{
     *   type: 'date',
     *   name: string,
     *   label: string,
     *   fieldParams?: array{
     *     withTime: boolean,
     *     format: string
     *   }
     * }|array{
     *   type: 'select',
     *   name: string,
     *   label: string,
     *   fieldParams: array{
     *     data: mixed[]
     *   }
     * }|array{
     *   type: 'select',
     *   name: string,
     *   label: string,
     *   fieldParams: array{
     *     dataUrl: string,
     *     remoteMode: true,
     *     closeOnSelect: boolean
     *   }
     * }|array{
     *   type: 'file',
     *   name: string,
     *   label: string,
     *   fieldParams: array{
     *     maxLimit: int,
     *     extensions: string[]
     *   }
     * }>
     */
    public static function getFormFields();

    /**
     * @param int $id
     * @return list<array{
     *     label: string,
     *     handler: string,
     *     params: array{
     *      updateOnCloseSlider:boolean,
     *      popup:mixed,
     *      output?: mixed
     *     }
     * }>|null
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

    /**
     * @param mixed[]|null $params
     * @return list<array{
     *     label: string,
     *     handler: string,
     *     params: array{
     *         popup: array{
     *              width:int,
     *              height: int,
     *              title: string,
     *              body: array{
     *                  form: array{
     *                      fields: list<array{
     *                         type: 'input',
     *                         name: string,
     *                         label: string
     *                         }|array{
     *                         type: 'date',
     *                         name: string,
     *                         label: string,
     *                         fieldParams?: array{
     *                           withTime: boolean,
     *                           format: string
     *                         }
     *                       }|array{
     *                         type: 'select',
     *                         name: string,
     *                         label: string,
     *                         fieldParams: array{
     *                           data: mixed[]
     *                         }
     *                       }|array{
     *                         type: 'select',
     *                         name: string,
     *                         label: string,
     *                         fieldParams: array{
     *                           dataUrl: string,
     *                           remoteMode: true,
     *                           closeOnSelect: boolean
     *                         }
     *                       }|array{
     *                         type: 'file',
     *                         name: string,
     *                         label: string,
     *                         fieldParams: array{
     *                           maxLimit: int,
     *                           extensions: string[]
     *                         }
     *                       }>,
     *                      validationRules: mixed,
     *                      values?: mixed
     *                  },
     *              }|array{
     *                  text: string
     *              },
     *              buttons: array{
     *                  success: string,
     *                  cancel: string
     *              }
     *         }
     *     }
     * }>|null
     */
    public static function getGridActions($params = null);

    /**
     * @return array{
     *     title:string,
     *     params: array{
     *          type: 'openLink',
     *          link: string
     *     }
     * }|null
     */
    public static function getHelpButton();

}
