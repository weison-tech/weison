<?php

namespace api\versions\v1\controllers;

use yii\rest\ActiveController;

/**
 * Share Controller API
 *
 * @author hbma <hbma@terdon.com>
 */
class ShareController extends ActiveController
{
	public $modelClass = 'api\versions\v1\models\Share';

	public function actions()
	{
		$actions = parent::actions();		
		$actions['index'] = 'api\versions\v1\actions\ShareIndexAction';
		return $actions;
	}
}