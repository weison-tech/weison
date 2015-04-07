<?php
namespace api\versions\v1\models;
use \yii\db\ActiveRecord;
/**
 * Share Model
 *
 * @author hbma <hbma@terdon.com>
 */
class Share extends ActiveRecord 
{
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
