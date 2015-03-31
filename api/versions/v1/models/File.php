<?php
namespace api\versions\v1\models;
use \yii\db\ActiveRecord;
/**
 * File Model
 *
 * @author hbma <hbma@terdon.com>
 */
class File extends ActiveRecord 
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'file';
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
            [['user_id', 'type', 'media_url'], 'required']
        ];
    }   
}