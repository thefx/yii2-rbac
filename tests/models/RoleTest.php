<?php

namespace thefx\rbac\tests\models;

use Yii;
use yii\rbac\Item;
use yii\rbac\Role;
use thefx\rbac\models\AuthItemModel;
use thefx\rbac\tests\TestCase;

/**
 * Class RoleTest
 *
 * @package thefx\rbac\tests\models
 */
class RoleTest extends TestCase
{
    public function testCreateRole()
    {
        $model = new AuthItemModel();
        $model->type = Item::TYPE_ROLE;
        $model->name = 'admin';
        $model->description = 'admin role';

        $this->assertTrue($model->save());
        $this->assertInstanceOf(Role::class, Yii::$app->authManager->getRole('admin'));

        return Yii::$app->authManager->getRole('admin');
    }

    /**
     * @depends testCreateRole
     *
     * @param $role
     */
    public function testRemoveRole($role)
    {
        $this->assertTrue(Yii::$app->authManager->remove($role));
    }
}
