<?php

namespace api\versions\v1\controllers;

use yii\rest\ActiveController;

/**
 * File Controller API
 *
 * @author hbma <hbma@terdon.com>
 */
class FileController extends ActiveController
{
    	public $modelClass = 'api\versions\v1\models\File';

     	public function actions()
	{
		$actions = parent::actions();		
		$actions['create'] = 'api\versions\v1\actions\FileCreateAction';
		return $actions;
	}

}