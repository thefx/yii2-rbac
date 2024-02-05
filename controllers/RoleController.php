<?php

namespace thefx\rbac\controllers;

use yii\rbac\Item;
use thefx\rbac\base\ItemController;

/**
 * Class RoleController
 *
 * @package thefx\rbac\controllers
 */
class RoleController extends ItemController
{
    /**
     * @var int
     */
    protected $type = Item::TYPE_ROLE;

    /**
     * @var array
     */
    protected $labels = [
        'Item' => 'Role',
        'Items' => 'Roles',
    ];
}
