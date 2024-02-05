<?php

namespace thefx\rbac\controllers;

use yii\rbac\Item;
use thefx\rbac\base\ItemController;

/**
 * Class PermissionController
 *
 * @package thefx\rbac\controllers
 */
class PermissionController extends ItemController
{
    /**
     * @var int
     */
    protected $type = Item::TYPE_PERMISSION;

    /**
     * @var array
     */
    protected $labels = [
        'Item' => 'Permission',
        'Items' => 'Permissions',
    ];
}
