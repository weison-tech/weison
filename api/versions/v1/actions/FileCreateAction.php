<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace api\versions\v1\actions;

use Yii;
use yii\base\Model;
use yii\helpers\Url;
use yii\web\ServerErrorHttpException;
use yii\rest\Action;

/**
 * CreateAction implements the API endpoint for creating a new model from the given data.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class FileCreateAction extends Action
{

    /**
     * @var string the name of the view action. This property is need to create the URL when the model is successfully created.
     */

    public $modelClass = 'api\versions\v1\models\File';


    /**
     * Creates a new model.
     * @return \yii\db\ActiveRecordInterface the model newly created
     * @throws ServerErrorHttpException if there is any error when creating the model
     */
    public function run()
    {

        /* @var $model \yii\db\ActiveRecord */
        $model = new $this->modelClass();

        $p = Yii::$app->getRequest()->getBodyParams();

        if ($_FILES["file"]["error"] > 0){
            echo "Error: " . $_FILES["file"]["error"] . "<br />";
        }else{   
            $folder = Yii::$app->params['imgFolder']."/".date('Ymd');
            if(!is_dir($folder)){
                mkdir($folder);
                chmod($folder,0777);
            }
            $tmp = explode(".", $_FILES["file"]["name"]);
            $ext = $tmp[count($tmp)-1];
            $fileName = md5(uniqid(rand())).".".$ext;            
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $folder."/".$fileName)){
                $model->user_id = $p['user_id'];
                $model->media_url = date('Ymd')."/".$fileName;
                $model->type = 1;
                $model->save(false);
                print_r(json_encode(array('file_id'=>$model->id,'media_url'=>Yii::$app->params['imgUrl']."/".$model->media_url)));
            }else{
                echo"移动文件失败";
            }
        }
    }
}
