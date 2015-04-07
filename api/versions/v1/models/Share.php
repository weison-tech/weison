<?php
namespace api\versions\v1\models;
use \yii\db\ActiveRecord;
use yii;
use \api\versions\v1\models\User;
use \api\versions\v1\models\File;
/**
 * Share Model
 *
 * @author hbma <hbma@terdon.com>
 */
class Share extends ActiveRecord 
{
            public function fields()
            {
                        return [
                                    // field name is the same as the attribute name
                                    'id',        
                                    'avatar' => function(){
                                            return "img/assets/fhrl.jpg";
                                    },                      
                                    'username' => function(){
                                            return isset($this->user) ? $this->user->username : '';
                                    },
                                    'createat'=> function(){
                                            return $this->create_at;
                                    },
                                    'mediaurl' => function(){
                                            return isset($this->file) ? Yii::$app->params['imgUrl']."/".$this->file->media_url : '';
                                    },
                                    'description',
                        ];
            }

            public function getUser()
            {
                         return $this->hasOne(User::className(), ['id' => 'user_id']);
            }

            public function getFile()
            {
                         return $this->hasOne(File::className(), ['id' => 'file_id']);
            }

	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'share';
	}

    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['id'];
    }

    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
           [['user_id', 'file_id'], 'required'],
           ['description', 'string',  'max' => 99999999]
        ];
    }   
}
