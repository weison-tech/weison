<?php
namespace api\versions\v1\controllers;

use common\models\Post;
use yii\data\ActiveDataProvider;
use api\common\BaseController;

class PostController extends BaseController
{
    public $modelClass = 'common\models\Post';


    public function actions()
    {
        return array_merge(
            parent::actions(),
            [
                'index' => [
                    'class' => 'api\versions\v1\actions\PostIndexAction',
                    'modelClass' => $this->modelClass,
                    'checkAccess' => [$this, 'checkAccess'],        
                ]
            ]
        );
    }
}
