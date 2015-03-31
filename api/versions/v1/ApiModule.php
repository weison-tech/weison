<?php
namespace api\versions\v1;

use yii\base\Module;

class ApiModule extends Module
{
    public function init()
    {
        parent::init();

        \Yii::$app->user->identityClass = 'api\versions\v1\models\User';
    }
}