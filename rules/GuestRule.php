<?php

namespace thefx\rbac\rules;

use Yii;
use yii\rbac\Rule;

/**
 * Class GuestRule
 *
 * @package thefx\rbac\rules
 */
class GuestRule extends Rule
{
    /**
     * @inheritdoc
     */
    public $name = 'guestRule';

    /**
     * @param int|string $user
     * @param \yii\rbac\Item $item
     * @param array $params
     *
     * @return mixed
     */
    public function execute($user, $item, $params)
    {
        return Yii::$app->user->isGuest;
    }
}
